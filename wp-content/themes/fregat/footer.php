<!-- Footer -->
<footer class="py-12 border-t border-white/10 bg-[#0a1214]">
	<div class="max-w-7xl mx-auto px-6">
		<div class="grid md:grid-cols-4 gap-8 mb-8">
			<!-- Логотип -->
			<div>
				<div class="flex items-center gap-3 mb-4">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp" alt="Логотип Фрегат" class="h-8 w-auto logo-clean" width="100" height="100" loading="lazy">
					<span class="text-xl font-light tracking-widest text-gold-gradient">ФРЕГАТ</span>
				</div>
				<p class="text-gray-500 text-sm">
					ООО «ФРЕГАТ»<br>
					Надёжный партнёр в сфере тендерного сопровождения и закупочной деятельности.
				</p>
				<div class="mt-3 text-sm">
					<a href="tel:+79340709990" class="text-gold hover:text-gold-light transition">+7 (934) 070-99-90</a>
				</div>
			</div>

			<!-- Навигация -->
			<div>
				<h2 class="text-white font-semibold mb-4">Навигация</h2>
				<div class="text-sm flex flex-col gap-2">
					<a href="#hero" class="text-gray-400 hover:text-gold transition">Главная</a>
					<a href="#problems" class="text-gray-400 hover:text-gold transition">Проблемы</a>
					<a href="#cases" class="text-gray-400 hover:text-gold transition">Кейсы</a>
					<a href="#pricing" class="text-gray-400 hover:text-gold transition">Стоимость</a>
					<a href="#advantages" class="text-gray-400 hover:text-gold transition">Преимущества</a>
					<a href="#quiz" class="text-gray-400 hover:text-gold transition">Подобрать тариф</a>
					<a href="#contact" class="text-gray-400 hover:text-gold transition">Контакты</a>
				</div>
			</div>

			<!-- Услуги -->
			<div>
				<h2 class="text-white font-semibold mb-4">Услуги</h2>
				<div class="text-sm flex flex-col gap-2">
					<a href="#targeting" class="text-gray-400 hover:text-gold transition">Для кого</a>
					<a href="#pricing" class="text-gray-400 hover:text-gold transition">Абонентское сопровождение</a>
					<a href="#advantages" class="text-gray-400 hover:text-gold transition">Юридическая защита</a>
					<a href="#cases" class="text-gray-400 hover:text-gold transition">Кейсы клиентов</a>
					<a href="#targeting" class="text-gray-400 hover:text-gold transition">Вам подойдёт</a>
				</div>
			</div>

			<!-- Контакты -->
			<div>
				<h2 class="text-white font-semibold mb-4">Контакты</h2>
				<div class="text-sm flex flex-col gap-2">
					<a href="tel:+79340709990" class="text-gray-400 hover:text-gold transition">+7 (934) 070-99-90</a>
					<a href="tel:+79232352247" class="text-gray-400 hover:text-gold transition">+7 (923) 235-22-47</a>
					<a href="mailto:Frigate26@yandex.ru" class="text-gray-400 hover:text-gold transition">Frigate26@yandex.ru</a>
				</div>
			</div>
		</div>

		<div class="border-t border-white/10 pt-8 text-center text-gray-500 text-sm">
			<div>&copy; <?php echo date('Y'); ?> ООО «ФРЕГАТ». Все права защищены.</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<!-- Quiz JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    var quiz = document.getElementById('tender-quiz');
    if (!quiz) return;

    var currentStep = 1;
    var totalSteps = 4;
    var answers = {};

    var quizSteps = quiz.querySelectorAll('.quiz-step');
    var quizResult = document.getElementById('quiz-result');
    var quizNav = document.getElementById('quiz-nav');
    var progressBar = document.getElementById('quiz-progress-bar');
    var progressText = document.getElementById('quiz-progress-text');
    var currentStepEl = document.getElementById('quiz-current-step');
    var prevBtn = document.getElementById('quiz-prev');
    var nextBtn = document.getElementById('quiz-next');

    function updateProgress() {
        var pct = Math.round((currentStep / totalSteps) * 100);
        progressBar.style.width = pct + '%';
        progressText.textContent = pct + '%';
        currentStepEl.textContent = currentStep;
    }

    function showStep(step) {
        quizSteps.forEach(function(s) { s.style.display = 'none'; });
        var target = quiz.querySelector('[data-step="' + step + '"]');
        if (target) target.style.display = 'block';
        prevBtn.style.visibility = step === 1 ? 'hidden' : 'visible';
        nextBtn.textContent = step === totalSteps ? 'Результат' : 'Далее';
        updateProgress();
    }

    quiz.querySelectorAll('.quiz-option').forEach(function(opt) {
        opt.addEventListener('click', function() {
            var radio = this.querySelector('input[type="radio"]');
            if (radio) {
                radio.checked = true;
                this.parentElement.querySelectorAll('.quiz-option').forEach(function(o) {
                    o.classList.remove('border-gold/30', 'bg-gold/5');
                    o.classList.add('border-white/5');
                    var dot = o.querySelector('.bg-gold');
                    if (dot) dot.classList.add('hidden');
                });
                this.classList.remove('border-white/5');
                this.classList.add('border-gold/30', 'bg-gold/5');
                var dot = this.querySelector('.bg-gold');
                if (dot) dot.classList.remove('hidden');
            }
        });
    });

    nextBtn.addEventListener('click', function() {
        var stepEl = quiz.querySelector('[data-step="' + currentStep + '"]');
        var selected = stepEl ? stepEl.querySelector('input[type="radio"]:checked') : null;
        if (!selected) return;

        answers['q' + currentStep] = selected.value;

        if (currentStep < totalSteps) {
            currentStep++;
            showStep(currentStep);
        } else {
            quizSteps.forEach(function(s) { s.style.display = 'none'; });
            quizResult.style.display = 'block';
            quizNav.style.display = 'none';
            progressBar.style.width = '100%';
            progressText.textContent = '100%';

            var result = '';
            if (answers.q2 === 'large' || answers.q3 === 'volume') {
                result = 'Абонентское сопровождение — оптимально для компаний с крупными закупками';
            } else if (answers.q1 === 'no' || answers.q4 === 'now') {
                result = 'Начните с консультации — мы подберём формат сотрудничества';
            } else {
                result = 'Абонентское сопровождение + вознаграждение за результат';
            }
            document.getElementById('quiz-result-text').textContent = result;
        }
    });

    prevBtn.addEventListener('click', function() {
        if (currentStep > 1) {
            currentStep--;
            showStep(currentStep);
        }
    });

    var submitBtn = document.getElementById('quiz-submit');
    if (submitBtn) {
        submitBtn.addEventListener('click', function() {
            var name = document.getElementById('quiz-name').value;
            var phone = document.getElementById('quiz-phone').value;
            if (!name || !phone) return;

            var formData = new FormData();
            formData.append('action', 'fregat_contact');
            formData.append('nonce', fregat_contact.nonce);
            formData.append('name', name);
            formData.append('phone', phone);
            formData.append('message', 'Квиз: ' + (document.getElementById('quiz-result-text')?.textContent || ''));

            fetch(fregat_contact.ajax_url, { method: 'POST', body: formData })
                .then(function(r) { return r.json(); })
                .then(function() {
                    quizResult.innerHTML = '<div class="text-center py-8"><svg class="w-16 h-16 mx-auto mb-4" style="color:#D4AF37" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg><h3 class="text-2xl font-bold text-white mb-2">Спасибо!</h3><p class="text-gray-400">Мы свяжемся с вами в ближайшее время</p></div>';
                });
        });
    }
});
</script>

<!-- Yandex.Metrika (lazy) -->
<script>
window.addEventListener('load',function(){requestIdleCallback(function(){(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};m[i].l=1*new Date();for(var j=0;j<document.scripts.length;j++){if(document.scripts[j].src===r){return;}}k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})(window,document,'script','https://mc.yandex.ru/metrika/tag.js?id=108500072','ym');ym(108500072,'init',{ssr:true,webvisor:true,clickmap:true,ecommerce:"dataLayer",referrer:document.referrer,url:location.href,accurateTrackBounce:true,trackLinks:true})})});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/108500072" style="position:absolute;left:-9999px;" alt="" /></div></noscript>

</body>
</html>
