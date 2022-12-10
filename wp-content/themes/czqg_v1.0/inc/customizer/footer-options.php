<?php
function CLOUDPRESS_footer_customizer ( $wp_customize )
{
	$wp_customize->add_section('footer_section',
		array(
			'title' => esc_html__('Footer Settings','CLOUDPRESS'),
			'priority' => 10,
			'panel' => 'CLOUDPRESS_theme_panel',
		)
	);

/************************* Eanble Footer *********************************/

	$wp_customize->add_setting('footer_enable',
		array(
			'default' => true,
			'sanitize_callback' => 'CLOUDPRESS_sanitize_checkbox'
			)
	);

	$wp_customize->add_control(new CLOUDPRESS_Toggle_Control( $wp_customize, 'footer_enable',
		array(
			'label'    => esc_html__( 'Hide/Show Footer', 'CLOUDPRESS' ),
			'section'  => 'footer_section',
			'type'     => 'ios',
			'priority' => 1,
		)
	));

/************************* Copyright *********************************/
	$wp_customize->add_setting('footer_copyright',
		array(
			'default'=>	'<p>'.__( 'Proudly powered by <a href="https://wordpress.org"> WordPress</a> | Theme: <a href="https://spicethemes.com/CLOUDPRESS-wordpress-theme/" rel="nofollow">CLOUDPRESS</a> by <a href="https://spicethemes.com" rel="nofollow">SpiceThemes</a>', 'CLOUDPRESS' ).'</p>',
			'capability'        =>  'edit_theme_options',
			'sanitize_callback'=> 'CLOUDPRESS_sanitize_text',
		)
	);

	$wp_customize->add_control('footer_copyright',
		array(
			'label'=> esc_html__('Copyright Content','CLOUDPRESS'),
			'section'=> 'footer_section',
			'type'=> 'textarea',
			'priority'=> 2,
			'active_callback'=> 'CLOUDPRESS_footer_callback'
		)
	);

}
add_action('customize_register','CLOUDPRESS_footer_customizer');
