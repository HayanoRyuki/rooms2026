<?php
/**
 * テーマ基本設定
 */

function my_setup() {
	add_theme_support( 'post-thumbnails' ); // アイキャッチ
	add_theme_support( 'automatic-feed-links' ); // RSS
	add_theme_support( 'title-tag' ); // titleタグ自動生成
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );
