<?php
/**
 * Template Part: Hero Section
 *
 * @package Fregat
 */
?>

<!-- Hero Section -->
<section class="hero-with-expert relative min-h-screen flex items-center pt-20 overflow-hidden bg-[#142125]">
	<div class="max-w-7xl mx-auto px-6 relative z-10 py-20 w-full">
		<div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-start">

			<!-- Левая колонка: Фарида -->
			<div class="relative order-2 lg:order-1">
				<div class="relative">
					<div class="absolute inset-0 bg-gradient-to-tr from-gold/20 to-transparent rounded-2xl blur-2xl"></div>
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/farida-640.webp"
						alt="Фарида Максумова — директор ООО «ФРЕГАТ»"
						class="relative w-full max-w-md mx-auto lg:mx-0 rounded-2xl shadow-2xl shadow-gold/20 object-cover aspect-[2/3]"
						width="640" height="960" loading="eager" decoding="async"
					>
					<div class="absolute -bottom-6 -right-6 lg:right-12 bg-[#0d181b] border border-gold rounded-xl p-4 shadow-xl max-w-[200px]">
						<div class="text-gold-gradient text-2xl font-bold">200+</div>
						<div class="text-gray-400 text-xs mt-1">побед в тендерах</div>
					</div>
				</div>

				<div class="mt-12 lg:mt-16">
					<div class="flex items-center gap-2 mb-3">
						<div class="h-px bg-gold flex-1"></div>
						<span class="text-gold text-xs uppercase tracking-widest">Основатель и директор</span>
						<div class="h-px bg-gold flex-1"></div>
					</div>
					<p class="text-2xl lg:text-3xl font-bold text-white mb-2">Фарида Максумова</p>
					<p class="text-gray-400 mb-4">Директор ООО «ФРЕГАТ»</p>
					<p class="text-gray-300 text-sm leading-relaxed">
						Основатель компании по участию в тендерах. 200+ побед в тендерах.
						3 высших образования + повышение квалификации в РАНХиГС (2023).
						Обеспечивает профессиональное сопровождение закупок под ключ.
					</p>
				</div>
			</div>

			<!-- Правая колонка: Контент -->
			<div class="order-1 lg:order-2">
				<div class="mb-6 inline-flex items-center gap-2 px-4 py-2 bg-white/5 border border-white/10 rounded-full flex-wrap">
					<div class="w-2 h-2 bg-gold rounded-full animate-pulse flex-shrink-0"></div>
					<span class="text-[10px] sm:text-xs uppercase tracking-[0.2em] text-gray-400">
						200+ выигранных тендеров
					</span>
				</div>

				<h1 class="text-3xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6 text-white">
					Выигрываем<br>
					<span class="font-serif italic text-gold-gradient">тендеры</span><br>
					за вас
				</h1>

				<p class="text-lg md:text-xl text-gray-300 mb-10 max-w-xl">
					Берём на себя весь цикл — от поиска закупок до подписания контракта. Вы получаете прибыль, мы — заботу о документах.
				</p>

				<div class="flex flex-col sm:flex-row gap-4 mb-12 items-center">
					<a href="#quiz" class="btn-gold flex-1 px-12 py-4 rounded-lg text-lg tracking-wide font-semibold shadow-lg shadow-gold/20 hover:shadow-gold/30 transition-all text-center justify-center">
						Подобрать формат
					</a>
				</div>

				<!-- Статистика -->
				<div class="bg-[#0d181b] border border-gold/30 rounded-xl p-6 lg:p-8">
					<div class="grid grid-cols-2 gap-6">
						<div class="text-center lg:text-left">
							<div class="text-xl sm:text-3xl lg:text-4xl font-bold text-gold-gradient">50 000 ₽</div>
							<div class="text-gray-400 text-[10px] sm:text-xs mt-1 uppercase tracking-wide leading-tight">Абонентская плата / мес</div>
						</div>
						<div class="text-center lg:text-left">
							<div class="text-xl sm:text-3xl lg:text-4xl font-bold text-gold-gradient">от 1%</div>
							<div class="text-gray-400 text-[10px] sm:text-xs mt-1 uppercase tracking-wide leading-tight">Вознаграждение за контракт</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
