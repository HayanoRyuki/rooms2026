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
<div class="btm_nav sticky-wrapper" uk-sticky="bottom: true"><?php get_header('menuindex'); ?></div>
<!-- ページタイトル -->
<div class="hero page-title wrapper">
  <div class="hero-body">
    <div class="container_l adView">
      <div class="mv_txt-box">
        <img src="<?php echo get_template_directory_uri(); ?>/img/img_reception_factory_H12x.webp" alt="会議室予約システム「予約ルームズ」"/>
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
            <!--<div>
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
            </div>-->
          </div>
          <div class="kv-form-agree">
            <input name="agree" type="checkbox" value="1" id="agreement">
            <label for="agreement"><a href="https://help.receptionist.jp/?p=402#gsc.tab=0">（株）RECEPTIONISTの個人情報の取り扱い</a>について同意します。</label>
          </div>
          <input type="hidden" name="contact_type" value="document_rooms">
          <input type="hidden" name="utm_source" id="utm_source_input">
          <input type="hidden" name="utm_medium" id="utm_medium_input">
          <input type="hidden" name="utm_campaign" id="utm_campaign_input">
          <input type="hidden" name="utm_term" id="utm_term_input">
          <input type="hidden" name="utm_content" id="utm_content_input">
          <input type="submit" value="資料をダウンロード" id="send" class="btn btn_dl">
        </form>
    </div>
  </div>
</div>

