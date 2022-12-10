<?php
   /**
    * The template for displaying all pages
    * @package CZQG
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
