<?php
add_action( 'widgets_init', 'CLOUDPRESS_widgets_init');
function CLOUDPRESS_widgets_init() {
$footer_info_column_layout=get_theme_mod('footer_widget_area_placing',3);
   /*sidebar*/

	register_sidebar( array(
		'name' => esc_html__('Sidebar widget area','CLOUDPRESS'),
		'id' => 'sidebar-1',
		'description' => esc_html__('Sidebar widget area','CLOUDPRESS'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
			'name'          => esc_html__( 'Footer 1', 'CLOUDPRESS' ),
			'id'            => 'footer-sidebar-1',
			'description'   => esc_html__( 'Add widgets here to show on footer 1.', 'CLOUDPRESS' ),
			'before_widget' => '<aside id="%1$s" class="widget widget_text sml-device %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );

			register_sidebar( array(
			'name'          => esc_html__( 'Footer 2', 'CLOUDPRESS' ),
			'id'            => 'footer-sidebar-2',
			'description'   => esc_html__( 'Add widgets here to show on footer 2.', 'CLOUDPRESS' ),
			'before_widget' => '<aside id="%1$s" class="widget widget_text sml-device %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'Footer 3', 'CLOUDPRESS' ),
			'id'            => 'footer-sidebar-3',
			'description'   => esc_html__( 'Add widgets here to show on footer 3.', 'CLOUDPRESS' ),
			'before_widget' => '<aside id="%1$s" class="widget widget_text sml-device %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );
		register_sidebar( array(
			'name'          => esc_html__( 'Footer 4', 'CLOUDPRESS' ),
			'id'            => 'footer-sidebar-4',
			'description'   => esc_html__( 'Add widgets here to show on footer 4.', 'CLOUDPRESS' ),
			'before_widget' => '<aside id="%1$s" class="widget widget_text sml-device %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );

		register_sidebar( array(
		'name' => esc_html__('WooCommerce sidebar widget area', 'CLOUDPRESS' ),
		'id' => 'woocommerce',
		'description' => esc_html__( 'WooCommerce sidebar widget area', 'CLOUDPRESS' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		) );

		register_sidebar( array(
			'name' => esc_html__( 'Top header sidebar left area', 'CLOUDPRESS' ),
			'id' => 'home-header-sidebar_left',
			'description' => esc_html__('Social media menu lateral area', 'CLOUDPRESS' ),
			'before_widget' => '<aside id="%1$s" class="widget widget_wdl_contact_widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		));

		register_sidebar( array(
			'name' => esc_html__( 'Top header sidebar right area', 'CLOUDPRESS' ),
			'id' => 'home-header-sidebar_right',
			'description' => esc_html__('Subscriber section widget area', 'CLOUDPRESS' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		));

}
