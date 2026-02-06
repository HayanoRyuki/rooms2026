<?php get_header(); ?>
<body class="page">
<?php get_header('gtm'); ?>
<!-- ページヘッダ -->
<header class="header pc">
<?php get_header('nav'); ?>
</header><!-- /ページヘッダ -->
<!-- メインコンテンツ -->
<main class="main wrapper">
<div class="btm_nav sticky-wrapper" uk-sticky="bottom: true">
<?php get_header('menu'); ?>
</div>
<!-- ページタイトル -->
<div class="hero page-title wrapper faq-hero">
	<div class="hero-body">
		<div class="hero-tit">
			<h2 class="uk-text-center">よくあるご質問</h2>
			<p class="b1 b2-sp uk-text-center">会議室管理システムのアカウント、<br class="sp">
プランなどについて</p>
		</div>
	</div>
</div>
<!-- /ページタイトル -->
	<section class="faq">
		<div class="container_s">
			<ul class="faq-index-wrap" uk-accordion="multiple: true">
				<li class="uk-open">
					<a class="uk-accordion-title" href="#">初期費用や利用料金はいくらですか？</a>
					<div class="uk-accordion-content">
						<p>予約ルームズは初期費用はかかりません。月額料金のみとなります。(端末代は別)</p>
						<a href="./document" class="btn mt-s">詳しくは資料をご覧ください</a>
					</div>
				</li>
				
				<li>
					<a class="uk-accordion-title" href="#">「新型コロナウイルス対策」としてどのように使えますか？</a>
					<div class="uk-accordion-content">
						<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
					</div>
				</li>
				<li>
					<a class="uk-accordion-title" href="#">「会議室管理」はできますか？</a>
					<div class="uk-accordion-content">
						<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
					</div>
				</li>
				<li>
					<a class="uk-accordion-title" href="#">チャットツールは何と連携できますか？</a>
					<div class="uk-accordion-content">
						<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
					</div>
				</li>
				<li>
					<a class="uk-accordion-title" href="#">通知を行うグループは分けられませんか？</a>
					<div class="uk-accordion-content">
						<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
					</div>
				</li>
				<li>
					<a class="uk-accordion-title" href="#">内線電話との違いは何ですか？</a>
					<div class="uk-accordion-content">
						<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
					</div>
				</li>
				<li>
					<a class="uk-accordion-title" href="#">RECEPTIONISTの略称は何ですか？</a>
					<div class="uk-accordion-content">
						<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
					</div>
				</li>
			</ul>
		</div>
	</section>
	
	<section class="bnr_dl_cta bnr_page">
		<div class="container">
			<h4 class="uk-text-center">上記以外でご不明点が<br class="sp">ございましたら<br class="sp">お問い合わせください</h4>
			<p class="b1 b2-sp uk-text-center">基本的な機能はもちろん、サポートの<br class="sp">内容から導入事例まで詳しくご紹介<br class="pc">しています。<br class="sp">サービス導入を検討されている方に<br class="sp">ぜひご覧いただきたい資料になります。</p>
			<div class="btn-box"><a href="./document.html" class="btn btn_dl">詳しい資料を無料でダウンロード</a></div> 
		</div>
	</section>
	<section class="service-index-wrap">
		<?php get_footer('service'); ?>
	</section>
</main>
<!-- /メインコンテンツ -->
<footer class="footer">
	<?php get_footer(); ?>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/common.js"></script>
</body>
</html>