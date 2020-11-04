 <?php get_header(); ?>
              <section id="profile" class="profile">
<?php
$profile_obj = get_page_by_path( 'profile' );
$post = $profile_obj;
setup_postdata( $post );
$profile_title = get_the_title();
?>
                <div class="profile__title">
                  <h2 class="main-title tween-animate-title">
                    <?php the_title(); ?>
                  </h2>
                  <p class="sub-title tween-animate-title">
                    これが伝説の足跡だ！！
                  </p>
                </div>
<?php wp_reset_postdata(); ?>
                <div class="profile__inner">
                  <div class="profile__items">
<?php
$profile_page = get_child_pages( -1, $profile_obj->ID );
if( $profile_page->have_posts() ):
  while( $profile_page->have_posts() ) : $profile_page->the_post();
?>
                    <a href="<?php the_permalink(); ?>" class="profile__item">
                      <div class="profile__img cover-slide">
                        <?php the_post_thumbnail( 'common', 'class=img-zoom' ); ?>
                      </div>
                      <div class="profile__text">
                        <h3><?php the_title(); ?></h3>
                        <p>詳細ページへ</p>
                      </div>
                    </a>
<?php
  endwhile;
  wp_reset_postdata();
endif;
?>
                  </div>

                  <a class="detail-btn btn-cubic" href="<?php echo esc_url(home_url('profile')) ?>"><span class="hovering">Click</span
                    ><span class="default">ProfilePage</span></a
                  >
                </div>
              </section>

              <section id="news" class="news">
<?php $term_obj = get_term_by( 'slug', 'news', 'category' ); ?>
                <div class="profile__title">
                  <h2 class="main-title tween-animate-title">
                    <?php echo $term_obj->name; ?>
                  </h2>
                  <p class="sub-title tween-animate-title">
                    ウソップを常に追え
                  </p>
                </div>
                <ul class="news__items">
<?php
$news_posts = get_specific_posts( 'post', 'category', 'news', 3 );
if( $news_posts->have_posts() ):
  while( $news_posts->have_posts() ): $news_posts->the_post();
?>
                  <li class="news__item">
                    <a href="<?php the_permalink(); ?>">
                      <time class="time"><?php the_time('Y.m.d') ?></time>
                      <p class="news__item-title"><?php the_title(); ?></p>
                      <p class="news__item-desc">
                        <?php echo get_the_excerpt(); ?>
                      </p>
                    </a>
                  </li>
<?php
  endwhile;
  wp_reset_postdata();
endif;
?>
                </ul>
                <a class="detail-btn btn-cubic" href="<?php echo esc_url(get_term_link($term_obj)); ?>"
                  ><span class="hovering">Click</span
                  ><span class="default">NewsPage</span></a
                >
              </section>

              <section id="versus" class="versus">
                <div class="versus__wrap" id="versus__wrap">
<?php
$versus_obj = get_page_by_path( 'versus' );
$post = $versus_obj;
setup_postdata( $post );
$versus_title = get_the_title();
?>
                  <div class="versus__title">
                    <h2 class="main-title tween-animate-title">
                      <?php the_title(); ?>
                    </h2>
                    <p class="sub-title tween-animate-title">
                      これがゴッドウソップの戦いだ！！！
                    </p>
                  </div>
<?php wp_reset_postdata(); ?>
                  <div class="versus__items">
<?php
$versus_pages = get_specific_posts( 'battle', 'history', '', 3 );
if( $versus_pages->have_posts() ) :
  while( $versus_pages->have_posts() ) : $versus_pages->the_post();
?>
                    <a href="<?php the_permalink(); ?>" class="versus__item">
                      <div class="versus__img cover-slide">
                        <?php the_post_thumbnail( null, 'class=img-zoom' ); ?>
                      </div>
                      <div class="versus__text">
                        <h2 class="versus__text-title"><?php the_title(); ?></h2>
                        <p class="versus__desc">
                          <?php echo get_flexble_excerpt( 40 ); ?>
                        </p>
                        <p class="versus__detail">詳細ページへ</p>
                      </div>
                    </a>
<?php
  endwhile;
  wp_reset_postdata();
endif;
?>
                  </div>

                  <a class="detail-btn btn-cubic" href="<?php echo esc_url(home_url( 'versus' )); ?>"
                    ><span class="hovering">Click</span
                    ><span class="default">VersusPage</span></a
                  >
                </div>
              </section>

              <section class="like">
                <div class="like__inner">
<?php
$like_page = get_page_by_path( 'like' );
$post = $like_page;
setup_postdata( $post );
?>
                  <div class="like__img cover-slide">
                    <?php the_post_thumbnail( null, 'class=img-zoom' ); ?>
                  </div>

                  <div class="like__texts appear left">
                    <div class="like__text-inner">
                      <div class="like__title main-title item">
                        <?php the_title(); ?>
                      </div>
                      <div class="like__sub sub-title item">
                        愛される理由
                      </div>
                      <div class="like__description item">
                        <?php echo get_the_excerpt(); ?>
                      </div>
                      <div class="like__btn item">
                        <a class="btn filled" href="<?php echo esc_url(home_url('like')); ?>">LikePage</a>
                      </div>
                    </div>
                  </div>
<?php wp_reset_postdata(); ?>
                </div>
              </section>
<?php get_footer(); ?>