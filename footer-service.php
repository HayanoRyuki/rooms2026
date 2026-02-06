<?php
/**
 * RECEPTIONISTシリーズについて
 */
?>
<div class="container">
	<h3 class="uk-text-center">RECEPTIONISTシリーズについて</h3>
	<p class="b1 uk-text-center">RECEPTIONISTシリーズは、ビジネス上のつながりをテクノロジーでスマートにすることで<br class="pc">各従業員が本来やるべき業務に集中でき、働きやすい環境に変えていくクラウドサービス群です。</p>
	<div class="uk-grid uk-child-width-1-3@m" uk-grid>
		<div class="card-box">
			<div class="uk-card">
				<a href="https://scheduling.receptionist.jp/" target="_blank" rel="noopener">
					<div class="tit-box">
						<div class="icon-box">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_scheduling.svg" alt="調整アポ">
						</div>
						<h3><small>日程調整ツール</small>調整アポ</h3>
					</div>
					<p>日程調整がコピペで終わる</p>
					<div class="img-box">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_scheduling.webp" alt="調整アポ">
					</div>
				</a>
			</div>
		</div>
		<div class="card-box">
			<div class="uk-card">
				<a href="https://receptionist.jp/" target="_blank" rel="noopener">
					<div class="tit-box">
						<div class="icon-box">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_receptionist.svg" alt="RECEPTIONIST">
						</div>
						<h3><small>受付システム</small>RECEPTIONIST</h3>
					</div>
					<p>来客受付業務をシンプルに</p>
					<div class="img-box">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_receptionist.webp" alt="RECEPTIONIST">
					</div>
				</a>
			</div>
		</div>
		<div class="card-box">
			<div class="uk-card current">
				<a href="<?php echo home_url('/'); ?>">
					<div class="tit-box">
						<div class="icon-box">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_rooms.svg" alt="予約ルームズ">
						</div>
						<h3><small>会議室予約システム</small>予約ルームズ</h3>
					</div>
					<p>会議室の利用マナーを整える</p>
					<div class="img-box">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_rooms.webp" alt="予約ルームズ">
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
