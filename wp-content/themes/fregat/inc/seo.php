<?php
/**
 * SEO оптимизация для темы Fregat Tender
 * Мета-теги, Open Graph, JSON-LD, sitemap, robots.txt
 */

// ==========================================
// 1. МЕТА-ТЕГИ: title, description, canonical
// ==========================================

remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');

function fregat_seo_title($title) {
    if (is_front_page()) {
        return 'ООО «ФРЕГАТ» — Тендерное сопровождение под ключ | Госзакупки 44-ФЗ и 223-ФЗ';
    }
    if (is_404()) {
        return 'Страница не найдена — ООО «ФРЕГАТ»';
    }
    return $title . ' — ООО «ФРЕГАТ»';
}
add_filter('document_title_parts', function($parts) {
    $parts['title'] = fregat_seo_title($parts['title']);
    unset($parts['tagline']);
    unset($parts['site']);
    return $parts;
}, 10, 1);

function fregat_meta_description() {
    $desc = '';

    if (is_front_page()) {
        $desc = 'ООО «ФРЕГАТ» — тендерное сопровождение под ключ. Профессиональная юридическая и тендерная поддержка бизнеса. Абонентское сопровождение от 50 000 ₽/мес. Тел: +7 (934) 070-99-90';
    } elseif (is_singular('page')) {
        $desc = get_the_excerpt();
    }

    if ($desc) {
        echo '<meta name="description" content="' . esc_attr(wp_strip_all_tags($desc)) . '">' . "\n";
    }
}
add_action('wp_head', 'fregat_meta_description', 1);

// ==========================================
// 2. OPEN GRAPH
// ==========================================

function fregat_open_graph() {
    $url = home_url('/');
    $title = wp_get_document_title();
    $desc = 'Тендерное сопровождение под ключ от ООО «ФРЕГАТ». Юридическая поддержка, поиск закупок, подготовка заявок. Тел: +7 (934) 070-99-90';
    $image = get_template_directory_uri() . '/assets/images/logo.webp';

    echo "\n<!-- Open Graph -->\n";
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta property="og:title" content="' . esc_attr($title) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($desc) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url($url) . '">' . "\n";
    echo '<meta property="og:site_name" content="ООО «ФРЕГАТ»">' . "\n";
    echo '<meta property="og:locale" content="ru_RU">' . "\n";
    echo '<meta property="og:image" content="' . esc_url($image) . '">' . "\n";
    echo '<meta property="og:image:width" content="1200">' . "\n";
    echo '<meta property="og:image:height" content="630">' . "\n";

    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr($title) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr($desc) . '">' . "\n";
    echo '<meta name="twitter:image" content="' . esc_url($image) . '">' . "\n";
}
add_action('wp_head', 'fregat_open_graph', 2);

// ==========================================
// 3. JSON-LD STRUCTURED DATA
// ==========================================

function fregat_json_ld() {
    $schemas = [];

    $schemas[] = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'ООО «ФРЕГАТ»',
        'url' => home_url('/'),
        'logo' => get_template_directory_uri() . '/assets/images/logo.webp',
        'description' => 'Тендерное сопровождение и юридическая поддержка бизнеса. Поиск закупок, подготовка заявок, защита интересов в УФАС.',
        'email' => 'Frigate26@yandex.ru',
        'telephone' => '+7 (934) 070-99-90',
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'telephone' => '+7-934-070-99-90',
            'contactType' => 'customer service',
            'availableLanguage' => 'Russian',
        ],
    ];

    if (is_front_page()) {
        $schemas[] = [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'name' => 'Тендерное сопровождение под ключ',
            'description' => 'Профессиональная юридическая и тендерная поддержка бизнеса. Поиск закупок, подготовка заявок, сопровождение контрактов, защита в УФАС.',
            'provider' => [
                '@type' => 'Organization',
                'name' => 'ООО «ФРЕГАТ»',
                'url' => home_url('/'),
            ],
            'areaServed' => 'RU',
            'serviceType' => 'Тендерное сопровождение',
            'offers' => [
                [
                    '@type' => 'Offer',
                    'name' => 'Абонентское сопровождение',
                    'price' => '50000',
                    'priceCurrency' => 'RUB',
                    'description' => '50 000 ₽/мес — полный цикл тендерного сопровождения',
                ],
                [
                    '@type' => 'Offer',
                    'name' => 'Вознаграждение по выигранным контрактам',
                    'priceCurrency' => 'RUB',
                    'description' => '2% от контракта до 50 млн ₽, 1.5% от 50 до 100 млн ₽, 1% свыше 100 млн ₽',
                ],
            ],
        ];
    }

    if (!empty($schemas)) {
        echo "\n<!-- JSON-LD Structured Data -->\n";
        foreach ($schemas as $schema) {
            echo '<script type="application/ld+json">' . "\n";
            echo wp_json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . "\n";
            echo '</script>' . "\n";
        }
    }
}
add_action('wp_head', 'fregat_json_ld', 3);

