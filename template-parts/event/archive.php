<?php
/**
 * イベント アーカイブテンプレートパーツ
 */
?>
<section class="event-archive">
  <div class="container">
    <div class="section-header uk-text-center">
      <h1 class="section-title">イベント・セミナー</h1>
      <p class="section-subtitle">予約ルームズに関するイベントやセミナー情報</p>
    </div>

    <!-- カテゴリフィルター -->
    <?php
    $event_categories = get_terms(array(
      'taxonomy' => 'event_category',
      'hide_empty' => false,
    ));
    if ($event_categories && !is_wp_error($event_categories)) : ?>
      <div class="event-filter">
        <button class="filter-btn active" data-filter="all">すべて</button>
        <?php foreach ($event_categories as $cat) : ?>
          <button class="filter-btn" data-filter="<?php echo esc_attr($cat->slug); ?>">
            <?php echo esc_html($cat->name); ?>
          </button>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <!-- イベントリスト -->
    <div class="event-grid">
      <?php if (have_posts()) : ?>
        <div class="uk-grid uk-grid-medium" uk-grid>
          <?php while (have_posts()) : the_post();
            $terms = get_the_terms(get_the_ID(), 'event_category');
            $term_slugs = $terms ? implode(' ', wp_list_pluck($terms, 'slug')) : '';

            // ACFカスタムフィールド（想定）
            $event_date = get_field('event_date');
            $event_time = get_field('event_time');
            $event_venue = get_field('event_venue');
            $event_status = get_field('event_status'); // 開催予定/開催中/終了
          ?>
            <div class="uk-width-1-2@s uk-width-1-3@m event-card" data-category="<?php echo esc_attr($term_slugs); ?>">
              <a href="<?php the_permalink(); ?>" class="card-link">
                <div class="uk-card">
                  <div class="card-media">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('medium', array('class' => 'card-image')); ?>
                    <?php else : ?>
                      <div class="card-image-placeholder">
                        <i class="fas fa-calendar-alt"></i>
                      </div>
                    <?php endif; ?>

                    <?php if ($event_status) : ?>
                      <span class="event-status status-<?php echo esc_attr(sanitize_title($event_status)); ?>">
                        <?php echo esc_html($event_status); ?>
                      </span>
                    <?php endif; ?>
                  </div>

                  <div class="card-body">
                    <?php if ($terms && !is_wp_error($terms)) : ?>
                      <div class="event-categories">
                        <?php foreach ($terms as $term) : ?>
                          <span class="event-category-tag"><?php echo esc_html($term->name); ?></span>
                        <?php endforeach; ?>
                      </div>
                    <?php endif; ?>

                    <h2 class="card-title"><?php the_title(); ?></h2>

                    <div class="event-meta">
                      <?php if ($event_date) : ?>
                        <div class="meta-item">
                          <i class="fas fa-calendar"></i>
                          <span><?php echo esc_html($event_date); ?></span>
                        </div>
                      <?php endif; ?>

                      <?php if ($event_time) : ?>
                        <div class="meta-item">
                          <i class="fas fa-clock"></i>
                          <span><?php echo esc_html($event_time); ?></span>
                        </div>
                      <?php endif; ?>

                      <?php if ($event_venue) : ?>
                        <div class="meta-item">
                          <i class="fas fa-map-marker-alt"></i>
                          <span><?php echo esc_html($event_venue); ?></span>
                        </div>
                      <?php endif; ?>
                    </div>

                    <span class="read-more">詳細を見る <i class="fas fa-arrow-right"></i></span>
                  </div>
                </div>
              </a>
            </div>
          <?php endwhile; ?>
        </div>

        <!-- ページネーション -->
        <div class="pagination-wrap">
          <?php
          the_posts_pagination(array(
            'mid_size'  => 2,
            'prev_text' => '<i class="fas fa-chevron-left"></i>',
            'next_text' => '<i class="fas fa-chevron-right"></i>',
          ));
          ?>
        </div>

      <?php else : ?>
        <div class="no-posts">
          <p>現在開催予定のイベントはありません。</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
