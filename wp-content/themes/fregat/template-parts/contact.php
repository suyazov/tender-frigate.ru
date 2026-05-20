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
						<?php get_template_part('template-parts/svg/phone', null, ['class' => 'w-5 h-5']); ?>
						<a href="tel:<?php echo esc_attr(fregat_contact('primary_phone_raw')); ?>" class="hover:text-gold transition"><?php echo esc_html(fregat_contact('primary_phone')); ?></a>
					</li>
					<li class="flex items-center gap-3">
						<?php get_template_part('template-parts/svg/phone', null, ['class' => 'w-5 h-5']); ?>
						<a href="tel:<?php echo esc_attr(fregat_contact('secondary_phone_raw')); ?>" class="hover:text-gold transition"><?php echo esc_html(fregat_contact('secondary_phone')); ?></a>
					</li>
					<li class="flex items-center gap-3">
						<svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
						<a href="mailto:<?php echo esc_attr(fregat_contact('email')); ?>" class="hover:text-gold transition"><?php echo esc_html(fregat_contact('email')); ?></a>
					</li>
				</ul>
			</div>
			<div>
				<h4 class="text-xl font-bold mb-6 text-white">Начните путь в тендеры сегодня</h4>
				<p class="text-gray-400 mb-8">Пройдите короткий тест и получите персональную рекомендацию по формату сотрудничества.</p>
				<a href="#" data-quiz="tarif-quiz" class="btn-gold block text-center py-4 text-lg tracking-wide rounded-lg mb-6">Подобрать формат сотрудничества</a>
				<a href="tel:<?php echo esc_attr(fregat_contact('primary_phone_raw')); ?>" class="border border-gold text-gold block text-center py-4 text-lg tracking-wide rounded-lg hover:bg-gold hover:text-black transition">Позвонить: <?php echo esc_html(fregat_contact('primary_phone')); ?></a>
			</div>
		</div>
	</div>
</section>
