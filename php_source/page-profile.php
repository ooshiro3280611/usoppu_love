<?php get_header(); ?>
                  <div class="profile__items subpage-pt">
<?php
$common_pages = get_child_pages();
if( $common_pages->have_posts() ):
  while( $common_pages->have_posts() ): $common_pages->the_post();
    get_template_part( 'content-common' );
  endwhile;
  wp_reset_postdata();
endif;
?>
                  </div>
<?php get_footer(); ?>