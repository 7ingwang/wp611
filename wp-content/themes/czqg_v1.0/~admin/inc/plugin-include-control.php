<?php
/**
 * This file implements custom requirements for the SpiceBox plugin.
 * It can be used as-is in themes (drop-in).
 *
 */

if (class_exists('WP_Customize_Control') && !class_exists('CLOUDPRESS_Plugin_Install_Control'))
{
	/**
	 *
	 * @see WP_Customize_Section
	 */
	class CLOUDPRESS_Plugin_Install_Control extends WP_Customize_Control {
		/**
		 * Customize section type.
		 *
		 * @access public
		 * @var string
		 */
		public $type = 'CLOUDPRESS_Plugin_Install_Control';
		public $name = '';
		public $slug = '';

		public function __construct($manager, $id, $args = array()) {
			parent::__construct($manager, $id, $args);
		}

		/**
		 * enqueue styles and scripts
		 *
		 *
		 **/
		public  function enqueue() {
			wp_enqueue_script('plugin-install');
			wp_enqueue_script('updates');
			wp_enqueue_script('CLOUDPRESS-companion-install', CLOUDPRESS_ADMIN_URI . '/assets/js/plugin-install.js', array('jquery'));
			wp_localize_script('CLOUDPRESS-companion-install', 'CLOUDPRESS_companion_install',
				array(
					'installing' => esc_html__('Installing', 'CLOUDPRESS'),
					'activating' => esc_html__('Activating', 'CLOUDPRESS'),
					'error'      => esc_html__('Error', 'CLOUDPRESS'),
					'ajax_url'   => esc_url(admin_url('admin-ajax.php')),
				)
			);
		}
		/**
		 * Render the section.
		 *
		 * @access protected
		 */
		protected function render_content() {
			// Determine if the plugin is not installed, or just inactive.
			
			if(empty($this->name) && empty($this->slug)){
				return;
			}
			
			$hide_install = get_option('CLOUDPRESS_hide_customizer_notice_'.$this->slug,  false);
			if($hide_install){
				return;
			}

			global $CLOUDPRESS_About_Page;
			if(!is_object($CLOUDPRESS_About_Page)){
				return;
			}
			?>
			<div class="spicethemes-plugin-install-control">
				<span class="spicethemes-customizer-notification-dismiss" id="<?php echo esc_attr($this->slug); ?>-install-dismiss" data-slug="<?php echo esc_attr($this->slug); ?>"> <i class="fa fa-times"></i></span>
				<?php if ( ! empty( $this->label ) ) : ?>
		            <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
		        <?php endif; ?>
		        <?php if ( ! empty( $this->description ) ) : ?>
		            <span class="description customize-control-description"><?php echo wp_kses_post($this->description) ; ?></span>
		        <?php endif; ?>
				<?php 
					$button = $CLOUDPRESS_About_Page->get_plugin_buttion($this->slug, $this->name);
					echo wp_kses_post($button['button']);
				?>
				<div style="clear: both;"></div>
			</div>
			<?php
		}
	}
}

function CLOUDPRESS_hide_customizer_notice(){
	if(isset($_POST['CLOUDPRESS_plugin_slug']) && !empty($_POST['CLOUDPRESS_plugin_slug'])){
		$plugin_slug = sanitize_text_field($_POST['CLOUDPRESS_plugin_slug']);
		update_option('CLOUDPRESS_hide_customizer_notice_'.$plugin_slug, true);
		echo true;
	}
	wp_die();
}
add_action('wp_ajax_CLOUDPRESS_hide_customizer_notice', 'CLOUDPRESS_hide_customizer_notice');