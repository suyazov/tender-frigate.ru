<?php
/**
 * Настройки кастомайзера темы
 */

function fregat_customize_register($wp_customize) {
	// --- Цвета ---
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

	// --- Контакты ---
	$wp_customize->add_section('fregat_contacts', [
		'title'    => 'Контакты',
		'priority' => 30,
	]);

	$fields = [
		'primary_phone'   => ['label' => 'Основной телефон', 'default' => '+7 (934) 070-99-90'],
		'primary_phone_raw' => ['label' => 'Основной телефон (для ссылок)', 'default' => '+79340709990'],
		'secondary_phone' => ['label' => 'Дополнительный телефон', 'default' => '+7 (923) 235-22-47'],
		'secondary_phone_raw' => ['label' => 'Дополнительный телефон (для ссылок)', 'default' => '+79232352247'],
		'email'           => ['label' => 'Email', 'default' => 'Frigate26@yandex.ru'],
		'whatsapp'        => ['label' => 'WhatsApp (номер)', 'default' => '79340709990'],
		'telegram'        => ['label' => 'Telegram (username)', 'default' => 'ffaridaff'],
		'address'         => ['label' => 'Адрес', 'default' => 'г. Ставрополь, ул. Дзержинского, д. 114, оф. 201'],
		'max_link'        => ['label' => 'Ссылка Макс', 'default' => 'https://max.ru/u/f9LHodD0cOJzOILurUeSDdypZoYZ1kHRhnu723l27A2CH5GKL9SeYmev4zY'],
	];

	foreach ($fields as $key => $field) {
		$wp_customize->add_setting("fregat_{$key}", [
			'default'           => $field['default'],
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		]);
		$wp_customize->add_control("fregat_{$key}", [
			'label'   => $field['label'],
			'section' => 'fregat_contacts',
			'type'    => 'text',
		]);
	}
}
add_action('customize_register', 'fregat_customize_register');

/**
 * Хелпер: получить контакт из кастомайзера
 */
function fregat_contact($field) {
	$defaults = [
		'primary_phone'     => '+7 (934) 070-99-90',
		'primary_phone_raw' => '+79340709990',
		'secondary_phone'     => '+7 (923) 235-22-47',
		'secondary_phone_raw' => '+79232352247',
		'email'             => 'Frigate26@yandex.ru',
		'whatsapp'          => '79340709990',
		'telegram'          => 'ffaridaff',
		'address'           => 'г. Ставрополь, ул. Дзержинского, д. 114, оф. 201',
		'max_link'          => 'https://max.ru/u/f9LHodD0cOJzOILurUeSDdypZoYZ1kHRhnu723l27A2CH5GKL9SeYmev4zY',
	];
	return esc_html(get_theme_mod("fregat_{$field}", $defaults[$field] ?? ''));
}

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
