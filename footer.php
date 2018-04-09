<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Residential_One_Properties
 */

?>
		</div><!-- end-page-flex-wrapper -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">

			<?php
			$add_eho        = get_field( 'add_the_equal_housing_opportunity_logo', 'footer' );
			$address        = get_field( 'address', 'company-information' );
			$add_hf         = get_field( 'add_the_handicap_friendly_logo', 'footer' );
			$add_dcbor      = get_field( 'add_the_dc_tenants_bill_of_rights', 'footer' );
			$add_gtranslate = get_field( 'add_the_google_translate_dropdown', 'footer' );
			$add_ahd        = get_field( 'add_the_ahd_management_logo', 'footer' );
      $add_social     = get_field( 'add_social_icons', 'social' );
      $name           = get_field( 'company_name', 'company-information' );
      $city           = get_field( 'city', 'company-information' );
      $state          = get_field( 'state', 'company-information' );
      $zip            = get_field( 'zip', 'company-information' );
      $phone          = get_field( 'phone', 'company-information' );
      $fax            = get_field( 'fax', 'company-information' );
      $email          = get_field( 'email', 'company-information' );
			?>

			<div class="left-column">

				<?php if ( $address || $phone || $fax || $email ): ?>

					<div class="contact-information">
					  <div itemscope itemtype="http://schema.org/Organization">

              <?php if ( $name ) : ?>
                <span itemprop="name" class="company-name"><?php echo esc_html( $name ); ?></span>
              <?php endif; ?>

              <?php if ( $address ) : ?>
                <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                  <span itemprop="streetAddress"><?php echo esc_html( $address ); ?>, </span>
                  <span itemprop="addressLocality"><?php echo esc_html( $city ); ?>, </span>
                  <span itemprop="addressRegion"><?php echo esc_html( $state ); ?></span>
                  <span itemprop="postalCode"><?php echo esc_html( $zip ); ?></span>
                </div>
              <?php endif; ?>

              <?php if ( $phone ) : ?>
					      <span class="footer-tel">Tel: <span itemprop="telephone"><a href="tel:<?php echo esc_html( $phone ); ?>"><?php echo esc_html( $phone ); ?></a> </span></span>
              <?php endif; ?>

              <?php if ( $fax ) : ?>
                <span class="footer-bullet">&bull;</span>
                <span class="footer-fax"> Fax: <span itemprop="faxNumber"><?php echo esc_html( $fax ); ?></span></span>
              <?php endif; ?>

              <?php if ( $email ) : ?>
                <span class="email"><a href="mailto:<?php echo esc_html( $email ); ?>" itemprop="email">Email Us</a></span>
              <?php endif; ?>

					  </div>
					</div>

				<?php endif ?>

				<?php if ( $add_dcbor == 'Yes'):

					$file = get_field( 'dc_tenants_bill_of_rights_upload', 'footer' );

					$url = wp_get_attachment_url( $file ); ?>

					<a class="bill-of-rights" href="<?php echo esc_url( $url ); ?>" target="_blank" alt="DC Tenants Bill of Rights PDF Download">DC Tenants Bill of Rights</a>

				<?php endif; ?>
			</div><!-- left-column -->

			<div class="right-column">

				<?php if ( $add_social == 'Yes' ): ?>

					<div class="social">

						<?php

						// Change fill="" color of socisl icon svg's to match theme colors
						// BLACK AND WHITE VERSIONS OF THE LOGOS, HANDICAP, AND EHO ICONS, COMMENT OUT THE COLOR NOT BEING USED.

						$facebook    = get_field( 'facebook', 'social' );
						$google_plus = get_field( 'google_plus', 'social' );
						$twitter     = get_field( 'twitter', 'social' );
						$instagram   = get_field( 'instagram', 'social' );
						$linkedin    = get_field( 'linkedin', 'social' );
						$youtube     = get_field( 'youtube', 'social' );
						$pinterest   = get_field( 'pinterest', 'social' );
						?>

						<?php if ( $facebook ): ?>

								<a href="<?php echo esc_url( $facebook ); ?>" alt="hyperlink to facebook page" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><title>facebook-icon</title><path fill="#ffffff" d="M37.8 0H2.2A2.22 2.22 0 0 0 0 2.2v35.6A2.22 2.22 0 0 0 2.2 40h19.1V24.6h-5.2v-6h5.2v-4.5c0-5.2 3.2-8 7.8-8a41.12 41.12 0 0 1 4.7.2v5.4h-3.2c-2.5 0-3 1.2-3 2.9v3.9h6l-.8 6h-5.2V40h10.2a2.22 2.22 0 0 0 2.2-2.2V2.2A2.22 2.22 0 0 0 37.8 0z"/></svg></a>

						<?php endif ?>

						<?php if ( $google_plus ): ?>

								<a href="<?php echo esc_url( $google_plus ); ?>" alt="hyperlink to google plus page" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><title>google-plus-icon</title><path fill="#ffffff" d="M37.8 0H2.2A2.22 2.22 0 0 0 0 2.2v35.6A2.22 2.22 0 0 0 2.2 40h35.6a2.22 2.22 0 0 0 2.2-2.2V2.2A2.22 2.22 0 0 0 37.8 0zM14.6 29.5a9.5 9.5 0 1 1 0-19A9.17 9.17 0 0 1 21 13c-2 1.9-1.9 2-2.7 2.8a5.4 5.4 0 0 0-3.7-1.4 5.7 5.7 0 0 0 0 11.4c3.1 0 4.3-1.3 5.2-3.8h-5.2v-3.8h9.2c.6 4.5-1.3 11.3-9.2 11.3zm20.5-8.8h-3.3v3.4h-2.4v-3.4H26v-2.4h3.4V15h2.4v3.3h3.3z"/></svg></a>

						<?php endif ?>

						<?php if ( $twitter ): ?>

							<a href="<?php echo esc_url( $twitter ); ?>" alt="hyperlink to twitter page" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><title>twitter-icon</title><path fill="#ffffff" d="M37.8 0H2.2A2.2 2.2 0 0 0 0 2.2v35.6A2.2 2.2 0 0 0 2.2 40h35.6a2.2 2.2 0 0 0 2.2-2.2V2.2A2.2 2.2 0 0 0 37.8 0zm-7.9 14.9v.7A14.55 14.55 0 0 1 7.5 27.9a4.87 4.87 0 0 0 1.2.1 10.36 10.36 0 0 0 3.45-.58 1.38 1.38 0 0 0 .33-2.42 5.42 5.42 0 0 1-2.18-2.8 3.4 3.4 0 0 0 1 .1 5.9 5.9 0 0 0 1.4-.2 5.06 5.06 0 0 1-4.1-5V17a6 6 0 0 0 2.3.6 5.1 5.1 0 0 1-2.3-4.3 1.33 1.33 0 0 1 2.23-1 14.43 14.43 0 0 0 9.07 3.8 4.87 4.87 0 0 1-.1-1.2 5.1 5.1 0 0 1 8.37-3.9 1.3 1.3 0 0 0 1.13.27 9.2 9.2 0 0 0 2.6-1.06 4.92 4.92 0 0 1-2.3 2.8 9.6 9.6 0 0 0 2.9-.8 9.58 9.58 0 0 1-2.6 2.7z"/></svg></a>

						<?php endif ?>

						<?php if ( $instagram ): ?>

							<a href="<?php echo esc_url( $instagram ); ?>" alt="hyperlink to instagram page" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><title>instagram-icon</title><path fill="#ffffff" d="M20 14.67h-.1a5.16 5.16 0 0 0-3.5 1.4 5.5 5.5 0 0 0-1.6 3.83 5.35 5.35 0 0 0 5.3 5.33 5.48 5.48 0 0 0 5.3-5.33 5.12 5.12 0 0 0-1.3-3.72 6.55 6.55 0 0 0-4.1-1.5zM37.8 0H2.2A2.2 2.2 0 0 0 0 2.2v35.6A2.2 2.2 0 0 0 2.2 40h35.6a2.2 2.2 0 0 0 2.2-2.2V2.2A2.2 2.2 0 0 0 37.8 0zm-3.3 32.76A2.2 2.2 0 0 1 32.3 35H7.7a2.2 2.2 0 0 1-2.2-2.2V7.23A2.2 2.2 0 0 1 7.7 5h24.6a2.2 2.2 0 0 1 2.2 2.2zM30.1 7.24H9.9a2.2 2.2 0 0 0-2.2 2.2v21.1a2.2 2.2 0 0 0 2.2 2.22h20.2a2.2 2.2 0 0 0 2.2-2.2V9.45a2.2 2.2 0 0 0-2.2-2.22zM27.9 20a8.07 8.07 0 0 1-7.9 7.94A8 8 0 0 1 12.1 20a8.26 8.26 0 0 1 2.4-5.73 7.68 7.68 0 0 1 5.5-2.2 8.18 8.18 0 0 1 5.9 2.4 7.15 7.15 0 0 1 2 5.53zm.2-6.43a1.8 1.8 0 1 1 1.8-1.8 1.8 1.8 0 0 1-1.8 1.8z"/></svg></a>

						<?php endif ?>

						<?php if ( $linkedin ): ?>

							<a href="<?php echo esc_url( $linkedin ); ?>" alt="link to linkedin page" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><title>linkedin-icon</title><path fill="#ffffff" d="M37 0H2.9A2.9 2.9 0 0 0 0 2.9v34.2A2.9 2.9 0 0 0 2.9 40H37a3 3 0 0 0 3-2.9V2.9A2.93 2.93 0 0 0 37 0zM11.9 34.1H6V15h5.9zm-3-21.7A3.4 3.4 0 1 1 12.3 9a3.37 3.37 0 0 1-3.4 3.4zm25.2 21.7h-5.9v-9.3c0-2.2 0-5.1-3.1-5.1s-3.6 2.4-3.6 4.9V34h-5.9V15h5.7v2.6h.1a6.2 6.2 0 0 1 5.6-3.1c6 0 7.1 4 7.1 9.1z"/></svg></a>

						<?php endif ?>

						<?php if ( $pinterest ): ?>

							<a href="<?php echo esc_url( $pinterest ); ?>" alt="link to linkedin page" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><title>pinterest-icon</title><path fill="#ffffff" d="M19.9 0a20 20 0 0 0-8 38.3 18.2 18.2 0 0 1 .3-4.6c.4-1.6 2.6-10.9 2.6-10.9a8.35 8.35 0 0 1-.6-3.2c0-3 1.68-5.2 3.87-5.2a2.7 2.7 0 0 1 2.7 3c0 1.8-1.2 4.6-1.8 7.1a3.16 3.16 0 0 0 3.18 3.9c3.78 0 6.27-4.9 6.27-10.6 0-4.4-3-7.7-8.26-7.7a9.38 9.38 0 0 0-9.75 9.6 5.73 5.73 0 0 0 1.3 3.9 1 1 0 0 1 .3 1.1c-.1.4-.3 1.3-.4 1.6a.66.66 0 0 1-1 .5c-2.8-1.1-4.08-4.2-4.08-7.6 0-5.7 4.78-12.5 14.23-12.5 7.56 0 12.64 5.5 12.64 11.5 0 7.8-4.4 13.7-10.76 13.7a5.74 5.74 0 0 1-4.88-2.5s-1.2 4.6-1.4 5.5a18.92 18.92 0 0 1-2 4.3 21 21 0 0 0 5.68.8A20 20 0 0 0 40 20 20.3 20.3 0 0 0 19.9 0z"/></svg></a>

						<?php endif ?>

						<?php if ( $youtube ): ?>

							<a href="<?php echo esc_url( $youtube ); ?>" alt="link to youtube page" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><title>youtube-icon</title><path fill="none" d="M37.8 40a2.22 2.22 0 0 0 2.2-2.2V2.2A2.22 2.22 0 0 0 37.8 0H2.2A2.22 2.22 0 0 0 0 2.2v35.6A2.22 2.22 0 0 0 2.2 40z"/><path fill="#ffffff" d="M39.6 12s-.4-2.8-1.6-4a5.66 5.66 0 0 0-4-1.7c-5.6-.4-14-.4-14-.4s-8.4 0-14 .4A5.66 5.66 0 0 0 2 8C.8 9.2.4 12 .4 12a59.76 59.76 0 0 0-.4 6.5v3A62.24 62.24 0 0 0 .4 28s.4 2.8 1.6 4c1.5 1.6 3.5 1.5 4.4 1.7 3.2.3 13.6.4 13.6.4s8.4 0 14-.4a5.66 5.66 0 0 0 4-1.7c1.2-1.2 1.6-4 1.6-4a59.76 59.76 0 0 0 .4-6.5v-3a59.76 59.76 0 0 0-.4-6.5zM15.9 25.2V14l10.8 5.6z"/></svg></a>

						<?php endif ?>

					</div><!-- social -->

				<?php endif ?>

				<?php if ( $add_gtranslate == 'Yes' ): ?>

					<div class="translate">
						<div id="google_translate_element"></div><script type="text/javascript">
						function googleTranslateElementInit() {
						  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
						}
						</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
					</div>

				<?php endif ?>

				<div class="property-management-logos">
					<a href="http://www.res1.net" target="_blank" id="res-one-link">Professionally Managed By:

						<!-- white version -->
						<span class="res1-logo">
						  <svg xmlns="http://www.w3.org/2000/svg" width="132.5" height="21.62" viewBox="0 0 132.5 21.62"><defs><style>.a{fill:#fff;}</style></defs><title>resone-logo-white</title><path d="M91.84 3.18A10.78 10.78 0 0 0 88.46.86a10.5 10.5 0 0 0-8.3 0 10.7 10.7 0 0 0-3.36 2.32 10.93 10.93 0 0 0-2.27 3.46 10.7 10.7 0 0 0-.8 3.74h4.34a6.23 6.23 0 0 1 .48-2 6.8 6.8 0 0 1 1.36-2 6.34 6.34 0 0 1 2-1.4 5.9 5.9 0 0 1 2.46-.5 5.82 5.82 0 0 1 2.4.52 6.5 6.5 0 0 1 2 1.4 6.72 6.72 0 0 1 1.33 2 6.5 6.5 0 0 1-3.35 8.4 5.54 5.54 0 0 1-.68.25v4.56a10 10 0 0 0 2.4-.7 10.54 10.54 0 0 0 3.4-2.3 11.2 11.2 0 0 0 2.28-3.46A10.64 10.64 0 0 0 95 10.9a10.77 10.77 0 0 0-.85-4.26 11 11 0 0 0-2.3-3.46M111.43 13.55L102.23.4h-5.18v21.14h3.57V6.14l10.8 15.4h3.84V.4h-3.83zm10.5 4.05v-4.5h6.24V9h-6.24V4.27h10.57V.37h-15v21.1h15V17.6zM0 9.47h4q4 0 4 3.24v.83q0 3.24-3.23 3.24L6.4 19.2 8 21.6H6l-3.17-4.86H1.6v4.86H0zm1.6 5.67H4c1.6 0 2.42-.54 2.42-1.62v-.8c0-1.1-.8-1.63-2.42-1.63H1.6zM16.48 20v1.62h-3.23q-4 0-4-3.24V16q0-3.24 4-3.24t4 2.44v.8q0 2.44-4 2.44h-2.42c0 1.08.8 1.62 2.42 1.62zm-5.63-3.24h2.42c1.6 0 2.4-.4 2.37-1.22s-.83-1.22-2.4-1.22-2.4.4-2.4 1.22zm11.85-2.43c-1.6 0-2.42.4-2.42 1.2 0 .53.8.8 2.42.8q4 0 4 2.44 0 2.85-4 2.85t-4-2.43h1.62c0 .52.8.8 2.42.8s2.42-.4 2.42-1.17-.8-1.15-2.42-.9q-4 0-4-2.42 0-2.8 4-2.8t4 2.43h-1.62c0-.53-.8-.8-2.42-.8" class="a"/><path d="M29.73 11.1h-1.6V9.46h1.6zm0 10.52h-1.6v-8.9h1.6zm5.65 0q-4 0-4-4V16q0-3.24 4-3.24h2.42V9.48h1.6v12.15zm2.42-7.3h-2.42c-1.6 0-2.38.54-2.38 1.63v2.43c0 1.08.8 1.62 2.38 1.62h2.42zM48.3 20v1.62h-3.23q-4 0-4-3.24V16q0-3.24 4-3.24t4 2.44v.8q0 2.44-4 2.44h-2.42c0 1.08.8 1.62 2.42 1.62zm-5.63-3.24h2.42c1.6 0 2.38-.4 2.35-1.22s-.83-1.22-2.4-1.22-2.4.4-2.4 1.22zm9.67 4.86h-1.62v-8.9h4q4 0 4 3.23v5.67h-1.54V16c0-1.08-.8-1.62-2.42-1.62h-2.42zm9.2-12.15h1.63v3.24h2.42v1.64h-2.45v4.05c0 1.07.8 1.6 2.42 1.6h.8v1.63h-.8q-4 0-4-3.24v-4.06h-1.64V12.7h1.6zm8.08 1.63H68V9.46h1.6zm0 10.52H68v-8.9h1.6zm2.38-7.3V12.7h3.23q4 0 4 3.25v5.67h-4q-4 0-4-2.43v-.83q0-2.43 4-2.43h2.47c0-1.08-.8-1.62-2.42-1.62zm5.63 3.25h-2.38c-1.6 0-2.4.4-2.37 1.22s.83 1.2 2.4 1.2h2.42zm1.87-8.1h3.23V20h1.62v1.62h-3.23V11.1H79.5V9.46z" class="a"/></svg>
					  </span>

						<!-- black version -->
					  <!-- <span class="res1-logo">
						  <svg xmlns="http://www.w3.org/2000/svg" width="132.5" height="21.62" viewBox="0 0 132.5 21.62"><title>icon-res1-logo</title><path d="M91.84 3.18A10.7 10.7 0 0 0 88.46.86a10.46 10.46 0 0 0-8.3 0 10.8 10.8 0 0 0-3.36 2.32 11 11 0 0 0-2.27 3.46 10.72 10.72 0 0 0-.8 3.74h4.34a6.12 6.12 0 0 1 .48-2 6.83 6.83 0 0 1 1.36-2 6.4 6.4 0 0 1 2-1.4 5.85 5.85 0 0 1 2.46-.5 5.74 5.74 0 0 1 2.4.52 6.47 6.47 0 0 1 2 1.4 6.66 6.66 0 0 1 1.33 2 6.57 6.57 0 0 1 0 5 6.47 6.47 0 0 1-1.35 2 6.55 6.55 0 0 1-2 1.4 5.48 5.48 0 0 1-.68.25v4.56a10 10 0 0 0 2.4-.7 10.65 10.65 0 0 0 3.4-2.3 11.22 11.22 0 0 0 2.28-3.46A10.6 10.6 0 0 0 95 10.9a10.7 10.7 0 0 0-.85-4.26 11.2 11.2 0 0 0-2.3-3.46M111.43 13.55L102.23.4h-5.18v21.14h3.57V6.14l10.8 15.4h3.84V.4h-3.83v13.15zm10.5 4.05v-4.5h6.24V9.03h-6.24V4.27h10.57V.37h-14.95v21.1h14.95V17.6h-10.57zM0 9.47h4q4 0 4 3.24v.83q0 3.24-3.23 3.24L6.4 19.2 8 21.6H6l-3.17-4.86H1.6v4.86H0zm1.6 5.67H4q2.42 0 2.42-1.62v-.8q0-1.63-2.42-1.63H1.6zM16.48 20v1.62h-3.23q-4 0-4-3.24v-2.43q0-3.24 4-3.24t4 2.45v.8q0 2.44-4 2.44h-2.42q0 1.6 2.42 1.6zm-5.63-3.24h2.42q2.42 0 2.37-1.22t-2.4-1.22q-2.42 0-2.4 1.22zm11.85-2.43q-2.42 0-2.42 1.2 0 .8 2.42.8 4 0 4 2.44 0 2.85-4 2.85t-4-2.43h1.62q0 .8 2.42.8t2.42-1.17q0-1.27-2.42-.9-4 0-4-2.42 0-2.8 4-2.8t4 2.43h-1.62q0-.8-2.42-.8"/><path d="M29.73 11.1h-1.6V9.46h1.6zm0 10.52h-1.6v-8.9h1.6zm5.65 0q-4 0-4-4v-1.67q0-3.24 4-3.24h2.42V9.5h1.6v12.15zm2.42-7.3h-2.42q-2.38 0-2.38 1.63v2.43Q33 20 35.38 20h2.42zM48.3 20v1.62h-3.23q-4 0-4-3.24v-2.43q0-3.24 4-3.24t4 2.45v.8q0 2.44-4 2.44h-2.42q0 1.6 2.42 1.6zm-5.63-3.24h2.42q2.4 0 2.35-1.22t-2.4-1.22q-2.42 0-2.4 1.22zm9.67 4.86h-1.62v-8.9h4q4 0 4 3.23v5.67h-1.54v-5.67q0-1.62-2.42-1.62h-2.42zm9.2-12.15h1.63v3.24h2.42v1.64h-2.45v4.05q0 1.6 2.42 1.6h.8v1.63h-.8q-4 0-4-3.24v-4.06h-1.64V12.7h1.6zm8.08 1.63H68V9.46h1.6zm0 10.52H68v-8.9h1.6zm2.38-7.3V12.7h3.23q4 0 4 3.25v5.67h-4q-4 0-4-2.43v-.83q0-2.43 4-2.43h2.47q0-1.62-2.42-1.62zm5.63 3.25h-2.38q-2.42 0-2.37 1.22t2.4 1.2h2.42zm1.87-8.1h3.23V20h1.62v1.62h-3.23V11.1H79.5V9.46z"/></svg>
					  </span> -->

					<?php if ( $add_ahd == 'Yes' ): ?>

						<!-- white version -->
						<span class="ahd-logo">
						  <svg xmlns="http://www.w3.org/2000/svg" width="132.35" height="28.83" viewBox="0 0 132.35 28.83"><defs><style>.a{fill:#fff;}</style></defs><title>ahd-logo-white</title><path d="M9.64 22.85l-4.5 5.76h11.48v-5.73h-7zm10.6-3.6h9.4v9.36h-9.4zM0 7v21.6h.72L17.62 7zm33.3 21.6h13.56V17.8c0 5.77-5 10.76-13.58 10.8M20.2 9.33v6.32h9.4V7h-9.4v2.33zM16.62 19.9v-6l-4.68 6zM33.22 7c8.7 0 13.65 5 13.65 10.8V7zm0 3.4v14.8c6.8 0 9.8-3.5 9.8-7.4s-3-7.33-9.8-7.4" class="a"/><path d="M128.6 28.7h1.18v-7.23h2.57v-1H126v1h2.57zm-9.85 0h1.18v-6.8l3.74 6.8h1.5v-8.27H124v6.65l-3.65-6.65h-1.6zm-6.16 0h4.6v-1h-3.45v-2.8h3.14v-1h-3.14v-2.45h3.45v-1h-4.62zm-10.9 0h1.2v-7.16l2.72 7.15h1.16l2.73-7.18v7.15h1.2V20.4h-2l-2.55 6.88-2.6-6.87h-2zm-6.18 0h4.63v-1H96.7v-2.8h3.15v-1H96.7v-2.45h3.46v-1h-4.63zm-1.88-8a6.3 6.3 0 0 0-2.43-.42 4.1 4.1 0 0 0-4.35 3.86c0 .13 0 .25 0 .38a4.07 4.07 0 0 0 3.82 4.3h.54a7.5 7.5 0 0 0 2.54-.36v-4.3H90.8v1h1.75v2.5a4.94 4.94 0 0 1-1.33.15 3.08 3.08 0 0 1-3.12-3v-.15a3.08 3.08 0 0 1 2.9-3.28h.26a3.86 3.86 0 0 1 2.27.57zm-9.72 4.93h-3.3l1.65-4.1zm-5.75 3.05h1.23l.85-2.08h4l.84 2.08h1.3l-3.5-8.26h-1.2zm-7.3 0h1.18v-6.8l3.74 6.8h1.5v-8.25h-1.17v6.65l-3.65-6.65h-1.6zm-3.34-3.05h-3.3l1.63-4.1zm-5.75 3.05H63l.84-2.08h4l.84 2.08H70l-3.5-8.26h-1.18zm-9.9 0h1.2v-7.14l2.72 7.15H57l2.74-7.18v7.15h1.18V20.4H59l-2.55 6.88-2.6-6.87h-2zM0 0h131.72v.63H0z" class="a"/></svg>
						</span>

            <!-- black version -->
						<!-- <span class="ahd-logo">
						  <svg xmlns="http://www.w3.org/2000/svg" width="132.35" height="28.83" viewBox="0 0 132.35 28.83"><title>ahd-logo-black</title><path d="M9.64 22.85l-4.5 5.76h11.48v-5.73h-7zm10.6-3.6h9.4v9.36h-9.4zM0 7v21.6h.72L17.62 7zm33.3 21.6h13.56V17.8c0 5.77-5 10.76-13.58 10.8M20.2 9.33v6.32h9.4V7h-9.4v2.33zM16.62 19.9v-6l-4.68 6zM33.22 7c8.7 0 13.65 5 13.65 10.8V7zm0 3.4v14.8c6.8 0 9.8-3.5 9.8-7.4s-3-7.33-9.8-7.4"/><path d="M128.6 28.7h1.18v-7.23h2.57v-1H126v1h2.57zm-9.85 0h1.18v-6.8l3.74 6.8h1.5v-8.27H124v6.65l-3.65-6.65h-1.6zm-6.16 0h4.6v-1h-3.45v-2.8h3.14v-1h-3.14v-2.45h3.45v-1h-4.62zm-10.9 0h1.2v-7.16l2.72 7.15h1.16l2.73-7.18v7.15h1.2V20.4h-2l-2.55 6.88-2.6-6.87h-2zm-6.18 0h4.63v-1H96.7v-2.8h3.15v-1H96.7v-2.45h3.46v-1h-4.63zm-1.88-8a6.3 6.3 0 0 0-2.43-.42 4.1 4.1 0 0 0-4.35 3.86c0 .13 0 .25 0 .38a4.07 4.07 0 0 0 3.82 4.3h.54a7.5 7.5 0 0 0 2.54-.36v-4.3H90.8v1h1.75v2.5a4.94 4.94 0 0 1-1.33.15 3.08 3.08 0 0 1-3.12-3v-.15a3.08 3.08 0 0 1 2.9-3.28h.26a3.86 3.86 0 0 1 2.27.57zm-9.72 4.93h-3.3l1.65-4.1zm-5.75 3.05h1.23l.85-2.08h4l.84 2.08h1.3l-3.5-8.26h-1.2zm-7.3 0h1.18v-6.8l3.74 6.8h1.5v-8.25h-1.17v6.65l-3.65-6.65h-1.6zm-3.34-3.05h-3.3l1.63-4.1zm-5.75 3.05H63l.84-2.08h4l.84 2.08H70l-3.5-8.26h-1.18zm-9.9 0h1.2v-7.14l2.72 7.15H57l2.74-7.18v7.15h1.18V20.4H59l-2.55 6.88-2.6-6.87h-2zM0 0h131.72v.63H0z"/></svg>
						</span> -->

					<?php endif ?>

					</a>
				</div>

			</div><!-- right-column -->

		</div><!-- .site-info -->

		<div class="footer-disclaimer">
			<?php if ( $add_eho == 'Yes'): ?>

				<div class="eho">
					<span class="eho-icons">
						<?php if ( $add_hf == 'Yes' ): ?>

							<!-- white version -->
							<span class="icon-handicap"><svg xmlns="http://www.w3.org/2000/svg" width="25.66" height="29.9" viewBox="0 0 25.66 29.9"><defs><style>.a{fill:#fff;}</style></defs><title>handicap-friendly-icon-white</title><path d="M25.66 25.27c-1.6.5-3.1 1-4.7 1.5-.4-.9-.8-1.8-1.1-2.7-.9-2.1-1.7-4.1-2.6-6.2-.1-.3-.3-.3-.6-.3-3 0-5.9 0-8.9.1-.6 0-.6 0-.7-.6-.2-2.3-.4-4.6-.6-6.8s-.2-3.9-.4-5.8a.76.76 0 0 0-.2-.4A2.86 2.86 0 0 1 6.16 1a2.65 2.65 0 0 1 3-.8 2.9 2.9 0 0 1 1.9 2.5 2.8 2.8 0 0 1-1.8 2.6c-.4.1-.5.3-.4.7C9 7.4 9 8.8 9 10.2c0 .4.2.5.5.5h5.2c.4 0 .5.1.5.5v2H9.66v1.9h8.9a.56.56 0 0 1 .5.3c1.1 2.6 2.1 5.2 3.2 7.9 0 .1.1.2.1.3.7-.2 1.4-.3 2-.5.3-.1.4 0 .5.3.2.5.5 1.2.8 1.9M5.76 10.87c.1 1.1.1 2.2.1 3.2q0 .15-.3.3a10.3 10.3 0 0 0-2.3 3.9 6.6 6.6 0 0 0 1.1 5.3 8 8 0 0 0 9.7 2.4 7.34 7.34 0 0 0 3.6-4.3c0-.1.1-.2.2-.4a7.3 7.3 0 0 0 .3.9c.2.8.5 1.7.7 2.5v.4a11.07 11.07 0 0 1-5.8 4.4c-2.9.8-5 .5-8.1-1.1a10.64 10.64 0 0 1-4.8-6.8 9.6 9.6 0 0 1 2.3-7.9A14.1 14.1 0 0 1 4.16 12c.5-.3 1-.7 1.6-1.1" class="a"/></svg></span>

						  <!-- black version -->
							<!-- <span class="icon-handicap"><svg xmlns="http://www.w3.org/2000/svg" width="25.66" height="29.9" viewBox="0 0 25.66 29.9"><title>handicap-friendly-icon-black</title><path d="M25.66 25.27c-1.6.5-3.1 1-4.7 1.5-.4-.9-.8-1.8-1.1-2.7-.9-2.1-1.7-4.1-2.6-6.2-.1-.3-.3-.3-.6-.3-3 0-5.9 0-8.9.1-.6 0-.6 0-.7-.6-.2-2.3-.4-4.6-.6-6.8s-.2-3.9-.4-5.8a.76.76 0 0 0-.2-.4A2.86 2.86 0 0 1 6.16 1a2.65 2.65 0 0 1 3-.8 2.9 2.9 0 0 1 1.9 2.5 2.8 2.8 0 0 1-1.8 2.6c-.4.1-.5.3-.4.7C9 7.4 9 8.8 9 10.2c0 .4.2.5.5.5h5.2c.4 0 .5.1.5.5v2H9.66v1.9h8.9a.56.56 0 0 1 .5.3c1.1 2.6 2.1 5.2 3.2 7.9 0 .1.1.2.1.3.7-.2 1.4-.3 2-.5.3-.1.4 0 .5.3.2.5.5 1.2.8 1.9M5.76 10.87c.1 1.1.1 2.2.1 3.2q0 .15-.3.3a10.3 10.3 0 0 0-2.3 3.9 6.6 6.6 0 0 0 1.1 5.3 8 8 0 0 0 9.7 2.4 7.34 7.34 0 0 0 3.6-4.3c0-.1.1-.2.2-.4a7.3 7.3 0 0 0 .3.9c.2.8.5 1.7.7 2.5v.4a11.07 11.07 0 0 1-5.8 4.4c-2.9.8-5 .5-8.1-1.1a10.64 10.64 0 0 1-4.8-6.8 9.6 9.6 0 0 1 2.3-7.9A14.1 14.1 0 0 1 4.16 12c.5-.3 1-.7 1.6-1.1"/></svg></span> -->

						<?php endif ?>

						<!-- white version -->
						<span class="icon-eho"><svg xmlns="http://www.w3.org/2000/svg" width="28.77" height="31.99" viewBox="0 0 28.77 31.99"><defs><clipPath id="eho"><path fill="none" d="M0 0h28.77v32H0z"/></clipPath></defs><title>icon-eho</title><g fill="#ffffff"><path d="M14 0L0 8.4v3.42h1.8v10.65h25V11.82h1.9V8.7C24 5.5 19 2.83 14 0m9.7 19.64H5.22V9.5l9.13-5.66A94.23 94.23 0 0 1 23.7 9.5z" clip-path="url(#eho)"/><path d="M9.48 14.28h9.57v3.04H9.48zm-.02-3.88h9.57v3.05H9.46zM3.4 27.1H1.72v-3.17h1.66v.38H2.03v1h1.25v.37H2.03v1.07H3.4v.38z"/><path d="M5.67 27.35L5.32 27a.86.86 0 0 1-.6.2c-.84 0-1.1-1-1.1-1.66s.26-1.67 1.1-1.67 1.12 1 1.12 1.67a2.25 2.25 0 0 1-.33 1.24l.33.34zM5 26.2l.3.3a1.72 1.72 0 0 0 .24-1c0-.75-.3-1.3-.8-1.3s-.78.55-.78 1.3.3 1.3.8 1.3a.57.57 0 0 0 .33-.1l-.26-.27zm3-2.27V26c0 .65-.3 1.2-.92 1.2s-.88-.55-.88-1.14v-2.13h.3v2c0 .7.3.88.6.88s.6-.16.6-.85v-2z" clip-path="url(#eho)"/><path d="M8.74 26.18l-.24.92h-.32L9 23.93h.35l.82 3.17h-.3l-.22-.92zm.8-.38l-.34-1.4-.36 1.4zm1.2.93h1.15v.38H10.4v-3.16h.3v2.8zm3.7-2.8h.3v3.18h-.3v-1.46h-1.2v1.48h-.3v-3.17h.3v1.32h1.2v-1.32z"/><g clip-path="url(#eho)"><path d="M16.17 27.2c-.85 0-1.1-1-1.1-1.68s.25-1.67 1.1-1.67 1.1 1 1.1 1.67-.25 1.67-1.1 1.67m0-3c-.5 0-.8.52-.8 1.27s.3 1.3.8 1.3.8-.55.8-1.3-.3-1.3-.8-1.3"/><path d="M19.08 23.93v2c0 .7-.32.87-.6.87s-.58-.2-.58-.88v-2h-.3V26c0 .6.25 1.14.87 1.14s.92-.55.92-1.2v-2zm2.1.93c0-.5-.3-.65-.57-.65a.5.5 0 0 0-.5.58.37.37 0 0 0 .27.4l.65.2a.78.78 0 0 1 .53.86.85.85 0 0 1-.9 1 .77.77 0 0 1-.68-.3 1.2 1.2 0 0 1-.23-.8H20c0 .57.34.74.63.74a.52.52 0 0 0 .6-.53c0-.33-.1-.44-.5-.56l-.46-.16a.7.7 0 0 1-.5-.75c0-.5.24-1 .8-1 .8 0 .87.65.88 1z"/></g><path d="M21.9 23.93h.32v3.17h-.3zm2.3 0h.3v3.18h-.35L23 24.56h-.02v2.57h-.3v-3.17h.37l1.14 2.57v-2.57z"/><g clip-path="url(#eho)"><path d="M25.9 25.4h1v1.7h-.2l-.07-.4a.86.86 0 0 1-.75.5.8.8 0 0 1-.7-.36 2.14 2.14 0 0 1-.36-1.34c0-.77.34-1.65 1.08-1.65a1 1 0 0 1 1 1h-.3c-.1-.55-.43-.67-.68-.67-.4 0-.75.46-.75 1.3 0 .64.15 1.3.76 1.3a.58.58 0 0 0 .47-.2 1.18 1.18 0 0 0 .25-.85h-.75zM2.75 32c-1 0-1.3-1-1.3-1.67s.3-1.67 1.3-1.67 1.3 1 1.3 1.67S3.75 32 2.75 32m0-3c-.58 0-.93.54-.93 1.3s.35 1.28.93 1.28.93-.54.93-1.3S3.32 29 2.75 29M4.8 31.9h-.37v-3.17h1.2a.8.8 0 0 1 .8.9c0 .43-.22.93-.8.93H4.8zm0-1.7h.7c.33 0 .55-.14.55-.57a.47.47 0 0 0-.53-.53H4.8zm2.4 1.7h-.37v-3.17H8a.8.8 0 0 1 .8.9c0 .43-.22.93-.8.93h-.8zm0-1.7h.7c.32 0 .54-.14.54-.57a.47.47 0 0 0-.53-.53h-.7zm3.16 1.8c-1 0-1.3-1-1.3-1.67s.3-1.67 1.3-1.67 1.3 1 1.3 1.67-.3 1.67-1.3 1.67m0-3c-.58 0-.93.54-.93 1.3s.35 1.28.93 1.28.93-.54.93-1.3-.37-1.28-.95-1.28"/><path d="M12.4 31.9h-.35v-3.17h1.23a.78.78 0 0 1 .88.85.8.8 0 0 1-.37.76c.13.08.3.16.3.6v.57c0 .2 0 .26.13.34v.07h-.44a4.7 4.7 0 0 1-.07-.8c0-.25 0-.56-.48-.56h-.87zm0-1.72h.84c.26 0 .54-.08.54-.55s-.3-.53-.48-.53h-.9z"/></g><path d="M14.38 28.73v.38h.9v2.8h.36v-2.8h.9v-.36H14.4z"/><path d="M18.55 28.73v2c0 .7-.37.87-.7.87s-.68-.2-.68-.88v-2h-.36v2.12a1 1 0 0 0 1 1.14 1.06 1.06 0 0 0 1.1-1.2v-2.05z" clip-path="url(#eho)"/><path d="M21.18 28.73v2.57l-1.34-2.57h-.43v3.18h.37v-2.55l1.36 2.57h.4v-3.17h-.34zm.9 0h.35v3.17h-.36zm.66 0v.38h.9v2.8H24v-2.8h.9v-.36h-2.16zm4.14 0l-.76 1.53-.77-1.53h-.42l1 1.9v1.28h.37v-1.26l1-1.9h-.42z"/></g></svg></span>

						<!-- black version -->
						<!-- <span class="icon-eho"><svg xmlns="http://www.w3.org/2000/svg" width="28.77" height="31.99" viewBox="0 0 28.77 31.99"><defs><clipPath id="eho"><path fill="none" d="M0 0h28.77v32H0z"/></clipPath></defs><title>icon-eho</title><g fill="#231f20"><path d="M14 0L0 8.4v3.42h1.8v10.65h25V11.82h1.9V8.7C24 5.5 19 2.83 14 0m9.7 19.64H5.22V9.5l9.13-5.66A94.23 94.23 0 0 1 23.7 9.5z" clip-path="url(#eho)"/><path d="M9.48 14.28h9.57v3.04H9.48zm-.02-3.88h9.57v3.05H9.46zM3.4 27.1H1.72v-3.17h1.66v.38H2.03v1h1.25v.37H2.03v1.07H3.4v.38z"/><path d="M5.67 27.35L5.32 27a.86.86 0 0 1-.6.2c-.84 0-1.1-1-1.1-1.66s.26-1.67 1.1-1.67 1.12 1 1.12 1.67a2.25 2.25 0 0 1-.33 1.24l.33.34zM5 26.2l.3.3a1.72 1.72 0 0 0 .24-1c0-.75-.3-1.3-.8-1.3s-.78.55-.78 1.3.3 1.3.8 1.3a.57.57 0 0 0 .33-.1l-.26-.27zm3-2.27V26c0 .65-.3 1.2-.92 1.2s-.88-.55-.88-1.14v-2.13h.3v2c0 .7.3.88.6.88s.6-.16.6-.85v-2z" clip-path="url(#eho)"/><path d="M8.74 26.18l-.24.92h-.32L9 23.93h.35l.82 3.17h-.3l-.22-.92zm.8-.38l-.34-1.4-.36 1.4zm1.2.93h1.15v.38H10.4v-3.16h.3v2.8zm3.7-2.8h.3v3.18h-.3v-1.46h-1.2v1.48h-.3v-3.17h.3v1.32h1.2v-1.32z"/><g clip-path="url(#eho)"><path d="M16.17 27.2c-.85 0-1.1-1-1.1-1.68s.25-1.67 1.1-1.67 1.1 1 1.1 1.67-.25 1.67-1.1 1.67m0-3c-.5 0-.8.52-.8 1.27s.3 1.3.8 1.3.8-.55.8-1.3-.3-1.3-.8-1.3"/><path d="M19.08 23.93v2c0 .7-.32.87-.6.87s-.58-.2-.58-.88v-2h-.3V26c0 .6.25 1.14.87 1.14s.92-.55.92-1.2v-2zm2.1.93c0-.5-.3-.65-.57-.65a.5.5 0 0 0-.5.58.37.37 0 0 0 .27.4l.65.2a.78.78 0 0 1 .53.86.85.85 0 0 1-.9 1 .77.77 0 0 1-.68-.3 1.2 1.2 0 0 1-.23-.8H20c0 .57.34.74.63.74a.52.52 0 0 0 .6-.53c0-.33-.1-.44-.5-.56l-.46-.16a.7.7 0 0 1-.5-.75c0-.5.24-1 .8-1 .8 0 .87.65.88 1z"/></g><path d="M21.9 23.93h.32v3.17h-.3zm2.3 0h.3v3.18h-.35L23 24.56h-.02v2.57h-.3v-3.17h.37l1.14 2.57v-2.57z"/><g clip-path="url(#eho)"><path d="M25.9 25.4h1v1.7h-.2l-.07-.4a.86.86 0 0 1-.75.5.8.8 0 0 1-.7-.36 2.14 2.14 0 0 1-.36-1.34c0-.77.34-1.65 1.08-1.65a1 1 0 0 1 1 1h-.3c-.1-.55-.43-.67-.68-.67-.4 0-.75.46-.75 1.3 0 .64.15 1.3.76 1.3a.58.58 0 0 0 .47-.2 1.18 1.18 0 0 0 .25-.85h-.75zM2.75 32c-1 0-1.3-1-1.3-1.67s.3-1.67 1.3-1.67 1.3 1 1.3 1.67S3.75 32 2.75 32m0-3c-.58 0-.93.54-.93 1.3s.35 1.28.93 1.28.93-.54.93-1.3S3.32 29 2.75 29M4.8 31.9h-.37v-3.17h1.2a.8.8 0 0 1 .8.9c0 .43-.22.93-.8.93H4.8zm0-1.7h.7c.33 0 .55-.14.55-.57a.47.47 0 0 0-.53-.53H4.8zm2.4 1.7h-.37v-3.17H8a.8.8 0 0 1 .8.9c0 .43-.22.93-.8.93h-.8zm0-1.7h.7c.32 0 .54-.14.54-.57a.47.47 0 0 0-.53-.53h-.7zm3.16 1.8c-1 0-1.3-1-1.3-1.67s.3-1.67 1.3-1.67 1.3 1 1.3 1.67-.3 1.67-1.3 1.67m0-3c-.58 0-.93.54-.93 1.3s.35 1.28.93 1.28.93-.54.93-1.3-.37-1.28-.95-1.28"/><path d="M12.4 31.9h-.35v-3.17h1.23a.78.78 0 0 1 .88.85.8.8 0 0 1-.37.76c.13.08.3.16.3.6v.57c0 .2 0 .26.13.34v.07h-.44a4.7 4.7 0 0 1-.07-.8c0-.25 0-.56-.48-.56h-.87zm0-1.72h.84c.26 0 .54-.08.54-.55s-.3-.53-.48-.53h-.9z"/></g><path d="M14.38 28.73v.38h.9v2.8h.36v-2.8h.9v-.36H14.4z"/><path d="M18.55 28.73v2c0 .7-.37.87-.7.87s-.68-.2-.68-.88v-2h-.36v2.12a1 1 0 0 0 1 1.14 1.06 1.06 0 0 0 1.1-1.2v-2.05z" clip-path="url(#eho)"/><path d="M21.18 28.73v2.57l-1.34-2.57h-.43v3.18h.37v-2.55l1.36 2.57h.4v-3.17h-.34zm.9 0h.35v3.17h-.36zm.66 0v.38h.9v2.8H24v-2.8h.9v-.36h-2.16zm4.14 0l-.76 1.53-.77-1.53h-.42l1 1.9v1.28h.37v-1.26l1-1.9h-.42z"/></g></svg></span> -->
					</span>

					<span class="eho-text">We pledge to the letter and spirit of U.S. policy for the achievement of equal housing opportunity throughout the nation. We encourage and support an affirmative advertising and marketing program in which there are no barriers to obtaining housing because of race, color, religion, sex, handicap, familial status or national origin</span>

				</div><!-- eho -->

			<?php endif ?>

			<span id="mms">Site by: <a href="http://www.mm4solutions.com" target="_blank">Millennium Marketing Solutions</a></span>
		</div>
	</footer><!-- #colophon -->

</div><!-- #end-page -->

<?php wp_footer(); ?>

</body>
</html>
