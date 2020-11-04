<?php
function my_enqueue_scripts() {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', array(), '1.11.1');
        wp_enqueue_style( 'loader_css', get_template_directory_uri(). '/assets/css/loader.css', array() );
        wp_enqueue_script('pace_js', get_template_directory_uri(). '/assets/js/vendors/pace.js', array());
        wp_enqueue_style( 'swiper_min_css', get_template_directory_uri(). '/assets/css/vendors/swiper.min.css', array() );
        wp_enqueue_script('tweenMax_min_js', get_template_directory_uri(). '/assets/js/vendors/TweenMax.min.js', array());
        wp_enqueue_script('scroll_polyfill_js', get_template_directory_uri(). '/assets/js/vendors/scroll-polyfill.js', array());
        wp_enqueue_script('swiper_min_js', get_template_directory_uri(). '/assets/js/vendors/swiper.min.js', array());
        wp_enqueue_script('bundle_js', get_template_directory_uri(). '/assets/js/main.js', array());
    }
    add_action('wp_enqueue_scripts', 'my_enqueue_scripts');
//ヘッダー、フッターのカスタムメニュー化
register_nav_menus(
    array(
        'place_global' => 'グローバル',
        'place_footer' => 'フッターナビ',
    )
);

// メイン画像上にテンプレートごとの文字列を表示
function get_main_title() {
    if ( is_singular( 'post' ) ):
        $category_obj = get_the_category();
        return $category_obj[0]->name;
    elseif ( is_page() ):
        return get_the_title();
    elseif ( is_category() || is_tax() ):
        return single_cat_title();
    elseif( is_search() ):
        return 'サイト内検索結果';
    elseif( is_404() ):
        return 'ページが見つかりません';
    elseif( is_singular( 'battle' ) ):
        global $post;
        $term_obj = get_the_terms( $post->ID, 'history' );
        return $term_obj[0]->name;
    endif;
}

// 子ページを取得する関数
function get_child_pages( $number = -1, $specified_id = null ) {
    if ( isset( $specified_id ) ):
        $parent_id = $specified_id;
    else:
        $parent_id = get_the_ID();
    endif;
    $args = array(
        'posts_per_page' => $number,
        'post_type' => 'page',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'post_parent' => $parent_id,
    );
    $child_pages = new WP_Query( $args );
    return $child_pages;
}

// アイキャッチ画像を利用できるようにする
add_theme_support( 'post-thumbnails' );

// トップページのメイン画像用のサイズ設定
add_image_size( 'top', 1077, 622, true );

// profile一覧画像用のサイズ設定
add_image_size( 'profile', 25, 350, true );

// トップページのprofileにて使用している画像用のサイズ設定
add_image_size( 'front-profile', 255, 189, true );

// versus一覧の画像用のサイズ設定
add_image_size( 'versus', 450, 200, false );

// like一覧の画像用のサイズ設定
add_image_size( 'like', 465, 252, true );

// 各ページのメイン画像用のサイズ設定
add_image_size( 'detail', 1100, 330, true );

// 検索一覧の画像用のサイズ設定
add_image_size( 'search', 168, 168, true );

// 各テンプレートごとのメイン画像を表示
function get_main_image() {
    if ( is_page() || is_singular( 'battle' ) ):
        $attachment_id = get_field( 'main_image' );
        return wp_get_attachment_image( $attachment_id, 'detale' );
    elseif ( is_category( 'news' ) || is_singular( 'post' ) ):
        return '<img src="'.get_template_directory_uri().'/assets/images/news-page.jpg" />';
    elseif ( is_search() ):
        return '<img src="'.get_template_directory_uri().'/assets/images/search.png" />';
    elseif ( is_404() ):
        return '<img src="'.get_template_directory_uri().'/assets/images/404.jpeg" />';
    elseif( is_tax( 'history' ) ):
        $term_obj = get_queried_object();
        $image_id = get_field( 'history_image', $term_obj->taxonomy. '_'. $term_obj->term_id );
        return wp_get_attachment_image( $image_id, 'detail' );
    else:
        return '<img src="'.get_template_directory_uri().'/assets/images/404.jpeg" />';
    endif;
}

// 特定の記事を抽出する関数
function get_specific_posts( $post_type, $taxonomy = null, $term = null, $number = -1, $order = null ) {
    if ( ! $term ):
        $terms_obj = get_terms( 'history' );
        $term = wp_list_pluck( $terms_obj, 'slug' );
    endif;
    $args = array(
        'post_type' => $post_type,
        'tax_query' => array(
            array(
                'taxonomy' => $taxonomy,
                'field' => 'slug',
                'terms' => $term,
            ),
        ),
        'posts_per_page' => $number,
    );
    if (is_tax()):
        $args = array_merge($args,array('orderby' => 'menu_order'));
        $args = array_merge($args,array('order' => 'ASC'));
    endif;
    $specific_posts = new WP_Query( $args );
    return $specific_posts;
}



function cms_excerpt_more() {
    return '...';
}

add_filter( 'excerpt_more', 'cms_excerpt_more' );

function cms_excerpt_length() {
    return 80;
}

add_filter( 'excerpt_mblength', 'cms_excerpt_length' );

// 抜粋機能を固定ページに使えるように設定
add_post_type_support( 'page', 'excerpt' );

function get_flexble_excerpt( $number ) {
    $value = get_the_excerpt();
    $value = wp_trim_words( $value, $number, '...' );
    return $value;
}

// get_the_excerpt()で取得する文字列に改行タグを挿入
function apply_excerpt_br( $value ) {
    return nl2br( $value );
}

add_filter( 'get_the_excerpt', 'apply_excerpt_br' );

// ウィジェット機能を有効化
function theme_widgets_init() {
    register_sidebar( array(
        'name' => 'サイドバーウィジェットエリア',
        'id' => 'primary_widget-area',
        'description' => '固定ページのサイドバー',
        'before_widget' => '<aside class="side__inner">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="side__title">',
        'after_title' => '</h4>',
    ) );
}
add_action( 'widgets_init', 'theme_widgets_init' );

// メイン画像上にテンプレートごとの英語タイトルを表示
function get_main_en_title() {
    if ( is_category() ) :
        $term_obj = get_queried_object();
        $english_title = get_field( 'english_title', $term_obj->taxonomy. '_'. $term_obj->term_id );
        return $english_title;
    elseif ( is_singular( 'post' ) ):
        $term_obj = get_the_category();
        $english_title = get_field( 'english_title', $term_obj[0]->taxonomy. '_'. $term_obj->term_id );
        return $english_title;
    elseif ( is_page() || is_singular( 'battle' ) ):
        return get_field( 'english_title' );
    elseif ( is_search() ):
        return 'Search Result';
    elseif ( is_404() ):
        return '404 Not Found';
    elseif ( is_tax() ):
        $term_obj = get_queried_object();
        $english_title = get_field( 'english_title', $term_obj->taxonomy. '_'. $term_obj->term_id );
        return $english_title;
    endif;
}