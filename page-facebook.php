<?php get_header(); ?>
<body class="top">
<?php get_header('gtm'); ?>
<!--<div class="h_news_block"><div class="container">
  <div class="news-txt"><a href="https://receptionist.co.jp/news/backoffice-dxpo-2022/"><span>第1回「バックオフィスDXPO」に出展いたします。</span><span class="more">詳細</span></a></div><a href="javascript:void(0);" class="js-close"><i class="fas fa-times"></i></a>
  </div>
</div>-->
<!-- ページヘッダ -->

<!-- メインコンテンツ -->
<style>
  .kv-form-wrap label.error, label.error {
    color: red;
  }
</style>
<main class="main wrapper">
<div class="btm_nav sticky-wrapper" uk-sticky="bottom: true"><?php get_header('menu'); ?></div>
<!-- ページタイトル -->
<div class="hero page-title wrapper">
  <div class="hero-body">
    <div class="container_l adView">
      <div class="mv_txt-box">
        <h1><img src="<?php echo get_template_directory_uri(); ?>/img/img_reception_factory_H12x.webp" alt="会議室予約システム「予約ルームズ」"/></h1>
  </div>
      <div class="mv_img-box">
        <picture>
          <img src="<?php echo get_template_directory_uri(); ?>/img/img-fv-left2x.webp" alt="会議室予約システムの画面">
        </picture>
      </div>
      <!--<p class="cap">※1&nbsp;2022年度RECEPTIONIST利用回数&nbsp;※2レビューサイトITreviewにて</p>-->
    </div>
    <div class="container_r">
      <p class="document_guidance"><img width="27px" height="auto" src="<?php echo get_template_directory_uri(); ?>/img/doc-doownload.svg">資料請求はこちら</p>
<form id="contact" method="post" name="document">

          <div class="kv-form-wrap">
            <div>
              <label>会社名</label>
              <input type="text" name="company_name" placeholder="御社名">
            </div>
            <div>
        <label>ご担当者のお名前</label>
        <div class="uk-flex">
        <span>
              <input type="text" name="last_name" placeholder="姓">
        </span>
        <span>
              <input type="text" name="first_name" placeholder="名">
        </span>
        </div>
            </div>
            <div>
              <label>お電話番号</label>
              <input type="text" name="phone_no" placeholder="01-2345-6789">
            </div>
            <div>
              <label>メールアドレス</label>
              <input type="text" name="email" placeholder="sample@receptionist.co.jp">
            </div>
            <div>
              <label>従業員数</label>
              <select class="select select-addon valid" name="employee_number" aria-invalid="false">
              <option value="">選択してください</option>
              <option value="1-10名">1-10名</option>
              <option value="11-50名">11-50名</option>
              <option value="51-100名">51-100名</option>
              <option value="101-200名">101-200名</option>
              <option value="201-300名">201-300名</option>
              <option value="301-500名">301-500名</option>
              <option value="501-1000名">501-1000名</option>
              <option value="1001名以上">1001名以上</option>
              </select>
            </div>
          </div>
          <div class="kv-form-agree">
            <input name="agree" type="checkbox" value="1" id="agreement">
            <label for="agreement"><a href="https://help.receptionist.jp/?p=402#gsc.tab=0">（株）RECEPTIONISTの個人情報の取り扱い</a>について同意します。</label>
          </div>
          <input type="hidden" name="contact_type" value="document_rooms">
          <input type="submit" value="資料をダウンロード" id="send" class="btn btn_dl">
        </form>
    </div>
  </div>
</div>
 <?php get_template_part('logo'); ?>
</section>
 <section class="section_subject">
	<ul>
		<li>
			<h2>会議室を使いたいのに</h2>
			<p>こんな<span>課題</span><br>ありませんか？</p>
		</li>	
		<li>
			<img src="<?php echo get_template_directory_uri(); ?>/img/about_img012x.webp" alt="会議室が空いてない。無人なのに予約されていて利用できない。予約がダブルブッキングする。予約方法が紙で煩雑" class="pc">
			<img src="<?php echo get_template_directory_uri(); ?>/img/sp_about_img012x.webp" alt="会議室が空いてない。無人なのに予約されていて利用できない。予約がダブルブッキングする。予約方法が紙で煩雑" class="sp">
		</li>
	</ul>
	<p class="section_subject_arrow"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.webp" alt="会議室予約システム「予約ルームズ」で解決へ"/></p>
