<?php
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
