<?php
/* Notifications in customizer */
require CLOUDPRESS_THEME_DIR . '/inc/customizer-notify/CLOUDPRESS-customizer-notify.php';
$CLOUDPRESS_config_customizer = array(
	'recommended_plugins'       => array(
		'spicebox' => array(
			'recommended' => true,
			'description' => sprintf( esc_html__( 'Install and activate the %s plugin to take full advantage of all the features this theme has to offer.', 'CLOUDPRESS' ), sprintf( '<strong>%s</strong>', 'Spicebox' ) ),
		),
	),
	'recommended_actions'       => array(),
	'recommended_actions_title' => esc_html__( 'Recommended Actions', 'CLOUDPRESS' ),
	'recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'CLOUDPRESS' ),
	'install_button_label'      => esc_html__( 'Install and Activate', 'CLOUDPRESS' ),
	'activate_button_label'     => esc_html__( 'Activate', 'CLOUDPRESS' ),
	'deactivate_button_label'   => esc_html__( 'Deactivate', 'CLOUDPRESS' ),
);
CLOUDPRESS_Customizer_Notify::init( apply_filters( 'CLOUDPRESS_customizer_notify_array', $CLOUDPRESS_config_customizer ) );

?>