<?php
/**
 * Residential One Properties Contact Page Sidebar
 *
 * @package Residential_One_Properties
 */

function resone_template_contact_page_sidebar() {
  if(is_page_template( 'page-contact.php' ) && function_exists( 'acf_add_options_page' ) ) {
    if ( function_exists( 'get_field' ) ) {
      $add    = get_field('address', 'company-information');
      $city   = get_field('city', 'company-information');
      $state  = get_field('state', 'company-information');
      $zip    = get_field('zip', 'company-information');
      $ph     = get_field('phone', 'company-information');
      $fx     = get_field('fax', 'company-information');
      $email  = get_field('email', 'company-information');
      $hours  = get_field('office_hours', 'company-information');

      if ($hours) {

        if( have_rows('office_hours', 'company-information') ): ?>

            <div class="office-hours">
              <h2>Office Hours</h2>

            <?php while( have_rows('office_hours', 'company-information') ): the_row();

                $days = get_sub_field('days');
                $hours = get_sub_field('hours');

                ?>

                <div class="hours">

                    <?php if( !empty($days) ) : ?>
                      <span class="day"><?php echo esc_html( $days ); ?>: </span>
                      <span class="hours"><?php echo esc_html( $hours ); ?></span>
                    <?php endif; ?>

                </div>

            <?php endwhile; ?>

            </div>

        <?php endif;
      }

      if( $ph || $fx ) { ?>

        <div id="address-phone">
          <h2>Phone/Fax</h2>

          <?php

          if($ph): ?>
            <span class="side-phone"><a href="tel:<?php echo esc_html( $ph ); ?>" class="tel">Phone: <?php echo esc_html( $ph ); ?></a></span>
          <?php endif;

          if($fx): ?>
            <span class="side-fax">Fax: <?php echo esc_html( $fx ); ?></span>
          <?php endif;

          ?>

        </div>

        <?php
      }

      if( $add || $city || $state || $zip ) {
        ?>
        <div id="directions">
          <h2>Find Us</h2>

          <?php

          if( $add ): ?>
            <span class="side-address"><?php echo esc_html( $add ); ?></span>
          <?php endif;

          if( $city || $state || $zip ): ?>

            <span><?php echo esc_html( $city ); ?>, </span>
            <span><?php echo esc_html( $state ); ?></span>
            <span><?php echo esc_html( $zip ); ?></span>

          <?php endif;

          ?>

          <?php if ( function_exists( 'resone_template_directions_map' ) ) {
              resone_template_directions_map();
          }  ?>

        </div>

        <?php
      }
    }
  }
}

function resone_template_directions_map() {
  if( function_exists( 'get_field' ) ) {
    $lat = get_field('latitude', 'company-information');
    $lng = get_field('longitude', 'company-information');

    if($lat && $lng) { ?>
      <div id="map-canvas"></div>
      <form id="get-directions">
        <label>Starting Address: <input id="start" type="text"></label>
        <input id="end" value="<?php echo $lat; ?>, <?php echo $lng; ?>" type="hidden">
        <div id="response-panel"></div>
        <input class="directions-submit-button" value="Get Directions" type="submit">
      </form>

      <?php wp_enqueue_script( 'resone-template-directions', get_template_directory_uri() . '/js/min/directions-map-min.js', array(), '20150904', true );
    }
  }
}