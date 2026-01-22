<?php
/**
 * お役立ち資料 アーカイブテンプレートパーツ
 */
?>
<div class="hero page-title wrapper bg_blue">
  <div class="hero-body">
    <div class="hero-tit">
      <h1 class="uk-text-center">お役立ち資料</h1>
      <p class="b1 b2-sp uk-text-center">会議室管理・オフィス運用に役立つ資料を無料でダウンロードいただけます。</p>
    </div>
  </div>
</div>

<section class="resource-archive">
  <div class="container">
    <?php
    // カテゴリーフィルター
    $resource_categories = get_terms(array(
      'taxonomy' => 'resource_category',
      'hide_empty' => true,
    ));
    if (!empty($resource_categories) && !is_wp_error($resource_categories)) : ?>
      <div class="resource-filter">
        <a href="<?php echo get_post_type_archive_link('resource'); ?>" class="filter-btn <?php echo !is_tax() ? 'active' : ''; ?>">すべて</a>
        <?php foreach ($resource_categories as $category) : ?>
          <a href="<?php echo get_term_link($category); ?>" class="filter-btn <?php echo is_tax('resource_category', $category->term_id) ? 'active' : ''; ?>">
            <?php echo esc_html($category->name); ?>
          </a>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <div class="resource-grid uk-grid uk-grid-medium" uk-grid>
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post(); ?>
          <div class="resource-card uk-width-1-3@m uk-width-1-2@s">
            <div class="uk-card uk-card-default">
              <div class="card-media">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('medium_large', array('class' => 'card-image')); ?>
                <?php else : ?>
                  <div class="card-image-placeholder">
                    <i class="fas fa-file-pdf"></i>
                  </div>
                <?php endif; ?>
                <?php
                $terms = get_the_terms(get_the_ID(), 'resource_category');
                if ($terms && !is_wp_error($terms)) : ?>
                  <span class="resource-badge"><?php echo esc_html($terms[0]->name); ?></span>
                <?php endif; ?>
              </div>
              <div class="card-body">
                <h2 class="card-title"><?php the_title(); ?></h2>
                <?php if (has_excerpt()) : ?>
                  <p class="card-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 40, '...'); ?></p>
                <?php endif; ?>
                <a href="<?php the_permalink(); ?>" class="btn btn-download">
                  <i class="fas fa-download"></i> ダウンロード
                </a>
              </div>
            </div>
          </div>
        <?php endwhile;
      else : ?>
        <p class="no-posts">お役立ち資料がまだありません。</p>
      <?php endif; ?>
    </div>

    <?php
    the_posts_pagination(array(
      'mid_size' => 2,
      'prev_text' => '<i class="fa fa-chevron-left"></i>',
      'next_text' => '<i class="fa fa-chevron-right"></i>',
    ));
    ?>
  </div>
</section>
