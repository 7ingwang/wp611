<?php
function cloudpress_enqueue_script()
	{
	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	wp_enqueue_style('bootstrap', CLOUDPRESS_THEME_URI.'/assets/css/bootstrap' . $suffix . '.css',array(),'5.1.3');

	wp_enqueue_style('icons', CLOUDPRESS_THEME_URI . '/assets/css/icons.css', array(), '');

	wp_enqueue_style('owl', CLOUDPRESS_THEME_URI . '/assets/css/owl.carousel.css');

	wp_enqueue_style('owl', CLOUDPRESS_THEME_URI . '/assets/css/owl.theme.default.css');

	wp_enqueue_style('cloudpress-style', get_stylesheet_uri() );

	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery' . $suffix . '.js', array('jquery'), '', true);

	wp_enqueue_script('bootstrap', get_template_directory_uri(). '/assets/js/bootstrap' . $suffix . '.js', array(), '');

	wp_enqueue_script('owl', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'), '', true);

	wp_enqueue_script('cloudpress-custom-js', get_template_directory_uri().'/assets/js/custom.js', array('jquery'), '', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
	{
		wp_enqueue_script( 'comment-reply' );
	}

	}
	add_action('wp_enqueue_scripts','cloudpress_enqueue_script');


	function cloudpress_plus_enqueue_scripts(){
	wp_enqueue_style('cloudpress-customize-css', CLOUDPRESS_THEME_URI . '/assets/css/customize.css');
	}
	add_action( 'admin_enqueue_scripts', 'cloudpress_plus_enqueue_scripts' );

	/**
 	* Added skip link focus
 	*/
	function cloudpress_skip_link_fn() {
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
	}
	add_action( 'wp_print_footer_scripts', 'cloudpress_skip_link_fn' );
