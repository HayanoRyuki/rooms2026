<?php get_header(); ?>
<body class="page voice">
<?php get_header('gtm'); ?>
<!-- ページヘッダ -->
<!-- メインコンテンツ -->
<main class="main wrapper">
<div class="btm_nav sticky-wrapper" uk-sticky="bottom: true">
	<div class="btm_nav sticky-wrapper" uk-sticky="bottom: true"><?php get_header('menu'); ?></div>
</div>
<!-- ページタイトル -->
	<div class="hero page-title wrapper bg_blue">
	<div class="hero-body">
	  <div class="hero-tit">
			<h3 class="uk-text-center"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></h3>
		</div>
	</div>
</div>
	<!--<section class="nav_soat bg_blue">
<div class="container">
			<div class="uk-grid" uk-grid>
				<div class="normal-index-box uk-width-1-3@m">
					<div uk-form-custom="target: > * > span:first-child">
						<label for="">従業員人数</label>
						<select>
							<option value="">すべての従業員規模</option>
							<option value="1">1〜10人</option>
							<option value="2">11〜50人</option>
							<option value="3">51〜100人</option>
							<option value="4">100人以上</option>
						</select>
						<button class="uk-button uk-button-default" type="button" tabindex="-1">
							<span></span>
							<span uk-icon="icon: chevron-down"></span>
						</button>
					</div>
				</div>
				<div class="normal-index-box uk-width-1-3@m">
					<div uk-form-custom="target: > * > span:first-child">
						<label for="">通知方法別</label>
						<select>
							<option value="">すべての通知方法</option>
							<option value="1">テキストテキスト</option>
							<option value="2">テキストテキスト</option>
							<option value="3">テキストテキスト</option>
							<option value="4">テキストテキスト</option>
						</select>
						<button class="uk-button uk-button-default" type="button" tabindex="-1">
							<span></span>
							<span uk-icon="icon: chevron-down"></span>
						</button>
					</div>
				</div>
				<div class="normal-index-box uk-width-1-3@m">
					<div uk-form-custom="target: > * > span:first-child">
						<label for="">課題別</label>
						<select>
							<option value="">すべての課題</option>
							<option value="1">テキストテキスト</option>
							<option value="2">テキストテキスト</option>
							<option value="3">テキストテキスト</option>
							<option value="4">テキストテキスト</option>
						</select>
						<button class="uk-button uk-button-default" type="button" tabindex="-1">
							<span></span>
							<span uk-icon="icon: chevron-down"></span>
						</button>
					</div>
				</div>
			</div>
	</div>
</section>-->
	<section class="top_voice">
		<div class="container">
		
			<div class="normal-index-wrap uk-flex" uk-grid uk-height-match="target: > .normal-index-box">
<?php if(have_posts()): while(have_posts()):the_post(); ?>
<?php
$cat = get_the_category();
$cat_name = $cat[0]->cat_name; 
$cat_slug  = $cat[0]->category_nicename;
?>

				<div class="normal-index-box uk-width-1-3@m">
					<a href="<?php the_permalink(); ?>">
					<div class="uk-card uk-card-default">
								<div class="uk-card-media-top">
									<picture>
									<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" alt="<?php the_title(); ?>"/>
									</picture>
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

				<!--<div class="pagination">
      <ul>       <a href="#"><li><</li></a>
        <a class="is-active" href="#"><li>1</li></a>
        <a href="#"><li>2</li></a>
        <a href="#"><li>3</li></a>
        <a href="#"><li>4</li></a>
        <a href="#"><li>5</li></a>
        <a href="#"><li>6</li></a>
        <a href="#"><li>></li></a>
      </ul>
    </div>-->
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
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/common.js"></script>
</body>
</html>