<?php
/**
 * Theme Name: Rooms2026
 * Description: 予約ルームズ WordPress Theme
 * Author: Media-Confidence Inc.
 */

/* -------------------------------------------------------------
 *  基本セットアップ（テーマ機能・ショートコード等）
 * ------------------------------------------------------------- */
require_once get_template_directory() . '/inc/setup.php';


/* -------------------------------------------------------------
 *  カスタム投稿タイプ登録・設定
 * ------------------------------------------------------------- */
$custom_post_types = [
	'post-types-register',
	'post-type-news',
	'post-type-case',
	'post-type-event',
	'post-type-resource',
	'post-type-logo',
];
foreach ($custom_post_types as $file) {
	$path = get_template_directory() . "/inc/{$file}.php";
	if (file_exists($path)) require_once $path;
}


/* -------------------------------------------------------------
 *  アセット（CSS / JS）管理
 * ------------------------------------------------------------- */
require_once get_template_directory() . '/inc/assets.php';


/* -------------------------------------------------------------
 *  フォーム送信関連
 * ------------------------------------------------------------- */
require_once get_template_directory() . '/inc/contact-handler.php';


/* -------------------------------------------------------------
 *  投稿アーカイブタイトルの変更（例：コラム）
 * ------------------------------------------------------------- */
add_filter('document_title_parts', function ($title) {
	if (is_home() || (is_archive() && is_post_type_archive('post'))) {
		$title['title'] = 'コラム';
	}
	return $title;
});


/* -------------------------------------------------------------
 *  旧URL → 新URL のリダイレクト
 * ------------------------------------------------------------- */
add_action('template_redirect', function () {

	// 完全一致リダイレクト
	$redirects = [
		'/document-price' => 'https://rooms.receptionist.jp/resources/price-book/',
		'/downloads'      => 'https://rooms.receptionist.jp/resources/',
		'/column'         => 'https://rooms.receptionist.jp/blog/',

		// 旧 .html ページ
		'/register.html'           => 'https://rooms.receptionist.jp/new-register/',
		'/contact.html'            => 'https://rooms.receptionist.jp/contact/',
		'/function.html'           => 'https://rooms.receptionist.jp/function/',
		'/price.html'              => 'https://rooms.receptionist.jp/resources/price-book/',
		'/faq.html'                => 'https://rooms.receptionist.jp/',

		// 旧ページ（拡張子なし）
		'/functions'               => 'https://rooms.receptionist.jp/function/',
		'/privacy'                 => 'https://rooms.receptionist.jp/',

		// カテゴリ・タグ関連
		'/category/blog'           => 'https://rooms.receptionist.jp/blog/',
		'/category/column'         => 'https://rooms.receptionist.jp/blog/',
	];

	// リクエストURI取得（クエリ除外）
	$request_uri = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
	$request_uri = rtrim($request_uri, '/');

	// 完全一致チェック
	if (isset($redirects[$request_uri])) {
		wp_redirect($redirects[$request_uri], 301);
		exit;
	}
	if (isset($redirects[$request_uri . '/'])) {
		wp_redirect($redirects[$request_uri . '/'], 301);
		exit;
	}

	// 前方一致チェック（サブパス含む）
	foreach ($redirects as $old => $new) {
		if (str_starts_with($request_uri, $old . '/')) {
			wp_redirect($new, 301);
			exit;
		}
	}
});


/* -------------------------------------------------------------
 *  /case-tag/ → /case/ リダイレクト（タクソノミー削除対応）
 * ------------------------------------------------------------- */
add_action('template_redirect', function () {
	$request_uri = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);

	if (str_starts_with($request_uri, '/case-tag/')) {
		wp_redirect('https://rooms.receptionist.jp/case/', 301);
		exit;
	}
});


/* -------------------------------------------------------------
 *  /topics/ → /case/ リダイレクト
 * ------------------------------------------------------------- */
add_action('template_redirect', function () {
	$request_uri = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);

	if (str_starts_with($request_uri, '/topics/')) {
		wp_redirect('https://rooms.receptionist.jp/case/', 301);
		exit;
	}
});


/* -------------------------------------------------------------
 *  /tag/ → /blog/ リダイレクト（削除されたタグ）
 * ------------------------------------------------------------- */
add_action('template_redirect', function () {
	$request_uri = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);

	if (str_starts_with($request_uri, '/tag/')) {
		wp_redirect('https://rooms.receptionist.jp/blog/', 301);
		exit;
	}
});


