<?php
/**
 * お役立ち資料 シングルテンプレートパーツ
 */
?>
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
  <?php if (function_exists('bcn_display')) : bcn_display(); endif; ?>
</div>

<article class="resource-single">
  <div class="container">
    <div class="resource-content-wrap uk-flex">

      <!-- メインコンテンツ -->
      <div class="resource-main">
        <header class="resource-header">
          <?php
          $terms = get_the_terms(get_the_ID(), 'resource_category');
          if ($terms && !is_wp_error($terms)) : ?>
            <div class="resource-categories">
              <?php foreach ($terms as $term) : ?>
                <a href="<?php echo get_term_link($term); ?>" class="resource-category-tag">
                  <?php echo esc_html($term->name); ?>
                </a>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
          <h1 class="resource-title"><?php the_title(); ?></h1>
        </header>

        <?php if (has_post_thumbnail()) : ?>
          <div class="resource-featured-image">
            <?php the_post_thumbnail('large'); ?>
          </div>
        <?php endif; ?>

        <div class="resource-body">
          <?php the_content(); ?>
        </div>

        <!-- この資料でわかること -->
        <?php if (get_field('point1') || get_field('point2') || get_field('point3')) : ?>
          <div class="resource-points">
            <h2 class="points-title">この資料でわかること</h2>
            <ul class="points-list">
              <?php if (get_field('point1')) : ?>
                <li><i class="fas fa-check-circle"></i><?php the_field('point1'); ?></li>
              <?php endif; ?>
              <?php if (get_field('point2')) : ?>
                <li><i class="fas fa-check-circle"></i><?php the_field('point2'); ?></li>
              <?php endif; ?>
              <?php if (get_field('point3')) : ?>
                <li><i class="fas fa-check-circle"></i><?php the_field('point3'); ?></li>
              <?php endif; ?>
            </ul>
          </div>
        <?php endif; ?>

        <!-- 関連資料 -->
        <?php
        $related_args = array(
          'post_type' => 'resource',
          'posts_per_page' => 3,
          'post__not_in' => array(get_the_ID()),
          'orderby' => 'rand',
        );
        $related_query = new WP_Query($related_args);
        if ($related_query->have_posts()) : ?>
          <div class="related-resources">
            <h2 class="related-title">関連するお役立ち資料</h2>
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

      <!-- サイドバー（ダウンロードフォーム） -->
      <aside class="resource-sidebar">
        <div class="download-form-box">
          <h3 class="form-title">資料をダウンロード</h3>
          <p class="form-description">以下のフォームに入力して、<br>資料をダウンロードしてください。</p>

          <form id="resource-download-form" method="post" name="resource_download">
            <div class="form-group">
              <label>会社名 <span class="required">必須</span></label>
              <input type="text" name="company_name" placeholder="御社名" required>
            </div>
            <div class="form-group">
              <label>お名前 <span class="required">必須</span></label>
              <div class="name-fields">
                <input type="text" name="last_name" placeholder="姓" required>
                <input type="text" name="first_name" placeholder="名" required>
              </div>
            </div>
            <div class="form-group">
              <label>メールアドレス <span class="required">必須</span></label>
              <input type="email" name="email" placeholder="sample@example.com" required>
            </div>
            <div class="form-group">
              <label>電話番号</label>
              <input type="tel" name="phone" placeholder="03-1234-5678">
            </div>
            <div class="form-agree">
              <input type="checkbox" name="agree" id="agree" required>
              <label for="agree">
                <a href="https://help.receptionist.jp/?p=402" target="_blank">個人情報の取り扱い</a>に同意する
              </label>
            </div>
            <input type="hidden" name="resource_id" value="<?php echo get_the_ID(); ?>">
            <input type="hidden" name="resource_title" value="<?php echo esc_attr(get_the_title()); ?>">
            <button type="submit" class="btn btn-submit">
              <i class="fas fa-download"></i> ダウンロード
            </button>
          </form>
        </div>
      </aside>

    </div>
  </div>
</article>
