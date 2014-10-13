<?php
// ウィジェット
register_sidebar(array(
'name' => 'トップサイバー',
'description' => 'トップに使うサイバー',
'before_widget' => '<li id="%1$s" class="widget %2$s">',
'after_widget'  => '</li>',
'before_title' => '<div class="raw_title">',
'after_title' => '</div>',
)
);
add_theme_support( 'menus' );
add_theme_support('post-thumbnails');
//wp_headの削除
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'index_rel_link' );
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra',3,0);
