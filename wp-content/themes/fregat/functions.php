<?php
/**
 * Fregat Tender — функции и определения темы
 */

// Загрузка основных функций темы
require_once get_template_directory() . '/inc/acf-fields-full.php';
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/customizer.php';
require_once get_template_directory() . '/inc/seo.php';

// Отключаем эмодзи
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Убираем dns-prefetch для cdn.tailwindcss.com
remove_action('wp_head', 'wp_resource_hints', 2);
function fregat_clean_resource_hints($urls, $relation_type) {
    if ($relation_type === 'dns-prefetch') {
        $urls = array_filter($urls, function($url) {
            return strpos($url, 'cdn.tailwindcss.com') === false;
        });
    }
    return $urls;
}
add_filter('wp_resource_hints', 'fregat_clean_resource_hints', 10, 2);

// Регистрируем меню
function fregat_register_menus() {
    register_nav_menus([
        'main' => 'Основное меню',
        'footer' => 'Меню подвала',
    ]);
}
add_action('after_setup_theme', 'fregat_register_menus');

// Поддержка миниатюр
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('html5', [
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    'style',
    'script',
]);

// Логотип
add_theme_support('custom-logo', [
    'height'      => 100,
    'width'       => 400,
    'flex-height'  => true,
    'flex-width'   => true,
]);

// Отключаем REST API для неавторизованных пользователей
add_filter('rest_authentication_errors', function($result) {
    if (!is_user_logged_in()) {
        return new WP_Error('rest_not_logged_in', 'REST API доступен только авторизованным пользователям.', ['status' => 401]);
    }
    return $result;
});

// Удаляем стили блочного редактора
function fregat_remove_block_css() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
    wp_dequeue_style('classic-theme-styles');
}
add_action('wp_enqueue_scripts', 'fregat_remove_block_css', 100);

// Flush rewrite rules on theme activation
function fregat_flush_rewrite() {
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'fregat_flush_rewrite');

// Отключаем комментарии полностью
add_action('admin_init', function() {
    $post_types = get_post_types(['public' => true]);
    foreach ($post_types as $post_type) {
        remove_post_type_support($post_type, 'comments');
        remove_post_type_support($post_type, 'trackbacks');
    }
});
add_action('admin_menu', function() {
    remove_menu_page('edit-comments.php');
});
add_action('wp_dashboard_setup', function() {
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
});
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);
add_filter('feed_links_show_comments_feed', '__return_false');

// Обработка контактной формы
function fregat_handle_contact_form() {
    check_ajax_referer('fregat_contact_nonce', 'nonce');

    $name = sanitize_text_field($_POST['name'] ?? '');
    $phone = sanitize_text_field($_POST['phone'] ?? '');
    $email = sanitize_email($_POST['email'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    if (empty($name) || empty($phone)) {
        wp_send_json_error('Заполните обязательные поля');
    }

    // Telegram уведомление
    $token = defined('FRIGAT_TG_BOT_TOKEN') ? FRIGAT_TG_BOT_TOKEN : '';
    $chat_id = defined('FRIGAT_TG_CHAT_ID') ? FRIGAT_TG_CHAT_ID : '';

    if ($token && $chat_id) {
        $text = "<b>Новая заявка с сайта tender-frigate.ru</b>\n\n";
        $text .= "Имя: " . htmlspecialchars($name) . "\n";
        $text .= "Телефон: " . htmlspecialchars($phone) . "\n";
        if ($email) $text .= "Email: " . htmlspecialchars($email) . "\n";
        if ($message) $text .= "Сообщение: " . htmlspecialchars($message) . "\n";

        $ch = curl_init('https://api.telegram.org/bot' . $token . '/sendMessage');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
            'chat_id' => $chat_id,
            'text' => $text,
            'parse_mode' => 'html',
            'disable_web_page_preview' => true,
        ]));
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_exec($ch);
        curl_close($ch);
    }

    wp_send_json_success('Заявка отправлена');
}
add_action('wp_ajax_fregat_contact', 'fregat_handle_contact_form');
add_action('wp_ajax_nopriv_fregat_contact', 'fregat_handle_contact_form');

// Передаём данные в JS для контактной формы
function fregat_contact_js_data() {
    if (is_front_page()) {
        wp_localize_script('fregat-main', 'fregat_contact', [
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('fregat_contact_nonce'),
        ]);
    }
}
add_action('wp_enqueue_scripts', 'fregat_contact_js_data');

require_once get_template_directory() . '/inc/telegram-notifier.php';

// Quizle — русские тексты кнопок
add_filter('quizle/steps/prev_btn_text', function() { return 'Назад'; });
add_filter('quizle/steps/next_btn_text', function() { return 'Далее'; });
add_filter('quizle/result/default_btn_text', function() { return 'Отлично'; });

// Quizle — русский текст при отправке
add_filter('gettext', function($translated, $text, $domain) {
    if ($domain === 'quizle') {
        $translations = [
            'Submitting data...' => 'Отправляем заявку...',
            'Preparing Results...' => 'Подготавливаем результат...',
            'Quizle completion time has expired.' => 'Время прохождения квиза истекло.',
            'Time left:' => 'Осталось:',
        ];
        if (isset($translations[$text])) {
            return $translations[$text];
        }
    }
    return $translated;
}, 10, 3);
