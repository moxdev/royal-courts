<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Residential_One_Properties
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>

  <!-- Google Tag Manager -->
  <!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-KDLF5JH');</script> -->
  <!-- End Google Tag Manager -->

</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<!-- Google Tag Manager (noscript) -->
<!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KDLF5JH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
<!-- End Google Tag Manager (noscript) -->

<div id="page" class="site"><!-- start-page -->
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'resone_template' ); ?></a>

	<header id="masthead" class="site-header">
		<?php $add_phone_callout    = get_field( 'add_a_contact_phone_number', 'header' );
					$add_download_callout = get_field( 'add_a_download_application', 'header' ); ?>

		<div class="flex-wrapper">
			<div class="site-branding">

				<?php if ( has_custom_logo() ) : ?>

					<div itemscope itemtype="http://schema.org/Organization">
						<?php the_custom_logo(); ?>
					</div>

				<?php else : ?>

					<h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>

				<?php endif ?>

				<?php if ( is_front_page() && is_home() ) : ?>

					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

				<?php else : ?>

					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>

				<?php endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->

			<div class="flex-group">

				<?php if( $add_download_callout == 'Yes' || $add_phone_callout == 'Yes' ): ?>

					<div id="masthead-tel">

						<?php if ( $add_download_callout == 'Yes' ):

							// Change he color of the svgs to match theme colors ie fill="hex_color"

							$app_download_file      = get_field( 'download_application_upload', 'header' );
							$app_download_link_text = get_field( 'download_application_display_name', 'header' ); ?>

							<a class="download-file-link" href="<?php echo esc_url( $app_download_file ); ?>" target="_blank"><span class="icon-download"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><title>icon-download</title><path fill="#e58e1a" d="M17.14 12.82H5.76a.53.53 0 1 0 0 1.06h11.38a.52.52 0 1 0 0-1m0-4.16H5.76a.52.52 0 1 0 0 1h11.38a.52.52 0 0 0 .47-.57.53.53 0 0 0-.46-.45m4.6 19.06a.57.57 0 0 1-.6.56h-10.6l-.94.3a2 2 0 0 1-.6.08 1.86 1.86 0 0 1-1.14-.38H2.4a.58.58 0 0 1-.63-.53V4.15a.57.57 0 0 1 .6-.56h2.16v.9a.58.58 0 0 0 1.17 0v-.9H9v.9a.58.58 0 0 0 1.17 0v-.9h2.9v.9a.58.58 0 0 0 1.18 0v-.9h3.22v.9a.58.58 0 0 0 1.17 0v-.9h2.47a.57.57 0 0 1 .6.57v3.9l1.74-1.7v-2.2A2.3 2.3 0 0 0 21.1 1.9h-2.43V.57a.58.58 0 0 0-1.17 0V1.9h-3.22V.57a.58.58 0 0 0-1.17 0V1.9h-2.9V.57a.58.58 0 0 0-1.16 0V1.9H5.7V.57a.58.58 0 0 0-1.18 0V1.9h-2.2A2.3 2.3 0 0 0 0 4.17v23.6A2.3 2.3 0 0 0 2.33 30h18.82a2.3 2.3 0 0 0 2.33-2.25V19.6l-1.74 1.68zm.52-16.52a.45.45 0 0 0-.62 0l-9 8.7a.4.4 0 0 0 .07.6.45.45 0 0 0 .56 0l9-8.65a.4.4 0 0 0 0-.6m-8 13.55l-3-2.87-.8 2.42 1.27 1.22zm8.2-15.43l4.84 4.67-11.53 11.1a.92.92 0 0 1-.4.25h-.08l-6 1.85a.42.42 0 0 1-.55-.2.38.38 0 0 1 0-.32l1.9-5.78v-.07a.87.87 0 0 1 .25-.4l2.17-2.08h-7.3a.52.52 0 1 1 0-1h8.4zm7.4 2.2L28.1 13.3l-4.83-4.66L25 7a1.35 1.35 0 0 1 1.84-.15l3.15 3"/></svg></span><?php echo esc_html( $app_download_link_text ); ?></a>

						<?php endif ?>

						<?php if ( $add_phone_callout == 'Yes' ):

							$ph           = get_field( 'phone', 'company-information' );
							$callout_text = get_field( 'phone_callout_text', 'header' ); ?>

							<a class="tel-link" href="tel:<?php echo esc_html( $ph ) ?>"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><title>icon-phone</title><path fill="#e58e1a" d="M28.3 2.3a.5.5 0 0 0-.7.7 4.8 4.8 0 0 1 0 6.77.5.5 0 0 0 .7.73 5.8 5.8 0 0 0 0-8.17m-2.1 1.1a.5.5 0 0 0-.7.7 3.28 3.28 0 0 1 0 4.65.5.5 0 0 0 .68.73 4.3 4.3 0 0 0 0-6.04M2.4 3a.5.5 0 1 0-.7-.7 5.8 5.8 0 0 0 0 8.2.5.5 0 0 0 .7-.73A4.8 4.8 0 0 1 2.4 3m2.12.3a.5.5 0 0 0-.7 0 4.3 4.3 0 0 0 0 6 .5.5 0 0 0 .72-.7A3.3 3.3 0 0 1 4.5 4a.5.5 0 0 0 0-.7M16 26.5a1 1 0 1 1-1-1 1 1 0 0 1 1 1m6.5-3.5h-15V4h15zM15 28.5a2 2 0 1 1 2-2 2 2 0 0 1-2 2m-2-27h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1m3.5 0h.5a.5.5 0 0 1 0 1h-.5a.5.5 0 0 1 0-1M21.3 0H8.7a2.2 2.2 0 0 0-2.2 2.2v25.6A2.2 2.2 0 0 0 8.7 30h12.6a2.2 2.2 0 0 0 2.2-2.2V2.2A2.2 2.2 0 0 0 21.3 0"/></svg><span class="call"><?php echo esc_html( $callout_text ); ?></span><span class="tel"><?php echo esc_html( $ph ); ?></span></a>

						<?php endif ?>

					</div><!-- masthead-tel -->

				<?php endif; ?>

				<?php if ( has_nav_menu( 'primary' ) ) : ?>

					<button id="menu-toggle" aria-expanded="false"><?php esc_html_e( 'Menu', 'resone_template' ); ?></button>

					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container'=> 'nav', 'container_class'=>'main-navigation', 'container_id'=> 'site-navigation' ) ); ?>

				<?php endif; ?>

			</div><!-- flex-group -->
		</div><!-- flex-wrapper -->

		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container'=> 'nav', 'container_class'=>'mobile-navigation', 'container_id'=> 'mobile-navigation' ) ); ?>

	</header><!-- #masthead -->

	<?php if ( function_exists( 'resone_template_homepage_slider' ) && is_front_page() ) {
		resone_template_homepage_slider();
	} ?>

	<?php if ( function_exists( 'resone_template_specials_callout' ) && is_page_template( 'page-floorplans.php' ) ) {
	    resone_template_specials_callout();
	}  ?>

	<div id="content" class="site-content">
		<div class="page-flex-wrapper">