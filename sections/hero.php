<style>
  .kv-form-wrap label.error, label.error {
    color: red;
  }
</style>
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
<!-- /ページタイトル -->
