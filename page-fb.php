<?php get_header(); ?>
<body>
<?php get_header('gtm'); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fb/fb.css">
<main class="main wrapper fb_wrapper">
	<header><img src="<?php echo get_template_directory_uri(); ?>/fb/img/img-logo-reception.svg" alt="RECEPTIONIST"/></header>
	<div class="fv"><img src="<?php echo get_template_directory_uri(); ?>/fb/img/fv.jpg" width="2501" height="1310" alt=""/></div>
	<p class="fv_text">今、オフィスでこんな課題<br class="sp">ありませんか？<br>
	<h2>▼&nbsp;会議室のお悩み例&nbsp;▼</h2>
	<ul class="kadai">
    <li>会議室の利用マナーが悪い！</li>
		<li>予約あるけど誰も使ってない！</li>
		<li>どの部屋が空いてるかわからない！</li>
		<li>無断延長する人がいてストレス！</li>
	</ul>
	<p class="kaiketsu">これらの課題は<br class="sp">予約ルームズで解決です！</p>
	<img src="<?php echo get_template_directory_uri(); ?>/fb/img/img_3.0-2@2x.png" alt="RECEPTIONIST" class="予約ルームズ" />
	<p class="cta">詳しくは資料を<br class="sp">ご覧ください！</p>
	<img src="<?php echo get_template_directory_uri(); ?>/fb/img/arrow.png" alt="RECEPTIONIST" class="arrow" />
	<div class="container_r contact">
    <h3>資料請求フォーム</h3>
      <div class="form-wrap">
        <form id="contact" action="https://t.receptionist.jp/l/436112/2022-12-19/8k87wj" method="post" name="document" onclick="window.onbeforeunload=null">
          <input type="hidden" name="contact_type" value="document_rooms">
          <div class="form-box">
              <fieldset class="form-group"><label class="required" for="" aria-required="true">貴社名</label>
          <input class="form-control" name="company_name" type="text" placeholder="株式会社RECEPTIONIST"></fieldset>
              <fieldset class="form-group-name"><label for="" class="required" aria-required="true">姓</label> <input type="text" name="last_name" class="form-control" placeholder="山田" validation="required"></fieldset>
              <fieldset class="form-group-name"><label for="" class="required" aria-required="true">名</label> <input type="text" name="first_name" class="form-control" placeholder="太郎" validation="required"></fieldset>
              <fieldset class="form-group"><label class="required" for="" aria-required="true">メールアドレス</label>
          <input class="form-control" name="email" type="text" placeholder="例) yamada@receptionist.co.jp"></fieldset>
              <fieldset class="form-group"><label class="required" for="" aria-required="true">電話番号</label>
          <input class="form-control" name="phone_no" type="text" placeholder="例) 03-1234-5678"></fieldset>
      </div>
         <div class="kv-form-agree">
            <input name="agree" type="checkbox" value="1" id="agreement">
            <label for="agreement">（株）RECEPTIONISTの<a href="https://help.receptionist.jp/?p=402" target="_blank">個人情報の取り扱い</a>について同意します。</label>
          </div>
          <input type="submit" value="資料を見る" id="send" class="btn btn_dl">
        </form>
        </div>
    </div>
</main>
<footer class="footer02">
	<p>© RECEPTIONIST. Inc</p>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/common.js"></script>
<script>
  $('#send').click(function(event) {
    event.preventDefault();
    if(formValidate('document')) {
      sendRequest(requestContactParams(), 'document');
    }
  });
</script>
</body>
</html>