<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays the Homepage
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Residential_One_Properties
 */

get_header();
get_sidebar('specials'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_sidebar();
get_footer();