</section>
<section class="section_solution">
	<div class="section_solution_wrap">
		<h2>それ、<span>予約ルームズ</span>で解決できます！</h2>
		<ul>
			<li>
				<h3>会議室の管理・予約の<br>デジタル化で、課題解決へ</h3>
				<p>会議室の予約管理を効率化するだけでなく、<br>空予約や無断延長を自動で防ぐことで、オフィスリソースの効果最大化に貢献します。<br></p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/img/img_3.0-22x.webp" alt="会議室予約システム「予約ルームズ」のイメージ">
			</li>
		</ul>
	</div>
			
</section>
<section class="system01">
    <div class="container">
      <h2 class="uk-text-center">予約ルームズで解決① </h2>
      <h3 class="uk-text-center">シンプルな手順で予約</h3>
    </div>
    <div class="container_full">
          <ul class="roomsFunction_ct_top_wrap">
        <li class="roomsFunction_ct_top">
            <img src="https://rooms.receptionist.jp/wp-content/themes/rooms.receptionist.jp/img/img_3.0-4-1.webp" alt="一目でわかる空いてる会議室" >
            <h4>一目でわかる空室</h4>
          <p>WEB管理画面・スマホアプリ・サイネージ・会議室の端末から使える会議室か一目でわかります。</p>
        </li>
        <li class="roomsFunction_ct_top">
            <img src="https://rooms.receptionist.jp/wp-content/themes/rooms.receptionist.jp/img/img_3.0-4-2.webp" alt="会議室の空予約分析機能" >
            <h4>予約・今すぐ利用が簡単に</h4>
          <p>予約・即利用が2タッチで可能です。WEB管理画面・スマホアプリ・会議室の端末から予約できます。</p>
        </li>
        <li class="roomsFunction_ct_top">
            <img src="https://rooms.receptionist.jp/wp-content/themes/rooms.receptionist.jp/img/img_3.0-4-4.webp" alt="会議の無断延長防止アラートのイメージ" >
            <h4>QRコードを読み取って予約</h4>
          <p>端末を準備せずに、QRコードを印刷し、それを専用アプリで読み込めば、その場で予約できます。</p>
        </li>
      </ul>
    </div>
  </section>
  <section class="system02">
    <div class="container">
      <h2 class="uk-text-center" >予約ルームズで解決②</h2>
      <h3 class="uk-text-center">効率的で無駄のない利用</h3>
    </div>
    <div class="container_full">
        <ul class="roomsFunction_ct_top_wrap">
        <li class="roomsFunction_ct_top">
            <img src="https://rooms.receptionist.jp/wp-content/themes/rooms.receptionist.jp/img/img_3.0-5-9.webp" alt="会議室の空予約をキャンセル済み" >
            <h4>空予約は自動キャンセル</h4>
          <p>入室がない場合は、自動キャンセルします。その後、別の方が入室・予約が可能となります。</p>
        </li>
        <li class="roomsFunction_ct_top">
            <img src="https://rooms.receptionist.jp/wp-content/themes/rooms.receptionist.jp/img/img_3.0-5-4.webp" alt="空予約分析機能" >
            <h4>空予約分析</h4>
          <p>会議室の稼働率の分析、空予約が多い人・部屋・タイトルの分析が可能です。</p>
        </li>
        <li class="roomsFunction_ct_top">
            <img src="https://rooms.receptionist.jp/wp-content/themes/rooms.receptionist.jp/img/img_3.0-5-10.webp" alt="無断延長防止アラートのイメージ" >
            <h4>無断延長防止アラート</h4>
          <p>利用終了10分前から時間お知らせのアラートが鳴り、退出を促します。</p>
        </li>
      </ul>
    </div>
  </section>
 <section class="top_voice" id="voice">
    <div class="container">
      <h3 class="uk-text-center">予約ルームズのお客様の声</h3>
      <div class="uk-grid-large normal-index-wrap uk-flex" uk-grid uk-height-match="target: > .normal-index-box">
        <div class="normal-index-box uk-width-1-3@m">
      <a href="https://rooms.receptionist.jp/case/sbs-group/" style="display: block;">
          <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                  <picture>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/rooms_sbs_kv.webp" alt="SBSホールディングス">
                  </picture>
          <div class="corp_icon"><img src="<?php echo get_template_directory_uri(); ?>/img/case-sbs-logo.webp" alt="SBSホールディングス"/></div>
          
                </div>
                <div class="uk-card-body">
                  <h4>1500人の拠点を1つに統合。別々のグループウェアでも会議室予約が可能に</h4>
                  <p class="corp_name">SBSホールディングス株式会社</p>
                  <p class="spec">従業員数：23,494人（連結）</p>
                  <p class="case_cta_click">詳しく見る&nbsp;<i class="fa fa-arrow-right"></i></p>
                  <!--<div class="tag-list"><a href="" class="tag">タグ</a><a href="" class="tag">タグ</a><a href="" class="tag">タグ</a></div>
                </div>-->
          </div>
        </div>
      </a>
        </div>


  <div class="normal-index-box uk-width-1-3@m pc">
    <a href="https://rooms.receptionist.jp/case/mitsui-designtec/" style="display: block;">
          <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                  <picture>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/mitsui-designtec-icatch.webp" alt="三井デザインテック株式会社">
                  </picture>
          <div class="corp_icon"><img src="<?php echo get_template_directory_uri(); ?>/img/mitsui-designtec-logo2.webp" alt="三井デザインテック株式会社"/></div>
                </div>
                <div class="uk-card-body">
                  <h4>会議室管理と受付システムの導入で、誰もが自由に働けるオフィスを実現</h4>
                  <p class="corp_name">三井デザインテック株式会社</p>
                  <p class="spec">従業員数：805名</p>
                  <p class="case_cta_click">詳しく見る&nbsp;<i class="fa fa-arrow-right"></i></p>
                  <!--<div class="tag-list"><a href="" class="tag">タグ</a><a href="" class="tag">タグ</a><a href="" class="tag">タグ</a></div>
                </div>-->
          </div>
        </div>
      </a>
      </div>



      <div class="normal-index-box uk-width-1-3@m pc">
    <a href="https://rooms.receptionist.jp/case/final/" style="display: block;">
          <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                  <picture>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/final-inc-eyecatch-900-b.webp" alt="株式会社final">
                  </picture>
          <div class="corp_icon"><img src="<?php echo get_template_directory_uri(); ?>/img/final-inc-logo.webp" alt="株式会社final"/></div>
          
                </div>
                <div class="uk-card-body">
                  <h4>オフィスDXで20時間/月の工数削減！複数プロダクトで業務効率化を実現</h4>
                  <p class="corp_name">株式会社final</p>
                  <p class="spec">従業員数： 50名</p>
                  <p class="case_cta_click">詳しく見る&nbsp;<i class="fa fa-arrow-right"></i></p>
                  <!--<div class="tag-list"><a href="" class="tag">タグ</a><a href="" class="tag">タグ</a><a href="" class="tag">タグ</a></div>
                </div>-->
          </div>
        </div>
      </a>
      </div>
      
      
    </div>
     <a href="https://rooms.receptionist.jp/case/" class="btn section_cta case_cta02" target="_blank">他の事例も見る</a>
  </section>
