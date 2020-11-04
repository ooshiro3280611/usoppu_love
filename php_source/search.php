<?php get_header(); ?>
                  <form
                    class="search-lesult__form"
                    role="search"
                    method="get"
                    action="<?php echo esc_url( home_url() ); ?>"
                  >
                    <div class="search-lesult__box">
                      <input
                        type="text"
                        name="s"
                        class="search-lesult__input"
                        placeholder="キーワードを入力してください"
                        value="<?php the_search_query(); ?>"
                      />
                      <button type="submit" class="search-ja-btn">
                        検索
                      </button>
                    </div>
                  </form>
                  <div class="search-lesult__wrap">
<?php if ( get_search_query() ): ?>
                    <div class="search-lesult__head">
                      <h3>「<?php the_search_query(); ?>」の検索結果</h3>
                      <div class="total">
                        <p>全<?php echo $wp_query->found_posts; ?>件</p>
                      </div>
                    </div>
<?php endif; ?>
                    <ul class="search-lesult__items">
<?php
if ( have_posts() && get_search_query() ):
  while( have_posts() ) : the_post();
?>
                      <li class="search-lesult__item">
                        <a href="<?php the_permalink(); ?>">
                          <div class="search-lesult__item-wrapper">
                            <div class="search-lesult__item-img">
<?php
$image = get_the_post_thumbnail( $post->ID, 'search' );
if ( $image ):
  echo $image;
else:
  echo '<img src="'. get_template_directory_uri().'/assets/images/search.png" />';
endif;
?>
                            </div>
                            <dl>
                              <dt><?php the_title(); ?></dt>
                              <dd class="search-lesult__desc">
                                <?php echo get_the_excerpt(); ?>
                              </dd>
                            </dl>
                          </div>
                        </a>
                      </li>
<?php endwhile; ?>
                    </ul>
                    <div class="pager">
<?php
if ( function_exists( 'page_navi' ) ):
  page_navi();
endif;
?>
                    </div>
<?php elseif( ! get_search_query() ): ?>
                    <p class="search__no">検索ワードが入力されていません</p>
<?php else: ?>
                    <p class="search__not-found">該当する記事は見つかりませんでした。</p>
<?php endif; ?>
                  </div>
<?php get_footer(); ?>