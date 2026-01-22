<?php
/**
 * Theme functions
 */

// 基本設定
require_once get_template_directory() . '/inc/setup.php';

// アセット関連
require_once get_template_directory() . '/inc/assets.php';

// カスタム投稿タイプ
require_once get_template_directory() . '/inc/post-types/case.php';
require_once get_template_directory() . '/inc/post-types/resource.php';
require_once get_template_directory() . '/inc/post-types/event.php';

// タクソノミー
require_once get_template_directory() . '/inc/post-types/case-taxonomy.php';
