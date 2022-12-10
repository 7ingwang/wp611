<?php 
	$CLOUDPRESS_actions = $this->recommended_actions;
	$CLOUDPRESS_actions_todo = get_option( 'recommended_actions', false );
?>
<div id="recommended_actions" class="CLOUDPRESS-tab-pane panel-close">
	<div class="action-list">
		<?php if($CLOUDPRESS_actions): foreach ($CLOUDPRESS_actions as $key => $CLOUDPRESS_val): ?>
		<div class="action col-md-6" id="<?php echo esc_attr($CLOUDPRESS_val['id']); ?>">
			<div class="action-box">
				<div class="action-watch">
				<?php if(!$CLOUDPRESS_val['is_done']): ?>
					<?php if(!isset($CLOUDPRESS_actions_todo[$CLOUDPRESS_val['id']]) || !$CLOUDPRESS_actions_todo[$CLOUDPRESS_val['id']]): ?>
						<span class="dashicons dashicons-visibility"></span>
					<?php else: ?>
						<span class="dashicons dashicons-hidden"></span>
					<?php endif; ?>
				<?php else: ?>
					<span class="dashicons dashicons-yes"></span>
				<?php endif; ?>
				</div>
				<div class="action-inner">
					<h3 class="action-title"><?php echo esc_html($CLOUDPRESS_val['title']); ?></h3>
					<div class="action-desc"><?php echo esc_html($CLOUDPRESS_val['desc']); ?></div>
					<?php echo wp_kses_post($CLOUDPRESS_val['link']); ?>
				</div>
			</div>
		</div>
		<?php endforeach; endif; ?>
	</div>
</div>