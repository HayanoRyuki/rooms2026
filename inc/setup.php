<?php
/**
 * テーマ基本設定
 *
 * rooms2026 テーマ機能・ショートコード・その他基本機能を設定
 */

/* =========================================================
 * テーマサポート設定
 * ========================================================= */

function rooms2026_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'menus' );
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
add_action( 'after_setup_theme', 'rooms2026_setup' );


/* =========================================================
 * パンくずリスト機能
 * ========================================================= */

function rooms2026_get_breadcrumb() {
	$home_url = home_url( '/' );
	$breadcrumb = '';

	if ( is_home() || is_front_page() ) {
		$breadcrumb = '<a href="' . $home_url . '">トップ</a>';
	} elseif ( is_page() ) {
		global $post;
		$breadcrumb = '<a href="' . $home_url . '">トップ</a> > ';
		$breadcrumb .= get_the_title( $post->ID );
	} elseif ( is_single() ) {
		global $post;
		$post_type = get_post_type( $post->ID );
		$breadcrumb = '<a href="' . $home_url . '">トップ</a> > ';

		if ( $post_type === 'case' ) {
			$breadcrumb .= '<a href="' . get_post_type_archive_link( 'case' ) . '">導入事例</a> > ';
		} elseif ( $post_type === 'event' ) {
			$breadcrumb .= '<a href="' . get_post_type_archive_link( 'event' ) . '">イベント</a> > ';
		} elseif ( $post_type === 'resource' ) {
			$breadcrumb .= '<a href="' . get_post_type_archive_link( 'resource' ) . '">お役立ち資料</a> > ';
		}

		$breadcrumb .= get_the_title( $post->ID );
	} elseif ( is_post_type_archive() ) {
		global $post;
		$breadcrumb = '<a href="' . $home_url . '">トップ</a> > ';
		$breadcrumb .= post_type_archive_title( '', false );
	} elseif ( is_category() || is_tag() ) {
		$breadcrumb = '<a href="' . $home_url . '">トップ</a> > ';
		$breadcrumb .= single_term_title( '', false );
	}

	return $breadcrumb;
}


/* =========================================================
 * 内部リンクカード用ショートコード
 * ========================================================= */

function rooms2026_internal_link_card( $atts ) {
	$atts = shortcode_atts(
		array(
			'post_id' => 0,
		),
		$atts,
		'link_card'
	);

	$post_id = intval( $atts['post_id'] );

	if ( ! $post_id ) {
		return '';
	}

	$post = get_post( $post_id );

	if ( ! $post ) {
		return '';
	}

	$title = get_the_title( $post_id );
	$excerpt = get_the_excerpt( $post_id );
	$permalink = get_permalink( $post_id );
	$thumbnail_url = get_the_post_thumbnail_url( $post_id, 'medium' );

	$html = '<div class="link-card"><a href="' . esc_url( $permalink ) . '">';

	if ( $thumbnail_url ) {
		$html .= '<img src="' . esc_url( $thumbnail_url ) . '" alt="' . esc_attr( $title ) . '">';
	}

	$html .= '<div class="link-card-content">';
	$html .= '<h3>' . esc_html( $title ) . '</h3>';

	if ( $excerpt ) {
		$html .= '<p>' . wp_kses_post( $excerpt ) . '</p>';
	}

	$html .= '</div></a></div>';

	return $html;
}
add_shortcode( 'link_card', 'rooms2026_internal_link_card' );


/* =========================================================
 * メディアアップローダ設定
 * ========================================================= */

function rooms2026_custom_media_uploader() {
	// メディアライブラリの設定をここに追加
}
add_action( 'admin_enqueue_scripts', 'rooms2026_custom_media_uploader' );


/* =========================================================
 * フロントページタイトル上書き（予約ルームズ）
 * ========================================================= */

add_filter( 'document_title_parts', function ( $title ) {
	if ( is_front_page() ) {
		$title['title'] = '予約ルームズ';
	}
	return $title;
} );


/* =========================================================
 * カノニカルURL出力
 * ========================================================= */

function rooms2026_output_canonical() {
	if ( is_singular() || is_post_type_archive() || is_archive() || is_front_page() ) {
		$canonical_url = '';

		if ( is_singular() ) {
			$canonical_url = get_permalink();
		} elseif ( is_post_type_archive() ) {
			$canonical_url = get_post_type_archive_link( get_post_type() );
		} elseif ( is_category() || is_tag() ) {
			$canonical_url = get_term_link( get_queried_object() );
		} elseif ( is_front_page() ) {
			$canonical_url = home_url( '/' );
		}

		if ( $canonical_url ) {
			echo '<link rel="canonical" href="' . esc_url( $canonical_url ) . '">' . "\n";
		}
	}
}
add_action( 'wp_head', 'rooms2026_output_canonical' );
