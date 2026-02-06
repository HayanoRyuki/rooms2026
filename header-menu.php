<?php
/**
 * ヘッダーナビゲーション（下層ページ用）
 */
?>
<header class="header">
	<div class="container">
		<div class="h_top-block">
			<div class="h_left">
				<a href="<?php echo home_url('/'); ?>" class="logo-mark">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_logo_rooms.svg" alt="予約ルームズ" width="158" height="42">
				</a>
				<nav class="h_l_nav pc">
					<ul>
						<li><a href="<?php echo home_url('/'); ?>">機能について</a></li>
						<li><a href="<?php echo home_url('/case/'); ?>">お客様の声</a></li>
						<li><a href="<?php echo home_url('/price/'); ?>">料金表</a></li>
						<li><a href="<?php echo home_url('/faq/'); ?>">よくあるご質問</a></li>
						<li><a href="<?php echo home_url('/contact/'); ?>">問い合わせ</a></li>
					</ul>
				</nav>
			</div>
			<div class="h_r_nav pc">
				<ul>
					<li><a href="<?php echo home_url('/document-price/'); ?>" class="btn btn-price">料金表をもらう</a></li>
					<li><a href="<?php echo home_url('/documents/'); ?>" class="btn btn-dl">資料をもらう</a></li>
				</ul>
			</div>
			<div class="navbar-burger sp" id="js-hamburger">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
</header>

<!-- SPメニュー -->
<div class="navbar-menu" id="js-sp-menu">
	<div class="inner">
		<nav class="h_nav_sp">
			<a href="<?php echo home_url('/documents/'); ?>" class="btn btn-dl">資料をもらう</a>
			<dl>
				<dd><a href="<?php echo home_url('/'); ?>">機能について</a></dd>
				<dd><a href="<?php echo home_url('/case/'); ?>">お客様の声</a></dd>
				<dd><a href="<?php echo home_url('/price/'); ?>">料金表</a></dd>
				<dd><a href="<?php echo home_url('/faq/'); ?>">よくあるご質問</a></dd>
				<dd><a href="<?php echo home_url('/contact/'); ?>">問い合わせ</a></dd>
			</dl>
		</nav>
	</div>
</div>
