<?php
/**
 * The template for displaying all single posts.
 *
 * @package Tesseract
 */

get_header(); ?>

	<div id="primary" class="full-width-page">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php tesseract_post_nav(); ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>