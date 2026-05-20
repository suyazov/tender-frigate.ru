<?php
/**
 * Template Part: Solution / How We Work
 *
 * @package Fregat
 */
?>

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
					<?php get_template_part('template-parts/svg/arrow'); ?>
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
					<?php get_template_part('template-parts/svg/arrow'); ?>
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
					<?php get_template_part('template-parts/svg/arrow'); ?>
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
