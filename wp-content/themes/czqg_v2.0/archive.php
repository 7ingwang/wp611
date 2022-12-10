<?php
/**
 * The template for displaying archive pages
 * @package CZQG
 */
get_header();?>

<?php get_template_part('inc/header/category-cover');?>

<section class="site-content my-5">
    <div class="container">
        <div class="row justify-content-md-between">
            <div class="col-md-3">
                <?php get_template_part('inc/header/side-nav');?>
            </div>
            <div class="col-md-9 block-bg">
                <h5 class="block-title">
                <?php
                    $category = get_the_category();
                    echo $category[0]->cat_name;
                ?>
                </h5>
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
