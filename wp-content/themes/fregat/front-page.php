<?php
/**
 * Template Name: Главная
 *
 * @package Fregat
 */

get_header();
?>

		<main id="primary" class="site-main">
			<?php while (have_posts()) : the_post(); ?>

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

			<!-- Проблемы -->
				<section id="challenges" class="py-24 border-t border-white/5 bg-[#0d181b]">
					<div class="max-w-7xl mx-auto px-6">
						<div class="text-center mb-16">
							<h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
								Пока вы сомневаетесь — <span class="text-gold-gradient">конкуренты забирают контракты</span>
							</h2>
							<p class="text-gray-400 max-w-2xl mx-auto">Каждый месяц государство размещает тысячи закупок. Кто-то их выигрывает. Почему не вы?</p>
						</div>

						<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
							<div class="bg-[#142125] border border-white/10 rounded-xl p-6 hover:border-gold/30 transition">
								<div class="w-12 h-12 bg-gold/20 rounded-lg flex items-center justify-center mb-4">
									<svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
								</div>
								<h3 class="font-semibold mb-2 text-white">Заявки отклоняют из-за ошибок</h3>
								<p class="text-gray-400 text-sm">Одна неточность в документах — и заявка отклонена. Контракт уходит конкуренту, а вы теряете время и деньги на подготовку</p>
							</div>

							<div class="bg-[#142125] border border-white/10 rounded-xl p-6 hover:border-gold/30 transition">
								<div class="w-12 h-12 bg-gold/20 rounded-lg flex items-center justify-center mb-4">
									<svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
								</div>
								<h3 class="font-semibold mb-2 text-white">Выгодные закупки проходят мимо</h3>
								<p class="text-gray-400 text-sm">Закупки появляются каждый день на десятках площадок. Без постоянного мониторинга вы упускаете самые выгодные</p>
							</div>

							<div class="bg-[#142125] border border-white/10 rounded-xl p-6 hover:border-gold/30 transition">
								<div class="w-12 h-12 bg-gold/20 rounded-lg flex items-center justify-center mb-4">
									<svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
								</div>
								<h3 class="font-semibold mb-2 text-white">Работаете в минус, не подозревая об этом</h3>
								<p class="text-gray-400 text-sm">Неправильный расчёт себестоимости — и выигранный контракт превращается в убыток. Без эксперта легко промахнуться</p>
							</div>

							<div class="bg-[#142125] border border-white/10 rounded-xl p-6 hover:border-gold/30 transition">
								<div class="w-12 h-12 bg-gold/20 rounded-lg flex items-center justify-center mb-4">
									<svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>
								</div>
								<h3 class="font-semibold mb-2 text-white">Законы меняются — штрафы растут</h3>
								<p class="text-gray-400 text-sm">Законодательство о закупках обновляется постоянно. Одна ошибка — жалоба в УФАС или попадание в РНП</p>
							</div>

							<div class="bg-[#142125] border border-white/10 rounded-xl p-6 hover:border-gold/30 transition">
								<div class="w-12 h-12 bg-gold/20 rounded-lg flex items-center justify-center mb-4">
									<svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
								</div>
								<h3 class="font-semibold mb-2 text-white">Не умеете защищаться в УФАС</h3>
								<p class="text-gray-400 text-sm">Жалоба от конкурента — и вы теряете контракт. Без юридической поддержки ваши интересы не защищены</p>
							</div>

							<div class="bg-[#142125] border border-white/10 rounded-xl p-6 hover:border-gold/30 transition">
								<div class="w-12 h-12 bg-gold/20 rounded-lg flex items-center justify-center mb-4">
									<svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
								</div>
								<h3 class="font-semibold mb-2 text-white">Тендерный отдел — дорого</h3>
								<p class="text-gray-400 text-sm">Найм, обучение, зарплаты. Отдельный специалист обойдётся от 80 000 ₽/мес — без гарантии результата</p>
							</div>
						</div>

						<!-- Потери -->
						<div class="mt-40 max-w-4xl mx-auto">
							<h3 class="text-xl font-bold mb-10 mt-14 text-center text-white">Цена бездействия — вот что вы теряете каждый месяц:</h3>
							<div class="grid grid-cols-2 md:grid-cols-4 gap-6">
								<div class="bg-[#0d181b] border border-gold/20 rounded-xl p-5 text-center">
									<div class="text-4xl md:text-5xl font-bold text-gold-gradient mb-2">&infin;</div>
									<div class="text-white font-semibold text-sm mb-2">Упущенных контрактов</div>
									<p class="text-gray-500 text-xs leading-relaxed">Каждый день выходят закупки в вашей сфере &mdash; их забирают другие</p>
								</div>
								<div class="bg-[#0d181b] border border-gold/20 rounded-xl p-5 text-center">
									<div class="text-4xl md:text-5xl font-bold text-gold-gradient mb-2">80&nbsp;000+&nbsp;&#8381;</div>
									<div class="text-white font-semibold text-sm mb-2">Стоимость ошибки</div>
									<p class="text-gray-500 text-xs leading-relaxed">Средний штраф за нарушение закупочного законодательства</p>
								</div>
								<div class="bg-[#0d181b] border border-gold/20 rounded-xl p-5 text-center">
									<div class="text-4xl md:text-5xl font-bold text-gold-gradient mb-2">2&nbsp;года</div>
									<div class="text-white font-semibold text-sm mb-2">Риск блокировки</div>
									<p class="text-gray-500 text-xs leading-relaxed">Попадание в РНП &mdash; компания не сможет участвовать в закупках</p>
								</div>
								<div class="bg-[#0d181b] border border-gold/20 rounded-xl p-5 text-center">
									<div class="text-4xl md:text-5xl font-bold text-gold-gradient mb-2">0</div>
									<div class="text-white font-semibold text-sm mb-2">Побед без поддержки</div>
									<p class="text-gray-500 text-xs leading-relaxed">Компании без опыта уходят из тендеров после первой неудачи</p>
								</div>
							</div>
							<div class="mt-12 text-center">
								<a href="tel:+79340709990" class="inline-flex items-center gap-3 btn-gold py-4 px-10 rounded-lg text-lg tracking-wide font-semibold shadow-lg shadow-gold/20">
									<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
									Позвонить: +7 (934) 070-99-90
								</a>
							</div>
						</div>
					</div>
				</section>

				<!-- Решение: ООО ФРЕГАТ -->
			<section class="py-24 border-t border-white/5">
				<div class="max-w-7xl mx-auto px-6">
					<div class="text-center mb-16">
						<h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
							ООО «ФРЕГАТ» берёт <span class="text-gold-gradient">тендерную работу</span> на себя
						</h2>
						<p class="text-gray-400 max-w-2xl mx-auto">Мы помогаем компаниям получать государственные и коммерческие контракты без необходимости содержать собственный тендерный отдел.</p>
					</div>

					<div class="bg-[#0d181b] border border-gold/30 rounded-xl p-8 max-w-3xl mx-auto text-center mb-16">
						<p class="text-2xl font-bold text-gold-gradient mb-2">Вы занимаетесь бизнесом —</p>
						<p class="text-2xl font-bold text-white">мы занимаемся закупками.</p>
					</div>

					<!-- Пошаговый путь -->
					<h3 class="text-2xl font-bold text-center mb-12 text-white">Как мы работаем</h3>
					<div class="grid md:grid-cols-4 gap-6">
						<div class="relative h-full">
							<div class="bg-[#0d181b] border border-gold/30 rounded-xl p-6 text-center h-full flex flex-col">
								<div class="w-12 h-12 bg-gold/20 rounded-full flex items-center justify-center mx-auto mb-4">
									<span class="text-2xl font-bold text-gold">1</span>
								</div>
								<h4 class="text-lg font-semibold text-white mb-2">Поиск закупок</h4>
								<p class="text-gray-400 text-sm">Находим выгодные тендеры для вашей компании</p>
							</div>
							<div class="hidden md:block absolute top-1/2 -right-3 transform -translate-y-1/2 text-gold/30">
								<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
							</div>
						</div>
						<div class="relative h-full">
							<div class="bg-[#0d181b] border border-gold/30 rounded-xl p-6 text-center h-full flex flex-col">
								<div class="w-12 h-12 bg-gold/20 rounded-full flex items-center justify-center mx-auto mb-4">
									<span class="text-2xl font-bold text-gold">2</span>
								</div>
								<h4 class="text-lg font-semibold text-white mb-2">Подготовка заявки</h4>
								<p class="text-gray-400 text-sm">Формируем безошибочную документацию</p>
							</div>
							<div class="hidden md:block absolute top-1/2 -right-3 transform -translate-y-1/2 text-gold/30">
								<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
							</div>
						</div>
						<div class="relative h-full">
							<div class="bg-[#0d181b] border border-gold/30 rounded-xl p-6 text-center h-full flex flex-col">
								<div class="w-12 h-12 bg-gold/20 rounded-full flex items-center justify-center mx-auto mb-4">
									<span class="text-2xl font-bold text-gold">3</span>
								</div>
								<h4 class="text-lg font-semibold text-white mb-2">Выигрыш контракта</h4>
								<p class="text-gray-400 text-sm">Получаем контракт и защищаем интересы</p>
							</div>
							<div class="hidden md:block absolute top-1/2 -right-3 transform -translate-y-1/2 text-gold/30">
								<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>
							</div>
						</div>
						<div class="h-full">
							<div class="bg-[#0d181b] border border-gold/30 rounded-xl p-6 text-center h-full flex flex-col">
								<div class="w-12 h-12 bg-gold/20 rounded-full flex items-center justify-center mx-auto mb-4">
									<span class="text-2xl font-bold text-gold">4</span>
								</div>
								<h4 class="text-lg font-semibold text-white mb-2">Результат</h4>
								<p class="text-gray-400 text-sm">Вы получаете контракт и прибыль</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Что вы получаете -->
			<section id="benefits" class="py-24 border-t border-white/5 bg-[#0d181b]">
				<div class="max-w-7xl mx-auto px-6">
					<h2 class="text-3xl md:text-4xl font-bold text-center mb-4 text-white">
						Что получает <span class="text-gold-gradient">ваша компания</span>
					</h2>
					<p class="text-center text-gray-400 mb-12">Всё необходимое для уверенной работы в госзакупках</p>

					<div class="grid md:grid-cols-3 gap-6">
						<div class="bg-[#142125] border border-white/10 rounded-xl p-6 text-center hover:border-gold/30 transition">
							<div class="w-12 h-12 bg-gold/20 rounded-lg flex items-center justify-center mx-auto mb-4">
								<svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
							</div>
							<h3 class="font-semibold text-white mb-2">Постоянный поиск закупок</h3>
							<p class="text-gray-400 text-sm">Непрерывный мониторинг всех площадок для поиска выгодных тендеров</p>
						</div>
						<div class="bg-[#142125] border border-white/10 rounded-xl p-6 text-center hover:border-gold/30 transition">
							<div class="w-12 h-12 bg-gold/20 rounded-lg flex items-center justify-center mx-auto mb-4">
								<svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
							</div>
							<h3 class="font-semibold text-white mb-2">Нивелирование рисков</h3>
							<p class="text-gray-400 text-sm">Исключаем риск отклонения заявок благодаря тщательной проверке</p>
						</div>
						<div class="bg-[#142125] border border-white/10 rounded-xl p-6 text-center hover:border-gold/30 transition">
							<div class="w-12 h-12 bg-gold/20 rounded-lg flex items-center justify-center mx-auto mb-4">
								<svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
							</div>
							<h3 class="font-semibold text-white mb-2">Расчёт рентабельности</h3>
							<p class="text-gray-400 text-sm">Помогаем правильно рассчитать себестоимость, чтобы контракт приносил прибыль</p>
						</div>
						<div class="bg-[#142125] border border-white/10 rounded-xl p-6 text-center hover:border-gold/30 transition">
							<div class="w-12 h-12 bg-gold/20 rounded-lg flex items-center justify-center mx-auto mb-4">
								<svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
							</div>
							<h3 class="font-semibold text-white mb-2">Полное сопровождение</h3>
							<p class="text-gray-400 text-sm">От поиска закупки до заключения контракта — ведём весь процесс</p>
						</div>
						<div class="bg-[#142125] border border-white/10 rounded-xl p-6 text-center hover:border-gold/30 transition">
							<div class="w-12 h-12 bg-gold/20 rounded-lg flex items-center justify-center mx-auto mb-4">
								<svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
							</div>
							<h3 class="font-semibold text-white mb-2">Юридическая защита интересов</h3>
							<p class="text-gray-400 text-sm">Профессиональная защита в УФАС и суде, представительство ваших интересов на всех этапах закупочного процесса</p>
						</div>
						<div class="bg-[#142125] border border-white/10 rounded-xl p-6 text-center hover:border-gold/30 transition">
								<div class="w-12 h-12 bg-gold/20 rounded-lg flex items-center justify-center mx-auto mb-4">
									<svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
								</div>
								<h3 class="font-semibold text-white mb-2">Персональный менеджер</h3>
								<p class="text-gray-400 text-sm">Закреплённый специалист, который знает специфику вашего бизнеса и всегда на связи</p>
							</div>
					</div>
				</div>
			</section>


			<!-- Стоимость -->
			<section id="pricing" class="py-24 border-t border-white/5">
				<div class="max-w-7xl mx-auto px-6">
					<h2 class="text-3xl md:text-4xl font-bold text-center mb-4 text-white">
						Стоимость <span class="text-gold-gradient">услуг</span>
					</h2>
					<p class="text-center text-gray-400 mb-16 max-w-2xl mx-auto">Прозрачные условия сотрудничества. Без скрытых платежей.</p>

					<div class="grid md:grid-cols-2 gap-6">
						<!-- Абонентское сопровождение -->
						<div class="bg-[#0d181b] border-2 border-gold rounded-xl p-8 relative flex flex-col">
							<div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-gold text-black px-4 py-1 text-xs font-bold uppercase rounded-full">Рекомендуем</div>
							<div class="flex items-center gap-2 text-gold-gradient text-sm font-semibold uppercase tracking-wider mb-4">
								<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
								Абонентское сопровождение
							</div>
							<div class="mb-6">
								<span class="text-5xl font-bold text-gold-gradient">50 000 ₽</span>
								<span class="text-gray-400 text-lg ml-2">/мес</span>
							</div>
							<p class="text-gray-400 text-sm mb-6">Фиксированная оплата за полный цикл сопровождения</p>
							<ul class="space-y-3 mb-8 text-sm text-gray-300 flex-1">
								<li class="flex items-center gap-2"><svg class="w-4 h-4 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Постоянный поиск выгодных закупок</li>
								<li class="flex items-center gap-2"><svg class="w-4 h-4 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Подготовка и подача заявок</li>
								<li class="flex items-center gap-2"><svg class="w-4 h-4 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Сопровождение закупок</li>
								<li class="flex items-center gap-2"><svg class="w-4 h-4 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Юридическая поддержка</li>
								<li class="flex items-center gap-2"><svg class="w-4 h-4 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Помощь в расчёте рентабельности</li>
							</ul>
							<a href="#quiz" class="btn-gold block text-center w-full py-3 rounded-lg font-medium">Подобрать формат</a>
						</div>

						<!-- Вознаграждение по контрактам -->
						<div class="bg-[#0d181b] border border-white/10 rounded-xl p-8 flex flex-col">
							<div class="flex items-center gap-2 text-gray-400 text-sm font-semibold uppercase tracking-wider mb-4">
								<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A2 2 0 013 12V7a4 4 0 014-4z"/></svg>
								Вознаграждение по выигранным контрактам
							</div>
							<p class="text-gray-400 text-sm mb-6">Платите только за результат — когда контракт уже ваш</p>
							<div class="flex-1 mb-6">
								<div class="overflow-hidden rounded-xl border border-white/10">
									<table class="w-full text-sm">
										<thead>
											<tr class="bg-[#142125]">
												<th class="text-left py-3 px-4 text-gray-400 font-medium uppercase text-xs tracking-wider">Стоимость контракта</th>
												<th class="text-right py-3 px-4 text-gray-400 font-medium uppercase text-xs tracking-wider">Вознаграждение</th>
											</tr>
										</thead>
										<tbody>
											<tr class="border-t border-white/5">
												<td class="py-4 px-4 text-white">до 50 млн ₽</td>
												<td class="py-4 px-4 text-right font-bold text-gold">2%</td>
											</tr>
											<tr class="border-t border-white/5">
												<td class="py-4 px-4 text-white">50 — 100 млн ₽</td>
												<td class="py-4 px-4 text-right font-bold text-gold">1,5%</td>
											</tr>
											<tr class="border-t border-white/5">
												<td class="py-4 px-4 text-white">свыше 100 млн ₽</td>
												<td class="py-4 px-4 text-right font-bold text-gold">1%</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<a href="#quiz" class="border border-gold text-gold block text-center w-full py-3 rounded-lg font-medium hover:bg-gold hover:text-black transition">Подобрать формат</a>
						</div>
					</div>

					<!-- Не входит -->
					<div class="mt-12 bg-[#142125] border border-white/10 rounded-xl p-6 max-w-2xl mx-auto">
						<div class="flex items-center gap-2 mb-4">
							<svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
							<h3 class="font-semibold text-gray-300">В стоимость НЕ входит:</h3>
						</div>
						<ul class="space-y-2 text-sm text-gray-400">
							<li class="flex items-center gap-2"><svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>Участие представителей ООО «ФРЕГАТ» в заседаниях</li>
							<li class="flex items-center gap-2"><svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>Бухгалтерское сопровождение закупок</li>
							<li class="flex items-center gap-2"><svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>Услуги, не относящиеся к тендерному сопровождению</li>
						</ul>
					</div>
				</div>
			</section>

			<!-- Почему выбирают нас -->
			<section id="advantages" class="py-24 border-t border-white/5 bg-[#0d181b]">
				<div class="max-w-7xl mx-auto px-6">
					<h2 class="text-3xl md:text-4xl font-bold text-center mb-16 text-white">
						Почему выбирают <span class="text-gold-gradient">ООО «ФРЕГАТ»</span>
					</h2>

					<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
						<div class="text-center p-6 border border-gold/30 rounded-xl bg-[#142125] transition duration-300">
							<div class="w-16 h-16 mx-auto mb-4 border border-gold rounded-full flex items-center justify-center">
								<svg class="w-8 h-8 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
							</div>
							<h3 class="font-semibold mb-2 text-white">Экономия времени</h3>
							<p class="text-gray-400 text-sm">Не нужно содержать собственный тендерный отдел</p>
						</div>
						<div class="text-center p-6 border border-gold/30 rounded-xl bg-[#142125] transition duration-300">
							<div class="w-16 h-16 mx-auto mb-4 border border-gold rounded-full flex items-center justify-center">
								<svg class="w-8 h-8 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
							</div>
							<h3 class="font-semibold mb-2 text-white">Минимизация рисков</h3>
							<p class="text-gray-400 text-sm">Профессиональная юридическая защита на всех этапах</p>
						</div>
						<div class="text-center p-6 border border-gold/30 rounded-xl bg-[#142125] transition duration-300">
							<div class="w-16 h-16 mx-auto mb-4 border border-gold rounded-full flex items-center justify-center">
								<svg class="w-8 h-8 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/></svg>
							</div>
							<h3 class="font-semibold mb-2 text-white">Сопровождение «под ключ»</h3>
							<p class="text-gray-400 text-sm">Полный цикл услуг от поиска тендера до контракта</p>
						</div>
						<div class="text-center p-6 border border-gold/30 rounded-xl bg-[#142125] transition duration-300">
							<div class="w-16 h-16 mx-auto mb-4 border border-gold rounded-full flex items-center justify-center">
								<svg class="w-8 h-8 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
							</div>
							<h3 class="font-semibold mb-2 text-white">Рост контрактов</h3>
							<p class="text-gray-400 text-sm">Системный подход, повышающий процент побед</p>
						</div>
					</div>
				</div>
			</section>

			<!-- Кейсы -->

			<!-- Кейсы -->
			<section id="cases" class="py-24 border-t border-white/5">
				<div class="max-w-5xl mx-auto px-6">
					<div class="text-center mb-16">
						<h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
							С кем мы уже <span class="text-gold-gradient">работаем</span>
						</h2>
						<p class="text-gray-400">Конкретные компании — конкретные результаты</p>
					</div>

					<div class="space-y-8">

						<!-- Кейс 1 -->
						<div class="bg-[#142125] border border-white/10 rounded-xl p-8">
							<div class="flex flex-col md:flex-row md:items-start gap-6">
								<div class="w-14 h-14 bg-gold/20 rounded-xl flex items-center justify-center shrink-0">
									<span class="text-gold font-bold text-xl">АС</span>
								</div>
								<div class="flex-1">
									<h3 class="text-white font-bold text-lg">ИП Суязов Артём Александрович</h3>
									<p class="text-gray-500 text-sm mb-4">Создание и поддержка сайтов · ИТ-услуги</p>

									<div class="grid md:grid-cols-2 gap-6 mb-6">
										<div>
											<div class="text-gray-500 text-xs uppercase tracking-wider mb-2">Задача</div>
											<p class="text-gray-300 text-sm">Искал тендеры на IT-услуги вручную — тратил часы на мониторинг площадок. Заявки то опаздывали, то приходили с ошибками. Выигранных контрактов — ноль.</p>
										</div>
										<div>
											<div class="text-gray-500 text-xs uppercase tracking-wider mb-2">Результат</div>
											<p class="text-gray-300 text-sm">ООО «ФРЕГАТ» нашло нишу тендеров по поддержке и созданию сайтов для госучреждений. Подача заявок — без сбоев, сроки — не пропущены.</p>
										</div>
									</div>

									<blockquote class="border-l-2 border-gold pl-4">
										<p class="text-gray-400 text-sm italic">«Фарида забрала всю рутину. Я наконец занялся работой, а не бумагами — и пошли первые победы в тендерах.»</p>
									</blockquote>
								</div>
							</div>
						</div>

						<!-- Кейс 2 -->
						<div class="bg-[#142125] border border-white/10 rounded-xl p-8">
							<div class="flex flex-col md:flex-row md:items-start gap-6">
								<div class="w-14 h-14 bg-gold/20 rounded-xl flex items-center justify-center shrink-0">
									<span class="text-gold font-bold text-xl">ТД</span>
								</div>
								<div class="flex-1">
									<div class="flex flex-col sm:flex-row sm:items-center gap-2 mb-1">
										<h3 class="text-white font-bold text-lg">ООО «Технодарк»</h3>
									</div>
									<p class="text-gray-500 text-sm mb-4">Инженерные системы, видеонаблюдение, СКС, безопасность под ключ · Генеральный директор Черноусов Данил Александрович</p>

									<div class="grid md:grid-cols-2 gap-6 mb-6">
										<div>
											<div class="text-gray-500 text-xs uppercase tracking-wider mb-2">Задача</div>
											<p class="text-gray-300 text-sm">Компания монтирует инженерные системы с 2023 года — полный цикл от проекта до пусконаладки. Но тендерная ниша узкая, а конкуренты растут. Нужен был постоянный поиск закупок именно по их профилю.</p>
										</div>
										<div>
											<div class="text-gray-500 text-xs uppercase tracking-wider mb-2">Результат</div>
											<p class="text-gray-300 text-sm">ООО «ФРЕГАТ» нашло для Технодарка закупки, которые они раньше не замечали — на монтаж видеонаблюдения, проектирование систем безопасности, обслуживание СКС. Подготовило заявки, подало без ошибок и в срок. Сопровождало до заключения контрактов — и Технодарк начал получать заказы на свои инженерные системы через тендеры.</p>
										</div>
									</div>

									<blockquote class="border-l-2 border-gold pl-4">
										<p class="text-gray-400 text-sm italic">«Нам важно было найти партнёра, который поймёт специфику инженерных систем. ООО «ФРЕГАТ» разобралось — и стало находить те тендеры, которые мы сами бы пропустили.»</p>
									</blockquote>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>



			<!-- Онлайн-школа -->
			<section class="py-24 border-t border-white/5">
				<div class="max-w-7xl mx-auto px-6">
					<div class="grid md:grid-cols-2 gap-12 items-stretch">
						<div>
							<div class="inline-flex items-center gap-2 px-4 py-2 bg-gold/10 border border-gold rounded-full mb-6">
								<span class="text-gold-gradient font-semibold text-xs uppercase tracking-wider">Наша онлайн-школа</span>
							</div>
							<h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
								Мы не просто сопровождаем — <span class="text-gold-gradient">мы учим</span>
							</h2>
							<p class="text-gray-300 mb-6 leading-relaxed">
								ООО «ФРЕГАТ» — это не только тендерное сопровождение. Мы основали <strong class="text-white">онлайн-школу Фрегат</strong>, где обучаем профессии «Тендерный специалист» с нуля. Наша экспертиза подтверждена сотнями выпускников и лицензией на образовательную деятельность.
							</p>
							<ul class="space-y-3 text-gray-300 mb-8">
								<li class="flex items-center gap-3">
									<svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
									<span>Лицензия на образовательную деятельность</span>
								</li>
								<li class="flex items-center gap-3">
									<svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
									<span>200+ побед в тендерах — практика, а не теория</span>
								</li>
								<li class="flex items-center gap-3">
									<svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
									<span>Экспертиза, подтверждённая результатами учеников</span>
								</li>
							</ul>
							<a href="https://school-frigate.ru" target="_blank" rel="noopener" class="inline-flex items-center gap-3 btn-gold py-4 px-8 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg w-full sm:w-auto justify-center">
								<span>Перейти в онлайн-школу</span>
								<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
							</a>
						</div>
						<div class="bg-[#0d181b] border border-gold/30 rounded-xl p-8 text-center h-full flex flex-col justify-center">
							<div class="w-20 h-20 mx-auto mb-6 border-2 border-gold rounded-full flex items-center justify-center">
								<svg class="w-10 h-10 text-gold opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
							</div>
							<h3 class="text-xl font-bold text-white mb-2">Онлайн-школа «Фрегат»</h3>
							<p class="text-gray-400 text-sm mb-6">Профессия «Тендерный специалист» с нуля за 1 месяц</p>
							<div class="grid grid-cols-2 gap-4 mb-6">
								<div>
									<div class="text-2xl font-bold text-gold-gradient">80%</div>
									<div class="text-gray-400 text-xs mt-1">Практика</div>
								</div>
								<div>
									<div class="text-2xl font-bold text-gold-gradient">1 мес</div>
									<div class="text-gray-400 text-xs mt-1">Обучение</div>
								</div>
								<div>
									<div class="text-2xl font-bold text-gold-gradient">5</div>
									<div class="text-gray-400 text-xs mt-1">Модулей</div>
								</div>
								<div>
									<div class="text-2xl font-bold text-gold-gradient">200+</div>
									<div class="text-gray-400 text-xs mt-1">Побед в тендерах</div>
								</div>
							</div>
							<p class="text-gray-300 text-sm">school-frigate.ru</p>
						</div>
					</div>
				</div>
			</section>
	
			<!-- Квиз (Quizle) -->
			<section id="quiz" class="py-8 border-t border-white/5">
				<div class="max-w-3xl mx-auto px-6">
					<?php
					echo '<style>.quizle--7{--quizle-background-2:transparent;box-shadow:none!important;--quizle-container-padding:clamp(16px,3vw,28px);--quizle-space:clamp(8px,1vw,16px);--quizle-header-font-size:clamp(17px,2vw,22px);--quizle-form-border-color:rgba(255,255,255,.2);--quizle-form-border-focus-color:#D4AF37}</style><style>.quizle--7 .quizle-text{color:#e5e5e5!important;background:#142125!important;border-color:rgba(255,255,255,.15)!important}.quizle--7 .quizle-text::placeholder{color:#6b7280}.quizle--7 .quizle-text:focus{border-color:#D4AF37!important}</style>';
					echo do_shortcode('[quizle name="tarif-quiz"]');
					?>
				</div>
			</section>

			<!-- Контакты -->
				<section id="contact" class="py-24 border-t border-white/5 bg-[#0d181b]">
					<div class="max-w-7xl mx-auto px-6">
						<div class="text-center mb-12">
							<h2 class="text-2xl md:text-3xl font-bold mb-4 text-white">
								Ваши конкуренты уже участвуют в закупках и получают контракты
							</h2>
							<p class="text-gray-300 max-w-2xl mx-auto">
								Пока одни компании сомневаются — другие системно зарабатывают на тендерах миллионы рублей. Не упускайте возможности для роста вашего бизнеса.
							</p>
						</div>
						<div class="grid md:grid-cols-2 gap-12 items-start">
							<div>
								<h3 class="text-2xl font-bold mb-6 text-gold-gradient">
									Получите консультацию
								</h3>
								<p class="text-gray-300 mb-8">Узнайте, какие закупки подходят именно вашей компании.</p>
								<ul class="space-y-4 text-gray-300">
									<li class="flex items-center gap-3">
										<svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
										<a href="tel:+79340709990" class="hover:text-gold transition">+7 (934) 070-99-90</a>
									</li>
									<li class="flex items-center gap-3">
										<svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
										<a href="tel:+79232352247" class="hover:text-gold transition">+7 (923) 235-22-47</a>
									</li>
									<li class="flex items-center gap-3">
										<svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
										<a href="mailto:Frigate26@yandex.ru" class="hover:text-gold transition">Frigate26@yandex.ru</a>
									</li>
								</ul>
							</div>
							<div>
								<h4 class="text-xl font-bold mb-6 text-white">Начните путь в тендеры сегодня</h4>
								<p class="text-gray-400 mb-8">Пройдите короткий тест и получите персональную рекомендацию по формату сотрудничества.</p>
								<a href="#" data-quiz="tarif-quiz" class="btn-gold block text-center py-4 text-lg tracking-wide rounded-lg mb-6">Подобрать формат сотрудничества</a>
								<a href="tel:+79340709990" class="border border-gold text-gold block text-center py-4 text-lg tracking-wide rounded-lg hover:bg-gold hover:text-black transition">Позвонить: +7 (934) 070-99-90</a>
							</div>
						</div>
					</div>
				</section>

			<?php endwhile; ?>
		</main>

<?php get_footer(); ?>
