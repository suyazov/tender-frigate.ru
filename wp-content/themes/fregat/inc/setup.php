<?php
/**
 * Настройка темы по умолчанию и поддержка функций
 */

/**
 * Установка темы по умолчанию
 *
 * Устанавливает дефолтные настройки темы и регистрирует поддержку различных функций WordPress,
 * которые делают тему совместимой с WordPress.
 *
 * @since Fregat 1.0
 */
function fregat_setup() {
	// Загрузка textdomain для переводов
	load_theme_textdomain('fregat', get_template_directory() . '/languages', '/languages');

	// Добавляем тег <title> динамически
	add_theme_support('title-tag');

	// Добавляем поддержку логотипа
	add_theme_support('custom-logo', [
		'height'               => 100,
		'width'                => 400,
		'flex-width'            => true,
		'flex-height'           => true,
	]);

	// Добавляем поддержку миниатюр
	add_theme_support('post-thumbnails');

	// Регистрируем меню
	register_nav_menus([
		'main'   => __('Основное меню', 'fregat'),
		'footer' => __('Меню подвала', 'fregat'),
	]);

	// Добавляем поддержку HTML5
	add_theme_support('html5', [
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	]);

	// Добавляем поддержку пользовательского логотипа
	add_theme_support('custom-header', [
		'default-image'          => '',
		'width'                  => 2000,
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'fregat_header_style',
	]);

	// Добавляем поддержку пользовательского фона
	add_theme_support('custom-background', [
		'default-color'          => '#142125',
		'default-image'          => '',
		'default-preset'         => 'default',
	]);

	// Добавляем поддержку选择性 цвет для ссылок и кнопок
	add_theme_support('custom-selective-refresh-widgets');
}
add_action('after_setup_theme', 'fregat_setup');

/**
 * Устанавливает стили для логотипа в хедере
 */
function fregat_header_style() {
	$wp_customize_style = wp_get_custom_header()->header_text_style;
	$header_text_color = get_header_textcolor();

	if ( ! $header_text_color ) {
		return;
	}

	?>
	<style type="text/css">
		<?php
		// Стили для хедера
		.header-text-color {
			color: <?php echo esc_attr($header_text_color); ?>;
		}
		<?php
		</style>
	<?php
}
add_action('wp_head', 'fregat_header_style', 100);

/**
 * Устанавливает контентную ширину в пикселях, основываяся на дизайне темы.
 *
 * @global int $content_width Content width in pixels.
 */
function fregat_content_width() {
	$GLOBALS['content_width'] = apply_filters('fregat_content_width', 1200);
}
add_action('after_setup_theme', 'fregat_content_width', 0);

/**
 * Регистрирует боковые колонки виджетов
 *
 * @global int $content_width Content width in pixels.
 */
function fregat_widgets_init() {
	register_sidebar(
		[
			'name'          => __('Правая колонка', 'fregat'),
			'id'            => 'sidebar-1',
			'description'   => __('Добавьте виджеты сюда.', 'fregat'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		]
	);
}
add_action('widgets_init', 'fregat_widgets_init');

/**
 * Отключаем канонические ссылки preview режима
 * (для работы со статическим frontend если нужно)
 */
function fregat_preview_canonical() {
	add_filter('wp_get_canonical_url', '__return_false');
}
// add_action('wp_head', 'fregat_preview_canonical');
