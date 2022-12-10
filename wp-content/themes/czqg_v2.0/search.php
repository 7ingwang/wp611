<?php
   /**
    * The template for displaying Search Results pages
    * @package CZQG
    */
   get_header();?>
<section class="site-content my-5">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="blog">
            <?php
               if (have_posts()): while (have_posts()): the_post();
                       get_template_part('template-parts/search', 'content');

                   endwhile;
                   // pagination function
                    do_action('CLOUDPRESS_post_navigation');
               else:
                   get_template_part('template-parts/content', 'none');
               endif;
               ?>
            </div>
         </div>
      </div>
   </div>
</section>
<?php get_footer(); ?>
