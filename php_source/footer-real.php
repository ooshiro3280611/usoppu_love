<?php if( is_front_page() ): ?>
            </main>
          </div>
        </div>
<?php else: ?>
            </div>
                <!-- #page-container -->
              </div>
              <!-- #page-contents -->
            </main>
          </div>
        </div>
<?php endif; ?>
        <footer class="footer">
          <div class="footer__inner">
            <div class="logo">
              <span class="logo__position">狙撃王</span>
              <span class="logo__name"><i>ウソップ</i></span>
            </div>
            <nav class="footer__nav">
<?php
wp_nav_menu(
  array(
    'theme_location' => 'place_footer',
    'container' => false,
  )
  );
?>
              <div class="footer__copyright item">
                &copy; Oo Ken
              </div>
            </nav>
          </div>
        </footer>
      </div>
      <nav class="mobile-menu">
        <div class="logo">
          <span class="logo__position">狙撃王</span>
          <span class="logo__name">ウソップ</span>
        </div>
<?php
wp_nav_menu(
  array(
    'theme_location' => 'place_global',
    'container' => false
  )
)
?>
        <form
          class="mobile__search-form  mobile-menu__item"
          role="search"
          method="get"
          action="<?php echo esc_url( home_url() ); ?>"
        >
          <div class="mobile__search-buttons">
            <button
              type="button"
              class="mobile__close-icon"
              id="mobile__close-icon-js"
            >
              <i class="fas fa-times"></i>
            </button>
            <button
              type="button"
              class="mobile__search-icon mobile__search-js"
              id="mobile__search-js"
            >
              <i class="fas fa-search"></i>
            </button>
          </div>
          <div class="mobile__search-box">
            <input
              type="text"
              class="search-input"
              name="s"
              placeholder="キーワードを入力してください"
            />
            <button type="submit" class="mobile__button-submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </form>
      </nav>
    </div>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/libs/really-open.js"></script>
<?php wp_footer(); ?>
  </body>
</html>
