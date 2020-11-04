<?php get_header(); ?>
                  <div class="versus__items subpage-pt">
<?php
$term = get_specific_posts( 'battle', 'history', $term, -1 );
if ( $term->have_posts() ):
  while ( $term->have_posts() ): $term->the_post();
    get_template_part( 'content-tax' );
  endwhile;
  wp_reset_postdata();
endif;
?>
                  </div>
<?php get_footer(); ?>