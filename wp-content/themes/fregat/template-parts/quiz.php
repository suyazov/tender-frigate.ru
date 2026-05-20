<!-- Квиз (Quizle) -->
<section id="quiz" class="py-8 border-t border-white/5">
	<div class="max-w-3xl mx-auto px-6">
		<?php
		echo '<style>.quizle--7{--quizle-background-2:transparent;box-shadow:none!important;--quizle-container-padding:clamp(16px,3vw,28px);--quizle-space:clamp(8px,1vw,16px);--quizle-header-font-size:clamp(17px,2vw,22px);--quizle-form-border-color:rgba(255,255,255,.2);--quizle-form-border-focus-color:#D4AF37}</style><style>.quizle--7 .quizle-text{color:#e5e5e5!important;background:#142125!important;border-color:rgba(255,255,255,.15)!important}.quizle--7 .quizle-text::placeholder{color:#6b7280}.quizle--7 .quizle-text:focus{border-color:#D4AF37!important}</style>';
		echo do_shortcode('[quizle name="tarif-quiz"]');
		?>
	</div>
</section>
