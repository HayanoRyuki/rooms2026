<?php
/**
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */
function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support( 'html5', array( /* HTML5のタグで出力 */
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
}
add_action( 'after_setup_theme', 'my_setup' );
/**
 *WordPress同梱のjQueryを読み込ませない
 */
function new_deregister_script() {
    if ( !is_admin() ) {
        wp_deregister_script('jquery');
        }
    }
    add_action('init', 'new_deregister_script');
/**
 * カスタム投稿タイプ「導入事例（case）」の登録
 */
function register_custom_post_type_case() {
	register_post_type('case',
		array(
			'labels' => array(
				'name'               => '導入事例',
				'singular_name'      => '導入事例',
				'add_new'            => '新規追加',
				'add_new_item'       => '新しい導入事例を追加',
				'edit_item'          => '導入事例を編集',
				'new_item'           => '新しい導入事例',
				'view_item'          => '導入事例を表示',
				'search_items'       => '導入事例を検索',
				'not_found'          => '導入事例が見つかりませんでした',
				'not_found_in_trash' => 'ゴミ箱に導入事例は見つかりませんでした',
				'menu_name'          => '導入事例'
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'case'),
			'menu_position' => 5,
			'menu_icon' => 'dashicons-portfolio',
			'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
			'show_in_rest' => true
		)
	);
}
add_action('init', 'register_custom_post_type_case');

function register_case_taxonomy() {
  register_taxonomy(
    'case_category',
    'case',
    array(
      'label' => '導入事例カテゴリー',
      'hierarchical' => true, // trueにすると「親子関係を持つ」カテゴリになる
      'public' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      'rewrite' => array('slug' => 'case-category'),
    )
  );
}
add_action('init', 'register_case_taxonomy');