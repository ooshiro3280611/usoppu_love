                    <a class="versus__item" href="<?php echo get_term_link( $term ); ?>">
                      <div class="versus__img cover-slide">
<?php
$image_id = get_field( 'history_image', $term->taxonomy.'_'.$term->term_id );
echo wp_get_attachment_image( $image_id, null, false, array( 'class'=>'img-zoom' ) );
?>
                      </div>
                      <div class="versus__text">
                        <h2 class="versus__text-title"><?php echo $term->name; ?></h2>
                        <p class="versus__desc">
                          <?php echo $term->description; ?>
                        </p>
                        <p class="versus__detail">詳細ページへ</p>
                      </div>
                    </a>