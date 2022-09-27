<?php
// // 初期設定
// add_action('init', function () {
//     remove_filter('the_excerpt', 'wpautop');
//     remove_filter('the_content', 'wpautop');
// });
// add_filter('tiny_mce_before_init', function ($init) {
//     $init['wpautop'] = false;
//     return $init;
// });
// function disable_visual_editor_in_page()
// {
//     global $typenow;
//     if ($typenow == 'page') {
//         add_filter('user_can_richedit', 'disable_visual_editor_filter');
//     }
// }
// function disable_visual_editor_filter()
// {
//     return false;
// }
// add_action('load-post.php', 'disable_visual_editor_in_page');
// add_action('load-post-new.php', 'disable_visual_editor_in_page');

// // サムネイル
// add_theme_support('post-thumbnails');

// // 抜粋の文字数変更
// function change_excerpt_length($length)
// {
//     return 30;
// }
// add_filter('excerpt_length', 'change_excerpt_length');

// // 抜粋の省略部分を表記変更
// function change_excerpt_more($more)
// {
//     return '...';
// }

// // サイドバー
// register_sidebar(
//     array(
//         'before_widget' => '<div class="widget">',
//         'after_widget' => '</div>',
//         'before_title' => '<h3 class="heading">',
//         'after_title' => '</h3>',
//     )
// );

// // メニュー
// add_theme_support('menu');
// register_nav_menus([
//     'new_grad_header' => '新卒ヘッダーナビゲーション',
//     'mid_career_header' => '中途ヘッダーナビゲーション',
//     'new_grad_footer' => '新卒フッターナビゲーション',
//     'mid_career_footer' => '中途フッターナビゲーション',
// ]);
// class Header_Nav_Walker extends Walker_Nav_Menu
// {
//     function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
//     {
//         $classes = empty($item->classes) ? array() : (array) $item->classes;
//         $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
//         !empty($class_names) and $class_names = ' class="header_menu header_textmenu ' . esc_attr($class_names) . '"';
//         $output .= "<div id='menu-item-$item->ID' $class_names>";
//         $attributes  = '';
//         !empty($item->attr_title) and $attributes .= ' title="'  . esc_attr($item->attr_title) . '"';
//         !empty($item->target) and $attributes .= ' target="' . esc_attr($item->target) . '"';
//         !empty($item->xfn) and $attributes .= ' rel="'    . esc_attr($item->xfn) . '"';
//         !empty($item->url) and $attributes .= ' href="'   . esc_attr($item->url) . '"';
//         $title = apply_filters('the_title', $item->title, $item->ID);
//         $item_output = $args->before
//             . "<a $attributes  class='w-100>"
//             . $args->link_before
//             . $title
//             . $args->link_after
//             . '</a></div>'
//             . $args->after;
//         $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
//     }
// }
// class Footer_Nav_Walker extends Walker_Nav_Menu
// {
//     function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
//     {
//         $classes = empty($item->classes) ? array() : (array) $item->classes;
//         $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
//         !empty($class_names) and $class_names = ' class="footer_top_menu ' . esc_attr($class_names) . '"';
//         $output .= "<div id='menu-item-$item->ID' $class_names>";
//         $attributes  = '';
//         !empty($item->attr_title) and $attributes .= ' title="'  . esc_attr($item->attr_title) . '"';
//         !empty($item->target) and $attributes .= ' target="' . esc_attr($item->target) . '"';
//         !empty($item->xfn) and $attributes .= ' rel="'    . esc_attr($item->xfn) . '"';
//         !empty($item->url) and $attributes .= ' href="'   . esc_attr($item->url) . '"';
//         $title = apply_filters('the_title', $item->title, $item->ID);
//         $item_output = $args->before
//             . "<a $attributes>"
//             . $args->link_before
//             . $title
//             . $args->link_after
//             . '</a></div>'
//             . $args->after;
//         $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
//     }
// }

// add_filter('excerpt_more', 'change_excerpt_more');


