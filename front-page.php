<?php get_header(); ?>
<body class="top">
<?php get_header('gtm'); ?>

<!-- メインコンテンツ -->
<main class="main wrapper">
<div class="btm_nav sticky-wrapper" uk-sticky="bottom: true"><?php get_header('menuindex'); ?></div>

<?php // Hero - メインビジュアル + 資料請求フォーム ?>
<?php get_template_part('sections/hero'); ?>

<?php // ロゴスライダー - 導入企業ロゴ ?>
<?php get_template_part('sections/logo-slider'); ?>

<?php // BOXIL受賞 ?>
<?php get_template_part('sections/boxil'); ?>

<?php // できること ?>
<?php get_template_part('sections/capabilities'); ?>

<?php // 管理強化で利用マナーの改善 ?>
<?php get_template_part('sections/management'); ?>

<?php // 自動分析で改善ポイントの特定 ?>
<?php get_template_part('sections/analytics'); ?>

<?php // 選べる予約・入室方法 ?>
<?php get_template_part('sections/reserve'); ?>

<?php // お客様の声 ?>
<?php get_template_part('sections/voice'); ?>

<?php // ご利用イメージ ?>
<?php get_template_part('sections/usage-image'); ?>

<?php // マルチテナント ?>
<?php get_template_part('sections/multi-tenant'); ?>

<?php // こんな場所におすすめ ?>
<?php get_template_part('sections/recommend'); ?>

<?php // 動画イメージ ?>
<?php get_template_part('sections/movie'); ?>

<?php // 資料ダウンロード CTA ?>
<?php get_template_part('sections/cta-download'); ?>

<?php // FAQ ?>
<?php get_template_part('sections/faq'); ?>

<?php // サービス一覧 ?>
<?php get_template_part('sections/service'); ?>

</main>
<!-- /メインコンテンツ -->

<footer class="footer">
  <?php get_footer(); ?>
</footer>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/common.js"></script>
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
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
      }
    },{
      breakpoint: 575,
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
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
      }
    },{
      breakpoint: 575,
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
