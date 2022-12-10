<?php
/**
 * The template for displaying archive pages
 * @package CZQG
 */
get_header();?>

<?php get_template_part('inc/header/category-cover');?>

<?php get_template_part('inc/header/sub-nav');?>

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
                            get_template_part('template-parts/content-pix-template', get_post_type());
                        endwhile;
                    else:
                        get_template_part('template-parts/content-pix-template', 'none');
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
