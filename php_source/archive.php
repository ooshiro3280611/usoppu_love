<?php get_header(); ?>
                  <div class="news__list">
<?php
if ( have_posts() ):
  while( have_posts() ) : the_post();
         get_template_part( 'content-archive' );
  endwhile;
endif;
?>
                  </div>
                  <div class="pager">
<?php
if (function_exists( 'page_navi' )):
  page_navi();
endif;
?>
                  </div>
<?php get_footer(); ?>