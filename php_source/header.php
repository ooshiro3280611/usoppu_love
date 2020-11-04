<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

 
    <link
      href="https://fonts.googleapis.com/css?family=Kameron:400,700|Noto+Sans+JP&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
      rel="stylesheet"
    />
    
    <title><?php echo wp_get_document_title(); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div id="global-container">
      <div id="container">
        <div class="mobile-menu__cover"></div>
        <div class="nav-trigger"></div>
        <header class="header">
          <div class="header__inner">
            <div class="logo">
              <span class="logo__position">狙撃王</span>
              <span class="logo__name"><i>ウソップ</i></span>
            </div>
            <nav class="header__nav header__nav-open">
<?php
wp_nav_menu(
  array(
    'theme_location' => 'place_global',
    'container' => false
  )
)
?>
            </nav>
            <form class="search-form" role="search" method="get" action="<?php echo esc_url( home_url() ); ?>">
              <div class="search-box">
                <input
                  type="text"
                  class="search-input"
                  name="s"
                  placeholder="キーワードを入力してください"
                />
                <button type="submit" class="button-submit">
                  <i class="fas fa-search"></i>
                </button>
              </div>
              <div class="search-buttons">
                <button type="button" class="close-icon" id="close-icon-js">
                  <i class="fas fa-times"></i>
                </button>
                <button
                  type="button"
                  class="search-icon search-js"
                  id="search-js"
                >
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </form>
            <button class="mobile-menu__btn">
              <span></span>
              <span></span>
              <span></span>
            </button>
          </div>
        </header>
<?php if( is_front_page() ): ?>
        <div id="content">
          <div class="hero">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="hero__title">
                    ルッフィィ
                  </div>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/usoppu1.jpg" />
                </div>
                <div class="swiper-slide">
                  <div class="hero__title">
                    ぎャああ！！
                  </div>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/usoppu2.jpg" />
                </div>
                <div class="swiper-slide">
                  <div class="hero__title">ルフィを信じろ</div>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/usoppu3.jpeg" />
                </div>
              </div>
            </div>
          </div>
          <div id="main-content">
            <main>
<?php else: ?>
        <div id="content" class="subpage-pt">
          <div id="main-content">
            <main>
              <div class="page-contents">
                <div class="page-head">
                  <?php echo get_main_image(); ?>
                  <div class="wrapper">
                    <span class="page-title-en"><?php echo get_main_en_title(); ?></span>
                    <h2 class="page-title"><?php echo get_main_title(); ?></h2>
                  </div>
                </div>
                <div class="page-container">
<?php
if ( function_exists('bread_crumb') ):
  bread_crumb();
endif;
?>
<?php endif; ?>