<?php get_header(); ?>
<body class="page function-page">
<?php get_header('gtm'); ?>
<!-- ページヘッダ -->
<!-- メインコンテンツ -->

<main class="main wrapper">
<div class="btm_nav sticky-wrapper" uk-sticky="bottom: true">
	<?php get_header('menu'); ?>
</div>

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
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/common.js"></script>
</body>
</html>