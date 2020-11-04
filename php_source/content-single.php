                    <div class="news-page__wrap">
                      <time class="news-page__time"><?php the_time( 'Y.m.d' ); ?></time>
                      <p class="news-page__title">
                        <?php the_title(); ?>
                      </p>
                      <div class="news-page__body">
                        <p>
                          <?php the_content(); ?>
                        </p>
                      </div>
                    </div>
                    <div class="more">
<?php
$next_post = get_next_post();
$prev_post = get_previous_post();
if ( $next_post ):
?>
                      <div class="next">
                        <a class="news-page__link next-link" href="<?php echo get_permalink( $next_post->ID ); ?>"
                          ><i class="fas fa-arrow-circle-left"></i
                          ><span>NEXT</span
                          ></a>
                      </div>
<?php
endif;
if ( $prev_post ):
?>
                      <div class="prev">
                        <a class="news-page__link prev-link" href="<?php echo get_permalink( $prev_post->ID ); ?>"
                          ><span>PREV</span><i class="fas fa-arrow-circle-right"></i
                        ></a
                        >
                      </div>
<?php endif; ?>
                    </div>