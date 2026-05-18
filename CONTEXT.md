# Контекст проекта tender-frigate.ru

## Структура страницы (front-page.php)

Секции сверху вниз. **НЕ удалять и НЕ пропускать при редактировании:**

1. **Hero** — Фарида Максумова, заголовок «Выигрываем тендеры за вас», статистика (50 000 ₽ / от 1%)
2. **Проблемы** (`#challenges`) — 6 карточек болей + блок «Цена бездействия» (4 метрики)
3. **Решение** — «ООО ФРЕГАТ берёт тендерную работу на себя» + 4 шага «Как мы работаем»
4. **Преимущества** (`#benefits`) — 6 карточек «Что получает ваша компания»
5. **Стоимость** (`#pricing`) — Абонентское сопровождение (50 000 ₽/мес) + Вознаграждение по контрактам (1-2%) + «Не входит»
6. **Почему выбирают** (`#advantages`) — 4 карточки
7. **Кейсы** (`#cases`) — ИП Суязов Артём + ООО «Технодарк»
8. **Онлайн-школа** — Ссылка на school-frigate.ru
9. **Квиз** (`#quiz`) — Quizle plugin, shortcode `[quizle name="tarif-quiz"]`, стили через CSS-переменные quizle--7
10. **Контакты** (`#contact`) — Телефоны, email, CTA кнопки
11. **Подвал** (footer.php) — Копирайт + ссылка на политику конфиденциальности

## Критичные файлы

| Файл | Описание |
|------|----------|
| `wp-content/themes/fregat/front-page.php` | Главная страница, все секции |
| `wp-content/themes/fregat/header.php` | Шапка, навигация, Tailwind CDN |
| `wp-content/themes/fregat/footer.php` | Подвал, копирайт, политика конф. |
| `wp-content/themes/fregat/functions.php` | Подключение стилей, Telegram webhook |
| `wp-content/themes/fregat/page.php` | Шаблон внутренних страниц (политика и т.д.) |

## Quizle (квиз)

- Plugin: `wp-content/plugins/quizle/`
- Quiz ID: **7** (post_name: `tarif-quiz`)
- CSS-класс: `.quizle--7`
- 4 вопроса + 3 результата + контактная форма
- Стили инлайн через `echo '<style>...'` в front-page.php
- Privacy: `contact-privacy-text` → ссылка на `/politika-konfidentsialnosti/`

## Страницы WordPress

| ID | Заголовок | URL |
|----|-----------|-----|
| 4  | Главная | `/` (front page) |
| 7  | Квиз (Quizle) | не отображается отдельно |
| 8  | Политика конфиденциальности | `/politika-konfidentsialnosti/` |

## Цветовая палитра

- Gold (акцент): `#D4AF37`, класс `.text-gold`, `.text-gold-gradient`
- Фон тёмный: `#0d181b`
- Фон карточек: `#142125`
- Текст: `#e5e5e5` (светлый), `#9ca3af` / `text-gray-400` (второстепенный)

## Правила редактирования

1. **Всегда проверяй** что все секции на месте после правок (grep по `section id`)
2. **Квиз** — PHP-блок с `do_shortcode`, не HTML-разметка
3. **ООО «ФРЕГАТ»** — компания (не «Фрегата нашла», а «ООО ФРЕГАТ нашло»)
4. **Фарида Максумова** — директор/основатель ООО «ФРЕГАТ»
5. При Python-замене секций — искать границы по HTML-комментариям (`<!-- Секция -->`), не по содержимому

## Деплой

```bash
# Один файл
rsync -avz wp-content/themes/fregat/front-page.php myserver:/var/www/fastuser/data/www/tender-frigate.ru/wp-content/themes/fregat/

# Вся тема
rsync -avz --delete --exclude='uploads' wp-content/themes/fregat/ myserver:/var/www/fastuser/data/www/tender-frigate.ru/wp-content/themes/fregat/

# Git
git push origin main
```

## Docker (локальная разработка)

```bash
docker exec tender-frigate-wordpress php -r "..."  # WP-CLI команды
```

- wp-content монтируется из локальной ФС
- URL: http://localhost:8090
