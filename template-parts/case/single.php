<?php
/**
 * 導入事例 シングルテンプレートパーツ
 */
?>
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
  <?php if (function_exists('bcn_display')) : bcn_display(); endif; ?>
</div>

<article class="case-single">
  <div class="container">
    <div class="case-content-wrap uk-flex">

      <!-- メインコンテンツ -->
      <div class="case-main">
        <header class="case-header">
          <h1 class="case-title"><?php the_title(); ?></h1>
          <?php
          $terms = get_the_terms(get_the_ID(), 'case_category');
          if ($terms && !is_wp_error($terms)) : ?>
            <div class="case-categories">
              <?php foreach ($terms as $term) : ?>
                <a href="<?php echo get_term_link($term); ?>" class="case-category-tag">
                  <?php echo esc_html($term->name); ?>
                </a>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </header>

        <?php if (has_post_thumbnail()) : ?>
          <div class="case-featured-image">
            <?php the_post_thumbnail('large'); ?>
          </div>
        <?php endif; ?>

        <?php if (get_field('single_description')) : ?>
          <div class="case-description">
            <p><?php the_field('single_description'); ?></p>
          </div>
        <?php endif; ?>

        <?php if (get_field('point1') || get_field('point2') || get_field('point3')) : ?>
          <div class="case-summary-box">
            <h2 class="summary-title"><span>この記事の要約</span></h2>
            <ul class="summary-list">
              <?php if (get_field('point1')) : ?>
                <li><i class="fas fa-check"></i><?php the_field('point1'); ?></li>
              <?php endif; ?>
              <?php if (get_field('point2')) : ?>
                <li><i class="fas fa-check"></i><?php the_field('point2'); ?></li>
              <?php endif; ?>
              <?php if (get_field('point3')) : ?>
                <li><i class="fas fa-check"></i><?php the_field('point3'); ?></li>
              <?php endif; ?>
            </ul>
          </div>
        <?php endif; ?>

        <div class="case-body">
          <?php the_content(); ?>
        </div>

        <!-- 関連事例 -->
        <?php
        $related_args = array(
          'post_type' => 'case',
          'posts_per_page' => 3,
          'post__not_in' => array(get_the_ID()),
          'orderby' => 'rand',
        );
        $related_query = new WP_Query($related_args);
        if ($related_query->have_posts()) : ?>
          <div class="related-cases">
            <h2 class="related-title">関連する導入事例</h2>
            <div class="related-grid uk-grid uk-grid-small" uk-grid>
              <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
                <div class="uk-width-1-3@m">
                  <a href="<?php the_permalink(); ?>" class="related-card">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('medium', array('class' => 'related-image')); ?>
                    <?php endif; ?>
                    <h3 class="related-card-title"><?php the_title(); ?></h3>
                  </a>
                </div>
              <?php endwhile; ?>
            </div>
          </div>
        <?php
        endif;
        wp_reset_postdata();
        ?>
      </div>

      <!-- サイドバー -->
      <aside class="case-sidebar">
        <div class="company-profile">
          <?php if (get_field('logo')) : ?>
            <div class="company-logo">
              <img src="<?php the_field('logo'); ?>" alt="<?php the_field('client'); ?>">
            </div>
          <?php endif; ?>
          <table class="profile-table">
            <?php if (get_field('client')) : ?>
              <tr><th>クライアント名</th><td><?php the_field('client'); ?></td></tr>
            <?php endif; ?>
            <?php if (get_field('industry')) : ?>
              <tr><th>業種</th><td><?php the_field('industry'); ?></td></tr>
            <?php endif; ?>
            <?php if (get_field('department')) : ?>
              <tr><th>利用部署</th><td><?php the_field('department'); ?></td></tr>
            <?php endif; ?>
            <?php if (get_field('people')) : ?>
              <tr><th>従業員数</th><td><?php the_field('people'); ?></td></tr>
            <?php endif; ?>
          </table>
        </div>

        <!-- サイドバーCTA -->
        <div class="sidebar-cta">
          <h3>資料ダウンロード</h3>
          <p>予約ルームズの詳しい機能や料金について</p>
          <a href="/documents" class="btn btn_dl">資料をダウンロード</a>
        </div>
      </aside>

    </div>
  </div>
</article>