/* -------------------------------------------------------------
 *  /news-tag/ → トップへリダイレクト
 * ------------------------------------------------------------- */
add_action('template_redirect', function () {
	$request_uri = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);

	if (str_starts_with($request_uri, '/news-tag/')) {
		wp_redirect('https://rooms.receptionist.jp/', 301);
		exit;
	}
});


/* -------------------------------------------------------------
 *  /blog/page/N/ → /blog/ リダイレクト（ページネーション）
 * ------------------------------------------------------------- */
add_action('template_redirect', function () {
	$request_uri = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);

	if (preg_match('#^/blog/page/\d+/?$#', $request_uri)) {
		wp_redirect('https://rooms.receptionist.jp/blog/', 301);
		exit;
	}
});


/* -------------------------------------------------------------
 *  register.html?utm_... → /new-register/ リダイレクト
 * ------------------------------------------------------------- */
add_action('template_redirect', function () {
	$request_uri = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);

	if ($request_uri === '/register.html' || $request_uri === '/register') {
		wp_redirect('https://rooms.receptionist.jp/new-register/', 301);
		exit;
	}
});


/* -------------------------------------------------------------
 *  /system/ → /function/ リダイレクト（リダイレクトエラー対応）
 * ------------------------------------------------------------- */
add_action('template_redirect', function () {
	$request_uri = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);

	if (str_starts_with($request_uri, '/system/')) {
		wp_redirect('https://rooms.receptionist.jp/function/', 301);
		exit;
	}
});


/* -------------------------------------------------------------
 * /cases → /case リダイレクト
 * ------------------------------------------------------------- */
add_action('template_redirect', function () {
	$request_uri = $_SERVER['REQUEST_URI'] ?? '';
	$request_uri = rtrim($request_uri, '/');

	if ($request_uri === '/cases' || str_starts_with($request_uri, '/cases/')) {
		$new_uri = preg_replace('#^/cases#', '/case', $request_uri);
		wp_redirect($new_uri . '/', 301);
		exit;
	}
});


/* ============================================
 * 外部確認URLの閲覧制御（Public Post Preview方式）
 * ============================================ */

/**
 * pre_get_posts: external_previewトークンがある場合、posts_resultsフィルターを登録
 */
add_action('pre_get_posts', function ($query) {
	if (!$query->is_main_query()) {
		return;
	}

	// external_previewとpreviewパラメータをチェック
	$token = $_GET['external_preview'] ?? '';
	$preview = $_GET['preview'] ?? '';
	if (empty($token) || $preview !== 'true') {
		return;
	}

	$post_type = $query->get('post_type');
	if ($post_type !== 'case') {
		return;
	}

	// キャッシュ無効化とnoindex設定
	if (!headers_sent()) {
		nocache_headers();
		header('X-Robots-Tag: noindex');
	}

	// posts_resultsフィルターを登録
	add_filter('posts_results', 'case_external_preview_set_publish', 10, 2);
});

/**
 * posts_results: トークン検証してOKなら記事のステータスを一時的にpublishに変更
 */
function case_external_preview_set_publish($posts, $query) {
	// フィルターを削除（他のクエリに影響させない）
	remove_filter('posts_results', 'case_external_preview_set_publish', 10);

	if (empty($posts)) {
		return $posts;
	}

	$post = $posts[0];
	$post_id = (int) $post->ID;

	// 公開済みなら正規URLにリダイレクト
	if ($post->post_status === 'publish') {
		wp_safe_redirect(get_permalink($post_id), 301);
		exit;
	}

	// トークン検証
	$token   = $_GET['external_preview'] ?? '';
	$saved   = get_post_meta($post_id, '_external_preview_token', true);
	$expires = intval(get_post_meta($post_id, '_external_preview_expires', true));

	if (empty($token) || empty($saved)) {
		wp_die('プレビューリンクが無効です。', '閲覧不可', ['response' => 404]);
	}

	if (!hash_equals($saved, $token)) {
		wp_die('プレビューリンクが無効です。', '閲覧不可', ['response' => 403]);
	}

	if (time() >= $expires) {
		wp_die('このリンクは有効期限が切れています。', '閲覧不可', ['response' => 403]);
	}

	// ★ 重要：記事のステータスを一時的にpublishに変更
	$posts[0]->post_status = 'publish';

	// コメントとピンバックを無効化
	add_filter('comments_open', '__return_false');
	add_filter('pings_open', '__return_false');

	return $posts;
}
