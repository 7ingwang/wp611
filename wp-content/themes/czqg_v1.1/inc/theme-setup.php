<?php
if( !function_exists('CLOUDPRESS_theme_setup')):

	function CLOUDPRESS_theme_setup()
	{
		/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on CLOUDPRESS, use a find and replace
		* to change 'CLOUDPRESS' to the name of your theme in all the template files.
		*/
		load_theme_textdomain('CLOUDPRESS', CLOUDPRESS_THEME_DIR .'/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
		add_theme_support('title-tag');

		/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'CLOUDPRESS-primary' => esc_html__('Primary' , 'CLOUDPRESS')
		));
		register_nav_menus( array(
			'CLOUDPRESS-links' => esc_html__('FriendLinks' , 'CLOUDPRESS')
		));


		add_theme_support( 'custom-header', apply_filters( 'CLOUDPRESS_custom_header_args', array(
		'default-text-color'     => '000000',
		'width'                  => 1920,
		'height'                 => 480,
		'flex-height'            => true,
		) ) );
		/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		* Add support for core custom logo.
		*
		* @link https://codex.wordpress.org/Theme_Logo
		*/
		add_theme_support( 'custom-logo', array(
		   	'height'      => 64,
		   	'width'       => 472,
		   	'flex-width' => true,
			)
		);

		add_editor_style();

		// Gutenberg layout support.
		add_theme_support( 'align-wide' );
	}
	endif;

	add_action(	'after_setup_theme', 'CLOUDPRESS_theme_setup' );

	function CLOUDPRESS_comment_field_to_bottom( $fields )
	{
		$comment_field = $fields['comment'];
		unset( $fields['comment'] );
		$fields['comment'] = $comment_field;
		return $fields;
	}
	add_filter( 'comment_form_fields', 'CLOUDPRESS_comment_field_to_bottom' );

	add_filter( 'wp_get_attachment_image_attributes', function( $attr )
	{
	 if( isset( $attr['class'] )  && 'custom-logo' === $attr['class'] )
	     $attr['class'] = 'custom-logo';
	 return $attr;
	} );


	add_filter( 'get_custom_logo', 'CLOUDPRESS_change_logo_class' );

	function CLOUDPRESS_change_logo_class( $html ) {
	$html = str_replace( 'custom-logo-link', 'navbar-brand', $html );
	return $html;
	}

