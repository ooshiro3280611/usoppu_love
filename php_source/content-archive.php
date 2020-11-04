                    <a class="news__link" href="<?php the_permalink(); ?>">
                      <div class="news__body">
                        <time class="news__release"><?php the_time( 'Y.m.d' ); ?></time>
                        <p class="title">
                          <?php the_title(); ?>
                        </p>
                      </div>
                    </a>