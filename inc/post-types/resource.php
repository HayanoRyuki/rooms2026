<?php
/**
 * カスタム投稿タイプ：お役立ち資料（resource）
 */

function register_custom_post_type_resource() {
	register_post_type(
		'resource',
		array(
			'labels' => array(
				'name'               => 'お役立ち資料',
				'singular_name'      => 'お役立ち資料',
				'add_new'            => '新規追加',
				'add_new_item'       => '新しいお役立ち資料を追加',
				'edit_item'          => 'お役立ち資料を編集',
				'new_item'           => '新しいお役立ち資料',
				'view_item'          => 'お役立ち資料を表示',
				'search_items'       => 'お役立ち資料を検索',
				'not_found'          => 'お役立ち資料が見つかりませんでした',
				'not_found_in_trash' => 'ゴミ箱にお役立ち資料は見つかりませんでした',
				'menu_name'          => 'お役立ち資料',
			),
			'public'        => true,
			'has_archive'   => true,
			'rewrite'       => array( 'slug' => 'resource' ),
			'menu_position' => 6,
			'menu_icon'     => 'dashicons-media-document',
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
			'show_in_rest'  => true,
		)
	);
}
add_action( 'init', 'register_custom_post_type_resource' );

/**
 * お役立ち資料カテゴリー
 */
function register_resource_taxonomy() {
	register_taxonomy(
		'resource_category',
		'resource',
		array(
			'label'             => 'お役立ち資料カテゴリー',
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'rewrite'           => array( 'slug' => 'resource-category' ),
		)
	);
}
add_action( 'init', 'register_resource_taxonomy' );