// // トップの短い新着記事表示
// function getShortNewItems($atts)
// {
//     extract(shortcode_atts(array(
//         "num" => '', //最新記事リストの取得数
//         "cat" => '' //表示する記事のカテゴリー指定
//     ), $atts));
//     global $post;
//     $oldpost = $post;
//     $myposts = get_posts('numberposts=' . $num . '&order=DESC&orderby=post_date&category=' . $cat);
//     $retHtml = '<div class="column_part fade-in">';
//     foreach ($myposts as $post) :
//         $cat = get_the_category();
//         $catname = $cat[0]->cat_name;
//         $catslug = $cat[0]->slug;
//         setup_postdata($post);
//         $retHtml .= '<div class="top_colum_time">';
//         $retHtml .= '<p>' . get_post_time(get_option('date_format')) . '</p>';
//         $retHtml .= '</div>';
//         $retHtml .= '<div class="top_colum_title">';
//         $retHtml .= '<a href="' . get_permalink() . '" class="news_title" style="color:#fff;"><p>' . the_title("", "", false) . '</p></a>';
//         $retHtml .= '</div>';
//     endforeach;
//     $retHtml .= '</div>';
//     $post = $oldpost;
//     wp_reset_postdata();
//     return $retHtml;
// }
// add_shortcode("short_news", "getShortNewItems");

// // トップの前後新着記事ボタン
// function getArrowNewItems($atts)
// {
//     extract(shortcode_atts(array(
//         "num" => '', //最新記事リストの取得数
//         "cat" => '' //表示する記事のカテゴリー指定
//     ), $atts));
//     global $post;
//     $oldpost = $post;
//     $myposts = get_posts('numberposts=' . $num . '&order=DESC&orderby=post_date&category=' . $cat);
//     $retHtml = '<div class="top_colum_choice">';
//     foreach ($myposts as $post) :
//         $cat = get_the_category();
//         $catname = $cat[0]->cat_name;
//         $catslug = $cat[0]->slug;
//         setup_postdata($post);
//         $retHtml .= '<div class="top_colum_prev">';
//         $retHtml .= '<span>' . previous_post_link('%link', '<i class="fa-solid fa-chevron-left"></i>') . '</span>';
//         $retHtml .= '</div>';
//         $retHtml .= '<div class="top_colum_next">';
//         $retHtml .= '<span>' . next_post_link('%link', '<i class="fa-solid fa-chevron-right"></i>') . '</span>';
//         $retHtml .= '</div>';
//     endforeach;
//     $retHtml .= '</div>';
//     $post = $oldpost;
//     wp_reset_postdata();
//     return $retHtml;
// }
// add_shortcode("short_news_arrow", "getArrowNewItems");

// // 新着記事一覧
// function getNewItems($atts)
// {
//     extract(shortcode_atts(array(
//         "num" => '', //最新記事リストの取得数
//         "cat" => '' //表示する記事のカテゴリー指定
//     ), $atts));
//     global $post;
//     $oldpost = $post;
//     $myposts = get_posts('numberposts=' . $num . '&order=DESC&orderby=post_date&category=' . $cat);
//     $retHtml = '<div class="column_part fade-in">';
//     foreach ($myposts as $post) :
//         $cat = get_the_category();
//         $catname = $cat[0]->cat_name;
//         $catslug = $cat[0]->slug;
//         setup_postdata($post);
//         $retHtml .= '<div class="column_box">';
//         $retHtml .= '<img src="' . get_the_post_thumbnail_url() . '" alt="' . get_the_title() . '">';
//         $retHtml .= '<div class="column_category_box">';
//         $retHtml .= '<p class="column_category ' . $catslug . '">' . $catname . '</p>';
//         $retHtml .= '<p class="column_time">' . get_post_time(get_option('date_format')) . '</p>';
//         $retHtml .= '<div class="column_tag">';
//         $retHtml .= '<p class="news_title">タグ</p>';
//         $retHtml .= '</div>';
//         $retHtml .= '</div>';
//         $retHtml .= '<div class="column_textbox">';
//         $retHtml .= '<a href="' . get_permalink() . '" class="news_title"><h3>' . the_title("", "", false) . '</h3></a>';
//         $retHtml .= '<a href="' . get_permalink() . '" class="news_content"><p>' . wp_trim_words(get_the_content(), 40) . '</p></a>';
//         $retHtml .= '</div>';
//         $retHtml .= '</div>';
//     endforeach;
//     $retHtml .= '</div>';
//     $post = $oldpost;
//     wp_reset_postdata();
//     return $retHtml;
// }
// add_shortcode("news", "getNewItems");


