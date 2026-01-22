<?php
/**
 * カスタム投稿タイプ：イベント（event）
 */

function register_custom_post_type_event() {
	register_post_type(
		'event',
		array(
			'labels' => array(
				'name'               => 'イベント',
				'singular_name'      => 'イベント',
				'add_new'            => '新規追加',
				'add_new_item'       => '新しいイベントを追加',
				'edit_item'          => 'イベントを編集',
				'new_item'           => '新しいイベント',
				'view_item'          => 'イベントを表示',
				'search_items'       => 'イベントを検索',
				'not_found'          => 'イベントが見つかりませんでした',
				'not_found_in_trash' => 'ゴミ箱にイベントは見つかりませんでした',
				'menu_name'          => 'イベント',
			),
			'public'        => true,
			'has_archive'   => true,
			'rewrite'       => array( 'slug' => 'event' ),
			'menu_position' => 7,
			'menu_icon'     => 'dashicons-calendar-alt',
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
			'show_in_rest'  => true,
		)
	);
}
add_action( 'init', 'register_custom_post_type_event' );

/**
 * イベントカテゴリー
 */
function register_event_taxonomy() {
	register_taxonomy(
		'event_category',
		'event',
		array(
			'label'             => 'イベントカテゴリー',
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'rewrite'           => array( 'slug' => 'event-category' ),
		)
	);
}
add_action( 'init', 'register_event_taxonomy' );
