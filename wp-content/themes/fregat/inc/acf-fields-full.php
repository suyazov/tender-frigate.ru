<?php
/**
 * Полный ACF экспорт для темы Fregat
 * Создаёт все поля для редактирования через админку
 */

add_action('acf/init', 'fregat_register_acf_fields');

function fregat_register_acf_fields() {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    // ============================================
    // ГЛАВНАЯ СТРАНИЦА
    // ============================================
    acf_add_local_field_group([
        'key' => 'group_homepage_full',
        'title' => 'Главная страница - Полный контент',
        'fields' => [
            // Tab: Hero
            [
                'key' => 'field_tab_hero',
                'label' => '🏠 Hero',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // Hero секция
            [
                'key' => 'field_hero_title_line1',
                'label' => 'Заголовок Hero (строка 1)',
                'name' => 'hero_title_line1',
                'type' => 'text',
                'default_value' => 'Тендеры с нуля',
            ],
            [
                'key' => 'field_hero_title_line2',
                'label' => 'Заголовок Hero (строка 2)',
                'name' => 'hero_title_line2',
                'type' => 'text',
                'default_value' => 'Профессия Тендерный специалист',
            ],
            [
                'key' => 'field_hero_badge',
                'label' => 'Бейдж над заголовком',
                'name' => 'hero_badge',
                'type' => 'text',
                'default_value' => 'Онлайн-школа тендерного обучения',
            ],
            [
                'key' => 'field_hero_description',
                'label' => 'Описание под заголовком',
                'name' => 'hero_description',
                'type' => 'textarea',
                'rows' => 3,
                'default_value' => 'Госзакупки по 44-ФЗ и 223-ФЗ. Обучение с нуля до профессии.',
            ],
            [
                'key' => 'field_hero_cta_main',
                'label' => 'Текст главной кнопки',
                'name' => 'hero_cta_main',
                'type' => 'text',
                'default_value' => 'Записаться на курс',
            ],
            [
                'key' => 'field_hero_cta_secondary',
                'label' => 'Текст вторичной кнопки',
                'name' => 'hero_cta_secondary',
                'type' => 'text',
                'default_value' => 'Скачать программу',
            ],

            // Tab: Набор
            [
                'key' => 'field_tab_cohort',
                'label' => '📅 Ближайший набор',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // Ближайший набор
            [
                'key' => 'field_next_cohort_show',
                'label' => 'Показать блок "Ближайший набор"',
                'name' => 'next_cohort_show',
                'type' => 'true_false',
                'default_value' => 1,
            ],
            [
                'key' => 'field_next_cohort_badge',
                'label' => 'Бейдж (текст)',
                'name' => 'next_cohort_badge',
                'type' => 'text',
                'default_value' => 'Ближайший набор',
            ],
            [
                'key' => 'field_next_cohort_title',
                'label' => 'Заголовок набора',
                'name' => 'next_cohort_title',
                'type' => 'text',
                'default_value' => 'Май 2026',
            ],
            [
                'key' => 'field_next_cohort_date',
                'label' => 'Дата старта',
                'name' => 'next_cohort_date',
                'type' => 'text',
                'default_value' => 'Старт обучения: 11 мая 2026 г.',
            ],
            [
                'key' => 'field_next_cohort_cta',
                'label' => 'Текст кнопки',
                'name' => 'next_cohort_cta',
                'type' => 'text',
                'default_value' => 'Записаться на курс',
            ],

            // Статистика (в hero)
            [
                'key' => 'field_stats',
                'label' => 'Статистика (4 блока в hero)',
                'name' => 'stats',
                'type' => 'repeater',
                'layout' => 'table',
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
                'min' => 4,
                'max' => 4,
            ],

            // Tab: Рынок
            [
                'key' => 'field_tab_market',
                'label' => '📊 Статистика рынка',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // Статистика рынка
            [
                'key' => 'field_market_stats_title',
                'label' => 'Заголовок секции "Статистика рынка"',
                'name' => 'market_stats_title',
                'type' => 'text',
                'default_value' => 'Госзакупки — реальный канал продаж',
            ],
            [
                'key' => 'field_market_stats_subtitle',
                'label' => 'Подзаголовок статистики рынка',
                'name' => 'market_stats_subtitle',
                'type' => 'text',
                'default_value' => 'Данные рынка тендеров на 2025 год',
            ],
            [
                'key' => 'field_market_stats',
                'label' => 'Статистика рынка (3 блока)',
                'name' => 'market_stats',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => [
                    [
                        'key' => 'field_market_stat_number',
                        'label' => 'Число',
                        'name' => 'market_stat_number',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_market_stat_description',
                        'label' => 'Описание',
                        'name' => 'market_stat_description',
                        'type' => 'text',
                    ],
                ],
                'min' => 3,
                'max' => 3,
            ],

            // Tab: Преимущества
            [
                'key' => 'field_tab_advantages',
                'label' => '✅ Преимущества',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // Преимущества
            [
                'key' => 'field_advantages',
                'label' => 'Преимущества (6 блоков)',
                'name' => 'advantages',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => [
                    [
                        'key' => 'field_advantage_number',
                        'label' => 'Номер',
                        'name' => 'advantage_number',
                        'type' => 'text',
                    ],
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
                        'rows' => 3,
                    ],
                    [
                        'key' => 'field_advantage_icon',
                        'label' => 'Иконка (emoji)',
                        'name' => 'advantage_icon',
                        'type' => 'text',
                        'instructions' => 'Например: 🎓, 💼, 📝',
                        'default_value' => '✓',
                    ],
                ],
                ],

            // Tab: Обучение
            [
                'key' => 'field_tab_learning',
                'label' => '🎓 Обучение и программа',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // Формат обучения
            [
                'key' => 'field_learning_format_title',
                'label' => 'Заголовок секции "Формат обучения"',
                'name' => 'learning_format_title',
                'type' => 'text',
                'default_value' => 'Формат обучения',
            ],
            [
                'key' => 'field_learning_format_subtitle',
                'label' => 'Подзаголовок',
                'name' => 'learning_format_subtitle',
                'type' => 'text',
                'default_value' => 'Выберите подходящий вам формат',
            ],
            [
                'key' => 'field_learning_formats',
                'label' => 'Форматы обучения (3 формата)',
                'name' => 'learning_formats',
                'type' => 'repeater',
                'layout' => 'row',
                'sub_fields' => [
                    [
                        'key' => 'field_format_number',
                        'label' => 'Номер',
                        'name' => 'format_number',
                        'type' => 'text',
                        'default_value' => '01',
                    ],
                    [
                        'key' => 'field_format_title',
                        'label' => 'Название формата',
                        'name' => 'format_title',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'format_price',
                        'label' => 'Цена',
                        'name' => 'format_price',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_format_duration',
                        'label' => 'Длительность',
                        'name' => 'format_duration',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_format_features',
                        'label' => 'Особенности (каждая с новой строки)',
                        'name' => 'format_features',
                        'type' => 'textarea',
                        'instructions' => 'Каждая особенность на новой строке',
                    ],
                ],
                'min' => 3,
            ],

            // Tab: Аудитория
            [
                'key' => 'field_tab_audience',
                'label' => '👥 Аудитория',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // Аудитория
            [
                'key' => 'field_audience_title',
                'label' => 'Заголовок "Для кого"',
                'name' => 'audience_title',
                'type' => 'text',
                'default_value' => 'Кому подойдёт курс',
            ],
            [
                'key' => 'field_audience_cards',
                'label' => 'Карточки аудитории (3 шт)',
                'name' => 'audience_cards',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        'key' => 'field_audience_icon',
                        'label' => 'Иконка (emoji)',
                        'name' => 'audience_icon',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_audience_title',
                        'label' => 'Заголовок карточки',
                        'name' => 'audience_title',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_audience_description',
                        'label' => 'Описание',
                        'name' => 'audience_description',
                        'type' => 'textarea',
                        'rows' => 3,
                    ],
                    [
                        'key' => 'field_audience_salary',
                        'label' => 'Текст про зарплату',
                        'name' => 'audience_salary',
                        'type' => 'text',
                        'default_value' => 'Старт зарплаты от 60 000 ₽',
                    ],
                ],
                'layout' => 'row',
                'min' => 3,
            ],

            // Tab: Зарплата
            [
                'key' => 'field_tab_salary',
                'label' => '💰 Зарплата',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // Зарплата
            [
                'key' => 'field_salary_title',
                'label' => 'Заголовок секции "Зарплата"',
                'name' => 'salary_title',
                'type' => 'text',
                'default_value' => 'Сколько earn трендер-специалист',
            ],
            [
                'key' => 'field_salary_subtitle',
                'label' => 'Подзаголовок',
                'name' => 'salary_subtitle',
                'type' => 'text',
                'default_value' => 'Доход после прохождения курса',
            ],
            [
                'key' => 'field_salary_cards',
                'label' => 'Варианты зарплаты (3 шт)',
                'name' => 'salary_cards',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        'key' => 'field_salary_period',
                        'label' => 'Период (заголовок)',
                        'name' => 'salary_period',
                        'type' => 'text',
                        'default_value' => 'Начинающий специалист',
                    ],
                    [
                        'key' => 'field_salary_experience',
                        'label' => 'Опыт',
                        'name' => 'salary_experience',
                        'type' => 'text',
                        'default_value' => 'Стаж до 1 года',
                    ],
                    [
                        'key' => 'field_salary_amount',
                        'label' => 'Сумма',
                        'name' => 'salary_amount',
                        'type' => 'text',
                        'default_value' => 'от 50 000 ₽ + %',
                    ],
                    [
                        'key' => 'field_salary_popular',
                        'label' => 'Популярный',
                        'name' => 'salary_popular',
                        'type' => 'true_false',
                        'default_value' => 0,
                        'ui' => 1,
                    ],
                ],
                'min' => 3,
                'max' => 3,
            ],

            // Как работает
            [
                'key' => 'field_how_it_works_title',
                'label' => 'Заголовок "Как проходит обучение"',
                'name' => 'how_it_works_title',
                'type' => 'text',
                'default_value' => 'Как проходит обучение',
            ],
            [
                'key' => 'field_how_it_works_steps',
                'label' => 'Этапы обучения',
                'name' => 'how_it_works_steps',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        'key' => 'field_step_number',
                        'label' => 'Номер шага',
                        'name' => 'step_number',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_step_title',
                        'label' => 'Заголовок шага',
                        'name' => 'step_title',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_step_description',
                        'label' => 'Описание',
                        'name' => 'step_description',
                        'type' => 'textarea',
                        'rows' => 3,
                    ],
                    [
                        'key' => 'field_step_duration',
                        'label' => 'Срок',
                        'name' => 'step_duration',
                        'type' => 'text',
                    ],
                ],
                'layout' => 'row',
            ],

            // Программа модули (с уроками!)
            [
                'key' => 'field_curriculum_title',
                'label' => 'Заголовок секции "Программа"',
                'name' => 'curriculum_title',
                'type' => 'text',
                'default_value' => 'Программа обучения',
            ],
            [
                'key' => 'field_curriculum_subtitle',
                'label' => 'Подзаголовок',
                'name' => 'curriculum_subtitle',
                'type' => 'text',
                'default_value' => '5 модулей • 20 уроков • практика',
            ],
            [
                'key' => 'field_modules',
                'label' => 'Модули (с уроками)',
                'name' => 'modules',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        'key' => 'field_module_number',
                        'label' => 'Номер модуля',
                        'name' => 'module_number',
                        'type' => 'text',
                        'default_value' => '01',
                    ],
                    [
                        'key' => 'field_module_title',
                        'label' => 'Название модуля',
                        'name' => 'module_title',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_module_subtitle',
                        'label' => 'Подзаголовок модуля',
                        'name' => 'module_subtitle',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_module_lessons',
                        'label' => 'Уроки модуля',
                        'name' => 'module_lessons',
                        'type' => 'repeater',
                        'sub_fields' => [
                            [
                                'key' => 'field_lesson_number',
                                'label' => 'Номер урока',
                                'name' => 'lesson_number',
                                'type' => 'text',
                                'default_value' => '01',
                            ],
                            [
                                'key' => 'field_lesson_title',
                                'label' => 'Тема урока',
                                'name' => 'lesson_title',
                                'type' => 'text',
                            ],
                        ],
                    ],
                ],
            ],

            // Tab: Тарифы
            [
                'key' => 'field_tab_pricing',
                'label' => '💳 Тарифы',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // Тарифы
            [
                'key' => 'field_pricing_title',
                'label' => 'Заголовок секции "Тарифы"',
                'name' => 'pricing_title',
                'type' => 'text',
                'default_value' => 'Выберите формат обучения',
            ],
            [
                'key' => 'field_pricing_subtitle',
                'label' => 'Подзаголовок',
                'name' => 'pricing_subtitle',
                'type' => 'text',
                'default_value' => 'Доступные варианты обучения',
            ],
            [
                'key' => 'field_pricing_plans',
                'label' => 'Тарифные планы',
                'name' => 'pricing_plans',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        'key' => 'field_plan_name',
                        'label' => 'Название тарифа',
                        'name' => 'plan_name',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_plan_description',
                        'label' => 'Описание тарифа',
                        'name' => 'plan_description',
                        'type' => 'text',
                        'instructions' => 'Короткое описание под названием',
                    ],
                    [
                        'key' => 'field_plan_price',
                        'label' => 'Цена',
                        'name' => 'plan_price',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_plan_period',
                        'label' => 'Период/формат',
                        'name' => 'plan_period',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_plan_features_list',
                        'label' => 'Список возможностей',
                        'name' => 'plan_features_list',
                        'type' => 'repeater',
                        'sub_fields' => [
                            [
                                'key' => 'field_feature_text',
                                'label' => 'Текст возможности',
                                'name' => 'feature_text',
                                'type' => 'text',
                            ],
                            [
                                'key' => 'field_feature_included',
                                'label' => 'Включено',
                                'name' => 'feature_included',
                                'type' => 'true_false',
                                'default_value' => 1,
                                'ui' => 1,
                            ],
                        ],
                        'layout' => 'table',
                    ],
                    [
                        'key' => 'field_plan_badge',
                        'label' => 'Бейдж (популярный/VIP/рекомендуемый)',
                        'name' => 'plan_badge',
                        'type' => 'text',
                        'instructions' => 'Оставьте пустым для обычного тарифа',
                    ],
                    [
                        'key' => 'field_plan_highlight',
                        'label' => 'Выделить тариф (жирная рамка)',
                        'name' => 'plan_highlight',
                        'type' => 'true_false',
                        'default_value' => 0,
                        'ui' => 1,
                    ],
                ],
            ],

            // Текст на кнопке выбора тарифа
            [
                'key' => 'field_plan_button_text',
                'label' => 'Текст на кнопке "Выбрать"',
                'name' => 'plan_button_text',
                'type' => 'text',
                'default_value' => 'Выбрать',
            ],

            // Tab: FAQ
            [
                'key' => 'field_tab_faq',
                'label' => '❓ FAQ',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // FAQ
            [
                'key' => 'field_faq_title',
                'label' => 'Заголовок секции FAQ',
                'name' => 'faq_title',
                'type' => 'text',
                'default_value' => 'Часто задаваемые вопросы',
            ],
            [
                'key' => 'field_faq_subtitle',
                'label' => 'Подзаголовок FAQ',
                'name' => 'faq_subtitle',
                'type' => 'text',
                'default_value' => 'Выберите категорию или кликните на вопрос',
            ],
            [
                'key' => 'field_faq_items',
                'label' => 'Вопросы и ответы',
                'name' => 'faq_items',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        'key' => 'field_faq_category',
                        'label' => 'Категория',
                        'name' => 'faq_category',
                        'type' => 'select',
                        'choices' => [
                            'course' => 'О курсе',
                            'start' => 'Для новичков',
                            'payment' => 'Оплата',
                            'study' => 'Обучение',
                        ],
                        'default_value' => 'course',
                        'allow_null' => 0,
                        'multiple' => 0,
                        'ui' => 0,
                        'ajax' => 0,
                        'placeholder' => '',
                    ],
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
                        'type' => 'wysiwyg',
                        'tabs' => 'visual,text',
                        'toolbar' => 'full',
                        'media_upload' => 0,
                    ],
                ],
            ],

            // Tab: Путь
            [
                'key' => 'field_tab_path',
                'label' => '🛤️ Путь и результаты',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // Пошаговый путь (Path Steps)
            [
                'key' => 'field_path_steps',
                'label' => 'Пошаговый путь',
                'name' => 'path_steps',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        'key' => 'field_path_step_number',
                        'label' => 'Номер шага',
                        'name' => 'path_step_number',
                        'type' => 'text',
                        'default_value' => '1',
                    ],
                    [
                        'key' => 'field_path_step_title',
                        'label' => 'Заголовок шага',
                        'name' => 'path_step_title',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_path_step_description',
                        'label' => 'Описание шага',
                        'name' => 'path_step_description',
                        'type' => 'text',
                    ],
                ],
                'layout' => 'table',
            ],

            // После обучения (After Learning)
            [
                'key' => 'field_after_learning_items',
                'label' => 'После обучения',
                'name' => 'after_learning_items',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        'key' => 'field_after_learning_title',
                        'label' => 'Заголовок',
                        'name' => 'after_learning_title',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_after_learning_description',
                        'label' => 'Описание',
                        'name' => 'after_learning_description',
                        'type' => 'text',
                    ],
                ],
                'layout' => 'table',
            ],

            // Tab: CTA
            [
                'key' => 'field_tab_cta',
                'label' => '📝 Форма заявки',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // CTA Form
            [
                'key' => 'field_cta_section_title',
                'label' => 'Заголовок CTA формы',
                'name' => 'cta_section_title',
                'type' => 'text',
                'default_value' => 'Начните обучение сегодня',
            ],
            [
                'key' => 'field_cta_section_text',
                'label' => 'Описание формы',
                'name' => 'cta_section_text',
                'type' => 'textarea',
                'default_value' => 'Заполните форму, и мы свяжемся с вами в ближайшее время',
            ],
            [
                'key' => 'field_cta_button_text',
                'label' => 'Текст кнопки',
                'name' => 'cta_button_text',
                'type' => 'text',
                'default_value' => 'Отправить заявку',
            ],
            // Tab: Отзывы
            [
                'key' => 'field_tab_testimonials',
                'label' => '🎬 Видео-отзывы',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            [
                'key' => 'field_testimonials_title',
                'label' => 'Заголовок секции',
                'name' => 'testimonials_title',
                'type' => 'text',
                'default_value' => 'Отзывы наших учеников',
            ],
            [
                'key' => 'field_testimonials_subtitle',
                'label' => 'Подзаголовок',
                'name' => 'testimonials_subtitle',
                'type' => 'text',
                'default_value' => 'Узнайте, как прошёл курс у наших выпускников',
            ],
            [
                'key' => 'field_testimonials_items',
                'label' => 'Видео-отзывы',
                'name' => 'testimonials_items',
                'type' => 'repeater',
                'min' => 1,
                'max' => 20,
                'layout' => 'row',
                'button_label' => 'Добавить отзыв',
                'sub_fields' => [
                    [
                        'key' => 'field_testimonial_video',
                        'label' => 'Видео (вертикальное)',
                        'name' => 'testimonial_video',
                        'type' => 'file',
                        'return_format' => 'url',
                        'mime_types' => 'mp4,webm,mov',
                        'required' => 1,
                        'instructions' => 'Загрузите вертикальное видео (9:16). Обложка сгенерируется автоматически из первого кадра.',
                    ],
                    [
                        'key' => 'field_testimonial_text',
                        'label' => 'Текст под видео',
                        'name' => 'testimonial_text',
                        'type' => 'text',
                        'placeholder' => 'Имя ученика, должность',
                        'instructions' => 'Например: «Анна, маркетолог — теперь работаю с тендерами»',
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
        'key' => 'group_about_full',
        'title' => 'О школе - Полный контент',
        'fields' => [
            // Tab: Hero
            [
                'key' => 'field_tab_about_hero',
                'label' => '🏠 Заголовок',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // Hero секция
            [
                'key' => 'field_about_hero_title',
                'label' => 'Заголовок страницы',
                'name' => 'about_hero_title',
                'type' => 'text',
                'default_value' => 'О школе Фрегат',
            ],
            [
                'key' => 'field_about_hero_subtitle',
                'label' => 'Подзаголовок',
                'name' => 'about_hero_subtitle',
                'type' => 'text',
                'default_value' => 'Помогаем предпринимателям выигрывать тендеры с 2018 года',
            ],

            // Tab: Миссия
            [
                'key' => 'field_tab_about_mission',
                'label' => '🎯 Миссия',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // Миссия
            [
                'key' => 'field_about_mission_title',
                'label' => 'Заголовок миссии',
                'name' => 'about_mission_title',
                'type' => 'text',
                'default_value' => 'Наша миссия',
            ],
            [
                'key' => 'field_about_mission_text',
                'label' => 'Текст миссии',
                'name' => 'about_mission_text',
                'type' => 'textarea',
                'rows' => 4,
                'default_value' => 'Делаем знания о тендерах доступными для каждого. Помогаем предпринимателям, компаниям и частным специалистам получать государственные заказы и строить карьеру за счёт участия в закупках по 44-ФЗ и 223-ФЗ.',
            ],

            // Статистика рынка
            [
                'key' => 'field_about_market_title',
                'label' => 'Заголовок статистики рынка',
                'name' => 'about_market_title',
                'type' => 'text',
                'default_value' => 'Госзакупки — реальный канал продаж',
            ],
            [
                'key' => 'field_about_market_subtitle',
                'label' => 'Подзаголовок статистики',
                'name' => 'about_market_subtitle',
                'type' => 'text',
                'default_value' => 'Данные рынка тендеров на 2025 год',
            ],
            [
                'key' => 'field_about_market_stats',
                'label' => 'Статистика рынка (3 блока)',
                'name' => 'about_market_stats',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => [
                    [
                        'key' => 'field_about_market_stat_number',
                        'label' => 'Число',
                        'name' => 'about_market_stat_number',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_about_market_stat_description',
                        'label' => 'Описание',
                        'name' => 'about_market_stat_description',
                        'type' => 'text',
                    ],
                ],
                'min' => 3,
                'max' => 3,
            ],

            // Tab: Почему Фрегат
            [
                'key' => 'field_tab_about_why',
                'label' => '🏆 Почему Фрегат',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // Почему Фрегат
            [
                'key' => 'field_about_why_title',
                'label' => 'Заголовок "Почему Фрегат"',
                'name' => 'about_why_title',
                'type' => 'text',
                'default_value' => 'Почему выбирают Фрегат?',
            ],
            [
                'key' => 'field_about_why_subtitle',
                'label' => 'Подзаголовок',
                'name' => 'about_why_subtitle',
                'type' => 'text',
                'default_value' => 'Профильная школа тендерного обучения. Работаем в тендерах с 2017 года.',
            ],
            [
                'key' => 'field_about_why_cards',
                'label' => 'Карточки преимуществ (4 шт)',
                'name' => 'about_why_cards',
                'type' => 'repeater',
                'layout' => 'row',
                'sub_fields' => [
                    [
                        'key' => 'field_about_why_card_title',
                        'label' => 'Заголовок',
                        'name' => 'about_why_card_title',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_about_why_card_description',
                        'label' => 'Описание',
                        'name' => 'about_why_card_description',
                        'type' => 'text',
                    ],
                ],
                'min' => 4,
                'max' => 4,
            ],
            [
                'key' => 'field_about_why_stats_text',
                'label' => 'Текст со статистикой (с highlighting)',
                'name' => 'about_why_stats_text',
                'type' => 'textarea',
                'rows' => 3,
                'default_value' => '80% студентов подают заявки уже во время обучения и выигрывают первые тендеры в течение 2 месяцев',
            ],

            // Tab: Директор
            [
                'key' => 'field_tab_about_director',
                'label' => '👩‍💼 Слово директора',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // Слово директора
            [
                'key' => 'field_about_director_name',
                'label' => 'Имя директора',
                'name' => 'about_director_name',
                'type' => 'text',
                'default_value' => 'Фарида Максумова',
            ],
            [
                'key' => 'field_about_director_position',
                'label' => 'Должность',
                'name' => 'about_director_position',
                'type' => 'text',
                'default_value' => 'Директор Школы «Фрегат»',
            ],
            [
                'key' => 'field_about_director_photo',
                'label' => 'Фото директора',
                'name' => 'about_director_photo',
                'type' => 'image',
                'return_format' => 'url',
            ],
            [
                'key' => 'field_about_director_quote',
                'label' => 'Цитата директора',
                'name' => 'about_director_quote',
                'type' => 'textarea',
                'rows' => 5,
            ],
            [
                'key' => 'field_about_director_stats',
                'label' => 'Статистика директора (repeater)',
                'name' => 'about_director_stats',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => [
                    [
                        'key' => 'field_about_director_stat_text',
                        'label' => 'Текст',
                        'name' => 'about_director_stat_text',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_about_director_stat_value',
                        'label' => 'Значение',
                        'name' => 'about_director_stat_value',
                        'type' => 'text',
                    ],
                ],
            ],

            // Tab: Путь
            [
                'key' => 'field_tab_about_path',
                'label' => '🛤️ Путь обучения',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // Пошаговый путь
            [
                'key' => 'field_about_path_title',
                'label' => 'Заголовок "Ваш путь"',
                'name' => 'about_path_title',
                'type' => 'text',
                'default_value' => 'Ваш путь от новичка до первой победы',
            ],
            [
                'key' => 'field_about_path_subtitle',
                'label' => 'Подзаголовок',
                'name' => 'about_path_subtitle',
                'type' => 'text',
                'default_value' => 'Пройдёте все этапы — от поиска тендера до получения денег',
            ],
            [
                'key' => 'field_about_path_steps',
                'label' => 'Шаги (4 шага)',
                'name' => 'about_path_steps',
                'type' => 'repeater',
                'layout' => 'row',
                'sub_fields' => [
                    [
                        'key' => 'field_about_path_step_number',
                        'label' => 'Номер',
                        'name' => 'about_path_step_number',
                        'type' => 'text',
                        'default_value' => '1',
                    ],
                    [
                        'key' => 'field_about_path_step_title',
                        'label' => 'Заголовок',
                        'name' => 'about_path_step_title',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_about_path_step_description',
                        'label' => 'Описание',
                        'name' => 'about_path_step_description',
                        'type' => 'text',
                    ],
                ],
                'min' => 4,
                'max' => 4,
            ],

            // После обучения
            [
                'key' => 'field_about_after_title',
                'label' => 'Заголовок "После обучения"',
                'name' => 'about_after_title',
                'type' => 'text',
                'default_value' => 'После обучения у вас будет',
            ],
            [
                'key' => 'field_about_after_subtitle',
                'label' => 'Подзаголовок',
                'name' => 'about_after_subtitle',
                'type' => 'text',
                'default_value' => 'Всё необходимое для самостоятельной работы',
            ],
            [
                'key' => 'field_about_after_cards',
                'label' => 'Карточки (4 шт)',
                'name' => 'about_after_cards',
                'type' => 'repeater',
                'layout' => 'row',
                'sub_fields' => [
                    [
                        'key' => 'field_about_after_card_title',
                        'label' => 'Заголовок',
                        'name' => 'about_after_card_title',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_about_after_card_description',
                        'label' => 'Описание',
                        'name' => 'about_after_card_description',
                        'type' => 'text',
                    ],
                ],
                'min' => 4,
                'max' => 4,
            ],

            // Tab: Программа
            [
                'key' => 'field_tab_about_curriculum',
                'label' => '📚 Чему учим',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // Чему мы учим
            [
                'key' => 'field_about_curriculum_title',
                'label' => 'Заголовок "Чему мы учим"',
                'name' => 'about_curriculum_title',
                'type' => 'text',
                'default_value' => 'Чему мы учим',
            ],
            [
                'key' => 'field_about_curriculum_items',
                'label' => 'Темы обучения (4 шт)',
                'name' => 'about_curriculum_items',
                'type' => 'repeater',
                'layout' => 'row',
                'sub_fields' => [
                    [
                        'key' => 'field_about_curriculum_item_title',
                        'label' => 'Заголовок',
                        'name' => 'about_curriculum_item_title',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_about_curriculum_item_description',
                        'label' => 'Описание',
                        'name' => 'about_curriculum_item_description',
                        'type' => 'textarea',
                        'rows' => 2,
                    ],
                ],
                'min' => 4,
                'max' => 4,
            ],

            // Tab: Формат
            [
                'key' => 'field_tab_about_format',
                'label' => '💻 Формат обучения',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // Формат обучения
            [
                'key' => 'field_about_format_title',
                'label' => 'Заголовок "Формат обучения"',
                'name' => 'about_format_title',
                'type' => 'text',
                'default_value' => 'Формат обучения',
            ],
            [
                'key' => 'field_about_format_items',
                'label' => 'Пункты формата (каждый с новой строки)',
                'name' => 'about_format_items',
                'type' => 'textarea',
                'rows' => 6,
                'instructions' => 'Каждый пункт на новой строке',
                'default_value' => 'Онлайн-формат — учитесь в удобное время из любой точки
Длительность — 1 месяц интенсивного обучения
Видеоуроки + практика + доп. материалы
Чат с участниками и экспертами
Диплом или удостоверение по окончании',
            ],

            // Tab: Лицензия
            [
                'key' => 'field_tab_about_license',
                'label' => '📜 Лицензия',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // Лицензия
            [
                'key' => 'field_about_license_title',
                'label' => 'Заголовок лицензии',
                'name' => 'about_license_title',
                'type' => 'text',
                'default_value' => 'Лицензия на образовательную деятельность',
            ],
            [
                'key' => 'field_about_license_number',
                'label' => 'Номер лицензии',
                'name' => 'about_license_number',
                'type' => 'text',
                'default_value' => 'Л035‑01217‑26/03829175',
            ],
            [
                'key' => 'field_about_license_text',
                'label' => 'Текст под лицензией',
                'name' => 'about_license_text',
                'type' => 'text',
                'default_value' => 'Бессрочная лицензия ДПО',
            ],

            // Tab: CTA
            [
                'key' => 'field_tab_about_cta',
                'label' => '📝 CTA',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // CTA
            [
                'key' => 'field_about_cta_title',
                'label' => 'Заголовок CTA',
                'name' => 'about_cta_title',
                'type' => 'text',
                'default_value' => 'Готовы начать выигрывать тендеры?',
            ],
            [
                'key' => 'field_about_cta_text',
                'label' => 'Текст CTA',
                'name' => 'about_cta_text',
                'type' => 'text',
                'default_value' => 'Запишитесь на обучение прямо сейчас',
            ],
            [
                'key' => 'field_about_cta_button',
                'label' => 'Текст кнопки',
                'name' => 'about_cta_button',
                'type' => 'text',
                'default_value' => 'Записаться на курс',
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
    // СТРАНИЦА КОНТАКТЫ
    // ============================================
    acf_add_local_field_group([
        'key' => 'group_contacts_full',
        'title' => 'Контакты - Полный контент',
        'fields' => [
            [
                'key' => 'field_contacts_hero_title',
                'label' => 'Заголовок страницы',
                'name' => 'contacts_hero_title',
                'type' => 'text',
                'default_value' => 'Контакты',
            ],
            [
                'key' => 'field_contacts_intro',
                'label' => 'Подзаголовок',
                'name' => 'contacts_intro',
                'type' => 'text',
                'default_value' => 'Свяжитесь с нами любым удобным способом',
            ],
            [
                'key' => 'field_contacts_email',
                'label' => 'Email',
                'name' => 'contacts_email',
                'type' => 'text',
                'default_value' => 'Frigate0408@gmail.com',
            ],
            [
                'key' => 'field_contacts_email_description',
                'label' => 'Описание под Email',
                'name' => 'contacts_email_description',
                'type' => 'text',
                'default_value' => 'Напишите нам, мы ответим в течение рабочего дня',
            ],
            [
                'key' => 'field_contacts_address',
                'label' => 'Адрес',
                'name' => 'contacts_address',
                'type' => 'text',
                'default_value' => 'г. Ставрополь, ул. Дзержинского, д. 114',
            ],
            [
                'key' => 'field_contacts_address_description',
                'label' => 'Описание под адресом',
                'name' => 'contacts_address_description',
                'type' => 'text',
                'default_value' => 'Обучение проводится онлайн',
            ],
            // CTA секция
            [
                'key' => 'field_contacts_cta_title',
                'label' => 'Заголовок CTA',
                'name' => 'contacts_cta_title',
                'type' => 'text',
                'default_value' => 'Остались вопросы?',
            ],
            [
                'key' => 'field_contacts_cta_text',
                'label' => 'Текст CTA',
                'name' => 'contacts_cta_text',
                'type' => 'text',
                'default_value' => 'Напишите нам на Frigate0408@gmail.com или запишитесь на курс',
            ],
            [
                'key' => 'field_contacts_cta_button',
                'label' => 'Текст кнопки',
                'name' => 'contacts_cta_button',
                'type' => 'text',
                'default_value' => 'Написать на email',
            ],
            // Реквизиты
            [
                'key' => 'field_contacts_requisites_title',
                'label' => 'Заголовок реквизитов',
                'name' => 'contacts_requisites_title',
                'type' => 'text',
                'default_value' => 'Реквизиты ООО «ФРЕГАТ»',
            ],
            [
                'key' => 'field_contacts_company_name',
                'label' => 'Полное название компании',
                'name' => 'contacts_company_name',
                'type' => 'text',
                'default_value' => 'Общество с ограниченной ответственностью «ФРЕГАТ»',
            ],
            [
                'key' => 'field_contacts_director',
                'label' => 'Генеральный директор',
                'name' => 'contacts_director',
                'type' => 'text',
                'default_value' => 'Максумова Фарида Махмудовна',
            ],
            [
                'key' => 'field_contacts_inn_kpp',
                'label' => 'ИНН / КПП',
                'name' => 'contacts_inn_kpp',
                'type' => 'text',
                'default_value' => '2634115968 / 263401001',
            ],
            [
                'key' => 'field_contacts_ogrn',
                'label' => 'ОГРН',
                'name' => 'contacts_ogrn',
                'type' => 'text',
                'default_value' => '1252600010079',
            ],
            [
                'key' => 'field_contacts_bank',
                'label' => 'Банк',
                'name' => 'contacts_bank',
                'type' => 'text',
                'default_value' => 'ООО «Банк Точка» г. Москва, БИК 044525104',
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

    // ============================================
    // СТРАНИЦА МЕРОПРИЯТИЯ
    // ============================================
    acf_add_local_field_group([
        'key' => 'group_events_full',
        'title' => 'Мероприятия - Полный контент',
        'fields' => [
            [
                'key' => 'field_events_hero_title',
                'label' => 'Заголовок страницы',
                'name' => 'events_hero_title',
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
                'key' => 'field_events_list_title',
                'label' => 'Заголовок списка',
                'name' => 'events_list_title',
                'type' => 'text',
                'default_value' => 'Предстоящие мероприятия',
            ],
            [
                'key' => 'field_events_list_subtitle',
                'label' => 'Подзаголовок списка',
                'name' => 'events_list_subtitle',
                'type' => 'text',
                'default_value' => 'Выберите формат и запишитесь на участие',
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
                'label' => 'Текст CTA',
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
            [
                'key' => 'field_events_cta_button',
                'label' => 'Текст кнопки',
                'name' => 'events_cta_button',
                'type' => 'text',
                'default_value' => 'Подписаться на Telegram',
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
    // СТРАНИЦА ПРЕПОДАВАТЕЛИ
    // ============================================
    acf_add_local_field_group([
        'key' => 'group_teachers_page_full',
        'title' => 'Ваши наставники - Полный контент',
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
                'type' => 'text',
                'default_value' => 'Обучение у практика с реальным опытом побед в тендерах',
            ],
            [
                'key' => 'field_teachers_cta_text',
                'label' => 'Текст CTA под карточками',
                'name' => 'teachers_cta_text',
                'type' => 'text',
                'default_value' => 'Учитесь у практиков с реальными результатами',
            ],
            [
                'key' => 'field_teachers_final_cta_title',
                'label' => 'Заголовок финального CTA',
                'name' => 'teachers_final_cta_title',
                'type' => 'text',
                'default_value' => 'Готовы начать выигрывать тендеры?',
            ],
            [
                'key' => 'field_teachers_final_cta_text',
                'label' => 'Текст финального CTA',
                'name' => 'teachers_final_cta_text',
                'type' => 'text',
                'default_value' => 'Запишитесь на обучение под руководством Фариды и Галины',
            ],
            [
                'key' => 'field_teachers_discount',
                'label' => 'Текст скидки',
                'name' => 'teachers_discount',
                'type' => 'text',
                'default_value' => 'Скидка 10% до 30.04.2026',
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
    // CPT TEACHER - ПОЛЯ ДЛЯ ПРЕПОДАВАТЕЛЕЙ
    // ============================================
    acf_add_local_field_group([
        'key' => 'group_teacher_details',
        'title' => 'Информация о преподавателе',
        'fields' => [
            [
                'key' => 'field_teacher_position',
                'label' => 'Должность',
                'name' => 'teacher_position',
                'type' => 'text',
                'placeholder' => 'Например: Генеральный директор ООО «ФРЕГАТ»',
            ],
            [
                'key' => 'field_teacher_photo',
                'label' => 'Фото',
                'name' => 'teacher_photo',
                'type' => 'image',
                'return_format' => 'url',
                'instructions' => 'Рекомендуемый размер: 128x128px',
            ],
            [
                'key' => 'field_teacher_stats',
                'label' => 'Статистика',
                'name' => 'teacher_stats',
                'type' => 'textarea',
                'rows' => 4,
                'instructions' => 'Каждая строка в формате "Метка: Значение". Например: "Стаж: с 2017 года"',
                'placeholder' => 'Стаж: с 2017 года
Побед: 200+ в тендерах
Экспертиза: 44-ФЗ, 223-ФЗ
Образование: 3 высших',
            ],
            [
                'key' => 'field_teacher_bio_short',
                'label' => 'Краткая биография',
                'name' => 'teacher_bio_short',
                'type' => 'textarea',
                'rows' => 4,
                'instructions' => 'Краткое описание для карточки',
            ],
            [
                'key' => 'field_teacher_why_cards',
                'label' => 'Карточки "Почему выбирают" (4 шт)',
                'name' => 'teacher_why_cards',
                'type' => 'repeater',
                'layout' => 'row',
                'sub_fields' => [
                    [
                        'key' => 'field_teacher_why_card_title',
                        'label' => 'Заголовок',
                        'name' => 'teacher_why_card_title',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_teacher_why_card_description',
                        'label' => 'Описание',
                        'name' => 'teacher_why_card_description',
                        'type' => 'textarea',
                        'rows' => 2,
                    ],
                ],
                'min' => 4,
                'max' => 4,
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
    // CPT EVENT - ПОЛЯ ДЛЯ МЕРОПРИЯТИЙ
    // ============================================
    acf_add_local_field_group([
        'key' => 'group_event_details',
        'title' => 'Детали мероприятия',
        'fields' => [
            // Tab: Основное
            [
                'key' => 'field_tab_event_main',
                'label' => '📋 Основное',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // Базовая информация
            [
                'key' => 'field_event_date',
                'label' => 'Дата мероприятия',
                'name' => 'event_date',
                'type' => 'text',
                'instructions' => 'Например: 8–10 апреля 2025',
            ],
            [
                'key' => 'field_event_time',
                'label' => 'Время',
                'name' => 'event_time',
                'type' => 'text',
                'instructions' => 'Например: 10:00 – 18:00',
            ],
            [
                'key' => 'field_event_format',
                'label' => 'Формат',
                'name' => 'event_format',
                'type' => 'text',
                'instructions' => 'Например: Онлайн, Офлайн, Вебинар',
            ],
            [
                'key' => 'field_event_price',
                'label' => 'Цена',
                'name' => 'event_price',
                'type' => 'text',
                'instructions' => 'Например: 10 000 ₽',
            ],
            [
                'key' => 'field_event_duration',
                'label' => 'Длительность',
                'name' => 'event_duration',
                'type' => 'text',
                'instructions' => 'Например: 24 часа, 3 дня',
            ],
            [
                'key' => 'field_event_location',
                'label' => 'Место проведения',
                'name' => 'event_location',
                'type' => 'text',
                'instructions' => 'Адрес',
            ],
            [
                'key' => 'field_event_link',
                'label' => 'Ссылка на регистрацию',
                'name' => 'event_link',
                'type' => 'url',
            ],
            [
                'key' => 'field_event_spots',
                'label' => 'Количество мест',
                'name' => 'event_spots',
                'type' => 'number',
                'instructions' => 'Оставьте пустым для неограниченного количества',
            ],

            // Tab: Детальная страница
            [
                'key' => 'field_tab_event_detail',
                'label' => '🎨 Детальная страница',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // Детальной страницы
            [
                'key' => 'field_event_badge',
                'label' => 'Бейдж (над заголовком)',
                'name' => 'event_badge',
                'type' => 'text',
                'instructions' => 'Например: Очное обучение',
            ],
            [
                'key' => 'field_event_subtitle',
                'label' => 'Подзаголовок',
                'name' => 'event_subtitle',
                'type' => 'text',
                'instructions' => 'Например: Государственные и корпоративные тендеры: от поиска до победы',
            ],
            [
                'key' => 'field_event_title_prefix',
                'label' => 'Первая часть заголовока',
                'name' => 'event_title_prefix',
                'type' => 'text',
                'default_value' => 'Курс повышения квалификации',
                'instructions' => 'Первая строка заголовка h1 (обычный текст)',
            ],
            [
                'key' => 'field_event_title_italic',
                'label' => 'Вторая часть заголовка (курсивом)',
                'name' => 'event_title_italic',
                'type' => 'text',
                'instructions' => 'Вторая строка заголовка h1 (золотой курсив). Например: Специалист по закупкам',
            ],
            [
                'key' => 'field_event_format_label',
                'label' => 'Лейбл формата (для hero)',
                'name' => 'event_format_label',
                'type' => 'text',
                'default_value' => 'Очное обучение',
            ],
            [
                'key' => 'field_event_teacher',
                'label' => 'Преподаватель (ссылка на teacher)',
                'name' => 'event_teacher',
                'type' => 'post_object',
                'post_type' => ['teacher'],
                'allow_null' => 1,
            ],
            [
                'key' => 'field_event_teacher_title',
                'label' => 'Заголовок преподавателя',
                'name' => 'event_teacher_title',
                'type' => 'text',
                'default_value' => 'Эксперт по тендерам',
            ],
            [
                'key' => 'field_event_teacher_stats',
                'label' => 'Статистика преподавателя',
                'name' => 'event_teacher_stats',
                'type' => 'textarea',
                'rows' => 3,
                'instructions' => 'Каждая строка на новой строке',
            ],
            [
                'key' => 'field_event_document',
                'label' => 'Итоговый документ',
                'name' => 'event_document',
                'type' => 'text',
                'default_value' => 'Диплом или удостоверение установленного образца',
            ],

            // Tab: Кнопка записи
            [
                'key' => 'field_tab_event_cta',
                'label' => '📝 Запись',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // CTA секция
            [
                'key' => 'field_event_record_title',
                'label' => 'Заголовок CTA',
                'name' => 'event_record_title',
                'type' => 'text',
                'default_value' => 'Забронируйте место на курсе',
            ],
            [
                'key' => 'field_event_record_text',
                'label' => 'Текст под заголовком CTA',
                'name' => 'event_record_text',
                'type' => 'text',
                'default_value' => 'Количество мест ограничено',
            ],
            [
                'key' => 'field_event_record_link',
                'label' => 'Ссылка на форму записи',
                'name' => 'event_record_link',
                'type' => 'url',
            ],
            [
                'key' => 'field_event_record_button',
                'label' => 'Текст кнопки записи',
                'name' => 'event_record_button',
                'type' => 'text',
                'default_value' => 'Перейти к оформлению',
            ],

            // Tab: Программа
            [
                'key' => 'field_tab_event_program',
                'label' => '📚 Программа',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // Программа (repeater)
            [
                'key' => 'field_event_program_days',
                'label' => 'Программа (дни)',
                'name' => 'event_program_days',
                'type' => 'repeater',
                'layout' => 'row',
                'sub_fields' => [
                    [
                        'key' => 'field_event_day_title',
                        'label' => 'Заголовок дня',
                        'name' => 'day_title',
                        'type' => 'text',
                        'default_value' => 'День 1 — 4 часа',
                    ],
                    [
                        'key' => 'field_event_program_modules',
                        'label' => 'Модули дня',
                        'name' => 'modules',
                        'type' => 'repeater',
                        'sub_fields' => [
                            [
                                'key' => 'field_event_module_title',
                                'label' => 'Название модуля',
                                'name' => 'module_title',
                                'type' => 'text',
                            ],
                            [
                                'key' => 'field_event_module_topics',
                                'label' => 'Темы модуля (каждая с новой строки)',
                                'name' => 'topics',
                                'type' => 'textarea',
                                'rows' => 4,
                            ],
                        ],
                    ],
                ],
            ],

            // Дистанционные модули (repeater)
            [
                'key' => 'field_event_online_modules',
                'label' => 'Дистанционные модули (GetCourse)',
                'name' => 'event_online_modules',
                'type' => 'repeater',
                'layout' => 'row',
                'sub_fields' => [
                    [
                        'key' => 'field_event_online_module_title',
                        'label' => 'Название модуля',
                        'name' => 'module_title',
                        'type' => 'text',
                        'default_value' => 'Модуль 8. Планирование закупок',
                    ],
                    [
                        'key' => 'field_event_online_module_topics',
                        'label' => 'Темы модуля (каждая с новой строки)',
                        'name' => 'topics',
                        'type' => 'textarea',
                        'rows' => 3,
                    ],
                ],
            ],

            // Tab: Аудитория
            [
                'key' => 'field_tab_event_audience',
                'label' => '👥 Для кого',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // Для кого курс (repeater)
            [
                'key' => 'field_event_audience',
                'label' => 'Для кого курс (3 карточки)',
                'name' => 'event_audience',
                'type' => 'repeater',
                'layout' => 'row',
                'sub_fields' => [
                    [
                        'key' => 'field_event_audience_title',
                        'label' => 'Заголовок',
                        'name' => 'title',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_event_audience_icon',
                        'label' => 'Иконка',
                        'name' => 'icon',
                        'type' => 'select',
                        'choices' => [
                            'entrepreneur' => 'Предприниматель (briefcase)',
                            'specialist' => 'Специалист (building)',
                            'manager' => 'Руководитель (users)',
                        ],
                        'default_value' => 'entrepreneur',
                    ],
                    [
                        'key' => 'field_event_audience_description',
                        'label' => 'Описание',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 2,
                    ],
                ],
                'min' => 3,
            ],

            // Tab: Результаты
            [
                'key' => 'field_tab_event_results',
                'label' => '🏆 Результаты и бонусы',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // Результаты
            [
                'key' => 'field_event_results_title',
                'label' => 'Заголовок результатов',
                'name' => 'event_results_title',
                'type' => 'text',
                'default_value' => 'После обучения вы будете уметь:',
            ],
            [
                'key' => 'field_event_results',
                'label' => 'Результаты (по одному на строку)',
                'name' => 'event_results',
                'type' => 'textarea',
                'rows' => 6,
                'instructions' => 'Каждый результат на новой строке',
            ],

            // Бонусы (repeater)
            [
                'key' => 'field_event_bonuses',
                'label' => 'Бонусы (до 3 шт)',
                'name' => 'event_bonuses',
                'type' => 'repeater',
                'layout' => 'row',
                'sub_fields' => [
                    [
                        'key' => 'field_event_bonus_title',
                        'label' => 'Заголовок',
                        'name' => 'bonus_title',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_event_bonus_description',
                        'label' => 'Описание',
                        'name' => 'bonus_description',
                        'type' => 'text',
                    ],
                ],
                'max' => 3,
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'event',
                ],
            ],
        ],
        'position' => 'normal',
        'style' => 'default',
    ]);

    // ============================================
    // СВЕДЕНИЯ ОБ ОБРАЗОВАТЕЛЬНОЙ ОРГАНИЗАЦИИ
    // ============================================
    acf_add_local_field_group([
        'key' => 'group_svedeniya_full',
        'title' => 'Сведения об образовательной организации',
        'fields' => [
            // Tab: 🏛️ Структура
            [
                'key' => 'field_tab_sved_структура',
                'label' => '🏛️ Структура',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // 1. Структура и органы управления
            [
                'key' => 'field_sved_structure_founder',
                'label' => 'Учредитель (HTML)',
                'name' => 'sved_structure_founder',
                'type' => 'wysiwyg',
                'instructions' => 'Информация об учредителе и органе управления',
                'media_upload' => 0,
                'toolbar' => 'basic',
            ],
            [
                'key' => 'field_sved_structure_departments',
                'label' => 'Структурные подразделения',
                'name' => 'sved_structure_departments',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => [
                    [
                        'key' => 'field_sved_structure_dept_name',
                        'label' => 'Название',
                        'name' => 'dept_name',
                        'type' => 'text',
                    ],
                ],
            ],
            [
                'key' => 'field_sved_structure_branches',
                'label' => 'Филиалы',
                'name' => 'sved_structure_branches',
                'type' => 'textarea',
                'default_value' => 'Филиалов нет',
            ],

            // Tab: 📄 Документы
            [
                'key' => 'field_tab_sved_документы',
                'label' => '📄 Документы',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // 2. Документы
            [
                'key' => 'field_sved_documents_license',
                'label' => 'Лицензия (HTML)',
                'name' => 'sved_documents_license',
                'type' => 'wysiwyg',
                'media_upload' => 0,
                'toolbar' => 'basic',
            ],
            [
                'key' => 'field_sved_documents_charter',
                'label' => 'Учредительные документы',
                'name' => 'sved_documents_charter',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => [
                    [
                        'key' => 'field_sved_doc_charter_name',
                        'label' => 'Название',
                        'name' => 'name',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_sved_doc_charter_link',
                        'label' => 'Ссылка',
                        'name' => 'link',
                        'type' => 'url',
                    ],
                    [
                        'key' => 'field_sved_doc_charter_link_text',
                        'label' => 'Текст ссылки',
                        'name' => 'link_text',
                        'type' => 'text',
                        'default_value' => 'Скачать',
                    ],
                ],
            ],
            [
                'key' => 'field_sved_documents_local_acts',
                'label' => 'Локальные нормативные акты',
                'name' => 'sved_documents_local_acts',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => [
                    [
                        'key' => 'field_sved_doc_act_name',
                        'label' => 'Название',
                        'name' => 'name',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_sved_doc_act_link',
                        'label' => 'Ссылка',
                        'name' => 'link',
                        'type' => 'url',
                    ],
                    [
                        'key' => 'field_sved_doc_act_link_text',
                        'label' => 'Текст ссылки',
                        'name' => 'link_text',
                        'type' => 'text',
                        'default_value' => 'Скачать',
                    ],
                ],
            ],
            [
                'key' => 'field_sved_documents_self_exam',
                'label' => 'Отчёт о самообследовании (HTML)',
                'name' => 'sved_documents_self_examination',
                'type' => 'wysiwyg',
                'media_upload' => 0,
                'toolbar' => 'basic',
            ],

            // Tab: 🎓 Образование
            [
                'key' => 'field_tab_sved_образование',
                'label' => '🎓 Образование',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // 3. Образование
            [
                'key' => 'field_sved_education_levels',
                'label' => 'Уровни образования (HTML)',
                'name' => 'sved_education_levels',
                'type' => 'wysiwyg',
                'media_upload' => 0,
                'toolbar' => 'basic',
            ],
            [
                'key' => 'field_sved_education_programs',
                'label' => 'Образовательные программы',
                'name' => 'sved_education_programs',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => [
                    [
                        'key' => 'field_sved_edu_prog_name',
                        'label' => 'Название',
                        'name' => 'name',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_sved_edu_prog_type',
                        'label' => 'Тип (повышение квалификации и т.д.)',
                        'name' => 'type',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_sved_edu_prog_profile',
                        'label' => 'Профиль',
                        'name' => 'profile',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_sved_edu_prog_duration',
                        'label' => 'Срок',
                        'name' => 'duration',
                        'type' => 'text',
                    ],
                ],
            ],
            [
                'key' => 'field_sved_education_accreditation',
                'label' => 'Аккредитация (HTML)',
                'name' => 'sved_education_accreditation',
                'type' => 'wysiwyg',
                'media_upload' => 0,
                'toolbar' => 'basic',
            ],
            [
                'key' => 'field_sved_education_language',
                'label' => 'Язык обучения',
                'name' => 'sved_education_language',
                'type' => 'text',
                'default_value' => 'Русский',
            ],
            [
                'key' => 'field_sved_education_plans',
                'label' => 'Учебные планы',
                'name' => 'sved_education_plans',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => [
                    [
                        'key' => 'field_sved_edu_plan_name',
                        'label' => 'Название',
                        'name' => 'name',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_sved_edu_plan_link',
                        'label' => 'Ссылка',
                        'name' => 'link',
                        'type' => 'url',
                    ],
                    [
                        'key' => 'field_sved_edu_plan_link_text',
                        'label' => 'Текст ссылки',
                        'name' => 'link_text',
                        'type' => 'text',
                        'default_value' => 'Скачать',
                    ],
                ],
            ],

            // Tab: 👩‍💼 Руководство
            [
                'key' => 'field_tab_sved_руководство',
                'label' => '👩‍💼 Руководство',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // 4. Руководство
            [
                'key' => 'field_sved_leadership_director_name',
                'label' => 'ФИО руководителя',
                'name' => 'sved_leadership_director_name',
                'type' => 'text',
                'default_value' => 'Максумова Фарида Махмудовна',
            ],
            [
                'key' => 'field_sved_leadership_director_position',
                'label' => 'Должность',
                'name' => 'sved_leadership_director_position',
                'type' => 'text',
                'default_value' => 'Генеральный директор',
            ],
            [
                'key' => 'field_sved_leadership_director_email',
                'label' => 'Email',
                'name' => 'sved_leadership_director_email',
                'type' => 'email',
                'default_value' => 'Frigate0408@gmail.com',
            ],
            [
                'key' => 'field_sved_leadership_director_hours',
                'label' => 'Приёмные часы',
                'name' => 'sved_leadership_director_hours',
                'type' => 'text',
                'default_value' => 'Понедельник-Пятница, 10:00-19:00 МСК',
            ],
            [
                'key' => 'field_sved_leadership_deputies',
                'label' => 'Заместители (placeholder)',
                'name' => 'sved_leadership_deputies',
                'type' => 'textarea',
                'default_value' => '(placeholder - сведения о заместителях, если есть)',
            ],

            // Tab: 👨‍🏫 Персонал
            [
                'key' => 'field_tab_sved_персонал',
                'label' => '👨‍🏫 Персонал',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // 5. Педагогический состав
            [
                'key' => 'field_sved_staff',
                'label' => 'Педагогический состав',
                'name' => 'sved_staff',
                'type' => 'repeater',
                'layout' => 'block',
                'sub_fields' => [
                    [
                        'key' => 'field_sved_staff_name',
                        'label' => 'ФИО',
                        'name' => 'name',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_sved_staff_position',
                        'label' => 'Должность',
                        'name' => 'position',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_sved_staff_experience',
                        'label' => 'Стаж',
                        'name' => 'experience',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_sved_staff_education',
                        'label' => 'Образование',
                        'name' => 'education',
                        'type' => 'textarea',
                        'rows' => 2,
                    ],
                ],
            ],

            // Tab: 🔧 Обеспечение
            [
                'key' => 'field_tab_sved_обеспечение',
                'label' => '🔧 Обеспечение',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // 6. Материально-техническое обеспечение
            [
                'key' => 'field_sved_facilities_learning_means',
                'label' => 'Средства обучения (HTML)',
                'name' => 'sved_facilities_learning_means',
                'type' => 'wysiwyg',
                'media_upload' => 0,
                'toolbar' => 'basic',
            ],
            [
                'key' => 'field_sved_facilities_access',
                'label' => 'Доступ в здания',
                'name' => 'sved_facilities_access',
                'type' => 'textarea',
                'default_value' => 'Образовательная деятельность осуществляется дистанционно. Доступ в здания не требуется.',
            ],
            [
                'key' => 'field_sved_facilities_nutrition_health',
                'label' => 'Питание и охрана здоровья',
                'name' => 'sved_facilities_nutrition_health',
                'type' => 'textarea',
                'default_value' => 'Не применимо (дистанционная форма обучения).',
            ],
            [
                'key' => 'field_sved_facilities_accessible',
                'label' => 'Доступная среда',
                'name' => 'sved_facilities_accessible',
                'type' => 'textarea',
            ],
            [
                'key' => 'field_sved_facilities_e_resources',
                'label' => 'Электронные ресурсы (HTML)',
                'name' => 'sved_facilities_e_resources',
                'type' => 'wysiwyg',
                'media_upload' => 0,
                'toolbar' => 'basic',
            ],

            // Tab: 🎁 Стипендии
            [
                'key' => 'field_tab_sved_стипендии',
                'label' => '🎁 Стипендии',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // 7. Стипендии
            [
                'key' => 'field_sved_scholarships',
                'label' => 'Стипендии (HTML)',
                'name' => 'sved_scholarships',
                'type' => 'wysiwyg',
                'media_upload' => 0,
                'toolbar' => 'basic',
            ],

            // Tab: 💳 Платные услуги
            [
                'key' => 'field_tab_sved_платные_услуги',
                'label' => '💳 Платные услуги',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // 8. Платные услуги
            [
                'key' => 'field_sved_paid_services_programs',
                'label' => 'Программы и стоимость',
                'name' => 'sved_paid_services_programs',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => [
                    [
                        'key' => 'field_sved_paid_prog_name',
                        'label' => 'Программа',
                        'name' => 'name',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_sved_paid_prog_price',
                        'label' => 'Стоимость',
                        'name' => 'price',
                        'type' => 'text',
                    ],
                ],
            ],
            [
                'key' => 'field_sved_paid_services_contract',
                'label' => 'Договор (HTML)',
                'name' => 'sved_paid_services_contract',
                'type' => 'wysiwyg',
                'media_upload' => 0,
                'toolbar' => 'basic',
            ],
            [
                'key' => 'field_sved_paid_services_procedure',
                'label' => 'Порядок оказания услуг (HTML)',
                'name' => 'sved_paid_services_procedure',
                'type' => 'wysiwyg',
                'media_upload' => 0,
                'toolbar' => 'basic',
            ],
            [
                'key' => 'field_sved_paid_services_payment',
                'label' => 'Стоимость и оплата (HTML)',
                'name' => 'sved_paid_services_payment',
                'type' => 'wysiwyg',
                'media_upload' => 0,
                'toolbar' => 'basic',
            ],

            // Tab: 📊 Финансы
            [
                'key' => 'field_tab_sved_финансы',
                'label' => '📊 Финансы',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // 9. Финансово-хозяйственная деятельность
            [
                'key' => 'field_sved_finance_volume',
                'label' => 'Объём деятельности (HTML)',
                'name' => 'sved_finance_volume',
                'type' => 'wysiwyg',
                'media_upload' => 0,
                'toolbar' => 'basic',
            ],
            [
                'key' => 'field_sved_finance_plan',
                'label' => 'План (HTML)',
                'name' => 'sved_finance_plan',
                'type' => 'wysiwyg',
                'media_upload' => 0,
                'toolbar' => 'basic',
            ],
            [
                'key' => 'field_sved_finance_requisites',
                'label' => 'Реквизиты (HTML)',
                'name' => 'sved_finance_requisites',
                'type' => 'wysiwyg',
                'media_upload' => 0,
                'toolbar' => 'basic',
            ],
            [
                'key' => 'field_sved_finance_contacts',
                'label' => 'Контакты (HTML)',
                'name' => 'sved_finance_contacts',
                'type' => 'wysiwyg',
                'media_upload' => 0,
                'toolbar' => 'basic',
            ],

            // Tab: 📋 Вакантные места
            [
                'key' => 'field_tab_sved_вакантные_места',
                'label' => '📋 Вакантные места',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // 10. Вакантные места
            [
                'key' => 'field_sved_vacancies',
                'label' => 'Вакантные места',
                'name' => 'sved_vacancies',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => [
                    [
                        'key' => 'field_sved_vac_prog',
                        'label' => 'Программа',
                        'name' => 'program',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_sved_vac_count',
                        'label' => 'Количество мест',
                        'name' => 'count',
                        'type' => 'text',
                    ],
                ],
            ],

            // Tab: 🌍 Международное
            [
                'key' => 'field_tab_sved_международное',
                'label' => '🌍 Международное',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // 11. Международное сотрудничество
            [
                'key' => 'field_sved_international',
                'label' => 'Международное сотрудничество (HTML)',
                'name' => 'sved_international',
                'type' => 'wysiwyg',
                'media_upload' => 0,
                'toolbar' => 'basic',
            ],

            // Tab: 🍽️ Питание
            [
                'key' => 'field_tab_sved_питание',
                'label' => '🍽️ Питание',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // 12. Организация питания
            [
                'key' => 'field_sved_nutrition',
                'label' => 'Организация питания (HTML)',
                'name' => 'sved_nutrition',
                'type' => 'wysiwyg',
                'media_upload' => 0,
                'toolbar' => 'basic',
            ],

            // Tab: 🛡️ Экстремизм
            [
                'key' => 'field_tab_sved_экстремизм',
                'label' => '🛡️ Экстремизм',
                'name' => '',
                'type' => 'tab',
                'placement' => 'top',
            ],
            // 13. Профилактика экстремизма
            [
                'key' => 'field_sved_extremism_content',
                'label' => 'Контент (HTML)',
                'name' => 'sved_extremism_content',
                'type' => 'wysiwyg',
                'media_upload' => 0,
                'toolbar' => 'basic',
            ],
            [
                'key' => 'field_sved_extremism_resources',
                'label' => 'Полезные ресурсы (HTML)',
                'name' => 'sved_extremism_resources',
                'type' => 'wysiwyg',
                'media_upload' => 0,
                'toolbar' => 'basic',
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-svedeniya.php',
                ],
            ],
        ],
        'position' => 'normal',
        'style' => 'default',
    ]);
}

// Отключаем Гутенберг для страниц с ACF и кастомных типов записей
add_filter('use_block_editor_for_post_type', function($use_block_editor, $post_type) {
    // Отключаем для кастомных типов записей с ACF
    if (in_array($post_type, ['event', 'teacher'])) {
        return false;
    }
    if ($post_type === 'page') {
        global $post;
        if ($post) {
            $template = get_page_template_slug($post->ID);
            // Отключаем Гутенберг только для страниц с ACF
            if ($template && in_array($template, ['front-page.php', 'page-o-shkole.php', 'page-prepodavateli.php', 'page-meropriyatiya.php', 'page-kontakty.php', 'page-svedeniya.php'])) {
                return false;
            }
        }
    }
    return $use_block_editor;
}, 10, 2);

// Убираем поддержку editor для event и teacher (ACF поля вместо контента)
add_action('init', function() {
    remove_post_type_support('event', 'editor');
    remove_post_type_support('teacher', 'editor');
}, 100);

// Скрываем стандартный редактор для страниц с ACF (кроме юридических)


add_action('admin_head', function() {
    global $post;
    if ($post && $post->post_type === 'page') {
        $template = get_page_template_slug($post->ID);
        // Скрываем редактор только для страниц с ACF полями
        if ($template && in_array($template, ['front-page.php', 'page-o-shkole.php', 'page-prepodavateli.php', 'page-meropriyatiya.php', 'page-kontakty.php', 'page-svedeniya.php'])) {
            echo '<style>#postdivrich, #wp-content-wrap, #wp-content-editor-tools { display: none !important; }</style>';
        }
    }
});

// Подключаем медиа-скрипты в админке для работы ACF file поля
add_action('admin_enqueue_scripts', function() {
    wp_enqueue_media();
});
