<?php get_header();?>

   <?php get_template_part('inc/home/carousel');?>

   <div class="container my-5">
      <div class="row justify-content-between">
         <div class="col-md-6">
            <?php get_template_part('inc/home/carousel-2.1');?>
         </div>
         <div class="col-md-6 block-bg">
         <?php get_template_part('inc/home/block-xwzx');?>
         </div>
      </div>
   </div>
   <div class="container my-5">
     <div class="row justify-content-between">
         <div class="col-md-6">
            <?php get_template_part('inc/home/block-xmjz');?>
         </div>
         <div class="col-md-6">
            <?php get_template_part('inc/home/block-zbgg');?>
         </div>
      </div>
   </div>

<?php get_footer();?>
