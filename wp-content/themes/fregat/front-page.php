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

			<?php get_template_part('template-parts/hero'); ?>
			<?php get_template_part('template-parts/challenges'); ?>
			<?php get_template_part('template-parts/solution'); ?>
			<?php get_template_part('template-parts/benefits'); ?>
			<?php get_template_part('template-parts/pricing'); ?>
			<?php get_template_part('template-parts/advantages'); ?>
			<?php get_template_part('template-parts/cases'); ?>
			<?php get_template_part('template-parts/school'); ?>
			<?php get_template_part('template-parts/quiz'); ?>
			<?php get_template_part('template-parts/contact'); ?>

			<?php endwhile; ?>
		</main>

<?php get_footer(); ?>