// // 中途トップの新着記事表示
// function getMidTopNewItems($atts)
// {
//     extract(shortcode_atts(array(
//         "num" => '', //最新記事リストの取得数
//         "cat" => '' //表示する記事のカテゴリー指定
//     ), $atts));
//     global $post;
//     $oldpost = $post;
//     $myposts = get_posts('numberposts=' . $num . '&order=DESC&orderby=post_date&category=' . $cat);
//     $retHtml = '<div class="column_toppart_text">';
//     foreach ($myposts as $post) :
//         $cat = get_the_category();
//         $catname = $cat[0]->cat_name;
//         $catslug = $cat[0]->slug;
//         setup_postdata($post);
//         $retHtml .= '<div class="column_category_box">';
//         $retHtml .= '<p class="column_category ' . $catslug . '">' . $catname . '</p>';
//         $retHtml .= '<p class="column_time">' . get_post_time(get_option('date_format')) . '</p>';
//         $retHtml .= '<div class="column_tag">';
//         $retHtml .= '<p class="news_title">タグ</p>';
//         $retHtml .= '</div>';
//         $retHtml .= '</div>';
//         $retHtml .= '<div class="column_textbox">';
//         $retHtml .= '<a href="' . get_permalink() . '" class="news_title"><h3>' . the_title("", "", false) . '</h3></a>';
//         $retHtml .= '<a href="' . get_permalink() . '" class="news_content"><p>' . wp_trim_words(get_the_content(), 40) . '</p></a>';
//         $retHtml .= '</div>';
//     endforeach;
//     $retHtml .= '</div>';
//     $post = $oldpost;
//     wp_reset_postdata();
//     return $retHtml;
// }
// add_shortcode("mid-top_news", "getMidTopNewItems");

// // 中途新着記事一覧
// function getMidNewItems($atts)
// {
//     extract(shortcode_atts(array(
//         "num" => '', //最新記事リストの取得数
//         "cat" => '' //表示する記事のカテゴリー指定
//     ), $atts));
//     global $post;
//     $oldpost = $post;
//     $myposts = get_posts('numberposts=' . $num . '&order=DESC&orderby=post_date&category=' . $cat);
//     $retHtml = '<div class="column_part fade-in">';
//     foreach ($myposts as $post) :
//         $cat = get_the_category();
//         $catname = $cat[0]->cat_name;
//         $catslug = $cat[0]->slug;
//         setup_postdata($post);
//         $retHtml .= '<div class="column_box">';
//         $retHtml .= '<img src="' . get_the_post_thumbnail_url() . '" alt="' . get_the_title() . '">';
//         $retHtml .= '<div class="column_textboxes">';
//         $retHtml .= '<div class="column_category_box">';
//         $retHtml .= '<p class="column_category ' . $catslug . '">' . $catname . '</p>';
//         $retHtml .= '<p class="column_time">' . get_post_time(get_option('date_format')) . '</p>';
//         $retHtml .= '<div class="column_tag">';
//         $retHtml .= '<p class="news_title">タグ</p>';
//         $retHtml .= '</div>';
//         $retHtml .= '</div>';
//         $retHtml .= '<div class="column_textbox">';
//         $retHtml .= '<a href="' . get_permalink() . '" class="news_title"><h3>' . the_title("", "", false) . '</h3></a>';
//         $retHtml .= '<a href="' . get_permalink() . '" class="news_content"><p>' . wp_trim_words(get_the_content(), 40) . '</p></a>';
//         $retHtml .= '</div>';
//         $retHtml .= '</div>';
//         $retHtml .= '</div>';
//     endforeach;
//     $retHtml .= '</div>';
//     $post = $oldpost;
//     wp_reset_postdata();
//     return $retHtml;
// }
// add_shortcode("mid_career_news", "getMidNewItems");


// // CSSの読み込みはここから
// function add_css_js()
// {
//     wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css');
//     wp_enqueue_style('swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.css');
//     wp_enqueue_style('font_size', get_template_directory_uri() . '/css/font_size.css');
//     wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css');
//     wp_enqueue_style('article', get_template_directory_uri() . '/css/article.css');
//     wp_enqueue_style('contact', get_template_directory_uri() . '/css/contact.css');
//     wp_enqueue_style('faq', get_template_directory_uri() . '/css/faq.css');
//     wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
//     wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css');

