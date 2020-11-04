<?php
/*
Template Name: サイドバーあり
*/
get_header();
?>
                  <div class="vs-villain">
                    <div class="battle">
<?php
if( have_posts() ):
    while( have_posts() ):the_post();
        the_content();
    endwhile;
endif;
?>
                    </div>
<?php get_sidebar(); ?>
                  </div>
<?php get_footer(); ?>