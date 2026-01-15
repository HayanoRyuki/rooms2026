<?php get_header(); ?>
<body class="page voice voice-detail">
<?php get_header('gtm'); ?>
<!-- ページヘッダ -->
<!-- メインコンテンツ -->
<main class="main wrapper">
<div class="btm_nav sticky-wrapper" uk-sticky="bottom: true">
<?php get_header('menu'); ?>	
</div>
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
<div class="container_full uk-flex">
<?php
if (have_posts()) :  //もしも該当する記事があれば、
  while (have_posts()) :  //記事があるだけ
    the_post(); //記事を表示する
?>
	<div class="article">
		<div class="contents-wrap">
		<div class="voice-detail-tit">
			<h1><?php the_title(); ?></h1>
<?php
$terms = get_the_terms(get_the_ID(), 'case_category');
if ($terms && !is_wp_error($terms)) : ?>
    <div class="case-category-list">
        <?php foreach ($terms as $term) : ?>
            <span class="case-category"><?php echo esc_html($term->name); ?></span>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
		</div>
		<div class="main-img">
			<figure>
				<picture>
						<?php the_post_thumbnail('full'); ?>
				</picture>
			</figure>
		</div>
		<p><?php the_field('single_description'); ?></p>
		<div class="summary-box">
			<h6><span>この記事の要約</span></h6>
			<ul class="check-list">
			<li><i class="fas fa-check"></i><?php the_field('point1'); ?></li>
			<li><i class="fas fa-check"></i><?php the_field('point2'); ?></li>
			<li><i class="fas fa-check"></i><?php the_field('point3'); ?></li>
			</ul>
		</div>
		<section class="interview">
			
			
			<?php the_content(); ?>
			
			
			<!--<div class="present-box">
				<h5>▼  非公開の導入事例は<br class="sp">資料をダウンロードください(無料)</h5>
				<div class="inner">
					<h4 class="line"><span>非公開事例集を無料プレゼント中！</span></h4>
					<p>WEB上では非公開にしている28社分の導入事例があります。様々な規模の企業様の導入前の課題、そして導入後の課題解決に至るまでのお話や、その後に生じた様々なメリットについてお話いただきました。</p>
					<div class="uk-grid" uk-grid>
						<div class="txt-box uk-width-2-3@m">
							<p><strong>本資料でわかること</strong></p>
							<ul class="check">
							<li><i class="fas fa-check"></i>コスト削減の実例</li>
							<li><i class="fas fa-check"></i>導入後に想定外のメリット</li>
							<li><i class="fas fa-check"></i>サービスの仕組みと特徴など</li>
							</ul>
						</div>
						<div class="img-box uk-width-1-3@m">
					    	<figure><img src="file:///Macintosh HD/Users/daikimasuda/Desktop/receptionist.jp/img/sample_doc.png" alt=""/></figure>
						</div>
					</div>
					<p class="cap">是非、組織の働き方改革・生産性向上にお役立てください。</p>
					<div class="btn-box">
						<a href="#" class="btn">非公開の導入事例をダウンロード</a>
					</div>
				</div>
			</div>-->
		</section>
		</div>
	</div><div class="side">
		<div class="prof-box">
		<div class="inner">
			<h3 class="logo"><?php if( get_field('logo') ): ?>
<img src="<?php the_field('logo'); ?>"  style="margin-bottom: 20px" width="200"  alt="<?php the_field('client'); ?>" />
<?php endif; ?></h3>
			<table class="prof-table">
				<tr><th>クライアント名</th><td><?php the_field('client'); ?></td></tr>
<tr><th>業種</th><td><?php the_field('industry'); ?></td></tr>
<tr><th>利用部署</th><td><?php the_field('department'); ?></td></tr>
<tr><th>従業員数</th><td><?php the_field('people'); ?></td></tr>
			</table>
		</div>
		</div>
	</div>
<?php endwhile; 
else:
endif; 
?>
</div>

	<section class="bnr_dl_cta">
		<?php get_template_part('cta'); ?>
	</section>
</main>
<!-- /メインコンテンツ -->
<footer class="footer">
	<?php get_footer(); ?>
</footer>
<script src="file:///Macintosh HD/Users/daikimasuda/Desktop/receptionist.jp/js/common.js"></script>
<div class="banner"><a class="banner_none">×</a>
<a href="https://receptionist.jp/document/?utm_source=banner&utm_medium=website-rightbottom&utm_campaign=cta">
  <img src="<?php echo get_template_directory_uri(); ?>/img/productsite_banner_Fixed.png" alt="">
</a>
</div>
<script>
if(!navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)){
$(window).scroll(function () {
  var pos = 200; // ①上からの距離(px)で指定する場合
  var pos = document.body.clientHeight / 10; // ②上からの割合(%)で指定する場合
  if ($(this).scrollTop() > pos) {
    $('.banner').fadeIn();
  } else {
    $('.banner').fadeOut();
  }
});
$('.banner_none').on('click', function () {
    $('.banner').addClass('none');
});
}
</script>
</body>
</html>