<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="facebook-domain-verification" content="0m0rfkq6s217g3ow3zw5cjcop8foro" />
  <meta name="msvalidate.01" content="97FFCF8B0F7AA90BBF1DE43A1DDD28E9" />

  <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.ico">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
    crossorigin="anonymous"
  >

  <!-- Google Tag Manager -->
  <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KTS8C95');
  </script>
  <!-- End Google Tag Manager -->

  <!-- ChatPlus -->
  <script>
    (function(){
      var w=window,d=document;
      var s="https://app.chatplus.jp/cp.js";
      d["__cp_d"]="https://app.chatplus.jp";
      d["__cp_c"]="e5ead80a_3";
      var a=d.createElement("script"), m=d.getElementsByTagName("script")[0];
      a.async=true,a.src=s,m.parentNode.insertBefore(a,m);
    })();
  </script>
  <!-- End ChatPlus -->

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KTS8C95"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->

  <header class="site-header">
    <div class="container flex items-center justify-between py-4 px-6">

      <!-- ロゴ -->
      <a href="<?php echo home_url(); ?>" class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_logo_rooms.svg" alt="予約ルームズ">
      </a>

      <!-- ハンバーガーメニュー（SP用） -->
      <button class="menu-toggle" aria-label="メニューを開く">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </button>

      <!-- ナビゲーション -->
      <nav class="main-nav">
        <ul class="main-nav-list">
          <li><a href="<?php echo home_url('/'); ?>">機能について</a></li>
          <li><a href="<?php echo home_url('/case/'); ?>">お客様の声</a></li>
          <li><a href="<?php echo home_url('/resource/price-book/'); ?>">料金表</a></li>
          <li><a href="<?php echo home_url('/faq/'); ?>">よくあるご質問</a></li>
          <li><a href="<?php echo home_url('/contact/'); ?>">問い合わせ</a></li>
        </ul>
      </nav>

      <!-- CTAボタン -->
      <div class="header-cta">
        <a class="cta-button cta-button--outline" href="<?php echo home_url('/document-price/'); ?>">料金表をもらう</a>
        <a class="cta-button" href="<?php echo home_url('/documents/'); ?>">資料をもらう</a>
      </div>

    </div>
  </header>
