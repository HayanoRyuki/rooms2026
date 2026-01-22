<?php
/**
 * アセット関連
 */

/**
 * WordPress同梱のjQueryを読み込ませない
 */
function new_deregister_script() {
	if ( ! is_admin() ) {
		wp_deregister_script( 'jquery' );
	}
}
add_action( 'init', 'new_deregister_script' );

/**
 * CSS / JS 読み込み
 */
function theme_enqueue_scripts() {

	$theme_uri = get_template_directory_uri();

	/* =========================
	 * CSS
	 * ========================= */

	// slick
	wp_enqueue_style(
		'slick',
		$theme_uri . '/css/slick.css',
		array(),
		null
	);

	wp_enqueue_style(
		'slick-theme',
		$theme_uri . '/css/slick-theme.css',
		array( 'slick' ),
		null
	);

	// uikit
	wp_enqueue_style(
		'uikit',
		$theme_uri . '/css/uikit.css',
		array(),
		null
	);

	// reset / base
	wp_enqueue_style(
		'destyle',
		$theme_uri . '/css/destyle.css',
		array(),
		null
	);

	wp_enqueue_style(
		'common',
		$theme_uri . '/css/common.css',
		array( 'destyle' ),
		null
	);

	// テーマ style.css
	wp_enqueue_style(
		'theme-style',
		get_stylesheet_uri(),
		array( 'common' ),
		null
	);

	// ヘッダー・フッター共通CSS
	wp_enqueue_style(
		'header',
		$theme_uri . '/css/header.css',
		array( 'theme-style' ),
		null
	);

	wp_enqueue_style(
		'footer',
		$theme_uri . '/css/footer.css',
		array( 'theme-style' ),
		null
	);

	// セクション用CSS（トップページのみ）
	if ( is_front_page() ) {
		$sections = array(
			'hero',
			'logo-slider',
			'boxil',
			'capabilities',
			'management',
			'analytics',
			'reserve',
			'voice',
			'usage-image',
			'multi-tenant',
			'recommend',
			'movie',
			'cta-download',
			'faq',
			'service',
		);
		foreach ( $sections as $section ) {
			wp_enqueue_style(
				'section-' . $section,
				$theme_uri . '/css/sections/' . $section . '.css',
				array( 'theme-style' ),
				null
			);
		}
	}

	// カスタム投稿タイプ用CSS
	if ( is_singular( 'case' ) || is_post_type_archive( 'case' ) ) {
		wp_enqueue_style(
			'post-type-case',
			$theme_uri . '/css/post-types/case.css',
			array( 'theme-style' ),
			null
		);
	}

	if ( is_singular( 'resource' ) || is_post_type_archive( 'resource' ) ) {
		wp_enqueue_style(
			'post-type-resource',
			$theme_uri . '/css/post-types/resource.css',
			array( 'theme-style' ),
			null
		);
	}

	if ( is_singular( 'event' ) || is_post_type_archive( 'event' ) ) {
		wp_enqueue_style(
			'post-type-event',
			$theme_uri . '/css/post-types/event.css',
			array( 'theme-style' ),
			null
		);
	}

	/* =========================
	 * JS（vendor）
	 * ========================= */

	$vendor = $theme_uri . '/js/vendor/';

	wp_enqueue_script(
		'vendor-common',
		$vendor . 'common.js',
		array(),
		null,
		true
	);

	wp_enqueue_script(
		'vendor-ajax',
		$vendor . 'ajax.js',
		array(),
		null,
		true
	);

	wp_enqueue_script(
		'vendor-contact',
		$vendor . 'contactUtils.js',
		array(),
		null,
		true
	);

	wp_enqueue_script(
		'vendor-validate',
		$vendor . 'jquery.validate.min.js',
		array(),
		null,
		true
	);

	wp_enqueue_script(
		'vendor-slick',
		$vendor . 'slick.min.js',
		array(),
		null,
		true
	);

	wp_enqueue_script(
		'vendor-uikit',
		$vendor . 'uikit.js',
		array(),
		null,
		true
	);

	wp_enqueue_script(
		'vendor-uikit-icons',
		$vendor . 'uikit-icons.min.js',
		array( 'vendor-uikit' ),
		null,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
