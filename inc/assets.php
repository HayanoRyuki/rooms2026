<?php
/**
 * アセット管理（CSS / JS）
 *
 * rooms2026 テーマ用 CSS・JavaScript の読み込みと管理
 */

/**
 * メインアセット読み込み関数
 */
function rooms2026_enqueue_assets() {
	$theme_uri = get_template_directory_uri();
	$theme_dir = get_template_directory();

	// ===================================
	// 共通CSS（全ページ読み込み）
	// ===================================
	$common_css = ['reset', 'common', 'footer'];
	foreach ($common_css as $file) {
		$path = "{$theme_dir}/assets/css/{$file}.css";
		if (file_exists($path)) {
			wp_enqueue_style(
				"rooms2026-{$file}",
				"{$theme_uri}/assets/css/{$file}.css",
				[],
				filemtime($path)
			);
		}
	}

	// ===================================
	// ヘッダーCSS
	// ===================================
	$header_css = "{$theme_dir}/assets/css/header.css";
	if (file_exists($header_css)) {
		wp_enqueue_style(
			'rooms2026-header',
			"{$theme_uri}/assets/css/header.css",
			[],
			filemtime($header_css)
		);
	}

	// ===================================
	// 共通JS（全ページ読み込み）
	// ===================================
	wp_enqueue_script('jquery', includes_url('/js/jquery/jquery.js'), [], null, true);

	$common_js = ['main', 'footer'];
	foreach ($common_js as $file) {
		$path = "{$theme_dir}/assets/js/{$file}.js";
		if (file_exists($path)) {

			// ▼ main.js だけ強制キャッシュ破壊
			if ($file === 'main') {
				wp_enqueue_script(
					"rooms2026-{$file}",
					"{$theme_uri}/assets/js/{$file}.js?v=20251204-1",
					['jquery'],
					null,
					true
				);
			} else {
				wp_enqueue_script(
					"rooms2026-{$file}",
					"{$theme_uri}/assets/js/{$file}.js",
					['jquery'],
					filemtime($path),
					true
				);
			}

		}
	}

	// ===================================
	// セクションCSS（sections ディレクトリ配下）
	// ===================================
	$sections = [
		'hero', 'logo-slider', 'boxil', 'capabilities', 'management',
		'analytics', 'reserve', 'voice', 'usage-image', 'multi-tenant',
		'recommend', 'movie', 'cta-download', 'faq', 'series', 'service'
	];

	foreach ($sections as $file) {
		$path = "{$theme_dir}/assets/css/sections/{$file}.css";
		if (file_exists($path)) {
			wp_enqueue_style(
				"rooms2026-section-{$file}",
				"{$theme_uri}/assets/css/sections/{$file}.css",
				[],
				filemtime($path)
			);
		}
	}

	// ===================================
	// アーカイブCSS（共通＋タイプ別）
	// ===================================
	$archive_common = "{$theme_dir}/assets/css/archive/archive.css";
	if (file_exists($archive_common) && (is_archive() || is_home())) {
		wp_enqueue_style(
			'rooms2026-archive-common',
			"{$theme_uri}/assets/css/archive/archive.css",
			[],
			filemtime($archive_common)
		);
	}

	$archives = ['case', 'event', 'news', 'resource', 'post'];
	foreach ($archives as $type) {
		$path = "{$theme_dir}/assets/css/archive/{$type}.css";
		if (file_exists($path)) {
			if (is_post_type_archive($type) || ($type === 'post' && (is_home() || is_category() || is_tag()))) {
				wp_enqueue_style(
					"rooms2026-archive-{$type}",
					"{$theme_uri}/assets/css/archive/{$type}.css",
					['rooms2026-archive-common'],
					filemtime($path)
				);
			}
		}
	}

	// ===================================
	// シングルCSS（共通＋タイプ別）
	// ===================================
	$single_common = "{$theme_dir}/assets/css/single/single.css";
	if (file_exists($single_common) && is_singular()) {
		wp_enqueue_style(
			'rooms2026-single-common',
			"{$theme_uri}/assets/css/single/single.css",
			[],
			filemtime($single_common)
		);
	}

	$singles = ['case', 'event', 'news', 'resource', 'post'];
	foreach ($singles as $type) {
		$path = "{$theme_dir}/assets/css/single/{$type}.css";
		if (file_exists($path)) {

			$is_match = (
				($type === 'post' && is_single()) ||
				is_singular($type)
			);

			if ($is_match) {
				wp_enqueue_style(
					"rooms2026-single-{$type}",
					"{$theme_uri}/assets/css/single/{$type}.css",
					['rooms2026-single-common'],
					filemtime($path)
				);
			}
		}
	}

	// ===================================
	// 固定ページCSS（共通＋自動検出）
	// ===================================
	$page_common = "{$theme_dir}/assets/css/page/page.css";
	if (file_exists($page_common) && is_page()) {
		wp_enqueue_style(
			'rooms2026-page-common',
			"{$theme_uri}/assets/css/page/page.css",
			[],
			filemtime($page_common)
		);
	}

	$page_dir = "{$theme_dir}/assets/css/page/";
	if (is_dir($page_dir)) {
		foreach (glob($page_dir . 'page-*.css') as $path) {
			$basename = basename($path, '.css');
			$slug = str_replace('page-', '', $basename);
			if (is_page($slug) || is_page_template("{$basename}.php")) {
				wp_enqueue_style(
					"rooms2026-{$basename}",
					"{$theme_uri}/assets/css/page/{$basename}.css",
					['rooms2026-page-common'],
					filemtime($path)
				);
			}
		}
	}
}
add_action('wp_enqueue_scripts', 'rooms2026_enqueue_assets');


