<?php get_header(); ?>
<style>
/*********
 ABOUT
*************/
.page .hero.page-title.wrapper h2 {
    font-size: 6.625em;
    top: -85px;
    position: absolute;
}
.message-block {
	padding-top:0;
}
.message-block .cont-wrap {
	justify-content: space-between;
	margin-top:120px;
}
.message-block .cont-wrap .img-box {
	width:40%;
	padding-left:8.7%;
}
.message-block .cont-wrap .img-box figure {
	position:relative;
}
.message-block .cont-wrap .img-box figure:after {
	position:absolute;
	content:"";
	width:62px;
	height:60px;
	background: url("../img/img_colon.svg") no-repeat;
	background-size: 100%;
	top:-30px;
	right:-30px;
}
.message-block .cont-wrap .txt-box {
	width:52%;
	padding-top:70px;
	padding-right:calc(2*var(--spacing-s))
}
.message-block .cont-wrap .txt-box h4 {
	margin-bottom:var(--spacing-m);
	font-size:1.75em;
	line-height: 1.6;
  	letter-spacing: 0.84px;
}
.message-block .cont-wrap .txt-box .inner {
	padding-left:var(--spacing-m);
}
.message-block .cont-wrap .txt-box .inner p.b1 {
	font-weight:500;
}
.message-block .cont-wrap .txt-box .signature {
	margin-top:var(--spacing-m);
}
.message-block .cont-wrap .txt-box .signature strong {
	font-size:0.75em;
	display: block;
	margin-top:var(--spacing-xs);
}
.message-block .cont-wrap .txt-box .signature img.ceo {
	width:197px;
}
.message-block .cont-wrap .txt-box .signature img.coo {
	width:170px;
}
.outline-block .cont-wrap {
	justify-content: space-between;
}
.outline-block .cont-wrap .img-box {
	width:353px;
}
.outline-block .cont-wrap .img-box h1 {
    font-size: 6.25em;
    font-weight: bold;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.33;
    letter-spacing: 10px;
    text-align: left;
    color: transparent;
    transform: rotate(0deg);
    transform-origin: left top;
    margin-left: 0.7em;
    writing-mode: vertical-rl;
    position: absolute;
}
.outline-block .cont-wrap .txt-box {
	width:calc(100% - 353px - 44px);
}
.outline-list dl {
	display: flex;
	justify-content: space-between;
	color: #0e1530;
	font-stretch: normal;
	font-style: normal;
	line-height: 1.6;
	letter-spacing: 0.24px;
	text-align: left;
	margin-bottom:var(--spacing-s)
}
.outline-list dl dt{
	width:160px;
	font-weight: bold;
}
.outline-list dl dd {
	width:calc(100% - 200px);
	font-weight: 500;
	color: #0e1530;
}

@media only screen and (max-width: 767px) {
.message-block .cont-wrap,.outline-block .cont-wrap {
	display: block;
	margin-top:var(--spacing-l);
}
	.message-block .cont-wrap > *, .outline-block .cont-wrap > * {
		width:100% !important;
		padding-left:0 !important;
	}
	.message-block .cont-wrap .img-box figure {
		width:47%;
		margin:auto;
	}
	.message-block .cont-wrap .txt-box h4 {
    font-size: 1.5em;
		text-align: center;
}
	.message-block .cont-wrap .txt-box .inner {
    padding-left:0;
}
	.message-block .cont-wrap .txt-box {
    padding-top:var(--spacing-m);
    padding-right:0;
}
	.message-block .cont-wrap .txt-box .signature {
    margin-top: var(--spacing-m);
    text-align: center;
}
	.message-block .cont-wrap .txt-box .signature img.ceo,.message-block .cont-wrap .txt-box .signature img.coo  {
    width: 34.1%;
}
	.outline-block{
		padding-top:0;
	}
	.outline-block .cont-wrap {
		margin-top:0;
	}
	.outline-block .cont-wrap .img-box h1 {
		transform: rotate(0);
		font-size:2.6875em;
		text-align: center;
		margin-left:0;
	}
	.outline-list dl dt {
    width: 5em;
    font-weight: bold;
}
	.outline-list dl dd{
		width: calc(100% - 5em);
	} 
}
.outline {
	font-weight: bold;
	line-height: 1;
	text-stroke: 1px #1e252c;
	-webkit-text-stroke: 1px #1e252c;
	color: transparent;
}

/* IE11 */
_:-ms-lang(x)::-ms-backdrop,
.outline {
	text-shadow: 1px 1px 0 #1e252c,
		-1px 1px 0 #1e252c,
		1px -1px 0 #1e252c,
		-1px -1px 0 #1e252c;
	color: rgba(255, 255, 255, 0.9);

}
.hero.page-title.wrapper{
	margin-top: 120px;
}
</style>
<body class="page">
<?php get_header('gtm'); ?>
<!-- ページヘッダ -->

<!-- メインコンテンツ -->
<main class="main wrapper">
<div class="btm_nav sticky-wrapper" uk-sticky="bottom: true">
	<?php get_header('menu'); ?>
