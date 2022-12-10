<?php
/**
* Theme functions and definitions.
* @package CZQGGS theme
*/



// 隐藏前台 AdminBar
show_admin_bar( false );

//自定义登录页面Logo
function custom_login_logo() {
    echo '<style type="text/CSS">
      h1 a { background-image:url('.get_bloginfo('template_directory').'/assets/images/czqg-logo.png) !important; }
    </style>';
}
add_action('login_head', 'custom_login_logo');

//自定义登录界面Logo链接
function custom_loginlogo_url($url) {
    return get_bloginfo('url');
}
add_filter( 'login_headerurl', 'custom_loginlogo_url' );

//自定义登录页面Logo文本
function custom_loginlogo_desc($url) {
    return get_bloginfo('name');
}
add_filter( 'login_headertext', 'custom_loginlogo_desc' );



//获取分类ID，函数参数是int类型为当前分类的ID
function tx_wp_get_category_root_id($cat)
{
    $this_category = get_category($cat);//获取当前分类的对象
    //循环往上获得获得父级分类id
    while ($this_category->category_parent) {
        $this_category = get_category($this_category->category_parent);
    }
    return $this_category->term_id;
}


//获取文章内的首张图片
function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);

    //获取文章中第一张图片的路径并输出
    $first_img = $matches [1] [0];

    //如果文章无图片，获取自定义图片

    if(empty($first_img)){
    $first_img = get_template_directory_uri()."/assets/images/default.jpg";

    //请自行设置一张default.jpg图片
    }

    return $first_img;

}



if( ! defined( 'ABSPATH' ) )
{
	exit;
}

define('CLOUDPRESS_THEME_DIR', get_template_directory());
define('CLOUDPRESS_THEME_URI', get_template_directory_uri() );


/**
 * Implement the Custom Header feature.
 */
require( CLOUDPRESS_THEME_DIR . '/inc/theme-setup.php');

/**
* Register Widget
*/
require( CLOUDPRESS_THEME_DIR . '/inc/widget/register-widget.php');



/**
* Register css and js
*/
require( CLOUDPRESS_THEME_DIR . '/inc/script/scripts.php');

/**
* Nav walker
*/
require( CLOUDPRESS_THEME_DIR . '/inc/menu/CLOUDPRESS_nav_walker.php');

/**
* helder function
*/
require ( CLOUDPRESS_THEME_DIR . '/inc/customizer/helper-function.php');

