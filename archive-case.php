<?php get_header(); ?>
<body class="page voice">
<?php get_header('gtm'); ?>
<main class="main wrapper">
  <div class="btm_nav sticky-wrapper" uk-sticky="bottom: true">
    <?php get_header('menu'); ?>
  </div>

  <div class="hero page-title wrapper bg_blue">
    <div class="hero-body">
      <div class="hero-tit">
        <h3 class="uk-text-center">会議室予約システム「予約ルームズ」の導入事例</h3>
        <p class="b1 b2-sp uk-text-center">導入企業様に予約ルームズについてインタビューしてきました。</p>
      </div>
    </div>
  </div>

  <section class="top_voice">
    <div class="container">
      <div class="normal-index-wrap uk-flex" uk-grid uk-height-match="target: > .normal-index-box">
        <?php
        $args = array(
          'post_type' => 'case',
          'posts_per_page' => 15,
          'orderby' => 'date',
          'order' => 'DESC'
        );
        $case_query = new WP_Query($args);
        if ($case_query->have_posts()) :
          while ($case_query->have_posts()) : $case_query->the_post(); ?>
            <div class="normal-index-box uk-width-1-3@m">
              <a href="<?php the_permalink(); ?>">
                <div class="uk-card uk-card-default">
                  <div class="uk-card-media-top">
                    <picture>
                      <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="<?php the_title(); ?>" />
                    </picture>
                    <div class="corp_icon">
                      <?php if (get_field('logo')) : ?>
                        <img src="<?php the_field('logo'); ?>" />
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="uk-card-body">
                    <h5><?php the_title(); ?></h5>
                    <p class="corp_name"><?php the_field('client'); ?></p>
                    <p class="spec">業種：<?php the_field('industry'); ?></p>
                    <p class="case_cta_click">詳しく見る&nbsp;<i class="fa fa-arrow-right"></i></p>
                  </div>
                </div>
              </a>
            </div>
        <?php
          endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </section>

  <section class="bnr_dl_cta">
    <?php get_template_part('cta'); ?>
  </section>

  <section class="service-index-wrap">
    <?php get_footer('service'); ?>
  </section>
</main>

<footer class="footer">
  <?php get_footer(); ?>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
</body>
</html>