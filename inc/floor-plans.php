<?php
/**
 * Residential One Properties Floor Plans
 *
 * @package Residential_One_Properties
 */

function resone_template_floor_plans() {
  if ( function_exists( 'get_field' ) ) {
    $floor_plan = get_field( 'floor_plan' );
    $disclaimer = get_field( 'floor_plan_disclaimer' );

    if( $floor_plan ) {
      if( have_rows('floor_plan') ): ?>

          <section class="floorplans">

          <?php while( have_rows('floor_plan') ): the_row();

              $style = get_sub_field('floorplan_style');
              $bed   = get_sub_field('number_of_bedrooms');
              $bath  = get_sub_field('number_of_bathrooms');
              $price = get_sub_field('price');
              $img   = get_sub_field('floor_plan_image'); ?>

              <div class="floorplan">
                <hr>

                <div class="floorplan-inner-wrapper">
                  <div class="description">

                    <?php if( !empty($style) ) : ?>

                      <h2><?php echo esc_html( $style ); ?></h2>

                    <?php endif; ?>

                    <?php if( !empty($bed) ) : ?>

                      <span>Bed: <span class="accent-color"><?php echo esc_html( $bed ); ?></span></span>

                    <?php endif; ?>

                    <?php if( !empty($bath) ) : ?>

                      <span>Bath: <span class="accent-color"><?php echo esc_html( $bath ); ?></span></span>

                    <?php endif; ?>

                    <?php if( !empty($price) ) : ?>

                      <span>Rent: <span class="accent-color"><?php echo esc_html( $price ); ?></span></span>

                    <?php endif; ?>

                  </div><!-- description -->

                  <?php if( !empty($img) ) : ?>

                  <div class="img-wrapper">

                    <a href="<?php echo $img['url']; ?>" class="fp-trigger" data-imagelightbox="a"><img src="<?php echo esc_url( $img['sizes']['floorplans'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" description="<?php echo esc_attr( $img['description'] ); ?>"></a>

                  </div><!-- img-wrapper -->

                  <?php endif; ?>

                </div>

              </div><!-- floorplan -->

          <?php endwhile; ?>

          <?php if( $disclaimer ): ?>

            <p class="floor-plan-disclaimer"><?php echo $disclaimer; ?></p>

          <?php endif; ?>

          </section>

      <?php endif;
    }
  }
}