//     wp_enqueue_script('masonry', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array(), '', false);
// }
// add_action('wp_enqueue_scripts', 'add_css_js');
// // JSの読み込み（フッター）
// function prefix_add_footer_styles()
// {
//     wp_enqueue_script('swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), '', false);
//     wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '', false);
//     wp_enqueue_script('contact', get_template_directory_uri() . '/js/contact.js', array(), '', false);
//     wp_enqueue_script('easy-animation', get_template_directory_uri() . '/js/jquery.easy-animation.js', array(), '', false);
// }
// add_action('wp_footer', 'prefix_add_footer_styles');

// include(get_template_directory() . '/template/functions.php');









// 初期設定
add_action('init', function () {
    remove_filter('the_excerpt', 'wpautop');
    remove_filter('the_content', 'wpautop');
});
add_filter('tiny_mce_before_init', function ($init) {
    $init['wpautop'] = false;
    return $init;
});
function disable_visual_editor_in_page()
{
    global $typenow;
    if ($typenow == 'page') {
        add_filter('user_can_richedit', 'disable_visual_editor_filter');
    }
}
function disable_visual_editor_filter()
{
    return false;
}
add_action('load-post.php', 'disable_visual_editor_in_page');
add_action('load-post-new.php', 'disable_visual_editor_in_page');

// サムネイル
add_theme_support('post-thumbnails');

// 抜粋の文字数変更
function change_excerpt_length($length)
{
    return 30;
}
add_filter('excerpt_length', 'change_excerpt_length');

// 抜粋の省略部分を表記変更
function change_excerpt_more($more)
{
    return '...';
}

// サイドバー
register_sidebar(
    array(
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="heading">',
        'after_title' => '</h3>',
    )
);

// メニュー
add_theme_support('menu');
register_nav_menus([
    'new_grad_header' => '新卒ヘッダーナビゲーション',
    'mid_career_header' => '中途ヘッダーナビゲーション',
    'new_grad_footer' => '新卒フッターナビゲーション',
    'mid_career_footer' => '中途フッターナビゲーション',
]);
class Header_Nav_Walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
        !empty($class_names) and $class_names = ' class="header_menu header_textmenu ' . esc_attr($class_names) . '"';
        $output .= "<div id='menu-item-$item->ID' $class_names>";
        $attributes  = '';
        !empty($item->attr_title) and $attributes .= ' title="'  . esc_attr($item->attr_title) . '"';
        !empty($item->target) and $attributes .= ' target="' . esc_attr($item->target) . '"';
        !empty($item->xfn) and $attributes .= ' rel="'    . esc_attr($item->xfn) . '"';
        !empty($item->url) and $attributes .= ' href="'   . esc_attr($item->url) . '"';
        $title = apply_filters('the_title', $item->title, $item->ID);
        $item_output = $args->before
            . "<a $attributes>"
            . $args->link_before
            . $title
            . $args->link_after
            . '</a></div>'
            . $args->after;
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
class Footer_Nav_Walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
        !empty($class_names) and $class_names = ' class="footer_top_menu ' . esc_attr($class_names) . '"';
        $output .= "<div id='menu-item-$item->ID' $class_names>";
        $attributes  = '';
        !empty($item->attr_title) and $attributes .= ' title="'  . esc_attr($item->attr_title) . '"';
        !empty($item->target) and $attributes .= ' target="' . esc_attr($item->target) . '"';
        !empty($item->xfn) and $attributes .= ' rel="'    . esc_attr($item->xfn) . '"';
        !empty($item->url) and $attributes .= ' href="'   . esc_attr($item->url) . '"';
        $title = apply_filters('the_title', $item->title, $item->ID);
        $item_output = $args->before
            . "<a $attributes>"
            . $args->link_before
            . $title
            . $args->link_after
            . '</a></div>'
            . $args->after;
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

add_filter('excerpt_more', 'change_excerpt_more');


