<?php get_header(); ?>

<main class="site-main front-page">

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

  <?php // RECEPTIONISTシリーズ ?>
  <?php get_template_part('sections/series'); ?>

</main>

<?php get_footer(); ?>
