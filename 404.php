<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Residential_One_Properties
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'We are sorry, but that page can’t be found.', 'resone_template' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">

					<p>Please use the "back" button in your browser or return to our <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">home page</a>.</p>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