<div class="logo-slider">
  <div class="logo-slide-track">
    
    <div class="slide">
		<?php if( get_field('logo01') ): ?><img src="<?php the_field('logo01'); ?>" width="150px" height="70.797px" alt="<?php the_field('alt_logo01'); ?>" /><?php endif; ?>
    </div>
	  <div class="slide">
     <?php if( get_field('logo02') ): ?><img src="<?php the_field('logo02'); ?>" width="150px" height="70.797px" alt="<?php the_field('alt_logo02'); ?>" /><?php endif; ?>
    </div>
	 <div class="slide">
     <?php if( get_field('logo03') ): ?><img src="<?php the_field('logo03'); ?>" width="150px" height="70.797px" alt="<?php the_field('alt_logo03'); ?>" /><?php endif; ?>
    </div>
    <div class="slide">
     <?php if( get_field('logo04') ): ?><img src="<?php the_field('logo04'); ?>" width="150px" height="70.797px" alt="<?php the_field('alt_logo04'); ?>" /><?php endif; ?>
    </div>
    <div class="slide">
      <?php if( get_field('logo05') ): ?><img src="<?php the_field('logo05'); ?>" width="150px" height="70.797px" alt="<?php the_field('alt_logo05'); ?>" /><?php endif; ?>
    </div>
     <div class="slide">
     <?php if( get_field('logo06') ): ?><img src="<?php the_field('logo06'); ?>" width="150px" height="70.797px" alt="<?php the_field('alt_logo06'); ?>" /><?php endif; ?>
    </div>
    <div class="slide">
     <?php if( get_field('logo07') ): ?><img src="<?php the_field('logo07'); ?>" width="150px" height="70.797px" alt="<?php the_field('alt_logo07'); ?>" /><?php endif; ?>
    </div>
    <div class="slide">
      <?php if( get_field('logo08') ): ?><img src="<?php the_field('logo08'); ?>" width="150px" height="70.797px" alt="<?php the_field('alt_logo08'); ?>" /><?php endif; ?>
    </div>
	   <div class="slide">
      <?php if( get_field('logo09') ): ?><img src="<?php the_field('logo09'); ?>" width="150px" height="70.797px" alt="<?php the_field('alt_logo09'); ?>" /><?php endif; ?>
    </div>
    <div class="slide">
    <?php if( get_field('logo10') ): ?><img src="<?php the_field('logo10'); ?>" width="150px" height="70.797px" alt="<?php the_field('alt_logo10'); ?>" /><?php endif; ?>
    </div>
    <div class="slide">
     <?php if( get_field('logo11') ): ?><img src="<?php the_field('logo11'); ?>" width="150px" height="70.797px" alt="<?php the_field('alt_logo11'); ?>" /><?php endif; ?>
    </div>
    <div class="slide">
     <?php if( get_field('logo12') ): ?><img src="<?php the_field('logo12'); ?>" width="150px" height="70.797px" alt="<?php the_field('alt_logo12'); ?>" /><?php endif; ?>
    </div>
    <div class="slide">
   <?php if( get_field('logo13') ): ?><img src="<?php the_field('logo13'); ?>" width="150px" height="70.797px" alt="<?php the_field('alt_logo13'); ?>" /><?php endif; ?>
    </div>
    <div class="slide">
    <?php if( get_field('logo14') ): ?><img src="<?php the_field('logo14'); ?>" width="150px" height="70.797px" alt="<?php the_field('alt_logo14'); ?>" /><?php endif; ?>
    </div>
    <div class="slide">
     <?php if( get_field('logo15') ): ?><img src="<?php the_field('logo15'); ?>" width="150px" height="70.797px" alt="<?php the_field('alt_logo15'); ?>" /><?php endif; ?>
    </div>
	 <div class="slide">
		<?php if( get_field('logo01') ): ?><img src="<?php the_field('logo01'); ?>" width="150px" height="70.797px" alt="<?php the_field('alt_logo01'); ?>" /><?php endif; ?>
    </div>
	  <div class="slide">
     <?php if( get_field('logo02') ): ?><img src="<?php the_field('logo02'); ?>" width="150px" height="70.797px" alt="<?php the_field('alt_logo02'); ?>" /><?php endif; ?>
    </div>
	 <div class="slide">
     <?php if( get_field('logo03') ): ?><img src="<?php the_field('logo03'); ?>" width="150px" height="70.797px" alt="<?php the_field('alt_logo03'); ?>" /><?php endif; ?>
    </div>
    <div class="slide">
     <?php if( get_field('logo04') ): ?><img src="<?php the_field('logo04'); ?>" width="150px" height="70.797px" alt="<?php the_field('alt_logo04'); ?>" /><?php endif; ?>
    </div>
    <div class="slide">
      <?php if( get_field('logo05') ): ?><img src="<?php the_field('logo05'); ?>" width="150px" height="70.797px" alt="<?php the_field('alt_logo05'); ?>" /><?php endif; ?>
    </div>
     <div class="slide">
     <?php if( get_field('logo06') ): ?><img src="<?php the_field('logo06'); ?>" width="150px" height="70.797px" alt="<?php the_field('alt_logo06'); ?>" /><?php endif; ?>
    </div>
    <div class="slide">
     <?php if( get_field('logo07') ): ?><img src="<?php the_field('logo07'); ?>" width="150px" height="70.797px" alt="<?php the_field('alt_logo07'); ?>" /><?php endif; ?>
    </div>
  </div>
</div>
<!-- /ページタイトル -->
<section class="boxil">
	<h2>たくさんのお客さまに選ばれて<br><span>会議室予約システム部門1位</span>を獲得</h2>
		<ul>
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/boxil01.webp" width="200" height="200" alt="BOXIL SaaSセクション 会議室予約管理システム部門1位"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/boxil02.webp" width="150" height="150" alt="お役たち度No.1"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/boxil03.webp" width="150" height="150" alt="カスタマイズ性No.1"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/boxil04.webp" width="150" height="150" alt="機能満足度No.1"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/boxil05.webp" width="150" height="150" alt="使いやすさNo.1"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/boxil06.webp" width="150" height="150" alt="サービスの安定性No.1"></li>
		</ul>
	<p>※1　2023年中に「BOXIL SaaS」上へ新たに投稿された口コミ評価の総得点が、会議室予約システム部門でもっとも高いサービスをスマートキャンプ株式会社が選出</p>
	<p>※2 「BOXIL SaaS」上に投稿された口コミを対象に、「サービスの安定性」「機能満足度」「カスタマイズ性」「お役立ち度」「使いやすさ」において会議室予約システム部門で最も高い平均点を獲得したサービスをスマートキャンプ株式会社が選出（対象期間：2023年1月1日～2023年12月31日）</p>
