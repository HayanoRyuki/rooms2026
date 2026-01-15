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
			<h4><?php the_title(); ?></h4>
			<!--<div class="tag-list"><span class="tag">受付システム</span><span class="tag">日程調整</span></div>-->
		</div>
		<div class="main-img">
			<figure>
				<picture>
						<?php the_post_thumbnail('full'); ?>
				</picture>
			</figure>
			<!--<p class="article_link_nt">関連記事：<a href="https://rooms.receptionist.jp/lack-of-meeting-rooms/problem_solving/">入社1ヶ月でも実感「会議室のイライラ」は案外簡単に解決できる</a></p>-->
		</div>
		<!--<p><?php the_field('single_description'); ?></p>-->
		<!--<div class="summary-box">
			<h6><span>この記事の要約</span></h6>
			<ul class="check-list">
			<li><i class="fas fa-check"></i><?php the_field('point1'); ?></li>
			<li><i class="fas fa-check"></i><?php the_field('point2'); ?></li>
			<li><i class="fas fa-check"></i><?php the_field('point3'); ?></li>
			</ul>
		</div>-->
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
			<?php endwhile; 
else:
endif; 
?>
		</div>
	</div>
	<div class="side">
		<div class="prof-box">
		<div class="inner">
		<div class="banner_cta">
		<ul>
			<li><a href="https://rooms.receptionist.jp/documents/"><img src="<?php echo get_template_directory_uri(); ?>/img/cta.webp" alt="資料請求"></a></li>
			<li><a href="https://rooms.receptionist.jp/documents/"><img src="<?php echo get_template_directory_uri(); ?>/img/timemanagment.webp" alt="タイムマネジメント"></a></li>
		</ul>	
		
	</div>
<!--人気記事-->
<div class="articleRight_article">
		<h5>おすすめの記事</h5>
<?php
if (function_exists('wpp_get_mostpopular')) {
 $arg = array(
 'limit' => 3, //表示させる数
 'range' => 'daily', //集計する期間（daily,weekly monthly,all）
  //'cat' => '-2',
  //'category_name' => 'news,howto',
 'order_by' => 'views', //集計の基準（comments,views,avg）
 'post_type' => 'post', //ポストタイプを指定（post,page,カスタムポスト名）
 'title_length' => 35, //タイトルの文字数を指定
 'thumbnail_width' => 50, //サムネイルの幅
 'thumbnail_height' => 50, //サムネイルの高さ
 'stats_views' => 1, //アクセス数を表示（1,0）
 'wpp_start' => '<ul class="wpp-list">', //リストの出力の前に挿入するHTMLタグ
 'wpp_end' => '</ul>', //リストの出力の後に挿入するHTMLタグ
 'post_html' => "
<li><a href='{url}'>{thumb_img}</a>
                <span><a href='{url}'>{text_title}</a></span></li>

 " //表示するHTMLの設定
 );
 wpp_get_mostpopular($arg);
}?>
</div>
<!--以上、人気記事-->			
</div>
		</div>
	</div>
</div>
<section class="top_voice">
		<div class="container">
			<div class="normal-index-wrap uk-flex" uk-grid uk-height-match="target: > .normal-index-box">
				
	<?php 
query_posts('showposts=3');
if (have_posts()) : 
while (have_posts()) : 
the_post();
?>
<?php
$cat = get_the_category();
$cat_name = $cat[0]->cat_name; 
$cat_slug  = $cat[0]->category_nicename;
?>
				
				<div class="normal-index-box uk-width-1-3@m">
					<a href="<?php the_permalink(); ?>" style="display: block;">
					<div class="uk-card uk-card-default new">
								<div class="uk-card-media-top">
									<picture>
									<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" alt="">
									</picture>
									<div class="corp_icon"> <?php if( get_field('logo') ): ?>
                                <img src="<?php the_field('logo'); ?>" />
                     <?php endif; ?></div>
								</div>
								<div class="uk-card-body">
									<h5><?php the_title(); ?></h5>
									<p class="corp_name"><?php the_field('client'); ?></p>
									<!--<p class="spec">#<?php the_field('chat'); ?>&nbsp;&nbsp;#<?php the_field('staff'); ?></p>
									<div class="tag-list"><a href="" class="tag">タグ</a><a href="" class="tag">タグ</a><a href="" class="tag">タグ</a></div>-->
								</div>
					</div>
					</a>
				</div>
  <?php
endwhile;
endif;
?>
				
			</div>
		</div>
	</section>
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
<script src="file:///Macintosh HD/Users/daikimasuda/Desktop/receptionist.jp/js/common.js"></script>
<div class="banner"><a class="banner_none">×</a>
<a href="https://receptionist.jp/document-200/?utm_source=banner&utm_medium=website-rightbottom&utm_campaign=cta">
  <img src="<?php echo get_template_directory_uri(); ?>/img/productsite_banner_Fixed.png" alt="">
</a>
</div>
<script>
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
</script>
</body>
</html>