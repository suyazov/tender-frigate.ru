<?php
/**
 * 404 — Страница не найдена
 *
 * @package Fregat
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="pt-28 pb-4">
			<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
				<nav class="breadcrumb text-sm">
					<a href="<?php echo home_url(); ?>" class="text-gray-400 hover:text-gold transition-colors">Главная</a>
					<span class="mx-2 text-gray-600">/</span>
					<span class="text-gold">Страница не найдена</span>
				</nav>
			</div>
		</div>

		<section class="py-24 border-t border-white/5">
			<div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
				<div class="text-8xl md:text-9xl font-bold text-gold-gradient mb-6">404</div>
				<h1 class="text-2xl md:text-3xl font-semibold text-white mb-4">Страница не найдена</h1>
				<p class="text-gray-400 mb-10">Запрашиваемая страница не существует или была перемещена.</p>
				<a href="<?php echo home_url(); ?>" class="btn-gold inline-block px-8 py-4 rounded-lg text-lg font-semibold">На главную</a>
			</div>
		</section>

		<section class="py-16 border-t border-white/5 bg-[#0d181b]">
			<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
				<h2 class="text-xl font-semibold text-white mb-6 text-center">Полезные ссылки</h2>
				<div class="grid sm:grid-cols-2 md:grid-cols-4 gap-4">
					<a href="<?php echo home_url('/#solution'); ?>" class="bg-[#142125] border border-white/10 rounded-xl p-5 text-center hover:border-gold/30 transition group">
						<div class="text-gold text-lg font-semibold mb-1 group-hover:text-gold-light transition">Решение</div>
						<div class="text-gray-500 text-sm">Тендерное сопровождение</div>
					</a>
					<a href="<?php echo home_url('/#pricing'); ?>" class="bg-[#142125] border border-white/10 rounded-xl p-5 text-center hover:border-gold/30 transition group">
						<div class="text-gold text-lg font-semibold mb-1 group-hover:text-gold-light transition">Стоимость</div>
						<div class="text-gray-500 text-sm">Цены и тарифы</div>
					</a>
					<a href="<?php echo home_url('/#advantages'); ?>" class="bg-[#142125] border border-white/10 rounded-xl p-5 text-center hover:border-gold/30 transition group">
						<div class="text-gold text-lg font-semibold mb-1 group-hover:text-gold-light transition">Преимущества</div>
						<div class="text-gray-500 text-sm">Почему мы</div>
					</a>
					<a href="<?php echo home_url('/#contact'); ?>" class="bg-[#142125] border border-white/10 rounded-xl p-5 text-center hover:border-gold/30 transition group">
						<div class="text-gold text-lg font-semibold mb-1 group-hover:text-gold-light transition">Контакты</div>
						<div class="text-gray-500 text-sm">Связаться с нами</div>
					</a>
				</div>
			</div>
		</section>
	</main>

<?php
get_footer();
