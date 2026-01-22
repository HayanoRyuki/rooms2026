<?php
/**
 * カスタム投稿タイプ：導入事例（case）
 */

function register_custom_post_type_case() {
	register_post_type(
		'case',
		array(
			'labels' => array(
				'name'               => '導入事例',
				'singular_name'      => '導入事例',
				'add_new'            => '新規追加',
				'add_new_item'       => '新しい導入事例を追加',
				'edit_item'          => '導入事例を編集',
				'new_item'           => '新しい導入事例',
				'view_item'          => '導入事例を表示',
				'search_items'       => '導入事例を検索',
				'not_found'          => '導入事例が見つかりませんでした',
				'not_found_in_trash' => 'ゴミ箱に導入事例は見つかりませんでした',
				'menu_name'          => '導入事例',
			),
			'public'        => true,
			'has_archive'   => true,
			'rewrite'       => array( 'slug' => 'case' ),
			'menu_position' => 5,
			'menu_icon'     => 'dashicons-portfolio',
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
			'show_in_rest'  => true,
		)
	);
}
add_action( 'init', 'register_custom_post_type_case' );

// --------------------------------------------------
// 外部確認URL機能
// --------------------------------------------------

/**
 * 外部確認URLの閲覧制御
 */
add_action('template_redirect', function () {
	if (!is_singular('case')) return;

	global $post;
	if ($post->post_status === 'publish') return;

	$token   = $_GET['external_preview'] ?? '';
	$saved   = get_post_meta($post->ID, '_external_preview_token', true);
	$expires = intval(get_post_meta($post->ID, '_external_preview_expires', true));

	if ($token && $saved && hash_equals($saved, $token) && time() < $expires) {
		return; // 表示許可
	}

	wp_die('このページは確認期限が切れています。', '閲覧不可', ['response' => 403]);
});

/**
 * 管理画面：メタボックス追加
 */
add_action('add_meta_boxes', function () {
	add_meta_box(
		'external_preview_box',
		'外部確認URL',
		'render_case_external_preview_meta_box',
		'case',
		'side',
		'high'
	);
});

/**
 * メタボックスの表示
 */
function render_case_external_preview_meta_box($post) {
	$token   = get_post_meta($post->ID, '_external_preview_token', true);
	$expires = get_post_meta($post->ID, '_external_preview_expires', true);

	wp_nonce_field('external_preview_nonce_action', 'external_preview_nonce');

	// 有効なトークンがあるか
	$has_valid_token = $token && $expires && time() < intval($expires);
	$preview_url = $has_valid_token
		? get_permalink($post->ID) . '?external_preview=' . $token
		: '';
	$expires_date = $expires ? date('Y/m/d H:i', intval($expires)) : '';
	?>
	<div class="external-preview-wrap">
		<?php if ($has_valid_token) : ?>
			<p style="margin-bottom: 10px;">
				<strong>有効期限:</strong> <?php echo esc_html($expires_date); ?>
			</p>
			<input
				type="text"
				value="<?php echo esc_url($preview_url); ?>"
				readonly
				onclick="this.select();"
				style="width: 100%; margin-bottom: 10px; padding: 8px; font-size: 12px;"
			/>
			<button type="button" class="button" onclick="navigator.clipboard.writeText('<?php echo esc_js($preview_url); ?>'); alert('URLをコピーしました');">
				URLをコピー
			</button>
		<?php else : ?>
			<p style="color: #666; margin-bottom: 10px;">
				外部確認用URLが未発行、または期限切れです。
			</p>
		<?php endif; ?>

		<hr style="margin: 15px 0;" />

		<p><strong>新しいURLを発行</strong></p>
		<label style="display: block; margin-bottom: 8px;">
			有効期間:
			<select name="external_preview_days" style="width: 100%;">
				<option value="1">1日</option>
				<option value="3">3日</option>
				<option value="7" selected>7日</option>
				<option value="14">14日</option>
				<option value="30">30日</option>
			</select>
		</label>
		<label style="display: block;">
			<input type="checkbox" name="generate_external_preview" value="1" />
			保存時に新しいURLを発行する
		</label>
	</div>
	<?php
}

/**
 * 保存処理
 */
add_action('save_post_case', function ($post_id) {
	// nonce検証
	if (!isset($_POST['external_preview_nonce'])) return;
	if (!wp_verify_nonce($_POST['external_preview_nonce'], 'external_preview_nonce_action')) return;

	// 自動保存スキップ
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

	// 権限チェック
	if (!current_user_can('edit_post', $post_id)) return;

	// 発行チェックボックスがONの場合のみ
	if (empty($_POST['generate_external_preview'])) return;

	// トークン生成
	$token = bin2hex(random_bytes(32));
	$days  = intval($_POST['external_preview_days'] ?? 7);
	$expires = time() + ($days * DAY_IN_SECONDS);

	update_post_meta($post_id, '_external_preview_token', $token);
	update_post_meta($post_id, '_external_preview_expires', $expires);
});

/**
 * 管理画面：一覧に外部確認URL列を追加
 */
add_filter('manage_case_posts_columns', function ($columns) {
	$new_columns = [];
	foreach ($columns as $key => $value) {
		$new_columns[$key] = $value;
		if ($key === 'title') {
			$new_columns['external_preview'] = '外部確認';
		}
	}
	return $new_columns;
});

add_action('manage_case_posts_custom_column', function ($column, $post_id) {
	if ($column !== 'external_preview') return;

	$token   = get_post_meta($post_id, '_external_preview_token', true);
	$expires = get_post_meta($post_id, '_external_preview_expires', true);

	if ($token && $expires && time() < intval($expires)) {
		$remaining = intval($expires) - time();
		$days = floor($remaining / DAY_IN_SECONDS);
		echo '<span style="color: green;">● 有効</span><br>';
		echo '<small>残り ' . $days . '日</small>';
	} else {
		echo '<span style="color: #999;">—</span>';
	}
}, 10, 2);

add_filter('manage_edit-case_sortable_columns', function ($columns) {
	$columns['external_preview'] = 'external_preview';
	return $columns;
});
