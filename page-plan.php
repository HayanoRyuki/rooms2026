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
	
<?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
	
<section class="bnr_dl_cta">
		 <?php get_template_part('cta'); ?>
	</section>
	<section class="service-index-wrap">
		<?php get_footer('service'); ?>
	</section>
</main>
<!-- /メインコンテンツ -->
<footer class="footer">
	<?php get_footer(); ?>
</footer>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/common.js"></script>
<script>
tippy('.cap', {//指定した要素にツールチップが出現
	placement: 'bottom-start',//ツールチップの表示位置⇒top、top-start、top-end、right、right-start、right-end、bottom、bottom-start、bottom-end、left、left-start、left-end。指定をしなくてもtopに表示
	duration: 200,//ツールチップの出現の速さをミリ秒単位で指定
	arrowType:'round',
});
</script>
</body>
</html>