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
		<nav class="hidden md:flex items-center gap-6 text-sm text-gray-300">
			<a href="#challenges" class="py-3 hover:text-white transition">Ваши задачи</a>
			<a href="#cases" class="py-3 hover:text-white transition">Кейсы</a>
			<a href="#benefits" class="py-3 hover:text-white transition">Услуги</a>
			<a href="#pricing" class="py-3 hover:text-white transition">Стоимость</a>
			<div class="flex items-center gap-3 ml-2">
				<a href="tel:+79340709990" class="hover:text-gold transition" title="Позвонить"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></a>
				<a href="https://wa.me/79340709990" target="_blank" class="hover:text-green-400 transition" title="WhatsApp"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></a>
				<a href="https://t.me/ffaridaff" target="_blank" class="hover:text-blue-400 transition" title="Telegram"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.479.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg></a>
			<a href="https://max.ru/u/f9LHodD0cOJzOILurUeSDdypZoYZ1kHRhnu723l27A2CH5GKL9SeYmev4zY" target="_blank" class="hover:text-purple-400 transition" title="Макс"><svg class="w-4 h-4" viewBox="0 0 720 720" fill="currentColor"><path d="M350.4,9.6C141.8,20.5,4.1,184.1,12.8,390.4c3.8,90.3,40.1,168,48.7,253.7,2.2,22.2-4.2,49.6,21.4,59.3,31.5,11.9,79.8-8.1,106.2-26.4,9-6.1,17.6-13.2,24.2-22,27.3,18.1,53.2,35.6,85.7,43.4,143.1,34.3,299.9-44.2,369.6-170.3C799.6,291.2,622.5-4.6,350.4,9.6h0ZM269.4,504c-11.3,8.8-22.2,20.8-34.7,27.7-18.1,9.7-23.7-.4-30.5-16.4-21.4-50.9-24-137.6-11.5-190.9,16.8-72.5,72.9-136.3,150-143.1,78-6.9,150.4,32.7,183.1,104.2,72.4,159.1-112.9,316.2-256.4,218.6h0Z"/></svg></a>
			</div>
			<a href="#quiz" class="ml-2 btn-gold px-6 py-3 rounded text-sm tracking-wide">Связаться</a>
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
			<a href="#benefits" class="py-3 border-b border-white/10 hover:text-white transition">Услуги</a>
			<a href="#pricing" class="py-3 border-b border-white/10 hover:text-white transition">Стоимость</a>
		</nav>
		<div class="px-6 pb-4 pt-2 flex flex-col gap-2">
			<a href="#quiz" class="btn-gold px-6 py-3 rounded text-sm tracking-wide block text-center">Подобрать формат</a>
			<div class="flex gap-3 justify-center pt-1">
				<a href="tel:+79340709990" class="flex items-center justify-center w-10 h-10 rounded-lg border border-white/10 text-gray-300 hover:text-gold hover:border-gold/30 transition"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></a>
				<a href="https://wa.me/79340709990" target="_blank" class="flex items-center justify-center w-10 h-10 rounded-lg border border-white/10 text-gray-300 hover:text-green-400 hover:border-green-400/30 transition"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></a>
				<a href="https://t.me/ffaridaff" target="_blank" class="flex items-center justify-center w-10 h-10 rounded-lg border border-white/10 text-gray-300 hover:text-blue-400 hover:border-blue-400/30 transition"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.479.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg></a>
					<a href="https://max.ru/u/f9LHodD0cOJzOILurUeSDdypZoYZ1kHRhnu723l27A2CH5GKL9SeYmev4zY" target="_blank" class="flex items-center justify-center w-10 h-10 rounded-lg border border-white/10 text-gray-300 hover:text-purple-400 hover:border-purple-400/30 transition" title="Макс"><svg class="w-5 h-5" viewBox="0 0 720 720" fill="currentColor"><path d="M350.4,9.6C141.8,20.5,4.1,184.1,12.8,390.4c3.8,90.3,40.1,168,48.7,253.7,2.2,22.2-4.2,49.6,21.4,59.3,31.5,11.9,79.8-8.1,106.2-26.4,9-6.1,17.6-13.2,24.2-22,27.3,18.1,53.2,35.6,85.7,43.4,143.1,34.3,299.9-44.2,369.6-170.3C799.6,291.2,622.5-4.6,350.4,9.6h0ZM269.4,504c-11.3,8.8-22.2,20.8-34.7,27.7-18.1,9.7-23.7-.4-30.5-16.4-21.4-50.9-24-137.6-11.5-190.9,16.8-72.5,72.9-136.3,150-143.1,78-6.9,150.4,32.7,183.1,104.2,72.4,159.1-112.9,316.2-256.4,218.6h0Z"/></svg></a>			</div>
		</div>
	</div>
</header>
