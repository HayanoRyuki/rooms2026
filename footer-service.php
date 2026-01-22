<?php
/**
 * サービス一覧（フッター上部）
 */
?>
<div class="service-index container">
  <h2 class="service-index-title">RECEPTIONISTのサービス</h2>
  <div class="service-cards uk-grid uk-grid-small uk-child-width-1-3@m" uk-grid>
    <div>
      <a href="https://receptionist.jp/" class="service-card" target="_blank" rel="noopener">
        <div class="service-card-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/img/services/img_reception_small.png" alt="RECEPTIONIST">
        </div>
        <div class="service-card-body">
          <p class="service-card-label">クラウド受付システム</p>
          <h3 class="service-card-name">RECEPTIONIST</h3>
        </div>
      </a>
    </div>
    <div>
      <a href="https://scheduling.receptionist.jp/" class="service-card" target="_blank" rel="noopener">
        <div class="service-card-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/img/services/img_cheduling_kv_small.png" alt="調整アポ">
        </div>
        <div class="service-card-body">
          <p class="service-card-label">日程調整ツール</p>
          <h3 class="service-card-name">調整アポ</h3>
        </div>
      </a>
    </div>
    <div>
      <a href="<?php echo home_url('/'); ?>" class="service-card current">
        <div class="service-card-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/img/services/img_meetingroom_small.png" alt="予約ルームズ">
        </div>
        <div class="service-card-body">
          <p class="service-card-label">会議室予約システム</p>
          <h3 class="service-card-name">予約ルームズ</h3>
        </div>
      </a>
    </div>
  </div>
</div>
