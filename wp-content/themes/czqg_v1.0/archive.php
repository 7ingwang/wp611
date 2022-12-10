<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CLOUDPRESS
 */
get_header();?>

<div class="category-cover"></div>

<div class="breadcrumbs">
    <div class="container">
        <?php
        foreach (get_categories('child_of=' . tx_wp_get_category_root_id($cat) . '') as $cate) {
            echo '<a href="' . get_category_link($cate->term_id) . '">' . get_cat_name($cate->term_id) . '</a>';
        }
        ?>
    </div>
</div>
<section class="site-content my-5">
    <div class="container">
        <div class="row section-module">
            <div class="col-md-12">
                <div class="blog">
                    <?php
                    do_action('CLOUDPRESS_custom_pagination_query');
                    $CLOUDPRESS_args = array('post_type' => 'post', 'paged' => $paged);
                    $CLOUDPRESS_loop = new WP_Query($CLOUDPRESS_args);
                    if(have_posts()): while(have_posts()): the_post();
                            get_template_part('template-parts/content-blog-template', get_post_type());
                        endwhile;
                    else:
                        get_template_part('template-parts/content-blog-template', 'none');
                    endif;
                    // pagination function
                    do_action('CLOUDPRESS_post_navigation');
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>
