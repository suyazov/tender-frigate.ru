<?php
/**
 * Template Part: Pricing
 *
 * @package Fregat
 */
?>

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
					<li class="flex items-center gap-2"><?php get_template_part('template-parts/svg/check', null, ['class' => 'w-4 h-4']); ?>Постоянный поиск выгодных закупок</li>
					<li class="flex items-center gap-2"><?php get_template_part('template-parts/svg/check', null, ['class' => 'w-4 h-4']); ?>Подготовка и подача заявок</li>
					<li class="flex items-center gap-2"><?php get_template_part('template-parts/svg/check', null, ['class' => 'w-4 h-4']); ?>Сопровождение закупок</li>
					<li class="flex items-center gap-2"><?php get_template_part('template-parts/svg/check', null, ['class' => 'w-4 h-4']); ?>Юридическая поддержка</li>
					<li class="flex items-center gap-2"><?php get_template_part('template-parts/svg/check', null, ['class' => 'w-4 h-4']); ?>Помощь в расчёте рентабельности</li>
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
