<?php
/**
 * Подключение стилей и скриптов
 */

function fregat_enqueue_scripts() {
	// Единый минифицированный CSS (шрифты + Tailwind + тема)
	wp_enqueue_style('fregat-production', get_template_directory_uri() . '/assets/css/production.min.css', [], '2.0.0');

	// Дополнительные стили для tender-frigate
	wp_enqueue_style('fregat-tender', get_template_directory_uri() . '/assets/css/tender-supplement.css', ['fregat-production'], '1.0.0');

	// jQuery — defer для PageSpeed
	if (!is_admin()) {
		wp_script_add_data('jquery', 'group', 1);
	}

	// Скрипты темы
	wp_enqueue_script('fregat-main', get_template_directory_uri() . '/assets/js/main.js', [], '1.1.0', true);

	// Прогресс скролла
	wp_enqueue_script('fregat-scroll', get_template_directory_uri() . '/assets/js/scroll-progress.js', [], '1.1.0', true);

	// Комментарии
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'fregat_enqueue_scripts');

// Убираем jquery-migrate на фронтенде
function fregat_remove_jquery_migrate($scripts) {
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $jquery = $scripts->registered['jquery'];
        if (!empty($jquery->deps)) {
            $jquery->deps = array_diff($jquery->deps, ['jquery-migrate']);
        }
    }
}
add_action('wp_default_scripts', 'fregat_remove_jquery_migrate');

// Preload hint для CSS (браузер начинает загрузку раньше, стили рендер-блокирующие)
function fregat_css_preload() {
    $css_url = get_template_directory_uri() . '/assets/css/production.min.css';
    echo "<link rel='preload' href='{$css_url}' as='style'>\n";
}
add_action('wp_head', 'fregat_css_preload', 1);

// Defer JS на фронтенде
function fregat_defer_scripts($html, $handle) {
    if (is_admin()) return $html;
    $defer_handles = ['jquery', 'jquery-core', 'quizle-scripts', 'quizle-intl-tel-input'];
    if (in_array($handle, $defer_handles)) {
        return str_replace("></script>", " defer></script>", $html);
    }
    return $html;
}
add_filter('script_loader_tag', 'fregat_defer_scripts', 10, 2);

// Async-load CSS для Quizle intl-tel-input (не нужен для первого рендера)
function fregat_async_css($html, $handle) {
    $async_styles = ['quizle-intl-tel-input'];
    if (in_array($handle, $async_styles)) {
        return str_replace("rel='stylesheet'", "rel='stylesheet' media=\"print\" onload=\"this.media='all'\"", $html);
    }
    return $html;
}
add_filter('style_loader_tag', 'fregat_async_css', 10, 2);