</section>
<section class="capabilities">
		<div class="container">
			<h3 class="uk-text-center">予約ルームズで<br class="sp">できること</h3>
		</div>
    			<ul class="capabilities_ul">
				<li class="capabilities_ul_li">
					<a href="#sec_management">
					<h4><span>管理強化で</span><br>利用マナーの改善</h4>
						<img src="<?php echo get_template_directory_uri(); ?>/img/3-0-12x.webp" width="368" height="193.2" alt="会議室の管理を強化する" >
					</a>
				</li>
				<li class="capabilities_ul_li">
					<a href="#sec_analytucs">
					<h4><span>自動分析で</span><br>改善ポイントの特定</h4>
						<img src="<?php echo get_template_directory_uri(); ?>/img/3-0-2.webp" width="368" height="193.2" alt="会議室を自動分析する" >
					</a>
				</li>
				<li class="capabilities_ul_li">
					<a href="#top_reserve">
					<h4><span>選べる予約・入室方法で</span><br>様々なシーンに対応</h4>
						<img src="<?php echo get_template_directory_uri(); ?>/img/3-0-3.webp" width="368" height="193.2" alt="会議室の予約が方法のバリエーションが豊富" >
					</a>
				</li>
			</ul>
			<!--<a href="https://rooms.receptionist.jp/document-price/" class="btn section_cta case_cta02" target="_blank">料金表を見る</a>-->
</section>
<section id="sec_management">
		<div  class="container">
		<ul class="sec_point_wrap">
			<li>
				<h3>管理強化で利用マナーの改善</h3>
					<ul class="sec_point_text">
						<li>
							<h4>空予約を自動キャンセル</h4>
							<p>利用開始時間を一定時間過ぎても入室が確認できない場合、<br>予約を自動キャンセルします。</p>
						</li>
						<li>
							<h4>無断延長アラート</h4>
							<p>利用時間10分前から終了時間のアラートが作動します。<br>次の来訪者が受付すると会議室利用者に通知されます。</p>
						</li>
						<li>
							<h4>無断利用の防止</h4>
							<p>会議室の端末で次の利用者の予定が表示されるため、<br>勝手に従業員が利用することを防止できます。</p>
						</li>
				
					</ul>
				</li>
				<li class="sec_point_img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/3-1-12x.webp" alt="会議室予約の自動キャンセル" width="512" height="381.391">
				</li>
		</ul>
		</div>
	</section>
	<section id="sec_analytucs">
		<div  class="container">
		<ul class="sec_point_wrap">
			<li>
				<h3>自動分析で改善ポイントの特定</h3>
					<ul class="sec_point_text">
						<li>
							<h4>空予約の原因特定</h4>
							<p>空予約の多い人、空予約の多いタイトルなどの情報が一覧で表示されます。</p>
						</li>
						<li>
							<h4>稼働率の見える化</h4>
							<p>会議室の稼働率や稼働されている時間帯などが一目でわかります。</p>
						</li>
						<li>
							<h4>入退室時間の把握</h4>
							<p>誰がいつ会議室に入退室を行ったかなどの時間が表示されます。</p>
						</li>
				
					</ul>
				</li>
				<li class="sec_point_img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/3-2-12x.webp" alt="空予約が多い主催者" width="512" height="382.047" >
				</li>
		</ul>
		</div>
	</section>