// トップの短い新着記事表示
function getShortNewItems($atts)
{
    extract(shortcode_atts(array(
        "num" => '', //最新記事リストの取得数
        "cat" => '' //表示する記事のカテゴリー指定
    ), $atts));
    global $post;
    $oldpost = $post;
    $myposts = get_posts('numberposts=' . $num . '&order=DESC&orderby=post_date&category=' . $cat);
    $retHtml = '<div class="column_part fade-in">';
    foreach ($myposts as $post) :
        $cat = get_the_category();
        $catname = $cat[0]->cat_name;
        $catslug = $cat[0]->slug;
        setup_postdata($post);
        $retHtml .= '<div class="top_colum_time">';
        $retHtml .= '<p>' . get_post_time(get_option('date_format')) . '</p>';
        $retHtml .= '</div>';
        $retHtml .= '<div class="top_colum_title">';
        $retHtml .= '<a href="' . get_permalink() . '" class="news_title" style="color:#fff;"><p>' . the_title("", "", false) . '</p></a>';
        $retHtml .= '</div>';
    endforeach;
    $retHtml .= '</div>';
    $post = $oldpost;
    wp_reset_postdata();
    return $retHtml;
}
add_shortcode("short_news", "getShortNewItems");

// トップの前後新着記事ボタン
function getArrowNewItems($atts)
{
    extract(shortcode_atts(array(
        "num" => '', //最新記事リストの取得数
        "cat" => '' //表示する記事のカテゴリー指定
    ), $atts));
    global $post;
    $oldpost = $post;
    $myposts = get_posts('numberposts=' . $num . '&order=DESC&orderby=post_date&category=' . $cat);
    $retHtml = '<div class="top_colum_choice">';
    foreach ($myposts as $post) :
        $cat = get_the_category();
        $catname = $cat[0]->cat_name;
        $catslug = $cat[0]->slug;
        setup_postdata($post);
        $retHtml .= '<div class="top_colum_prev">';
        $retHtml .= '<span>' . previous_post_link('%link', '<i class="fa-solid fa-chevron-left"></i>') . '</span>';
        $retHtml .= '</div>';
        $retHtml .= '<div class="top_colum_next">';
        $retHtml .= '<span>' . next_post_link('%link', '<i class="fa-solid fa-chevron-right"></i>') . '</span>';
        $retHtml .= '</div>';
    endforeach;
    $retHtml .= '</div>';
    $post = $oldpost;
    wp_reset_postdata();
    return $retHtml;
}
add_shortcode("short_news_arrow", "getArrowNewItems");

// 新着記事一覧
function getNewItems($atts)
{
    extract(shortcode_atts(array(
        "num" => '', //最新記事リストの取得数
        "cat" => '' //表示する記事のカテゴリー指定
    ), $atts));
    global $post;
    $oldpost = $post;
    $myposts = get_posts('numberposts=' . $num . '&order=DESC&orderby=post_date&category=' . $cat);
    $retHtml = '<div class="column_part fade-in">';
    foreach ($myposts as $post) :
        $cat = get_the_category();
        $catname = $cat[0]->cat_name;
        $catslug = $cat[0]->slug;
        setup_postdata($post);
        $retHtml .= '<div class="column_box">';
        $retHtml .= '<img src="' . get_the_post_thumbnail_url() . '" alt="' . get_the_title() . '">';
        $retHtml .= '<div class="column_category_box">';
        $retHtml .= '<p class="column_category ' . $catslug . '">' . $catname . '</p>';
        $retHtml .= '<p class="column_time">' . get_post_time(get_option('date_format')) . '</p>';
        $retHtml .= '<div class="column_tag">';
        $retHtml .= '<p class="news_title">タグ</p>';
        $retHtml .= '</div>';
        $retHtml .= '</div>';
        $retHtml .= '<div class="column_textbox">';
        $retHtml .= '<a href="' . get_permalink() . '" class="news_title"><h3>' . the_title("", "", false) . '</h3></a>';
        $retHtml .= '<a href="' . get_permalink() . '" class="news_content"><p>' . wp_trim_words(get_the_content(), 40) . '</p></a>';
        $retHtml .= '</div>';
        $retHtml .= '</div>';
    endforeach;
    $retHtml .= '</div>';
    $post = $oldpost;
    wp_reset_postdata();
    return $retHtml;
}
add_shortcode("news", "getNewItems");


