<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CLOUDPRESS
 */
get_header();?>
<div class="breadcrumbs">
    <div class="container">
        <?php do_action('CLOUDPRESS_blog_meta_contents');?>
    </div>
</div>
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