<section id="top_reserve">
	<h3>選べる予約・入室方法で様々なシーンに対応</h3>
		<div class="top_reserve01">
			<ul>
				<li>
					<div class="top_reserve_text">
						<h4>会議室のその場で予約</h4>
						<p>他の端末を開かずに、会議室前の端末で即予約できます。</p>
					</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/3-3-1-a2x.webp" width="340" height="188" alt="会議室予約を端末から行う">
					
				</li>
				<li>
					<div class="top_reserve_text">
					<h4>異なるカレンダーツール</h4>
						<p>マルチテナント機能でダブルブッキングせずに予約できます。</p>
						</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/3-3-1-b2x.webp" width="340" height="188" alt="異なるカレンダーツールから予約">
					
						</li>
				<li>
					<div class="top_reserve_text">
					<h4>Webからどこでも予約</h4>
						<p>スマホやPCでアプリから空いてる会議室をすぐ予約できます。</p>
						</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/3-3-1-c2x.webp" width="340" height="188" alt="スマホやPCですぐに予約">
						
				</li>
			</ul>	
		</div>
	<div class="top_reserve02">
			<ul>
				<li>
					<div class="top_reserve_text">
					<h4>QRコードを読み取り</h4>
						<p>QRコードを読み込めばすぐに利用できます。</p>
						</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/3-3-2-a2x.webp" width="340" height="188" alt="QRコードで入室する">
						
				</li>
				<li>
					<div class="top_reserve_text">
					<h4>Web予約画面にアクセス</h4>
						<p>Web予約画面からすぐに入室を開始できます。</p>
						</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/3-3-2-b2x.webp" width="340" height="188" alt="管理画面で予約する">
						
				</li>
				<li>
					<div class="top_reserve_text">
					<h4>NFCカードをタッチ</h4>
						<p>NFCカードをタッチすると入室ができます。</p>
					</div>
							<img src="<?php echo get_template_directory_uri(); ?>/img/3-3-2-c2x.webp" width="340" height="188" alt="NFCカードで予約する">
						
				</li>
			</ul>	
		</div>
</section>


	<!--
<section class="section_subject">
	<ul>
		<li>
			<h2>会議室を使いたいのに</h2>
			<p>こんな<span>課題</span><br>ありませんか？</p>
		</li>	
		<li>
			<img src="<?php echo get_template_directory_uri(); ?>/img/about_img012x.webp" width="788" height="477" alt="会議室が空いてない。無人なのに予約されていて利用できない。予約がダブルブッキングする。予約方法が紙で煩雑" class="pc">
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
				<h3>会議室の予約がカンタンに。<br>利用トラブルも事前回避</h3>
				<p>会議室予約システム「予約ルームズ」を使うと、予約はカンタンになり、会議室利用の際に起きるトラブルも事前回避できます。また、会議室の利用状況も分析します。</p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/img/img_3.0-22x.webp" alt="会議室予約システム「予約ルームズ」のイメージ">
			</li>
		</ul>
	</div>
　<a href="https://rooms.receptionist.jp/document-price/" class="btn section_cta case_cta02" target="_blank">料金表を見る</a>
</section>
  <section class="system02">
    <div class="container">
      <h2 class="uk-text-center" >会議室予約システムで解決①</h2>
      <h3 class="uk-text-center">効率的で無駄のない会議室に</h3>
    </div>
    <div class="container_full">
        <ul class="roomsFunction_ct_top_wrap">
        <li class="roomsFunction_ct_top">
            <img src="https://rooms.receptionist.jp/wp-content/themes/rooms.receptionist.jp/img/img_3.0-5-9.webp" alt="会議室の空予約をキャンセル済み" >
            <h4>空予約を自動キャンセル</h4>
          <p>入室がない場合は、自動キャンセルします。その後、別の方の入室・予約が可能になります。</p>
        </li>
        <li class="roomsFunction_ct_top">
            <img src="https://rooms.receptionist.jp/wp-content/themes/rooms.receptionist.jp/img/img_3.0-5-4.webp" alt="空予約分析機能" >
            <h4>会議室・空予約分析</h4>
          <p>会議室の稼働率の分析、空予約が多い人・部屋・タイトルの分析が可能です。</p>
        </li>
        <li class="roomsFunction_ct_top">
            <img src="https://rooms.receptionist.jp/wp-content/themes/rooms.receptionist.jp/img/img_3.0-5-10.webp" alt="無断延長防止アラートのイメージ" >
            <h4>無断延長防止アラート</h4>
          <p>利用終了10分前から終了時間お知らせのアラートが鳴り、退出を促します。</p>
        </li>
      </ul>
		<a href="https://rooms.receptionist.jp/document-price/" class="btn section_cta case_cta02" target="_blank">料金表を見る</a>
    </div>
  </section>	
