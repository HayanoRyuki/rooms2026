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

/* =========================================================
 * case：外部確認URL（14日間有効）
 * ========================================================= */

/**
 * 外部確認メタボックス追加
 */
function add_case_external_preview_box() {
	add_meta_box(
		'case_external_preview',
		'外部確認',
		'render_case_external_preview_box',
		'case',
		'side',
		'high'
	);
}
add_action('add_meta_boxes', 'add_case_external_preview_box');

/**
 * メタボックス描画
 */
function render_case_external_preview_box($post) {
	// 既存トークンと有効期限を取得
	$token   = get_post_meta($post->ID, '_external_preview_token', true);
	$expires = get_post_meta($post->ID, '_external_preview_expires', true);

	// 現在時刻が有効期限内かどうか
	$is_valid = $token && $expires && time() < intval($expires);

	// Public Post Preview方式のURL生成
	$url = $is_valid
		? add_query_arg(
			array(
				'p'                => $post->ID,
				'post_type'        => 'case',
				'preview'          => 'true',
				'external_preview' => $token,
			),
			home_url('/')
		)
		: '';
	?>
	<p>
		<button type="button" class="button" id="generate-external-preview">
			外部確認URLをコピー（14日間）
		</button>
	</p>

	<?php if ($is_valid): ?>
		<p style="font-size:12px;color:#555;">
			有効期限：<?php echo date('Y/m/d H:i', intval($expires)); ?>
		</p>
		<input
			type="text"
			readonly
			value="<?php echo esc_url($url); ?>"
			style="width:100%;"
		>
	<?php endif; ?>

	<script>
	jQuery(function($){
		$('#generate-external-preview').on('click', function(){
			$.post(ajaxurl, {
				action: 'generate_case_external_preview',
				post_id: <?php echo (int)$post->ID; ?>,
				nonce: '<?php echo wp_create_nonce('generate_case_external_preview'); ?>'
			}, function(res){
				if (res.success) {
					navigator.clipboard.writeText(res.data.url);
					location.reload();
				}
			});
		});
	});
	</script>
	<?php
}

/**
 * AJAX：外部確認URL生成（14日間有効）
 */
add_action('wp_ajax_generate_case_external_preview', function () {
	if (!wp_verify_nonce($_POST['nonce'], 'generate_case_external_preview')) {
		wp_send_json_error();
	}

	$post_id = intval($_POST['post_id']);

	// 推測困難なトークンを生成
	$token   = wp_generate_password(32, false);

	// 有効期限：14日
	$expires = time() + (14 * DAY_IN_SECONDS);

	update_post_meta($post_id, '_external_preview_token', $token);
	update_post_meta($post_id, '_external_preview_expires', $expires);

	// Public Post Preview方式のURL生成
	$url = add_query_arg(
		array(
			'p'                => $post_id,
			'post_type'        => 'case',
			'preview'          => 'true',
			'external_preview' => $token,
		),
		home_url('/')
	);

	wp_send_json_success(['url' => $url]);
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
