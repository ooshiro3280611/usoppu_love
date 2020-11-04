<?php
/*
Template Name: サイドバーあり
Template Post Type: battle
*/
get_header();
?>
                  <div class="vs-villain">
                    <div class="battle">
<?php
if( have_posts() ):
    while( have_posts() ):the_post();
        get_template_part( 'content-single' );
    endwhile;
endif;
?>
                    </div>
<?php get_sidebar(); ?>
                  </div>
<?php get_footer(); ?>