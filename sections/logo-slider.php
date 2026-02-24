<?php
/**
 * ロゴスライダー（TOPページ用）
 * client_logo CPT からサムネイルを取得して表示
 */

$logo_query = new WP_Query([
	'post_type'      => 'client_logo',
	'posts_per_page' => 20,
	'meta_key'       => '_show_in_slider',
	'meta_value'     => '1',
	'orderby'        => 'date',
	'order'          => 'DESC',
]);

$logos = [];
if ( $logo_query->have_posts() ) {
	while ( $logo_query->have_posts() ) {
		$logo_query->the_post();
		if ( has_post_thumbnail() ) {
			$logos[] = get_the_post_thumbnail( null, 'medium', [
				'alt'    => get_the_title(),
				'width'  => '150',
				'height' => '71',
			]);
		}
	}
	wp_reset_postdata();
}

if ( empty( $logos ) ) {
	return;
}
?>
<div class="logo-slider">
	<div class="logo-slide-track">
		<?php foreach ( $logos as $logo ) : ?>
			<div class="slide"><?php echo $logo; ?></div>
		<?php endforeach; ?>

		<?php // 無限スクロール用に複製 ?>
		<?php foreach ( $logos as $logo ) : ?>
			<div class="slide"><?php echo $logo; ?></div>
		<?php endforeach; ?>
	</div>
</div>
