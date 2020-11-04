                    <a href="<?php the_permalink(); ?>" class="profile__item">
                      <div class="profile__img cover-slide">
                        <?php the_post_thumbnail( null, 'class=img-zoom' ); ?>
                      </div>
                      <div class="profile__text">
                        <h3><?php the_title(); ?></h3>
                        <p>
                          <?php echo get_the_excerpt(); ?>
                        </p>
                        <p class="more-str">
                          MORE
                          <i class="fas fa-angle-double-right"></i>
                        </p>
                      </div>
                    </a>

                    