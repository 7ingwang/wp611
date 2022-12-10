<?php
   /**
    * The template for displaying all pages
    *
    * This is the template that displays all pages by default.
    * Please note that this is the WordPress construct of pages
    * and that other 'pages' on your WordPress site may use a
    * different template.
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    *
    * @package CLOUDPRESS
    */

   get_header();?>
<section class="site-content page-content-section">
   <div class="section-module">
      <div class="container my-5 py-5">
         <div class="row">
            <div class="col-lg-8 col-md-8 col-xs-8 mx-auto">
            <?php
               while ( have_posts() ) : the_post();
                     get_template_part( 'template-parts/content','page' );
                     if ( comments_open() || get_comments_number() ) :
                        comments_template();
                     endif;
                  endwhile;
               ?>
            </div>
         </div>
      </div>
   </div>
</section>
<?php get_footer();?>
