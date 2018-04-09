<?php
/**
 * Residential One Properties Photo Gallery
 *
 * @package Residential_One_Properties
 */

function resone_template_photo_gallery() {
  if ( function_exists( 'get_field' ) ) {

    $images = get_field('gallery');

    if( $images ): ?>

      <section class="gallery">
        <ul>
          <?php foreach( $images as $img ): ?>
            <li>
              <a href="<?php echo $img['url']; ?>" class="fp-trigger" data-imagelightbox="a"><img src="<?php echo esc_url( $img['sizes']['gallery'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" description="<?php echo esc_attr( $img['description'] ); ?>"></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </section>

    <?php endif;

  }
}


