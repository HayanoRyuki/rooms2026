<?php
/**
 * 導入事例 アーカイブテンプレートパーツ
 */
?>
<div class="hero page-title wrapper bg_blue">
  <div class="hero-body">
    <div class="hero-tit">
      <h1 class="uk-text-center">会議室予約システム「予約ルームズ」の導入事例</h1>
      <p class="b1 b2-sp uk-text-center">導入企業様に予約ルームズについてインタビューしてきました。</p>
    </div>
  </div>
</div>

<section class="case-archive">
  <div class="container">
    <?php
    // カテゴリーフィルター
    $case_categories = get_terms(array(
      'taxonomy' => 'case_category',
      'hide_empty' => true,
    ));
    if (!empty($case_categories) && !is_wp_error($case_categories)) : ?>
      <div class="case-filter">
        <a href="<?php echo get_post_type_archive_link('case'); ?>" class="filter-btn <?php echo !is_tax() ? 'active' : ''; ?>">すべて</a>
        <?php foreach ($case_categories as $category) : ?>
          <a href="<?php echo get_term_link($category); ?>" class="filter-btn <?php echo is_tax('case_category', $category->term_id) ? 'active' : ''; ?>">
            <?php echo esc_html($category->name); ?>
          </a>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <div class="case-grid uk-grid uk-grid-medium" uk-grid uk-height-match="target: > .case-card">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post(); ?>
          <div class="case-card uk-width-1-3@m uk-width-1-2@s">
            <a href="<?php the_permalink(); ?>" class="card-link">
              <div class="uk-card uk-card-default">
                <div class="card-media">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium_large', array('class' => 'card-image')); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.webp" alt="" class="card-image">
                  <?php endif; ?>
                  <?php if (get_field('logo')) : ?>
                    <div class="corp-logo">
                      <img src="<?php the_field('logo'); ?>" alt="<?php the_field('client'); ?>">
                    </div>
                  <?php endif; ?>
                </div>
                <div class="card-body">
                  <h2 class="card-title"><?php the_title(); ?></h2>
                  <p class="corp-name"><?php the_field('client'); ?></p>
                  <p class="corp-info">業種：<?php the_field('industry'); ?></p>
                  <span class="read-more">詳しく見る <i class="fa fa-arrow-right"></i></span>
                </div>
              </div>
            </a>
          </div>
        <?php endwhile;
      else : ?>
        <p class="no-posts">導入事例がまだありません。</p>
      <?php endif; ?>
    </div>

    <?php
    // ページネーション
    the_posts_pagination(array(
      'mid_size' => 2,
      'prev_text' => '<i class="fa fa-chevron-left"></i>',
      'next_text' => '<i class="fa fa-chevron-right"></i>',
    ));
    ?>
  </div>
</section>
