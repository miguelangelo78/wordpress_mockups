<?php
/**
 * Template Name: Full Width Page
 *
 * @package Tesseract
 */

get_header(); ?>
	
	<style>
		<?php if(!is_page('home')) { ?>
			#masthead {
				opacity:1;
				background:#A1A1A1;
			}
			#site-navigation > div > .menu > li > a:hover{
				color: #6E6E6E !important;
			}

		<?php } ?>

		
		.page-id-5 {
			background-color: #EDEDED !important;
		}

	</style>

	<div id="primary" class="full-width-page">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'page' );

				?>

			<?php endwhile; ?>

			<?php tesseract_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
