<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Residential_One_Properties
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">

  <?php if( is_front_page() && function_exists( 'resone_template_features_sidebar' ) ) {
    resone_template_features_sidebar();
  } ?>

	<?php if( is_page_template( 'page-contact.php' ) && function_exists( 'resone_template_contact_page_sidebar' ) ) {
    resone_template_contact_page_sidebar();
  } ?>

</aside><!-- #secondary -->