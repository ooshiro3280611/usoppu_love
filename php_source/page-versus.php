<?php get_header(); ?>
                  <div class="versus__items subpage-pt">
<?php
$terms = get_terms( 'history' );
foreach( $terms as $term ) : 
  include 'content-versus.php';
endforeach;
?>
                  </div>
<?php get_footer(); ?>