<?php
/**
 * Настройки кастомайзера темы
 */

/**
 * Кастомизация настроек темы
 */
function fregat_customize_register($wp_customize) {
	// Основной цвет (золотой)
	$wp_customize->add_setting('fregat_primary_color', [
		'default'           => '#d4af37',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	]);

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'fregat_primary_color', [
		'label'    => __('Основной цвет (золотой)', 'fregat'),
		'section'  => 'colors',
		'settings' => 'fregat_primary_color',
	]));

	// Фоновый цвет
	$wp_customize->add_setting('fregat_bg_color', [
		'default'           => '#0a0a0a',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	]);

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'fregat_bg_color', [
		'label'    => __('Цвет фона', 'fregat'),
		'section'  => 'colors',
		'settings' => 'fregat_bg_color',
	]));

	// Цвет текста
	$wp_customize->add_setting('fregat_text_color', [
		'default'           => '#e5e5e5',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	]);

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'fregat_text_color', [
		'label'    => __('Цвет текста', 'fregat'),
		'section'  => 'colors',
		'settings' => 'fregat_text_color',
	]));
}
add_action('customize_register', 'fregat_customize_register');

/**
 * Вывод кастомных стилей из настроек кастомайзера
 */
function fregat_customizer_css() {
	?>
	<style type="text/css">
		:root {
			--primary-color: <?php echo esc_attr(get_theme_mod('fregat_primary_color', '#d4af37')); ?>;
			--bg-color: <?php echo esc_attr(get_theme_mod('fregat_bg_color', '#0a0a0a')); ?>;
			--text-color: <?php echo esc_attr(get_theme_mod('fregat_text_color', '#e5e5e5')); ?>;
		}
	</style>
	<?php
}
add_action('wp_head', 'fregat_customizer_css');
