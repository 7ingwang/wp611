<?php
/**
 * The template for displaying all single posts
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
                <div class="blog blog-detail">
                    <?php
                    while (have_posts()): the_post();

                    endwhile;
                    ?>

                    <?php
                    if(in_category(array('gsgk'))) {
                        get_template_part('template-parts/content', 'single-gsgk');
                    } else {
                        get_template_part('template-parts/content', 'single');
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
