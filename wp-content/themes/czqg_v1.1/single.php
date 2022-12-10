<?php
/**
 * The template for displaying all single posts
 * @package CZQG
 */

get_header();?>

<?php get_template_part('inc/header/category-cover');?>

<?php get_template_part('inc/header/sub-nav');?>

<section class="site-content my-5">
    <div class="container block-bg py-5">
        <div class="row section-module">
            <div class="col-md-8 col-sm-8 col-xs-8 mx-auto">
                <div class="blog blog-detail">
                    <?php
                    while (have_posts()): the_post();
                        get_template_part('template-parts/content', 'single');
                    endwhile;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
