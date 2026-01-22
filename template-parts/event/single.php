<?php
/**
 * イベント シングルテンプレートパーツ
 */

// ACFカスタムフィールド（想定）
$event_date = get_field('event_date');
$event_time = get_field('event_time');
$event_venue = get_field('event_venue');
$event_venue_address = get_field('event_venue_address');
$event_status = get_field('event_status');
$event_capacity = get_field('event_capacity');
$event_fee = get_field('event_fee');
$event_target = get_field('event_target');
$event_speaker = get_field('event_speaker');
$event_register_url = get_field('event_register_url');
?>
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
  <?php if (function_exists('bcn_display')) : bcn_display(); endif; ?>
</div>

<article class="event-single">
  <div class="container">
    <div class="event-content-wrap uk-flex">

      <!-- メインコンテンツ -->
      <div class="event-main">
        <header class="event-header">
          <?php if ($event_status) : ?>
            <span class="event-status-badge status-<?php echo esc_attr(sanitize_title($event_status)); ?>">
              <?php echo esc_html($event_status); ?>
            </span>
          <?php endif; ?>

          <?php
          $terms = get_the_terms(get_the_ID(), 'event_category');
          if ($terms && !is_wp_error($terms)) : ?>
            <div class="event-categories">
              <?php foreach ($terms as $term) : ?>
                <a href="<?php echo get_term_link($term); ?>" class="event-category-tag">
                  <?php echo esc_html($term->name); ?>
                </a>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>

          <h1 class="event-title"><?php the_title(); ?></h1>
        </header>

        <?php if (has_post_thumbnail()) : ?>
          <div class="event-featured-image">
            <?php the_post_thumbnail('large'); ?>
          </div>
        <?php endif; ?>

        <!-- イベント概要 -->
        <div class="event-overview-box">
          <h2 class="overview-title">イベント概要</h2>
          <table class="overview-table">
            <?php if ($event_date) : ?>
              <tr>
                <th><i class="fas fa-calendar"></i> 開催日</th>
                <td><?php echo esc_html($event_date); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ($event_time) : ?>
              <tr>
                <th><i class="fas fa-clock"></i> 時間</th>
                <td><?php echo esc_html($event_time); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ($event_venue) : ?>
              <tr>
                <th><i class="fas fa-map-marker-alt"></i> 会場</th>
                <td>
                  <?php echo esc_html($event_venue); ?>
                  <?php if ($event_venue_address) : ?>
                    <br><small><?php echo esc_html($event_venue_address); ?></small>
                  <?php endif; ?>
                </td>
              </tr>
            <?php endif; ?>
            <?php if ($event_capacity) : ?>
              <tr>
                <th><i class="fas fa-users"></i> 定員</th>
                <td><?php echo esc_html($event_capacity); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ($event_fee) : ?>
              <tr>
                <th><i class="fas fa-yen-sign"></i> 参加費</th>
                <td><?php echo esc_html($event_fee); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ($event_target) : ?>
              <tr>
                <th><i class="fas fa-user-check"></i> 対象</th>
                <td><?php echo esc_html($event_target); ?></td>
              </tr>
            <?php endif; ?>
          </table>
        </div>

        <!-- 本文 -->
        <div class="event-body">
          <?php the_content(); ?>
        </div>

        <!-- 登壇者情報 -->
        <?php if ($event_speaker) : ?>
          <div class="event-speaker-box">
            <h2 class="speaker-title">登壇者</h2>
            <div class="speaker-content">
              <?php echo wp_kses_post($event_speaker); ?>
            </div>
          </div>
        <?php endif; ?>

        <!-- 関連イベント -->
        <?php
        $related_args = array(
          'post_type' => 'event',
          'posts_per_page' => 3,
          'post__not_in' => array(get_the_ID()),
          'orderby' => 'date',
          'order' => 'DESC',
        );
        $related_query = new WP_Query($related_args);
        if ($related_query->have_posts()) : ?>
          <div class="related-events">
            <h2 class="related-title">その他のイベント</h2>
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

      <!-- サイドバー（申し込みCTA） -->
      <aside class="event-sidebar">
        <div class="event-cta-box">
          <h3 class="cta-title">このイベントに参加する</h3>

          <?php if ($event_date) : ?>
            <div class="cta-date">
              <i class="fas fa-calendar"></i>
              <span><?php echo esc_html($event_date); ?></span>
            </div>
          <?php endif; ?>

          <?php if ($event_fee) : ?>
            <div class="cta-fee">
              <span class="fee-label">参加費</span>
              <span class="fee-value"><?php echo esc_html($event_fee); ?></span>
            </div>
          <?php endif; ?>

          <?php if ($event_status === '終了') : ?>
            <div class="event-ended">
              <p>このイベントは終了しました</p>
            </div>
          <?php elseif ($event_register_url) : ?>
            <a href="<?php echo esc_url($event_register_url); ?>" class="btn btn-register" target="_blank" rel="noopener">
              <i class="fas fa-user-plus"></i> 申し込む
            </a>
          <?php else : ?>
            <button class="btn btn-register" disabled>
              準備中
            </button>
          <?php endif; ?>

          <div class="share-box">
            <p class="share-label">このイベントをシェア</p>
            <div class="share-buttons">
              <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank" rel="noopener" class="share-btn twitter">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank" rel="noopener" class="share-btn facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>" target="_blank" rel="noopener" class="share-btn linkedin">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- 資料ダウンロードCTA -->
        <div class="sidebar-cta">
          <h3>予約ルームズについてもっと知る</h3>
          <p>会議室予約システムの詳細資料をダウンロードいただけます。</p>
          <a href="<?php echo home_url('/resource/'); ?>" class="btn btn-dl">
            <i class="fas fa-download"></i> 資料ダウンロード
          </a>
        </div>
      </aside>

    </div>
  </div>
</article>
