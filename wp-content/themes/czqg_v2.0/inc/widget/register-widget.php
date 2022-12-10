<?php
add_action( 'widgets_init', 'CLOUDPRESS_widgets_init');
function CLOUDPRESS_widgets_init() {

	register_sidebar( array(
		'name' => esc_html__('Sidebar widget area','CLOUDPRESS'),
		'id' => 'sidebar-1',
		'description' => esc_html__('Sidebar widget area','CLOUDPRESS'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}
