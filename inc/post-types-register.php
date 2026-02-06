<?php
/**
 * カスタム投稿タイプ登録
 *
 * rooms2026 で使用するカスタム投稿タイプと分類を一括登録
 */

// =================================================================
// 導入事例（case）
// =================================================================
function register_custom_post_type_case() {
	register_post_type(
		'case',
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
				'menu_name'          => '導入事例',
			),
			'public'        => true,
			'has_archive'   => true,
			'rewrite'       => array( 'slug' => 'case' ),
			'menu_position' => 5,
			'menu_icon'     => 'dashicons-portfolio',
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
			'show_in_rest'  => true,
		)
	);
}
add_action( 'init', 'register_custom_post_type_case' );

/**
 * 導入事例カテゴリー
 */
function register_case_taxonomy() {
	register_taxonomy(
		'case_category',
		'case',
		array(
			'label'             => '導入事例カテゴリー',
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'rewrite'           => array( 'slug' => 'case-category' ),
		)
	);
}
add_action( 'init', 'register_case_taxonomy' );


// =================================================================
// イベント（event）
// =================================================================
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


// =================================================================
// お役立ち資料（resource）
// =================================================================
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
