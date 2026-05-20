<!-- Footer -->
<footer class="py-12 border-t border-white/10 bg-[#0a1214]">
	<div class="max-w-7xl mx-auto px-6">
		<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
			<!-- Логотип -->
			<div>
				<div class="flex items-center gap-3 mb-4">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp" alt="Логотип Фрегат" class="h-8 w-auto logo-clean" width="100" height="100" loading="lazy">
					<span class="text-xl font-light tracking-widest text-gold-gradient">ФРЕГАТ</span>
				</div>
				<p class="text-gray-500 text-sm mb-4">Тендерное сопровождение под ключ. Вы занимаетесь бизнесом — мы выигрываем тендеры.</p>
				<a href="#quiz" class="inline-block px-6 py-2.5 btn-gold rounded-lg text-sm">Бесплатная консультация</a>
			</div>

			<!-- Навигация -->
			<div>
				<h2 class="text-white font-semibold mb-4">Навигация</h2>
				<div class="text-sm flex flex-col gap-2">
					<a href="#challenges" class="text-gray-400 hover:text-gold transition">Ваши задачи</a>
					<a href="#benefits" class="text-gray-400 hover:text-gold transition">Услуги</a>
					<a href="#cases" class="text-gray-400 hover:text-gold transition">Кейсы</a>
					<a href="#pricing" class="text-gray-400 hover:text-gold transition">Стоимость</a>
					<a href="#quiz" class="text-gray-400 hover:text-gold transition">Подобрать формат</a>
					<a href="#contact" class="text-gray-400 hover:text-gold transition">Контакты</a>
				</div>
			</div>

			<!-- Услуги -->
			<div>
				<h2 class="text-white font-semibold mb-4">Услуги</h2>
				<div class="text-sm flex flex-col gap-2">
					<a href="#pricing" class="text-gray-400 hover:text-gold transition">Абонентское сопровождение</a>
					<a href="#pricing" class="text-gray-400 hover:text-gold transition">Вознаграждение за контракт</a>
					<a href="#benefits" class="text-gray-400 hover:text-gold transition">Юридическая защита в УФАС</a>
					<a href="#benefits" class="text-gray-400 hover:text-gold transition">Расчёт рентабельности</a>
				</div>
			</div>

			<!-- Контакты -->
			<div>
				<h2 class="text-white font-semibold mb-4">Контакты</h2>
				<div class="text-sm flex flex-col gap-2">
					<a href="tel:<?php echo esc_attr(fregat_contact('primary_phone_raw')); ?>" class="text-gray-400 hover:text-gold transition flex items-center gap-2">
						<svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
						+7 (934) 070-99-90
					</a>
					<a href="https://wa.me/<?php echo esc_attr(fregat_contact('whatsapp')); ?>" target="_blank" class="text-gray-400 hover:text-green-400 transition flex items-center gap-2"><?php get_template_part('template-parts/svg/whatsapp', null, ['class' => 'w-5 h-5']); ?> WhatsApp</a>
					<a href="https://t.me/<?php echo esc_attr(fregat_contact('telegram')); ?>" target="_blank" class="text-gray-400 hover:text-blue-400 transition flex items-center gap-2"><?php get_template_part('template-parts/svg/telegram', null, ['class' => 'w-5 h-5']); ?> Telegram</a>
										<a href="<?php echo esc_url(fregat_contact('max_link')); ?>" target="_blank" class="text-gray-400 hover:text-purple-400 transition flex items-center gap-2"><?php get_template_part('template-parts/svg/max', null, ['class' => 'w-5 h-5']); ?> Макс</a>
					<a href="mailto:<?php echo esc_attr(fregat_contact('email')); ?>" class="text-gray-400 hover:text-gold transition"><?php echo esc_html(fregat_contact('email')); ?></a>
					<p class="text-gray-600 text-xs mt-3"><?php echo esc_html(fregat_contact('address')); ?></p>
				</div>
			</div>
		</div>

		<div class="border-t border-white/10 pt-8">
				<div class="flex flex-wrap items-center justify-center gap-x-2 gap-y-1 text-gray-500 text-sm text-center">
					<span>&copy; <?php echo date('Y'); ?> ООО &laquo;ФРЕГАТ&raquo;</span>
					<span class="text-gray-600">&middot;</span>
					<a href="/politika-konfidentsialnosti/" class="hover:text-gold transition">Политика конфиденциальности</a>
					<span class="text-gray-600">&middot;</span>
					<span class="text-gray-600 text-xs">ИНН 2634115968 / КПП 263401001 &middot; ОГРН 1252600010079 &middot; Генеральный директор: Максумова Ф.М.</span>
				</div>
			</div>
	</div>
</footer>

	<!-- Плавающие кнопки WhatsApp / Telegram / Phone (мобильные) -->
	<div class="fixed bottom-6 right-6 flex flex-col gap-3 z-40 md:hidden">
		<a href="tel:<?php echo esc_attr(fregat_contact('primary_phone_raw')); ?>" class="flex items-center justify-center w-14 h-14 rounded-full bg-gold text-black shadow-lg shadow-gold/30 hover:scale-110 transition-transform">
			<?php get_template_part('template-parts/svg/phone', null, ['class' => 'w-6 h-6']); ?>
		</a>
		<a href="https://wa.me/<?php echo esc_attr(fregat_contact('whatsapp')); ?>" target="_blank" class="flex items-center justify-center w-14 h-14 rounded-full bg-green-500 text-white shadow-lg shadow-green-500/30 hover:scale-110 transition-transform">
			<?php get_template_part('template-parts/svg/whatsapp', null, ['class' => 'w-6 h-6']); ?>
		</a>
		<a href="https://t.me/<?php echo esc_attr(fregat_contact('telegram')); ?>" target="_blank" class="flex items-center justify-center w-14 h-14 rounded-full bg-blue-500 text-white shadow-lg shadow-blue-500/30 hover:scale-110 transition-transform">
			<?php get_template_part('template-parts/svg/telegram', null, ['class' => 'w-6 h-6']); ?>
		</a>
	</div>

<?php wp_footer(); ?>

<!-- Quizle: русские тексты + Метрика цель -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.quizle-contacts [data-toggle_txt]').forEach(function(btn) {
        btn.setAttribute('data-toggle_txt', 'Отправка...');
    });
    document.querySelectorAll('.quizle-contacts input[name="data[contacts][name]"]').forEach(function(inp) {
        inp.placeholder = 'Ваше имя';
    });
    document.querySelectorAll('.quizle-contacts input[name="data[contacts][phone]"]').forEach(function(inp) {
        inp.placeholder = '+7 (___) ___-__-__';
    });

    // Yandex.Metrika — цель «Квиз отправлен»
    document.addEventListener('quizle:submit_contacts', function() {
        if (typeof ym === 'function') {
            ym(109284827, 'reachGoal', 'quiz_submit');
        }
    });
});
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function(m,e,t,r,i,k,a){
        m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
    })(window, document, 'script', 'https://mc.yandex.ru/metrika/tag.js?id=109284827', 'ym');

    ym(109284827, 'init', {clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/109284827" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>
