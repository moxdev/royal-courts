<?php
/**
 * Residential One Properties Specials Callout for Floor Plans Page
 *
 * @package Residential_One_Properties
 */

function resone_template_specials_callout() {
  if ( function_exists( 'get_field' ) ) {
    $sp_header     = get_field( 'specials_header', 'specials' );
    $sp_content    = get_field( 'specials_content', 'specials' );
    $sp_details    = get_field( 'specials_details', 'specials' );
    $sp_disclaimer = get_field( 'specials_disclaimer', 'specials' );

    if( $sp_content ): ?>

    <div class="specials-callout">
      <div class="callout-wrapper">

        <?php if ( $sp_content ): ?>
          <span class="callout-special"><?php echo esc_html( $sp_header ); ?>: <?php echo esc_html( $sp_content ); ?></span>
        <?php endif ?>

        <?php if ( $sp_details ):  ?>
          <span class="callout-details"><?php echo $sp_details; ?></span>
        <?php endif ?>

        <?php if ( $sp_disclaimer ):  ?>
          <span class="callout-disclaimer"><?php echo esc_html( $sp_disclaimer ); ?></span>
        <?php endif ?>

      </div>
    </div>

    <?php endif;
  }
}
