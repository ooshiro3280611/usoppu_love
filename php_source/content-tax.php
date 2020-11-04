                    <a class="versus__item" href="<?php the_permalink(); ?>">
                      <div class="versus__img cover-slide">
                        <?php the_post_thumbnail( null, 'class=img-zoom' ); ?>
                      </div>
                      <div class="versus__text">
                        <h2 class="versus__text-title"><?php the_title(); ?></h2>
                        <p class="versus__desc">
                          <?php echo get_the_excerpt(); ?>
                        </p>
                        <p class="versus__detail">詳細ページへ</p>
                      </div>
                    </a>