<?php
/**
 * Residential One Properties Community Page Map
 *
 * @package Residential_One_Properties
 */

function resone_template_community_map() {
  if( function_exists( 'get_field' ) ) {
    $lat = get_field('latitude', 'company-information');
    $lng = get_field('longitude', 'company-information');

    if($lat && $lng) { ?>
      <section class="community-map">
        <div id="map-canvas"></div>
      </section>

      <?php wp_enqueue_script( 'resone-template-directions', get_template_directory_uri() . '/js/min/directions-map-min.js', array(), '20150904', true );
    }
  }
}