<section class="system01">
		<div class="container">
			<h2 class="uk-text-center">会議室予約システムで解決②</h2>
			<h3 class="uk-text-center">シンプルな手順で会議室を予約</h3>
		</div>
		<div class="container_full">
    			<ul class="roomsFunction_ct_top_wrap">
				<li class="roomsFunction_ct_top">
						<img src="https://rooms.receptionist.jp/wp-content/themes/rooms.receptionist.jp/img/img_3.0-4-1.webp" alt="一目でわかる空いてる会議室" >
						<h4>一目でわかる空室</h4>
					<p>WEB管理画面・スマホアプリ・サイネージ・会議室の端末から、使える会議室かどうか一目でわかります。</p>
				</li>
				<li class="roomsFunction_ct_top">
						<img src="https://rooms.receptionist.jp/wp-content/themes/rooms.receptionist.jp/img/img_3.0-4-2.webp" alt="会議室の空予約分析機能" >
						<h4>予約・今すぐ利用が簡単に</h4>
					<p>2タッチで予約・即利用が可能です。WEB管理画面・スマホアプリ・会議室の端末から予約できます。</p>
				</li>
				<li class="roomsFunction_ct_top">
						<img src="https://rooms.receptionist.jp/wp-content/themes/rooms.receptionist.jp/img/img_3.0-4-4.webp" alt="会議の無断延長防止アラートのイメージ" >
						<h4>QRコードを読み取って予約</h4>
					<p>端末を準備できない場合、QRコードを印刷して専用アプリで読み込めば、その場で予約できます。</p>
				</li>
			</ul>
			<a href="https://rooms.receptionist.jp/document-price/" class="btn section_cta case_cta02" target="_blank">料金表を見る</a>
		</div>
	</section>
