<?php
/**
 * ヘッダーナビゲーション（トップページ用スティッキーメニュー）
 */
?>
<header class="header">
  <div class="header-inner uk-flex uk-flex-between uk-flex-middle">
    <div class="header-logo">
      <a href="<?php echo home_url('/'); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/img_logo_rooms.svg" alt="予約ルームズ">
      </a>
    </div>
    <nav class="header-nav pc">
      <ul class="nav-list uk-flex">
        <li><a href="<?php echo home_url('/'); ?>">予約ルームズとは</a></li>
        <li><a href="<?php echo home_url('/function/'); ?>">機能の紹介</a></li>
        <li><a href="<?php echo home_url('/case/'); ?>">お客様の声</a></li>
        <li><a href="<?php echo home_url('/faq/'); ?>">よくある質問</a></li>
        <li><a href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a></li>
      </ul>
    </nav>
    <div class="header-cta pc">
      <a href="<?php echo home_url('/documents/'); ?>" class="btn btn-header-dl">
        <i class="fas fa-file-download"></i> 資料請求
      </a>
    </div>
    <button class="sp hamburger" id="js-hamburger">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
</header>

<!-- SPメニュー -->
<div class="sp-menu" id="js-sp-menu">
  <nav class="sp-nav">
    <ul>
      <li><a href="<?php echo home_url('/'); ?>">予約ルームズとは</a></li>
      <li><a href="<?php echo home_url('/function/'); ?>">機能の紹介</a></li>
      <li><a href="<?php echo home_url('/case/'); ?>">お客様の声</a></li>
      <li><a href="<?php echo home_url('/faq/'); ?>">よくある質問</a></li>
      <li><a href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a></li>
      <li><a href="<?php echo home_url('/documents/'); ?>" class="btn btn-sp-dl">資料請求</a></li>
    </ul>
  </nav>
</div>
