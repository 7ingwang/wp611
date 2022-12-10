<?php
/**
 * Helper functions.
 *
 * @package CLOUDPRESS
 */

if (!function_exists('CLOUDPRESS_custom_navigation')) :

    function CLOUDPRESS_custom_navigation() {
        $pagination_option = get_theme_mod('blog_pagination');
        if ('default' == $pagination_option) {
            the_posts_navigation();
        } else {
            the_posts_pagination(array(
                'mid_size' => 5,
                'prev_text' => __('<i class="icon-prev"></i>', 'CLOUDPRESS'),
                'next_text' => __('<i class="icon-next"></i>', 'CLOUDPRESS'),
            ));
        }
    }

endif;
add_action('CLOUDPRESS_post_navigation', 'CLOUDPRESS_custom_navigation');

function CLOUDPRESS_blog_meta_contents()
{
?>
<div class="entry-meta">
    <?php
    if (get_theme_mod('CLOUDPRESS_enable_blog_date', true) === true):?>
        <span class="entry-date">
            <time><?php echo esc_html(get_the_date()); ?></time>
        </span>
    <?php
    endif;
    if (get_theme_mod('CLOUDPRESS_enable_blog_category', true) === true):
        $cat_list = get_the_category_list();
        if (!empty($cat_list)) { ?>
            <span class="cat-links"><?php the_category(" "); ?></span>
        <?php }
    endif;
    if (get_theme_mod('CLOUDPRESS_enable_blog_tag', true) === true):
        $tag_list = get_the_tag_list();
        if (!empty($tag_list)) { ?>
            <span class="tag-links"><?php the_tags('', '', ''); ?></span>
        <?php }
    endif; ?>
</div>
<?php
}
add_action('CLOUDPRESS_blog_meta_contents','CLOUDPRESS_blog_meta_contents');

add_action('CLOUDPRESS_custom_pagination_query','CLOUDPRESS_custom_pagination_query');
function CLOUDPRESS_custom_pagination_query()
{
     if(get_query_var('paged'))
                {
                   $paged = get_query_var('paged');
                }
                elseif(get_query_var('page'))
                {
                   $paged = get_query_var('page');
                }
                else
                {
                    $paged = 1;
                }
}

function CLOUDPRESS_footer_section_hook()
{
?>
<footer class="site-footer">
    <?php
    if(is_active_sidebar('footer-sidebar-1') || is_active_sidebar('footer-sidebar-2') || is_active_sidebar('footer-sidebar-3') || is_active_sidebar('footer-sidebar-4')): ?>
                <div class="row footer-sidebar">
                    <!--Footer Widgets-->
                    <div class="container">
                      <div class="row">
                        <?php get_template_part('sidebar','footer');?>

                    <!--/Footer Widgets-->
                     </div>
                   </div>
                   </div>
                   <?php endif;?>
        </footer>
<?php
}
add_action('CLOUDPRESS_footer_section_hook','CLOUDPRESS_footer_section_hook');