-->
	
	
	
	
	
	
 <section class="top_voice" id="voice">
    <div class="container">
      <h3 class="uk-text-center">お客様の声</h3>
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
			<h3 class="uk-text-center">ご利用イメージ</h3>
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
			<h3 class="uk-text-center">オフィス統合によるグループテナント問題を解決</h3>
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
      <h3 class="uk-text-center">動画イメージ</h3>
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
      <h2 class="uk-text-center">よくある質問</h2>
      <ul class="faq-index-wrap" uk-accordion="multiple: true">
        
          <li class="uk-open">
            <a class="uk-accordion-title" href="#"><h3>会議室予約システム「予約ルームズ」と連携できるグループウェアは何ですか？</h3></a>
            <div class="uk-accordion-content">
              <p>GoogleWorkSpace(Googleカレンダー)、Microsoft365(Office365｜Outlook予定表)、サイボウズGaroonと連携が可能です。</p>
            </div>
          </li>       
        <li>
            
          <a class="uk-accordion-title" href="#"><h3>会議室予約システム「予約ルームズ」の利用料金はいくらですか？</h3></a>
            <div class="uk-accordion-content">
              <p>３つのプランがあります。詳細は料金表にてご確認いただけますので、お手数ですが、下記からお受取りください。<br><a class="btn mt-s" href="https://rooms.receptionist.jp/document-price/">料金表をもらう</a></p>
            </div>
        </li>
        <li>
            
          <a class="uk-accordion-title" href="#"><h3>契約前にトライアルは可能でしょうか？</h3></a>
            <div class="uk-accordion-content">
              <p>ご導入前に動作確認としてトライアルを無料で提供しています。お手数ですが、以下から問い合わせください。
                <br><a class="btn mt-s" href="https://rooms.receptionist.jp/contact/">トライアルの問い合わせをする</a></p>
            </div>
        </li>
        <li>
            
          <a class="uk-accordion-title" href="#"><h3>会議室予約システム「予約ルームズ」の特徴は何ですか？</h3></a>
            <div class="uk-accordion-content">
              <p>様々なサービスとの連携や使いやすく設計されたUIUXの他、導入しやすい価格や多くの機能などの特徴があります。<br><a class="btn mt-s" href="https://rooms.receptionist.jp/documents/">資料をもらう</a></p>
            </div>
        </li>
        <li>  
          <a class="uk-accordion-title" href="#"><h3>セキュリティへの取り組みを教えてください。</h3></a>
            <div class="uk-accordion-content">
              <p>情報セキュリティマネジメントシステム（Information Security Management System、以下、ISMS）の国際規格である「ISO/IEC27001」とISMSクラウドセキュリティに関する国際規格「ISO/IEC27017」の認証を2022年9月25日付で取得しています。</p>
            </div>
        </li>
        <li>
            
          <a class="uk-accordion-title" href="#"><h3>別々のグループウェアとも連携可能ですか？</h3></a>
            <div class="uk-accordion-content">
              <p>はい、グループテナント機能(マルチテナント機能)により、別々または複数のグループウェアを連携し、会議室の予約管理を可能にします。</p>
            </div>
        </li>
         <li>
            
          <a class="uk-accordion-title" href="#"><h3>座席予約も可能でしょうか？</h3></a>
            <div class="uk-accordion-content">
              <p>はい、可能です。お手数ですが、以下からスタッフに問い合わせください。
                <br><a class="btn mt-s" href="https://rooms.receptionist.jp/contact/">問い合わせをする</a></p>
            </div>
        </li>
        <li>  
          <a class="uk-accordion-title" href="#"><h3>会議室予約システム「予約ルームズ」の導入メリットは何ですか？</h3></a>
            <div class="uk-accordion-content">
              <p>以下のようなメリットがあります。<br><br>
                （1）空いてる会議室を探さなくても一目でわかるので、すぐに予約できる。<br>
                （2）会議室の予約・利用情報が集約されて可視化されるため、管理コストを削減できる。<br>
                （3）空予約が多い人を視覚化できるので、改善につなげることができる。<br>
                （4）予約があるのに使われていない会議室を自動でキャンセルし、他の利用者が使える状態にできる。<br>
                （5）利用者に予約終了時間を知らせることで、無断延長を防止できる。<br>
                （6）会議室稼働率を改善し、オフィス賃料の無駄使いを防ぐことができる。
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

  function getQueryStringParams() {
    var queryString = window.location.search.substring(1);
    if (queryString == "") {
      return null;
    }
    var queryParams = queryString.split("&");
    var params = {};
    for (var i = 0; i < queryParams.length; i++) {
      var pair = queryParams[i].split("=");
      var key = decodeURIComponent(pair[0]);
      var value = decodeURIComponent(pair[1] || '');
      params[key] = value;
    }

    return params;
  }

  window.onload = function () {
    var queryParams = getQueryStringParams();

    if (queryParams) {
      localStorage.setItem("queryParams", JSON.stringify(queryParams));
    }

    var localStorageQueryParams = JSON.parse(localStorage.getItem("queryParams"));

    if (!localStorageQueryParams) {
      return;
    }

    if (localStorageQueryParams.hasOwnProperty("utm_source")) {
      var utmSourceInput = document.getElementById("utm_source_input");
      utmSourceInput.value = localStorageQueryParams["utm_source"];
    }

    if (localStorageQueryParams.hasOwnProperty("utm_medium")) {
      var utmMediumInput = document.getElementById("utm_medium_input");
      utmMediumInput.value = localStorageQueryParams["utm_medium"];
    }

    if (localStorageQueryParams.hasOwnProperty("utm_campaign")) {
      var utmCampaignInput = document.getElementById("utm_campaign_input");
      utmCampaignInput.value = localStorageQueryParams["utm_campaign"];
    }

    if (localStorageQueryParams.hasOwnProperty("utm_term")) {
      var utmTermInput = document.getElementById("utm_term_input");
      utmTermInput.value = localStorageQueryParams["utm_term"];
    }

    if (localStorageQueryParams.hasOwnProperty("utm_content")) {
      var utmContentInput = document.getElementById("utm_content_input");
      utmContentInput.value = localStorageQueryParams["utm_content"];
    }
  }
</script>
</body>
</html>