// 中途トップの新着記事表示
function getMidTopNewItems($atts)
{
    extract(shortcode_atts(array(
        "num" => '', //最新記事リストの取得数
        "cat" => '' //表示する記事のカテゴリー指定
    ), $atts));
    global $post;
    $oldpost = $post;
    $myposts = get_posts('numberposts=' . $num . '&order=DESC&orderby=post_date&category=' . $cat);
    $retHtml = '<div class="column_toppart_text">';
    foreach ($myposts as $post) :
        $cat = get_the_category();
        $catname = $cat[0]->cat_name;
        $catslug = $cat[0]->slug;
        setup_postdata($post);
        $retHtml .= '<div class="column_category_box">';
        $retHtml .= '<p class="column_category ' . $catslug . '">' . $catname . '</p>';
        $retHtml .= '<p class="column_time">' . get_post_time(get_option('date_format')) . '</p>';
        $retHtml .= '<div class="column_tag">';
        $retHtml .= '<p class="news_title">タグ</p>';
        $retHtml .= '</div>';
        $retHtml .= '</div>';
        $retHtml .= '<div class="column_textbox">';
        $retHtml .= '<a href="' . get_permalink() . '" class="news_title"><h3>' . the_title("", "", false) . '</h3></a>';
        $retHtml .= '<a href="' . get_permalink() . '" class="news_content"><p>' . wp_trim_words(get_the_content(), 40) . '</p></a>';
        $retHtml .= '</div>';
    endforeach;
    $retHtml .= '</div>';
    $post = $oldpost;
    wp_reset_postdata();
    return $retHtml;
}
add_shortcode("mid-top_news", "getMidTopNewItems");

// 中途新着記事一覧
function getMidNewItems($atts)
{
    extract(shortcode_atts(array(
        "num" => '', //最新記事リストの取得数
        "cat" => '' //表示する記事のカテゴリー指定
    ), $atts));
    global $post;
    $oldpost = $post;
    $myposts = get_posts('numberposts=' . $num . '&order=DESC&orderby=post_date&category=' . $cat);
    $retHtml = '<div class="column_part fade-in">';
    foreach ($myposts as $post) :
        $cat = get_the_category();
        $catname = $cat[0]->cat_name;
        $catslug = $cat[0]->slug;
        setup_postdata($post);
        $retHtml .= '<div class="column_box">';
        $retHtml .= '<img src="' . get_the_post_thumbnail_url() . '" alt="' . get_the_title() . '">';
        $retHtml .= '<div class="column_textboxes">';
        $retHtml .= '<div class="column_category_box">';
        $retHtml .= '<p class="column_category ' . $catslug . '">' . $catname . '</p>';
        $retHtml .= '<p class="column_time">' . get_post_time(get_option('date_format')) . '</p>';
        $retHtml .= '<div class="column_tag">';
        $retHtml .= '<p class="news_title">タグ</p>';
        $retHtml .= '</div>';
        $retHtml .= '</div>';
        $retHtml .= '<div class="column_textbox">';
        $retHtml .= '<a href="' . get_permalink() . '" class="news_title"><h3>' . the_title("", "", false) . '</h3></a>';
        $retHtml .= '<a href="' . get_permalink() . '" class="news_content"><p>' . wp_trim_words(get_the_content(), 40) . '</p></a>';
        $retHtml .= '</div>';
        $retHtml .= '</div>';
        $retHtml .= '</div>';
    endforeach;
    $retHtml .= '</div>';
    $post = $oldpost;
    wp_reset_postdata();
    return $retHtml;
}
add_shortcode("mid_career_news", "getMidNewItems");


// CSSの読み込みはここから
function add_css_js()
{
    wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css');
    wp_enqueue_style('swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.css');
    wp_enqueue_style('font_size', get_template_directory_uri() . '/css/font_size.css');
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css');
    wp_enqueue_style('article', get_template_directory_uri() . '/css/article.css');
    wp_enqueue_style('contact', get_template_directory_uri() . '/css/contact.css');
    wp_enqueue_style('faq', get_template_directory_uri() . '/css/faq.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css');

    wp_enqueue_script('masonry', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array(), '', false);
}
add_action('wp_enqueue_scripts', 'add_css_js');
// JSの読み込み（フッター）
function prefix_add_footer_styles()
{
    wp_enqueue_script('swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), '', false);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '', false);
    wp_enqueue_script('contact', get_template_directory_uri() . '/js/contact.js', array(), '', false);
    wp_enqueue_script('easy-animation', get_template_directory_uri() . '/js/jquery.easy-animation.js', array(), '', false);
}
add_action('wp_footer', 'prefix_add_footer_styles');

include(get_template_directory() . '/template/functions.php');
