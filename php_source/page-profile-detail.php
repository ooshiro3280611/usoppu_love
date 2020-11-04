<?php
/*
Template Name: 狙撃王の歴史
*/
get_header();
if( have_rows( 'lie_and_truth' ) ):
    while( have_rows( 'lie_and_truth' ) ):the_row();
?>
                  <div class="page-text-wrap">
                    <div class="lie-text">
                      <p>
                        <?php the_sub_field( 'lie' ); ?>
                      </p>
                    </div>
                    <p class="truth-message">
                      クリックすると真実がスライドします
                    </p>
                    <div class="arrow">
                      <div class="arrow__down arrow__opa">
                        <i class="fas fa-long-arrow-alt-down"></i
                        ><i class="fas fa-long-arrow-alt-down"></i
                        ><i class="fas fa-long-arrow-alt-down"></i
                        ><i class="fas fa-long-arrow-alt-down"></i
                        ><i class="fas fa-long-arrow-alt-down"></i>
                      </div>
                      <div class="arrow__up">
                        <i class="fas fa-long-arrow-alt-up"></i
                        ><i class="fas fa-long-arrow-alt-up"></i
                        ><i class="fas fa-long-arrow-alt-up"></i
                        ><i class="fas fa-long-arrow-alt-up"></i
                        ><i class="fas fa-long-arrow-alt-up"></i>
                      </div>
                    </div>
                    <p class="return-message">
                      クリックすると戻ります
                    </p>
                    <div class="truth-text">
                      <p class="apologize"><?php the_sub_field( 'truth_red_font' ); ?></p>
                      <p><?php the_sub_field( 'truth' ); ?></p>
                    </div>
                  </div>
<?php
  endwhile;
endif;
get_footer( 'real' )
?>