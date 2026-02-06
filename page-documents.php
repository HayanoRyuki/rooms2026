<?php get_header(); ?>
<script type="text/javascript">
  window.onbeforeunload = function(e) {
    e.returnValue = "本当にページを閉じますか？";
  }
</script>
<body class="top page doc">
<?php get_header('gtm'); ?>
<!-- ページヘッダ -->
<!-- メインコンテンツ -->
<main class="main wrapper">
<div class="btm_nav sticky-wrapper menu02" uk-sticky="bottom: true">
<?php get_header('menu02'); ?>
</div>
<!-- ページタイトル -->
<div class="hero page-title wrapper document">
  <div class="hero-body">
    <div class="container">
   <?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
    <div class="container_r contact">
      <div class="form-wrap">
        <form id="contact" method="post" name="document" onclick="window.onbeforeunload=null">
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
         <!-- <fieldset class="form-group"><label for="" class="required" aria-required="true">従業員数</label>
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
          </fieldset>-->
      </div>
         <div class="kv-form-agree">
            <input name="agree" type="checkbox" value="1" id="agreement">
            <label for="agreement">（株）RECEPTIONISTの<a href="https://help.receptionist.jp/?p=402" target="_blank">個人情報の取り扱い</a>について同意します。</label>
          </div>
          <input type="submit" value="資料を見る" id="send" class="btn btn_dl">
        </form>
        </div>
    </div>
  </div>
  </div>
</div>
<!-- /ページタイトル -->
</main>
<!-- /メインコンテンツ -->
<footer class="footer02">
	<p>© RECEPTIONIST. Inc</p>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/common.js"></script>
<script>
  $('#send').click(function(event) {
    event.preventDefault();
    if(formValidate('document')) {
      sendRequest(requestContactParams(), 'document', true);
    }
  });
</script>

</body>
</html>