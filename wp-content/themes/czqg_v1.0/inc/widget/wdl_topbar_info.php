<?php
	// Register and load the widget
	function CLOUDPRESS_header_topbar_info_widget() {
	    register_widget( 'CLOUDPRESS_header_topbar_info_widget' );
	}
	add_action( 'widgets_init', 'CLOUDPRESS_header_topbar_info_widget' );

	// Creating the widget
	class CLOUDPRESS_header_topbar_info_widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'CLOUDPRESS_header_topbar_info_widget', // Base ID
			__('CLOUDPRESS: Header info widget','CLOUDPRESS'), // Widget Name
			array(
				'classname' => 'CLOUDPRESS_header_topbar_info_widget',
				'description' => __('Topbar header info widget.','CLOUDPRESS'),
			),
			array(
				'width' => 600,
			)
		);

	 }

	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		?>
		<ul class="head-contact-info">
			<li>
				<?php if(!empty($instance['fa_icon'])) { ?>
					<i class="fa <?php echo esc_attr($instance['fa_icon']); ?>"></i>
				<?php }
				if(!empty($instance['description'])) {
					echo esc_html($instance['description']);
				} ?>
			</li>
			<li>
				<?php if(!empty($instance['CLOUDPRESS_email'])) { ?>
					<i class="fa <?php echo esc_attr($instance['CLOUDPRESS_email']); ?>"></i>
				<?php }
				if (!empty($instance['CLOUDPRESS_email_id'])) {
					echo '<a href="mailto:' . esc_attr($instance['CLOUDPRESS_email_id']) . '">';
          echo esc_html($instance['CLOUDPRESS_email_id']);
          echo '</a>';
        } ?>
			</li>
		</ul>
	<?php
	echo $args['after_widget'];
	}

	// Widget Backend
	public function form( $instance ) {

		if ( isset( $instance[ 'fa_icon' ])) {
			$fa_icon = $instance[ 'fa_icon' ];
		}
		else {
			$fa_icon = 'fa fa-phone';
		}

		if ( isset( $instance[ 'description' ])) {
			$CLOUDPRESS_description = $instance[ 'description' ];
		}
		else {
			$CLOUDPRESS_description = esc_html__( 'Phone: +99 999-999-9999', 'CLOUDPRESS' );
		}

		if ( isset( $instance[ 'CLOUDPRESS_email' ])) {
			$CLOUDPRESS_email = $instance[ 'CLOUDPRESS_email' ];
		}
		else {
			$CLOUDPRESS_email = 'fa fa-envelope-o';
		}

		if ( isset( $instance[ 'CLOUDPRESS_email_id' ])) {
			$CLOUDPRESS_email_id = $instance[ 'CLOUDPRESS_email_id' ];
		}
		else {
	 		$CLOUDPRESS_email_id = esc_html__( 'abc@example.com', 'CLOUDPRESS' );
		}

	// Widget admin form
	?>

	<label for="<?php echo esc_attr($this->get_field_id( 'fa_icon' )); ?>"><?php esc_html_e( 'Font Awesome icon','CLOUDPRESS' ); ?></label>
	<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'fa_icon' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'fa_icon' )); ?>" type="text" value="<?php if($fa_icon) echo esc_attr( $fa_icon );?>" />
	<span><?php esc_html_e('Link to get Font Awesome icons ','CLOUDPRESS'); ?><a href="<?php echo esc_url('https://fontawesome.com/v4/icons/'); ?>" target="_blank" ><?php esc_html_e('fa-icon','CLOUDPRESS'); ?></a></span>
	<br><br>

	<label for="<?php echo esc_attr($this->get_field_id( 'description' )); ?>"><?php esc_html_e( 'Phone','CLOUDPRESS' ); ?></label>
	<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'description' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'description' )); ?>" type="text" value="<?php if($CLOUDPRESS_description) echo esc_attr(htmlspecialchars_decode($CLOUDPRESS_description));?>" /><br><br>

	<label for="<?php echo esc_attr($this->get_field_id( 'CLOUDPRESS_email' )); ?>"><?php esc_html_e( 'Font Awesome icon','CLOUDPRESS' ); ?></label>
	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('CLOUDPRESS_email')); ?>" name="<?php echo esc_attr($this->get_field_name('CLOUDPRESS_email')); ?>" type="text" value="<?php if($CLOUDPRESS_email) echo esc_attr($CLOUDPRESS_email);?>" />
	<span><?php esc_html_e('Link to get Font Awesome icons ','CLOUDPRESS'); ?><a href="<?php echo esc_url('https://fontawesome.com/v4/icons/'); ?>" target="_blank" ><?php esc_html_e('fa-icon','CLOUDPRESS'); ?></a></span><br><br>

	<label for="<?php echo esc_attr($this->get_field_id('CLOUDPRESS_email_id')); ?>"><?php esc_html_e( 'Email','CLOUDPRESS' ); ?></label>
	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('CLOUDPRESS_email_id')); ?>" name="<?php echo esc_attr($this->get_field_name('CLOUDPRESS_email_id')); ?>" type="text" value="<?php if($CLOUDPRESS_email_id) echo esc_attr(htmlspecialchars_decode($CLOUDPRESS_email_id)); ?>" /><br><br>



	<?php
    }
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {

		$instance = array();
		$instance['fa_icon'] = ( ! empty( $new_instance['fa_icon'] ) ) ? CLOUDPRESS_sanitize_text( $new_instance['fa_icon'] ) : '';
		$instance['description'] = ( ! empty( $new_instance['description'] ) ) ? CLOUDPRESS_sanitize_text($new_instance['description']) : '';
		$instance['CLOUDPRESS_email'] = ( ! empty( $new_instance['CLOUDPRESS_email'] ) ) ? CLOUDPRESS_sanitize_text( $new_instance['CLOUDPRESS_email'] ) : '';
		$instance['CLOUDPRESS_email_id'] = ( ! empty( $new_instance['CLOUDPRESS_email_id'] ) ) ? CLOUDPRESS_sanitize_text($new_instance['CLOUDPRESS_email_id']) : '';

		return $instance;
	}
	}