// ===================================
// Heroセクション（画面幅別CSS）
// ===================================
function rooms2026_enqueue_hero_css() {
	$dir  = get_template_directory();
	$uri  = get_template_directory_uri();

	$hero_sizes = [
		'sm' => 'screen and (max-width: 767px)',
		'md' => 'screen and (min-width: 768px) and (max-width: 1023px)',
		'lg' => 'screen and (min-width: 1024px) and (max-width: 1279px)',
		'xl' => 'screen and (min-width: 1280px)',
	];

	foreach ($hero_sizes as $key => $media) {
		$file = "hero-{$key}.css";
		$path = "{$dir}/assets/css/hero/{$file}";

		if (file_exists($path)) {
			wp_enqueue_style(
				"rooms2026-hero-{$key}",
				"{$uri}/assets/css/hero/{$file}",
				[],
				filemtime($path),
				$media
			);
		}
	}
}
add_action('wp_enqueue_scripts', 'rooms2026_enqueue_hero_css', 20);


// ===================================
// ベンダーCSS（Slick, UIKit）
// ===================================
function rooms2026_enqueue_vendor_css() {
	$theme_uri = get_template_directory_uri();
	$theme_dir = get_template_directory();

	$vendor_css = ['slick', 'slick-theme', 'uikit'];
	foreach ($vendor_css as $file) {
		$path = "{$theme_dir}/assets/css/{$file}.css";
		if (file_exists($path)) {
			wp_enqueue_style(
				"rooms2026-{$file}",
				"{$theme_uri}/assets/css/{$file}.css",
				[],
				filemtime($path)
			);
		}
	}
}
add_action('wp_enqueue_scripts', 'rooms2026_enqueue_vendor_css', 5);


// ===================================
// ベンダーJS（jQuery plugins）
// ===================================
function rooms2026_enqueue_vendor_js() {
	$theme_uri = get_template_directory_uri();
	$theme_dir = get_template_directory();

	$vendor_js = [
		'common',
		'ajax',
		'contactUtils',
		'jquery.validate.min',
		'slick.min',
		'uikit',
		'uikit-icons.min'
	];

	foreach ($vendor_js as $file) {
		$path = "{$theme_dir}/assets/js/lib/{$file}.js";
		if (file_exists($path)) {
			wp_enqueue_script(
				"rooms2026-lib-{$file}",
				"{$theme_uri}/assets/js/lib/{$file}.js",
				[],
				filemtime($path),
				true
			);
		}
	}
}
add_action('wp_enqueue_scripts', 'rooms2026_enqueue_vendor_js');


// ===================================
// Swiper（ロゴスライダー用）
// ===================================
function rooms2026_enqueue_swiper() {
	if (is_front_page()) {
		wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@10.3.1/swiper-bundle.min.css', [], '10.3.1');
		wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@10.3.1/swiper-bundle.min.js', [], '10.3.1', true);

		$theme_dir = get_template_directory();
		$theme_uri = get_template_directory_uri();
		$swiper_custom = "{$theme_dir}/assets/js/logo-slider.js";
		if (file_exists($swiper_custom)) {
			wp_enqueue_script(
				'rooms2026-logo-slider',
				"{$theme_uri}/assets/js/logo-slider.js",
				['swiper'],
				filemtime($swiper_custom),
				true
			);
		}
	}
}
add_action('wp_enqueue_scripts', 'rooms2026_enqueue_swiper', 15);


// ===================================
// LP専用フッターCSS
// ===================================
function rooms2026_enqueue_lp_footer_css() {
	if (is_page_template('page-ads.php')) {
		$path = get_template_directory() . '/assets/css/footer-lp.css';
		if (file_exists($path)) {
			wp_enqueue_style(
				'rooms2026-footer-lp',
				get_template_directory_uri() . '/assets/css/footer-lp.css',
				[],
				filemtime($path)
			);
		}
	}
}
add_action('wp_enqueue_scripts', 'rooms2026_enqueue_lp_footer_css');


// ===================================
// フロントページ専用JS
// ===================================
add_action('wp_enqueue_scripts', function () {
	if (is_front_page()) {
		$path = get_template_directory() . '/assets/js/front-page.js';
		if (file_exists($path)) {
			wp_enqueue_script(
				'rooms2026-front-page',
				get_template_directory_uri() . '/assets/js/front-page.js',
				['jquery', 'rooms2026-lib-slick.min'],
				filemtime($path),
				true
			);
		}
	}
}, 25);


// ===================================
// 固定ページ専用JS（自動検出）
// ===================================
function rooms2026_enqueue_page_js() {
	$theme_dir = get_template_directory();
	$theme_uri = get_template_directory_uri();

	$page_js_dir = "{$theme_dir}/assets/js/";
	if (is_dir($page_js_dir)) {
		foreach (glob($page_js_dir . 'page-*.js') as $path) {
			$basename = basename($path, '.js');
			$slug = str_replace('page-', '', $basename);
			if (is_page($slug) || is_page_template("{$basename}.php")) {
				wp_enqueue_script(
					"rooms2026-{$basename}",
					"{$theme_uri}/assets/js/{$basename}.js",
					['jquery'],
					filemtime($path),
					true
				);
			}
		}
	}
}
add_action('wp_enqueue_scripts', 'rooms2026_enqueue_page_js');
