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
					<a href="#benefits" class="text-gray-400 hover:text-gold transition">Наши услуги</a>
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
					<a href="tel:+79340709990" class="text-gray-400 hover:text-gold transition">+7 (934) 070-99-90</a>
					<a href="tel:+79232352247" class="text-gray-400 hover:text-gold transition">+7 (923) 235-22-47</a>
					<a href="mailto:Frigate26@yandex.ru" class="text-gray-400 hover:text-gold transition">Frigate26@yandex.ru</a>
					<p class="text-gray-600 text-xs mt-3">г. Ставрополь, ул. Дзержинского, д. 114</p>
				</div>
			</div>
		</div>

		<div class="border-t border-white/10 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-gray-500 text-sm">
			<div>&copy; <?php echo date('Y'); ?> ООО «ФРЕГАТ». Все права защищены.</div>
			<a href="/politika-konfidentsialnosti/" class="text-gray-500 hover:text-gold transition">Политика конфиденциальности</a>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<!-- Quizle: русские тексты -->
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
});
</script>

<!-- Yandex.Metrika (lazy) -->
<script>
window.addEventListener('load',function(){requestIdleCallback(function(){(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};m[i].l=1*new Date();for(var j=0;j<document.scripts.length;j++){if(document.scripts[j].src===r){return;}}k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})(window,document,'script','https://mc.yandex.ru/metrika/tag.js?id=108500072','ym');ym(108500072,'init',{ssr:true,webvisor:true,clickmap:true,ecommerce:"dataLayer",referrer:document.referrer,url:location.href,accurateTrackBounce:true,trackLinks:true})})});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/108500072" style="position:absolute;left:-9999px;" alt="" /></div></noscript>

</body>
</html>