// ==========================================
// 4. SITEMAP.XML
// ==========================================

function fregat_sitemap() {
    $items = [];
    $items[] = [
        'loc' => home_url('/'),
        'lastmod' => date('c'),
        'changefreq' => 'weekly',
        'priority' => '1.0',
    ];

    $policy = get_page_by_path('politika-konfidentsialnosti');
    if ($policy) {
        $items[] = [
            'loc' => get_permalink($policy),
            'lastmod' => get_the_modified_date('c', $policy),
            'changefreq' => 'monthly',
            'priority' => '0.3',
        ];
    }

    header('Content-Type: application/xml; charset=UTF-8');
    echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    foreach ($items as $item) {
        echo "  <url>\n";
        echo "    <loc>" . esc_url($item['loc']) . "</loc>\n";
        echo "    <lastmod>" . esc_html($item['lastmod']) . "</lastmod>\n";
        echo "    <changefreq>" . esc_html($item['changefreq']) . "</changefreq>\n";
        echo "    <priority>" . esc_html($item['priority']) . "</priority>\n";
        echo "  </url>\n";
    }
    echo '</urlset>';
    exit;
}
add_action('parse_request', function($wp) {
    if ($wp->request === 'sitemap.xml' || $wp->request === 'sitemap') {
        fregat_sitemap();
    }
});

add_filter('wp_sitemaps_enabled', '__return_false');

// ==========================================
// 5. ROBOTS.TXT
// ==========================================

function fregat_robots_txt($output) {
    $site_url = home_url('/');
    $output = "User-agent: *\n";
    $output .= "Disallow: /wp-admin/\n";
    $output .= "Disallow: /wp-includes/\n";
    $output .= "Disallow: /wp-content/plugins/\n";
    $output .= "Disallow: /wp-content/cache/\n";
    $output .= "Disallow: /trackback/\n";
    $output .= "Disallow: /?s=\n";
    $output .= "Disallow: *?s=\n";
    $output .= "Allow: /wp-admin/admin-ajax.php\n";
    $output .= "Allow: /wp-content/themes/fregat/assets/\n";
    $output .= "\n";
    $output .= "# AI crawlers — explicit allow\n";
    $output .= "User-agent: OAI-SearchBot\nAllow: /\n\n";
    $output .= "User-agent: GPTBot\nAllow: /\n\n";
    $output .= "User-agent: ChatGPT-User\nAllow: /\n\n";
    $output .= "User-agent: PerplexityBot\nAllow: /\n\n";
    $output .= "User-agent: ClaudeBot\nAllow: /\n\n";
    $output .= "User-agent: Google-Extended\nAllow: /\n\n";
    $output .= "User-agent: Bytespider\nAllow: /\n\n";
    $output .= "User-agent: Applebot-Extended\nAllow: /\n\n";
    $output .= "Sitemap: {$site_url}sitemap.xml\n";
    return $output;
}
add_filter('robots_txt', 'fregat_robots_txt', 10, 1);

// ==========================================
// 6. LLMS.TXT
// ==========================================

function fregat_llms_txt() {
    $site_url = home_url('/');
    header('Content-Type: text/plain; charset=UTF-8');
    echo <<<TXT
# ООО «ФРЕГАТ» — Тендерное сопровождение
> Профессиональная юридическая и тендерная поддержка бизнеса. Поиск закупок, подготовка заявок, защита в УФАС.

## Услуги
- Тендерное сопровождение под ключ
- Поиск выгодных закупок на всех площадках
- Подготовка и подача заявок без ошибок
- Сопровождение контрактов
- Юридическая защита в УФАС и суде

## Стоимость
- **Абонентское сопровождение**: 50 000 ₽/мес
- **Вознаграждение по контрактам**: до 50 млн — 2%, 50-100 млн — 1.5%, свыше 100 млн — 1%

## Контакты
- Телефон: +7 (934) 070-99-90, +7 (923) 235-22-47
- Email: Frigate26@yandex.ru
- Сайт: {$site_url}
TXT;
    exit;
}
add_action('parse_request', function($wp) {
    if ($wp->request === 'llms.txt' || $wp->request === 'llms') {
        fregat_llms_txt();
    }
});

// ==========================================
// 7. NOINDEX для служебных страниц
// ==========================================

function fregat_noindex_pages() {
    if (is_404()) {
        echo '<meta name="robots" content="noindex, follow">' . "\n";
    }
}
add_action('wp_head', 'fregat_noindex_pages', 0);

// ==========================================
// 8. Canonical
// ==========================================

function fregat_canonical() {
    if (is_singular() || is_page()) {
        echo '<link rel="canonical" href="' . esc_url(get_permalink()) . '">' . "\n";
    } elseif (is_front_page()) {
        echo '<link rel="canonical" href="' . esc_url(home_url('/')) . '">' . "\n";
    }
}
add_action('wp_head', 'fregat_canonical', 1);
remove_action('wp_head', 'rel_canonical');
