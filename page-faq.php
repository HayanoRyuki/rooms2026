<?php get_header(); ?>
<body class="page">
<?php get_header('gtm'); ?>
<!-- ページヘッダ -->
<!-- メインコンテンツ -->
<main class="main wrapper">
<div class="btm_nav sticky-wrapper" uk-sticky="bottom: true">
<?php get_header('menu'); ?>
</div>
<!-- ページタイトル -->
<div class="hero page-title wrapper faq-hero">
	<div class="hero-body">
		<div class="hero-tit">
			<h1 class="uk-text-center">よくあるご質問</h1>
			<p class="b1 b2-sp uk-text-center">会議室管理システムのアカウント、<br class="sp">
プランなどについて</p>
		</div>
	</div>
</div>
<!-- /ページタイトル -->
	<section class="faq">
		<div class="container_s">
			<?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
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
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
</body>
</html>