<section class="sec05 section rec-space">
    <div class="container">
      <h3 class="uk-text-center">予約ルームズの利用イメージ</h3>
        <p class="rec-space_image">会議室・フォンブースなどの入退室の端末、管理画面、<br class="pc">時間お知らせ機能のイメージを掲載しております。</p>
      <ul class="sec05_flex_Wrap">
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/img_3.0-6-12x.webp" alt="会議室前のシステム端末-入室中-"/></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/img_3.0-6-22x.webp" alt="会議室予約システムから予約するシーン"/></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/img_3.0-6-32x.webp" alt="会議室予約システムの利用中のイメージ"/></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/img_3.0-6-42x.webp" alt="テルブースでの会議室予約システム"/></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/img_3.0-6-52x.webp" alt="会議室の予約表"/></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/img_3.0-6-62x.webp" alt="会議室の時間お知らせ端末"/></li>
      </ul>
    </div>
  </section>
<section class="sec05">
    <div class="container">
      <h3 class="uk-text-center">オフィス結合によるグループテナント問題を解決</h3>
      <p class="b1 uk-text-center">予約ルームズを介すと、複数のグループウェアを使っていてもダブルブッキングせず、会議室予約が可能に。</p>
      <div class="uk-grid-large normal-index-wrap uk-flex" uk-grid style="align-items: flex-start;">
        <div class="normal-index-box uk-width-1-3@m">
          <div>       
          </div>
          <figure>
            <picture>
            <img src="<?php echo get_template_directory_uri(); ?>/img/img_3.0-5-1.webp" alt="オフィスが１つのグループ会社のオフィスに集まる" />
            </picture>
          </figure>
          <p class="b1" style="font-size: 0.8em; padding-top: 10px; text-align: left">A社のオフィス内にB,C,D社が移転する場合。</p>
        </div>
        <div class="normal-index-box uk-width-1-3@m">
          <div>       
          </div>
          <figure>
            <picture>
            <img src="<?php echo get_template_directory_uri(); ?>/img/img_3.0-5-2.webp" alt="テナントの問題で会議室の予約ができない" />
            </picture>
          </figure>
          <p class="b1" style="font-size: 0.8em; padding-top: 10px; text-align: left">A社とB,C,D社がそれぞれ別のグループウェア(テナント)のため、会議室の予約ができない。</p>
        </div>
        <div class="normal-index-box uk-width-1-3@m">
          <div>       
          </div>
          <figure>
            <picture>
            <img src="<?php echo get_template_directory_uri(); ?>/img/img_3.0-5-3.webp" alt="会議室予約のマルチテナント問題を解決" />
            </picture>
          </figure>
          <p class="b1" style="font-size: 0.8em; padding-top: 10px; text-align: left">予約ルームズのマルチテナント機能で解決。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="bg_blue sec05 section rec-space">
    <div class="container">
      <h3 class="uk-text-center">こんな場所におすすめ</h3>
      <div class="uk-glid uk-grid-medium card-wrap" uk-grid>
        <div class="card-box uk-width-1-4@s uk-width-1-2">
          <div class="uk-card uk-card-default uk-card-body">
            <figure>
              <picture>
              <img src="<?php echo get_template_directory_uri(); ?>/img/img_3.0-6-1@2x.jpg" alt="会議室">
              </picture>
            </figure>
            <h4 class="uk-text-center">会議室</h4>
          </div>
        </div>
        <div class="card-box uk-width-1-4@s uk-width-1-2">
          <div class="uk-card uk-card-default uk-card-body">
            <figure>
              <picture>
              <img src="<?php echo get_template_directory_uri(); ?>/img/img_3.0-6-2@2x.jpg" alt="フォンブース">
              </picture>
            </figure>
            <h4 class="uk-text-center">フォンブース</h4>
          </div>
        </div>
        <div class="card-box uk-width-1-4@s uk-width-1-2">
          <div class="uk-card uk-card-default uk-card-body">
            <figure>
              <picture>
              <img src="<?php echo get_template_directory_uri(); ?>/img/img_3.0-6-3@2x.jpg" alt="WEB会議ブース">
              </picture>
            </figure>
            <h4 class="uk-text-center">WEB会議ブース</h4>
          </div>
        </div>
        <div class="card-box uk-width-1-4@s uk-width-1-2">
          <div class="uk-card uk-card-default uk-card-body">
            <figure>
              <picture>
              <img src="<?php echo get_template_directory_uri(); ?>/img/img_3.0-6-4@2x.jpg" alt="ソファースペース">
              </picture>
            </figure>
            <h4 class="uk-text-center">ソファースペース</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <h3 class="uk-text-center">予約ルームズの利用イメージ</h3>
        <div class="uk-grid uk-grid-medium movie-wrap uk-text-center" uk-grid>
        <div class="movie-box uk-width-1-2@s">
          <h4>時間お知らせ端末</h4>
          <div class="movie"><iframe src="https://www.youtube.com/embed/YTisCW9rAO0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        </div>
          <div class="movie-box uk-width-1-2@s">
          <h4>RECEPTIONISTシリーズ連携</h4>
          <div class="movie"><div class="movie"><iframe src="https://www.youtube.com/embed/WBZKo4Zkqg4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div></div>
        </div>
        </div>
    </div>
  </section>
  <section class="bnr_dl_cta">
    <div class="container_full">
      <div class="bn-wrap uk-flex">
        <div class="txt-box">
          <h4>詳しくは、<br class="sp">資料をダウンロードください。</h4>
          <p class="b1 b2-sp">基本的な機能はもちろん、サポートの内容など詳しくご紹介しています。<br>
