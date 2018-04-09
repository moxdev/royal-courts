<?php
/**
 * Residential One Properties Features Sidebar
 *
 * @package Residential_One_Properties
 */

function resone_template_features_sidebar() {
  if ( function_exists( 'get_field' ) ) {
    $add_apartment = get_field( 'add_an_apartment_features_section' );
    $add_community = get_field( 'add_an_community_features_section' );
    $disclaimer    = get_field( 'features_disclaimer' );

    if ( $add_apartment || $add_community ) { ?>

      <div class="right-sidebar">

        <?php if ( $add_apartment ):
          $apt_header = get_field( 'apartment_header' );
          $apt_editor = get_field( 'apartment_features' ); ?>

            <div class="features">
              <h2><?php echo esc_html( $apt_header ); ?></h2>
              <div class="wrapper">
                <?php echo $apt_editor; ?>
              </div>
            </div>

        <?php endif; ?>

        <?php if ( $add_community ):
          $com_header = get_field( 'community_header' );
          $com_editor = get_field( 'community_features' ); ?>

            <div class="features">
              <h2><?php echo esc_html( $com_header ); ?></h2>
              <div class="wrapper">
                <?php echo $com_editor; ?>
              </div>
            </div>

        <?php endif; ?>

        <?php if ( $disclaimer ): ?>

          <p class="features-disclaimer"><?php echo esc_html( $disclaimer ) ?></p>

        <?php endif ?>

      </div>

      <?php
    }
  }
}
