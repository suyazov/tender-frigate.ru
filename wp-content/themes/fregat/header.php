<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.svg" type="image/svg+xml">

	<!-- Preload критических шрифтов -->
	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/UcCO3FwrK3iLTeHuS_nVMrMxCp50SjIw2boKoduKmMEVuLyfMZg.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/nuFvD-vYSZviVYUb_rj3ij__anPXJzDwcbmjWBN2PKdFvUDQ.woff2" as="font" type="font/woff2" crossorigin>

	<!-- Critical CSS (inline) -->
	<style>
	:root{--color-gold:#D4AF37;--color-gold-light:#FBE5A8;--color-gold-dark:#B8860B;--tw-ring-color:transparent;--color-bg:#142125;--color-bg-card:#0d181b;--color-bg-dark:#0a1214;--color-text-primary:#FFFFFF;--color-text-secondary:#E0E0E0;--color-text-muted:#9CA3AF;--glow-sm:0 0 15px rgba(212,175,55,0.15);--glow-md:0 0 25px rgba(212,175,55,0.15);--glow-lg:0 0 35px rgba(212,175,55,0.5);--duration-base:300ms;--radius-xl:1rem;--radius-full:9999px}
	body{font-family:'Inter',-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif;background-color:#142125;color:#E0E0E0;overflow-x:hidden;line-height:1.6;margin:0}
	.text-gold-gradient{background:linear-gradient(135deg,#D4AF37 0%,#FBE5A8 50%,#D4AF37 100%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
	.text-gold{color:#D4AF37}
	.btn-gold{background:linear-gradient(135deg,#D4AF37 0%,#B8860B 100%);color:#000;font-weight:600;cursor:pointer;border:none;border-radius:0.75rem;display:inline-flex;align-items:center;justify-content:center}
	.btn-gold:hover{box-shadow:0 0 35px rgba(212,175,55,0.5);transform:translateY(-2px)}
	.logo-clean{mix-blend-mode:screen;filter:drop-shadow(0 0 5px rgba(212,175,55,0.3))}
	#scroll-progress{position:fixed;top:0;left:0;height:3px;background:linear-gradient(90deg,#D4AF37,#FBE5A8);z-index:9999;transition:width 100ms}
	.geo-pattern{background-image:linear-gradient(rgba(212,175,55,0.03) 1px,transparent 1px),linear-gradient(90deg,rgba(212,175,55,0.03) 1px,transparent 1px);background-size:50px 50px}
	.global-geo{position:fixed;inset:0;pointer-events:none;z-index:0;opacity:0.4}
	.geo-shape{position:absolute;stroke:#D4AF37;stroke-width:1;fill:none;opacity:0.2}
	#back-to-top{position:fixed;bottom:3rem;right:3rem;width:50px;height:50px;border:1px solid #D4AF37;background:rgba(20,33,37,0.9);color:#D4AF37;border-radius:9999px;display:flex;align-items:center;justify-content:center;cursor:pointer;opacity:0;visibility:hidden;z-index:1000}
	#back-to-top.visible{opacity:1;visibility:visible}
	.animate-section{opacity:1;transform:translateY(0)}
	</style>

	<?php wp_head(); ?>
</head>

<body <?php body_class('geo-pattern'); ?>>
<?php wp_body_open(); ?>

<!-- Прогресс бар прокрутки -->
<div id="scroll-progress"></div>

<!-- Кнопка наверх -->
<div id="back-to-top">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
</div>

<!-- Глобальный слой геометрии -->
<div class="global-geo">
    <svg class="geo-shape" style="top: 20%; left: 50%; width: 200px; height: 200px; transform: translate(-50%, -50%); animation-delay: 0s;">
        <path d="M100 10 L190 100 L100 190 L10 100 Z" />
    </svg>
    <svg class="geo-shape" style="top: 40%; left: 10%; width: 150px; height: 150px; animation-delay: 2s;">
        <path d="M150 0 L150 150 L0 75 Z" />
    </svg>
    <svg class="geo-shape" style="top: 60%; right: 10%; width: 150px; height: 150px; animation-delay: 4s;">
        <path d="M0 0 L0 150 L150 75 Z" />
    </svg>
    <svg class="geo-shape" style="bottom: 15%; left: 20%; width: 80px; height: 80px; animation-delay: 1s;">
         <path d="M40 0 L80 40 L40 80 L0 40 Z" />
    </svg>
     <svg class="geo-shape" style="top: 15%; right: 20%; width: 60px; height: 60px; animation-delay: 3s;">
         <path d="M30 0 L60 30 L30 60 L0 30 Z" />
    </svg>
</div>

<!-- Header -->
<header class="fixed w-full top-0 z-50 backdrop-blur-md border-b border-white/10" style="background-color: rgba(20, 33, 37, 0.95);">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-20">
		<a href="<?php echo esc_url(home_url('/')); ?>#hero" rel="home" class="flex items-center gap-3">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp" alt="Логотип Фрегат" class="h-12 w-auto logo-clean" width="100" height="100" fetchpriority="high">
			<div>
				<span class="text-2xl font-light tracking-widest text-gold-gradient">ФРЕГАТ</span>
				<span class="hidden sm:block text-[10px] text-gray-400 tracking-widest uppercase">Тендерное сопровождение</span>
			</div>
		</a>
		<nav class="hidden md:flex items-center gap-8 text-sm text-gray-300">
			<a href="#challenges" class="py-3 hover:text-white transition">Ваши задачи</a>
				<a href="#cases" class="py-3 hover:text-white transition">Кейсы</a>
			<a href="#benefits" class="py-3 hover:text-white transition">Наши услуги</a>
			<a href="#pricing" class="py-3 hover:text-white transition">Стоимость</a>
			<a href="#contact" class="py-3 hover:text-white transition">Контакты</a>
			<a href="#quiz" class="ml-4 btn-gold px-6 py-3 rounded text-sm tracking-wide">Связаться</a>
		</nav>
		<button class="mobile-menu-toggle md:hidden" aria-label="Меню">
			<span class="hamburger-line"></span>
			<span class="hamburger-line"></span>
			<span class="hamburger-line"></span>
		</button>
	</div>
	<!-- Мобильное меню -->
	<div class="nav-links hidden flex-col absolute top-full left-0 right-0 backdrop-blur-md border-b border-white/10 md:hidden z-50" style="background-color: rgba(20, 33, 37, 0.98);">
		<nav class="flex flex-col text-sm text-gray-300 px-6 py-2">
			<a href="#challenges" class="py-3 border-b border-white/10 hover:text-white transition">Ваши задачи</a>
				<a href="#cases" class="py-3 border-b border-white/10 hover:text-white transition">Кейсы</a>
			<a href="#benefits" class="py-3 border-b border-white/10 hover:text-white transition">Наши услуги</a>
			<a href="#pricing" class="py-3 border-b border-white/10 hover:text-white transition">Стоимость</a>
			<a href="#contact" class="py-3 hover:text-white transition">Контакты</a>
		</nav>
		<div class="px-6 pb-4 pt-2">
			<a href="#quiz" class="btn-gold px-6 py-3 rounded text-sm tracking-wide block text-center">Связаться с нами</a>
		</div>
	</div>
</header>
