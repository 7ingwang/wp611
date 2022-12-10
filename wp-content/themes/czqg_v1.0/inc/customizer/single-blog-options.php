<?php
/**
 * Single Blog Options Customizer
 *
 * @package CLOUDPRESS
 */
function CLOUDPRESS_single_blog_customizer ( $wp_customize )
{
$wp_customize->add_section('CLOUDPRESS_single_blog_section',
	array(
		'title' => esc_html__('Single Post', 'CLOUDPRESS'),
		'panel' => 'CLOUDPRESS_theme_panel',
		'priority' => 5
	));

/************************* Meta Hide Show *********************************/

$wp_customize->add_setting('CLOUDPRESS_enable_single_post_category',
	array(
		'default' => true,
		'sanitize_callback' => 'CLOUDPRESS_sanitize_checkbox',
	)
);
$wp_customize->add_control(new CLOUDPRESS_Toggle_Control( $wp_customize, 'CLOUDPRESS_enable_single_post_category',
	array(
		'label' => esc_html__('Hide/Show Categories', 'CLOUDPRESS'),
		'type' => 'ios',
		'section' => 'CLOUDPRESS_single_blog_section',
		'priority' => 4,
	)
));

$wp_customize->add_setting('CLOUDPRESS_enable_single_post_date',
	array(
		'default' => true,
		'sanitize_callback' => 'CLOUDPRESS_sanitize_checkbox',
	)
);
$wp_customize->add_control(new CLOUDPRESS_Toggle_Control( $wp_customize, 'CLOUDPRESS_enable_single_post_date',
	array(
		'label' => esc_html__('Hide/Show Date', 'CLOUDPRESS'),
		'type' => 'ios',
		'section' => 'CLOUDPRESS_single_blog_section',
		'priority' => 6,
	)
));

$wp_customize->add_setting('CLOUDPRESS_enable_single_post_tag',
	array(
		'default' => true,
		'sanitize_callback' => 'CLOUDPRESS_sanitize_checkbox',
	)
);
$wp_customize->add_control(new CLOUDPRESS_Toggle_Control( $wp_customize, 'CLOUDPRESS_enable_single_post_tag',
	array(
		'label' => esc_html__('Hide/Show Tags', 'CLOUDPRESS'),
		'type' => 'ios',
		'section' => 'CLOUDPRESS_single_blog_section',
		'priority' => 8,
	)
));

}
add_action( 'customize_register', 'CLOUDPRESS_single_blog_customizer' );
