<?php
/**
 * The sidebar containing the Specials widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Residential_One_Properties
 */

?>

<aside id="left-secondary">

  <?php if( is_front_page() && function_exists( 'resone_template_specials_sidebar' ) ) {
    resone_template_specials_sidebar();
  } ?>

  <?php if( is_front_page() && function_exists( 'mm4_you_add_quick_contact_form' ) ) {

    if ( function_exists( 'get_field' ) ) {
      $add_quick_form = get_field( 'quick_contact_form' );

      if( $add_quick_form == 'Yes') {
        mm4_you_add_quick_contact_form();
      }
    }
  } ?>

</aside><!-- #secondary -->