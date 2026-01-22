<?php
/**
 * イベント アーカイブ
 */
get_header();
?>
<body class="page event-archive-page">
<?php get_header('gtm'); ?>

<main class="main wrapper">
  <div class="btm_nav sticky-wrapper" uk-sticky="bottom: true">
    <?php get_header('menu'); ?>
  </div>

  <?php get_template_part('template-parts/event/archive'); ?>

  <section class="bnr_dl_cta bnr_page">
    <?php get_template_part('sections/cta'); ?>
  </section>

  <section class="service-index-wrap">
    <?php get_footer('service'); ?>
  </section>
</main>

<footer class="footer">
  <?php get_footer(); ?>
</footer>

<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/common.js"></script>
</body>
</html>