</div>
<!--以上、 共通ページ-->
<!-- FV -->
<div class="hero page-title wrapper">
		<div class="container_full">
			<div class="container tit-box">
				<h2 class="en outline">ABOUT US</h2>
			</div>
			<div class="kv">
				<picture>

                      <img src="<?php echo get_template_directory_uri(); ?>/img/about_kv@3x.jpg" alt="" data-pagespeed-url-hash="2200589300" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
				</picture>
			</div>

		</div>		
</div>
<!-- /FV -->
	
	<section class="section message-block" id="message">
		<div class="container">
			<div class="cont-wrap uk-flex">
				<div class="img-box">
					<figure>
						<picture>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ceo@3x.jpg" alt="" data-pagespeed-url-hash="4039458342" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
						</picture>
					</figure>
				</div>
			  <div class="txt-box">
					<h4>もっと人が<br class="sp">
人にしかできないことで<br>
輝ける社会へ</h4>
				<div class="inner">
						<p class="b1">私は10年以上「企業受付」という仕事に従事してきました。10年で世の中は進化し、デジタル化が進みました。しかし、受付は進化なく「非効率なまま」でした。「手書き」「内線」「取次」という誰もハッピーじゃない受付を変えるべく、2016年にこの会社を創業しました。<br>
日本の素敵な文化であるおもてなしを残しながら、無駄のない受付を作りたい。そんな想いが私の原点です。<br><br>
現在は受付システムに加え、日程調整・スペース管理といった領域にサービスを拡大しています。人に会うには日程調整を行いますし、会議をするには場所が必要です。それらをRECEPTIONISTがお手伝いします。<br><br>
人がやらなくて良い仕事をデジタルに任せれば、人は人にしかできないことにコミットできる。プロダクトにはそんな私たちの想いが込められています。<br><br>
「ビジネスの側にはRECEPTIONIST」<br><br>
これからもRECEPTIONISTが皆様のビジネスコミュニケーションを後押しし、ビジネスパーソンがより輝ける未来をRECEPTIONISTが作っていきます。</p>
				  </div>
				  <p class="signature mt-s"><img src="<?php echo get_template_directory_uri(); ?>/img/img_signature_ceo.svg" class="ceo" alt="" data-pagespeed-url-hash="4140507953" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"><strong>代表取締役CEO</strong></p>
				</div>	
			</div>
			<div class="cont-wrap uk-flex">
				<div class="img-box">
					<figure>
						<picture>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/coo@3x.jpg" alt="" data-pagespeed-url-hash="3950114416" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
						</picture>
					</figure>
				</div>
			  <div class="txt-box">
					<h4>役員プロフィール</h4>
				<div class="inner">
						<p class="b1">取締役COO兼プロダクトマネージャー。1979年生まれ。神奈川県出身。<br>
2003年 北海道大学理学部卒業後、SIerに入社しシステムエンジニアとしてキャリアをスタート。すぐにインターネットの魅力に惹かれネットベンチャーへ転職しWEBエンジニアとして従事。
その後、当時流行っていたSNSによる新しいコミュニケーションに可能性を感じ、2006年、㈱ミクシィにWEBプロデューサーとして入社。mixi Platformやミクシィ年賀状など技術知識を必要とするプロジェクトを担当。<br><br>
2013年、新たなサービスの立ち上げに参画するため MARK STYLER㈱ へ入社しプロダクトマネージャーを経験後、2016年に株式会社RECEPTIONISTに入社、取締役COO兼プロダクトマネージャーに就任。（現任）</p>
				  </div>
				  <p class="signature mt-s"><img src="<?php echo get_template_directory_uri(); ?>/img/img_signature_coo.svg" class="coo" alt="" data-pagespeed-url-hash="3388347823" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"><strong>取締役COO プロダクトマネージャー</strong></p>
				</div>	
			</div>
		</div>
	</section>
	<section class="section outline-block" id="company">
		<div class="container">
			<div class="cont-wrap uk-flex">
				<div class="img-box">
					<h1 class="en outline">Company<br> 
Outline</h1>
				</div>
			<div class="txt-box">
				<div class="outline-list">
					<dl><dt>会社名</dt><dd>株式会社 RECEPTIONIST</dd></dl>
					<dl><dt>本店所在地</dt><dd>〒153-0042<br>東京都目黒区青葉台3-6-28 住友不動産青葉台タワー8階</dd></dl>
					<dl><dt>役員</dt><dd>代表取締役CEO 橋本 真里子<br>
取締役COO 真弓 貴博<br>
取締役CTO 宗岡 亜成<br>
社外取締役 小笠原 治<br>
社外取締役 長谷部 潤<br>
常勤監査役 神田 康弘<br>
社外監査役 石原 遥平<br>
社外監査役 坂下尚弥
</dd></dl>
					<dl><dt>設立日</dt><dd>2016年1月21日</dd></dl>
					<dl><dt>事業内容</dt><dd>クラウドサービスの開発・提供、受付業務コンサルティング</dd></dl>
					<dl><dt>取得特許</dt><dd>受付システム・プログラム特許(第6429965号)<br>
受付システム、受付管理装置、受付管理方法および受付管理プログラム(第6671727号)</dd></dl><br>
				</div>
			</div>
		</div>
		</div>
	</section>
<!--以上、 共通ページ-->
<section class="service-index-wrap">
		<?php get_footer('service'); ?>
	</section>
</main>
<!-- /メインコンテンツ -->
<footer class="footer">	
	<?php get_footer(); ?>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

</body>
</html>