サービス導入を検討されている方にぜひご覧いただきたい資料になります。</p>
          <div class="btn-box"><a href="/documents" class="btn btn_dl">詳しい資料をもらう</a></div>
      </div>
      <div class="img-box">
          <picture>
            <img src="<?php echo get_template_directory_uri(); ?>/img/img_0.1-3-3.png" alt="資料ダウンロードはこちら"/>
          </picture>
        </div>
      </div>
    </div>
  </section>
  <section class="faq">
    <div class="container_s">
      <h2 class="uk-text-center">予約ルームズに関する質問</h2>
      <ul class="faq-index-wrap" uk-accordion="multiple: true">
        
          <li class="uk-open">
            <a class="uk-accordion-title" href="#"><h3>予約ルームズと連携できるグループウェアは何ですか？</h3></a>
            <div class="uk-accordion-content">
              <p>Google workspace(G Suite)、Microsoft365（Office365）、サイボウズGaroonになります。</p>
            </div>
          </li>       
        <li>
            
          <a class="uk-accordion-title" href="#"><h3>予約ルームズの料金はいくらですか？</h3></a>
            <div class="uk-accordion-content">
              <p>初期費用は必要ありません。3つのプランがあり、月額課金です。詳しい料金表は資料のP13に記載しています。
              </p>
            </div>
        </li>
        <li>  
          <a class="uk-accordion-title" href="#"><h3>複数のグループウェアを使ってても利用できますか？</h3></a>
            <div class="uk-accordion-content">
              <p>可能です。マルチテナント機能を使えば可能となります。
              </p>
            </div>
        </li>
      </ul>
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
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
<script>
  $('#send').click(function(event) {
    event.preventDefault();
    if(formValidate('document')) {
      sendRequest(requestContactParams(), 'document', true);
    }
  });
</script>
<script>
$(function(){
 $('.system01-slider').slick({
   slidesToShow: 3,
    slidesToScroll: 1,
    infinite: false,
   arrows: false,
   dots:true,
    responsive: [{
      breakpoint: 1024,  //ブレイクポイントを指定
      settings: {
        slidesToShow: 2,
      }
    },{
      breakpoint: 575,  //ブレイクポイントを指定
      settings: {
        slidesToShow: 1,
      }
    }]
 });
 $('.system02-slider').slick({
   slidesToShow: 3,
    slidesToScroll: 1,
    infinite: false,
   arrows: false,
   dots:true,
    responsive: [{
      breakpoint: 1024,  //ブレイクポイントを指定
      settings: {
        slidesToShow: 2,
      }
    },{
      breakpoint: 575,  //ブレイクポイントを指定
      settings: {
        slidesToShow: 1,
      }
    }]
 });
});

</script>
</body>
</html>