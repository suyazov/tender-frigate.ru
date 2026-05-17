#!/bin/bash
#
# Деплой tender-frigate.ru на production
# ./deploy.sh          — залить тему + плагины
# ./deploy.sh --ssl    — переключить URL на https://
# ./deploy.sh --db     — залить дамп локальной БД (перезапишет контент!)
#

set -e

# --- Конфиг ---
REMOTE="myserver"
REMOTE_PATH="/var/www/fastuser/data/www/tender-frigate.ru"
REMOTE_OWNER="fastuser:fastuser"
DOMAIN="tender-frigate.ru"
LOCAL_THEME="wp-content/themes/fregat"
LOCAL_PLUGINS="wp-content/plugins"
LOCAL_MU_PLUGINS="wp-content/mu-plugins"
DB_NAME="tender_frigate"
DB_USER="tender_frigate"
DB_PASS="CHANGE_ME"
# ---------------

RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m'

info()  { echo -e "${GREEN}[✓]${NC} $1"; }
warn()  { echo -e "${YELLOW}[!]${NC} $1"; }
error() { echo -e "${RED}[✗]${NC} $1"; exit 1; }

ssh -o BatchMode=yes -o ConnectTimeout=5 "$REMOTE" "echo ok" > /dev/null 2>&1 || error "SSH $REMOTE недоступен"

DEPLOY_DB=false
DEPLOY_SSL=false

for arg in "$@"; do
    case $arg in
        --db)  DEPLOY_DB=true ;;
        --ssl) DEPLOY_SSL=true ;;
    esac
done

echo ""
echo "=== Деплой tender-frigate.ru ==="
echo ""

# 1. Тема
info "Загрузка темы..."
scp -r "$LOCAL_THEME" "$REMOTE:$REMOTE_PATH/wp-content/themes/" 2>/dev/null
info "Тема загружена"

# 2. Плагины
info "Загрузка плагинов..."
for plugin in advanced-custom-fields-pro quizle; do
    if [ -d "$LOCAL_PLUGINS/$plugin" ]; then
        scp -r "$LOCAL_PLUGINS/$plugin" "$REMOTE:$REMOTE_PATH/wp-content/plugins/" 2>/dev/null
        info "  $plugin"
    fi
done

# 3. Mu-plugins
if [ -d "$LOCAL_MU_PLUGINS" ]; then
    info "Загрузка mu-plugins..."
    scp -r "$LOCAL_MU_PLUGINS" "$REMOTE:$REMOTE_PATH/wp-content/" 2>/dev/null
    info "  mu-plugins"
fi

# 4. Права
info "Права..."
ssh "$REMOTE" "chown -R $REMOTE_OWNER $REMOTE_PATH/wp-content/"

# 5. Активация + кэш
info "Активация..."
ssh "$REMOTE" "cd $REMOTE_PATH && wp theme activate fregat --allow-root 2>/dev/null && wp plugin activate advanced-custom-fields-pro quizle --allow-root 2>/dev/null && wp rewrite flush --allow-root 2>/dev/null"

# 6. SSL
if [ "$DEPLOY_SSL" = true ]; then
    info "Переключение на HTTPS..."
    ssh "$REMOTE" "cd $REMOTE_PATH && wp search-replace 'http://$DOMAIN' 'https://$DOMAIN' --all-tables --allow-root 2>/dev/null"
    info "https:// включён"
fi

# 7. БД
if [ "$DEPLOY_DB" = true ]; then
    warn "ВНИМАНИЕ: БД на проде будет перезаписана!"
    read -p "Продолжить? [y/N] " -n 1 -r
    echo
    if [[ $REPLY =~ ^[Yy]$ ]]; then
        info "Экспорт локальной БД..."
        docker exec tender-frigate-mysql mysqldump -utender_frigate -ptender_frigate_password --default-character-set=utf8mb4 tender_frigate > /tmp/tender_frigate_deploy.sql 2>/dev/null

        info "Загрузка на сервер..."
        scp /tmp/tender_frigate_deploy.sql "$REMOTE:/tmp/tender_frigate_deploy.sql" 2>/dev/null

        info "Импорт..."
        ssh "$REMOTE" "mysql -u$DB_USER -p'$DB_PASS' $DB_NAME < /tmp/tender_frigate_deploy.sql 2>/dev/null"

        NEW_URL="http://$DOMAIN"
        if [ "$DEPLOY_SSL" = true ]; then
            NEW_URL="https://$DOMAIN"
        fi
        info "Замена localhost:8090 -> $NEW_URL..."
        ssh "$REMOTE" "cd $REMOTE_PATH && wp search-replace 'http://localhost:8090' '$NEW_URL' --all-tables --allow-root 2>/dev/null"

        rm -f /tmp/tender_frigate_deploy.sql
        ssh "$REMOTE" "rm -f /tmp/tender_frigate_deploy.sql"
        info "БД перенесена"
    else
        warn "Отменено"
    fi
fi

echo ""
info "Готово!"
echo ""
