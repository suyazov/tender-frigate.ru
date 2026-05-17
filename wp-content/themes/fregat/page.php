<?php
/**
 * Шаблон страницы
 *
 * @package Fregat
 */

get_header();
?>

	<main id="primary" class="site-main pt-28 pb-16">
		<div class="max-w-4xl mx-auto px-6">
			<?php
			while (have_posts()) :
				the_post();
				?>
				<article class="prose prose-invert max-w-none">
					<h1 class="text-3xl md:text-4xl font-bold text-white mb-8"><?php the_title(); ?></h1>
					<div class="text-gray-300 leading-relaxed">
						<?php the_content(); ?>
					</div>
				</article>
				<?php
			endwhile;
			?>
		</div>
	</main>

<?php
get_footer();
