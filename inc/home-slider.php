<?php
/**
 * Residential One Properties Homepage Carousel
 *
 * @package Residential_One_Properties
 */

function resone_template_homepage_slider() {

  if( is_front_page() ) {
    if( function_exists('get_field') ) {

      $addCarousel = get_field('add_a_carousel_to_the_hompage');

      if( $addCarousel == 'Yes' && have_rows('slides') ): ?>

        <div id="home-carousel" class="carousel">
          <ul>

          <?php while ( have_rows('slides') ) : the_row(); ?>

            <li>

            <?php

              $img = get_sub_field('slide_image') ?>

              <img src="<?php echo esc_url( $img['sizes']['home-carousel-slide'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" description="<?php echo esc_attr( $img['description'] ); ?>">

            </li>

          <?php endwhile; ?>

          </ul>

          <?php

          $rows     = get_field('slides');
          $rowCount = count($rows); ?>

          <ol class="carousel-nav">

          <?php for ($i = 1; $i <= $rowCount; $i++) { ?>

            <li><a href="#"><?php echo $i; ?></a></li>

          <?php } ?>

          </ol>
        </div><!-- #home-carousel -->

      <?php endif;
    }
  }
}