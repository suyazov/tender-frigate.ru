<?php
/**
 * ACF Fields для темы Fregat
 */

// Добавляем страницы в ACF
add_filter('acf/settings/show_admin', '__return_true');

function fregat_register_acf_fields() {
    if (function_exists('acf_add_local_field_group')) {

        // ============================================
        // ГЛАВНАЯ СТРАНИЦА
        // ============================================
        acf_add_local_field_group([
            'key' => 'group_homepage',
            'title' => 'Главная страница',
            'fields' => [
                // Hero секция
                [
                    'key' => 'field_hero_title',
                    'label' => 'Заголовок Hero (строка 1)',
                    'name' => 'hero_title',
                    'type' => 'text',
                    'default_value' => 'Тендеры с нуля',
                ],
                [
                    'key' => 'field_hero_subtitle',
                    'label' => 'Заголовок Hero (строка 2)',
                    'name' => 'hero_subtitle',
                    'type' => 'text',
                    'default_value' => 'Профессия Тендерный специалист',
                ],
                [
                    'key' => 'field_hero_description',
                    'label' => 'Описание под заголовком',
                    'name' => 'hero_description',
                    'type' => 'textarea',
                    'rows' => 3,
                    'default_value' => 'Онлайн-школа тендерного обучения. Госзакупки, 44-ФЗ, 223-ФЗ. Диплом или удостоверение установленного образца.',
                ],
                [
                    'key' => 'field_hero_cta_text',
                    'label' => 'Текст кнопки CTA',
                    'name' => 'hero_cta_text',
                    'type' => 'text',
                    'default_value' => 'Записаться на курс',
                ],
                // Статистика
                [
                    'key' => 'field_stats_section',
                    'label' => 'Статистика',
                    'name' => 'stats_section',
                    'type' => 'repeater',
                    'sub_fields' => [
                        [
                            'key' => 'field_stat_number',
                            'label' => 'Число',
                            'name' => 'stat_number',
                            'type' => 'text',
                        ],
                        [
                            'key' => 'field_stat_label',
                            'label' => 'Описание',
                            'name' => 'stat_label',
                            'type' => 'text',
                        ],
                    ],
                ],
                // Преимущества
                [
                    'key' => 'field_advantages',
                    'label' => 'Преимущества',
                    'name' => 'advantages',
                    'type' => 'repeater',
                    'sub_fields' => [
                        [
                            'key' => 'field_advantage_title',
                            'label' => 'Заголовок',
                            'name' => 'advantage_title',
                            'type' => 'text',
                        ],
                        [
                            'key' => 'field_advantage_description',
                            'label' => 'Описание',
                            'name' => 'advantage_description',
                            'type' => 'textarea',
                        ],
                        [
                            'key' => 'field_advantage_icon',
                            'label' => 'Иконка (emoji)',
                            'name' => 'advantage_icon',
                            'type' => 'text',
                            'instructions' => 'Например: 🎓, 💼, 📝',
                        ],
                    ],
                ],
                // Программа обучения (модули)
                [
                    'key' => 'field_curriculum',
                    'label' => 'Программа обучения',
                    'name' => 'curriculum',
                    'type' => 'repeater',
                    'sub_fields' => [
                        [
                            'key' => 'field_module_number',
                            'label' => 'Номер модуля',
                            'name' => 'module_number',
                            'type' => 'text',
                        ],
                        [
                            'key' => 'field_module_title',
                            'label' => 'Название модуля',
                            'name' => 'module_title',
                            'type' => 'text',
                        ],
                        [
                            'key' => 'field_module_topics',
                            'label' => 'Темы модуля',
                            'name' => 'module_topics',
                            'type' => 'textarea',
                            'instructions' => 'Каждая тема на новой строке',
                        ],
                    ],
                    'layout' => 'table',
                ],
                // Тарифы
                [
                    'key' => 'field_pricing',
                    'label' => 'Тарифы',
                    'name' => 'pricing',
                    'type' => 'repeater',
                    'sub_fields' => [
                        [
                            'key' => 'field_plan_name',
                            'label' => 'Название тарифа',
                            'name' => 'plan_name',
                            'type' => 'text',
                        ],
                        [
                            'key' => 'field_plan_price',
                            'label' => 'Цена',
                            'name' => 'plan_price',
                            'type' => 'text',
                        ],
                        [
                            'key' => 'field_plan_features',
                            'label' => 'Возможности',
                            'name' => 'plan_features',
                            'type' => 'textarea',
                            'instructions' => 'Каждая возможность на новой строке',
                        ],
                        [
                            'key' => 'field_plan_popular',
                            'label' => 'Популярный тариф',
                            'name' => 'plan_popular',
                            'type' => 'true_false',
                        ],
                    ],
                ],
                // FAQ
                [
                    'key' => 'field_faq',
                    'label' => 'FAQ (Вопросы и ответы)',
                    'name' => 'faq',
                    'type' => 'repeater',
                    'sub_fields' => [
                        [
                            'key' => 'field_faq_question',
                            'label' => 'Вопрос',
                            'name' => 'faq_question',
                            'type' => 'text',
                        ],
                        [
                            'key' => 'field_faq_answer',
                            'label' => 'Ответ',
                            'name' => 'faq_answer',
                            'type' => 'textarea',
                        ],
                    ],
                ],
            ],
            'location' => [
                [
                    [
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'front-page.php',
                    ],
                ],
            ],
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => ['the_content'],
        ]);

        // ============================================
        // СТРАНИЦА О ШКОЛЕ
        // ============================================
        acf_add_local_field_group([
            'key' => 'group_about',
            'title' => 'О школе',
            'fields' => [
                [
                    'key' => 'field_about_title',
                    'label' => 'Заголовок страницы',
                    'name' => 'about_title',
                    'type' => 'text',
                    'default_value' => 'О школе Фрегат',
                ],
                [
                    'key' => 'field_about_intro',
                    'label' => 'Введение',
                    'name' => 'about_intro',
                    'type' => 'wysiwyg',
                    'tabs' => 'visual,text',
                    'toolbar' => 'full',
                    'media_upload' => 0,
                ],
                [
                    'key' => 'field_about_mission',
                    'label' => 'Миссия',
                    'name' => 'about_mission',
                    'type' => 'textarea',
                    'rows' => 4,
                ],
                [
                    'key' => 'field_about_director_name',
                    'label' => 'Имя директора',
                    'name' => 'about_director_name',
                    'type' => 'text',
                    'default_value' => 'Фарида Максумова',
                ],
                [
                    'key' => 'field_about_director_photo',
                    'label' => 'Фото директора',
                    'name' => 'about_director_photo',
                    'type' => 'image',
                    'return_format' => 'url',
                ],
                [
                    'key' => 'field_about_director_message',
                    'label' => 'Обращение директора',
                    'name' => 'about_director_message',
                    'type' => 'wysiwyg',
                    'tabs' => 'visual,text',
                    'toolbar' => 'full',
                    'media_upload' => 0,
                ],
                [
                    'key' => 'field_about_stats',
                    'label' => 'Статистика школы',
                    'name' => 'about_stats',
                    'type' => 'repeater',
                    'sub_fields' => [
                        [
                            'key' => 'field_about_stat_number',
                            'label' => 'Число',
                            'name' => 'about_stat_number',
                            'type' => 'text',
                        ],
                        [
                            'key' => 'field_about_stat_label',
                            'label' => 'Описание',
                            'name' => 'about_stat_label',
                            'type' => 'text',
                        ],
                    ],
                ],
            ],
            'location' => [
                [
                    [
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'page-o-shkole.php',
                    ],
                ],
            ],
            'hide_on_screen' => ['the_content'],
        ]);

        // ============================================
        // СТРАНИЦА ПРЕПОДАВАТЕЛИ
        // ============================================
        acf_add_local_field_group([
            'key' => 'group_teachers_page',
            'title' => 'Страница Преподаватели',
            'fields' => [
                [
                    'key' => 'field_teachers_title',
                    'label' => 'Заголовок страницы',
                    'name' => 'teachers_title',
                    'type' => 'text',
                    'default_value' => 'Ваши наставники',
                ],
                [
                    'key' => 'field_teachers_subtitle',
                    'label' => 'Подзаголовок',
                    'name' => 'teachers_subtitle',
                    'type' => 'textarea',
                    'default_value' => 'Эксперты с практическим опытом в тендерах',
                ],
            ],
            'location' => [
                [
                    [
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'page-prepodavateli.php',
                    ],
                ],
            ],
            'hide_on_screen' => ['the_content'],
        ]);

        // ============================================
        // CUSTOM POST TYPE - TEACHER
        // ============================================
        acf_add_local_field_group([
            'key' => 'group_teacher',
            'title' => 'Преподаватель',
            'fields' => [
                [
                    'key' => 'field_teacher_position',
                    'label' => 'Должность',
                    'name' => 'teacher_position',
                    'type' => 'text',
                ],
                [
                    'key' => 'field_teacher_achievements',
                    'label' => 'Достижения',
                    'name' => 'teacher_achievements',
                    'type' => 'textarea',
                    'rows' => 4,
                    'instructions' => 'Каждое достижение на новой строке',
                ],
                [
                    'key' => 'field_teacher_expertise',
                    'label' => 'Экспертиза',
                    'name' => 'teacher_expertise',
                    'type' => 'textarea',
                    'rows' => 4,
                ],
                [
                    'key' => 'field_teacher_experience',
                    'label' => 'Опыт работы',
                    'name' => 'teacher_experience',
                    'type' => 'text',
                    'instructions' => 'Например: 15 лет в тендерах',
                ],
            ],
            'location' => [
                [
                    [
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'teacher',
                    ],
                ],
            ],
            'position' => 'normal',
            'style' => 'default',
        ]);

        // ============================================
        // СТРАНИЦА МЕРОПРИЯТИЯ
        // ============================================
        acf_add_local_field_group([
            'key' => 'group_events',
            'title' => 'Мероприятия',
            'fields' => [
                [
                    'key' => 'field_events_title',
                    'label' => 'Заголовок страницы',
                    'name' => 'events_title',
                    'type' => 'text',
                    'default_value' => 'Мероприятия Школы «Фрегат»',
                ],
                [
                    'key' => 'field_events_subtitle',
                    'label' => 'Подзаголовок',
                    'name' => 'events_subtitle',
                    'type' => 'textarea',
                    'default_value' => 'Семинары, курсы повышения квалификации и встречи с экспертами в сфере тендеров',
                ],
                [
                    'key' => 'field_events_cta_title',
                    'label' => 'Заголовок CTA секции',
                    'name' => 'events_cta_title',
                    'type' => 'text',
                    'default_value' => 'Хотите быть в курсе всех мероприятий?',
                ],
                [
                    'key' => 'field_events_cta_text',
                    'label' => 'Текст CTA секции',
                    'name' => 'events_cta_text',
                    'type' => 'textarea',
                    'default_value' => 'Подпишитесь на Telegram-канал и получайте информацию о новых семинарах и курсах первыми',
                ],
                [
                    'key' => 'field_events_cta_link',
                    'label' => 'Ссылка на Telegram',
                    'name' => 'events_cta_link',
                    'type' => 'url',
                    'default_value' => 'https://t.me/faridaprotenders',
                ],
            ],
            'location' => [
                [
                    [
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'page-meropriyatiya.php',
                    ],
                ],
            ],
            'hide_on_screen' => ['the_content'],
        ]);

        // ============================================
        // СТРАНИЦА КОНТАКТЫ
        // ============================================
        acf_add_local_field_group([
            'key' => 'group_contacts',
            'title' => 'Контакты',
            'fields' => [
                [
                    'key' => 'field_contacts_title',
                    'label' => 'Заголовок страницы',
                    'name' => 'contacts_title',
                    'type' => 'text',
                    'default_value' => 'Контакты',
                ],
                [
                    'key' => 'field_contacts_email',
                    'label' => 'Email',
                    'name' => 'contacts_email',
                    'type' => 'email',
                ],
                [
                    'key' => 'field_contacts_phone',
                    'label' => 'Телефон',
                    'name' => 'contacts_phone',
                    'type' => 'text',
                ],
                [
                    'key' => 'field_contacts_address',
                    'label' => 'Адрес',
                    'name' => 'contacts_address',
                    'type' => 'textarea',
                    'rows' => 2,
                ],
                [
                    'key' => 'field_contacts_telegram',
                    'label' => 'Telegram',
                    'name' => 'contacts_telegram',
                    'type' => 'text',
                ],
                [
                    'key' => 'field_contacts_working_hours',
                    'label' => 'Часы работы',
                    'name' => 'contacts_working_hours',
                    'type' => 'text',
                    'default_value' => 'Пн-Пт: 9:00 - 18:00',
                ],
            ],
            'location' => [
                [
                    [
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'page-kontakty.php',
                    ],
                ],
            ],
            'hide_on_screen' => ['the_content'],
        ]);
    }
}
add_action('acf/init', 'fregat_register_acf_fields');

// Отключаем Гутенберг для страниц
add_filter('use_block_editor_for_post_type', function($use_block_editor, $post_type) {
    if ($post_type === 'page') {
        return false;
    }
    return $use_block_editor;
}, 10, 2);

// Скрываем редактор контента для страниц с ACF полями
add_action('admin_head', function() {
    global $post;
    if ($post && $post->post_type === 'page') {
        $template = get_page_template_slug($post->ID);
        if ($template) {
            echo '<style>#postdivrich, #wp-content-wrap { display: none; }</style>';
        }
    }
});
