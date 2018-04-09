<?php
/**
 * Residential One Properties Specials Sidebar
 *
 * @package Residential_One_Properties
 */

function resone_template_specials_sidebar() {
  if ( function_exists( 'get_field' ) ) {
    $header     = get_field( 'specials_header', 'specials' );
    $content    = get_field( 'specials_content', 'specials' );
    $details    = get_field( 'specials_details', 'specials' );
    $disclaimer = get_field( 'specials_disclaimer', 'specials' );

    if( $header ): ?>

    <div class="specials">

      <?php if ( $header ): ?>
        <h2><?php echo esc_html( $header ); ?></h2>
      <?php endif ?>

      <hr>

      <?php if ( $content ): ?>
        <h3><?php echo esc_html( $content ); ?></h3>
      <?php endif ?>

      <?php if ( $details ):
        echo $details;
      endif ?>

      <?php if ( $disclaimer ): ?>
        <p class="disclaimer"><?php echo esc_html( $disclaimer ); ?></p>
      <?php endif ?>

    </div>

    <?php endif;
  }
}
