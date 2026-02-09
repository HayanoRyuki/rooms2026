<?php
/**
 * ヘッダーナビゲーション（トップページ用スティッキーメニュー）
 * 共通仕様: ドロップダウン方式モバイルメニュー
 */
?>
<div class="l-header__overlay"></div>

<header class="l-header">
	<div class="l-header__inner">
		<a href="<?php echo home_url('/'); ?>" class="l-header__logo">
			<img class="l-header__logo-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/img_logo_rooms.svg" alt="予約ルームズ" width="158" height="42">
		</a>

		<button class="l-header__hamburger" type="button"
			aria-label="メニューを開く" aria-expanded="false">
			<span class="l-header__hamburger-line"></span>
			<span class="l-header__hamburger-line"></span>
			<span class="l-header__hamburger-line"></span>
		</button>

		<nav class="l-header__nav">
			<ul class="l-header__nav-list">
				<li><a href="<?php echo home_url('/'); ?>">機能について</a></li>
				<li><a href="<?php echo home_url('/case/'); ?>">お客様の声</a></li>
				<li><a href="<?php echo home_url('/price/'); ?>">料金表</a></li>
				<li><a href="<?php echo home_url('/faq/'); ?>">よくあるご質問</a></li>
				<li><a href="<?php echo home_url('/contact/'); ?>">問い合わせ</a></li>
			</ul>
			<div class="l-header__nav-cta">
				<a class="c-button__header--frame" href="<?php echo home_url('/document-price/'); ?>">料金表をもらう</a>
				<a class="c-button__header" href="<?php echo home_url('/documents/'); ?>">資料をもらう</a>
			</div>
		</nav>
	</div>
</header>
