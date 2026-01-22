<?php get_header(); ?>
<body class="page">
<?php get_header('gtm'); ?>
<!-- ページヘッダ -->
<header class="header pc">
<?php get_header('nav'); ?>
</header><!-- /ページヘッダ -->
<!-- メインコンテンツ -->
<main class="main wrapper">
<div class="btm_nav sticky-wrapper" uk-sticky="bottom: true">
<?php get_header('menu'); ?>
</div>
<!-- ページタイトル -->
<div class="hero page-title wrapper sp contact-hero">
	<div class="hero-body">
		<div class="hero-tit">
			<h2 class="uk-text-center">お問い合わせ</h2>
			<p class="b1 uk-text-center">まだRECEPTIONISTのアカウントをお持ちでない方は、こちらからお問い合わせください。</p>
		</div>
	</div>
</div>
<!-- /ページタイトル -->
	<section class="contact">
		<div class="container_s">
			<div class="form-wrap">
<div class="hero page-title wrapper pc">
	<div class="hero-body">
		<div class="hero-tit">
			<h4 class="uk-text-center">お問い合わせ</h4>
			<p class="uk-text-center">まだRECEPTIONISTのアカウントをお持ちでない方は、こちらからお問い合わせください。</p>
		</div>
	</div>
</div>
		<form id="contact" method="post" name="contact">
		    <div class="form-box">
              <fieldset class="form-group"><label class="required" for="" aria-required="true">貴社名</label>
				  <input class="form-control" name="company_name" type="text" placeholder="株式会社RECEPTIONIST"></fieldset>
              <fieldset class="form-group-name"><label for="" class="required" aria-required="true">ご担当者名</label> <input type="text" name="last_name" class="form-control" placeholder="姓" validation="required"></fieldset>
              <fieldset class="form-group-name"><label for="" class="required" aria-required="true"></label> <input type="text" name="first_name" class="form-control" placeholder="名" validation="required"></fieldset>
              <fieldset class="form-group"><label class="required" for="" aria-required="true">メールアドレス</label>
				  <input class="form-control" name="email" type="text" placeholder="例) example@chouseiapo.co.jp"></fieldset>
              <fieldset class="form-group"><label class="required" for="" aria-required="true">お電話番号</label>
				  <input class="form-control" name="phone_no" type="text" placeholder="例) 03-1234-5678"></fieldset>
          <fieldset class="form-group"><label for="" class="required" aria-required="true">利用中のスケジューラー</label>
            <select name="scheduler" class="select select-addon valid" validation="required" aria-invalid="false">
              <option value="">選択してください</option>
              <option value="GoogleCalender">Googleカレンダー</option>
              <option value="Outlook">Outlookカレンダー（クラウド版）</option>
              <option value="サイボウズ（ガルーン）">サイボウズ（クラウド版）</option>
          </select>
        	</fieldset>
			<fieldset class="form-group"><label id="contact_ct" class="required" for="" aria-required="true">お問い合わせ内容</label> <textarea class="form-control" cols="50" name="body" rows="6" placeholder="例) 今すぐ利用開始できますか？"></textarea></fieldset>
			</div>
			<div class="kv-form-agree">
            <input name="agree" type="checkbox" value="1" id="agreement">
            <label for="agreement">（株）RECEPTIONISTの<a href="https://help.receptionist.jp/?p=402" target="_blank">個人情報の取り扱い</a>について同意します。</label>
          </div>
            <input type="hidden" name="contact_type" value="rooms">
            <input type="submit" value="送信" id="send" class="btn btn_dl">  
        </form>
			</div>
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
<script>
  $('#send').click(function(event) {
    event.preventDefault();
    if(formValidate('contact')) {
      sendRequest(requestContactParams(), 'contact', true);
    }
  });
</script>
</body>
</html>