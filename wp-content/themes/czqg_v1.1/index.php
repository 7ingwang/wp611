<?php get_header();?>

   <?php get_template_part('inc/home/carousel');?>

   <div class="container my-5">
      <div class="row two-columns justify-content-between">
         <div class="col-md-6">
            <?php get_template_part('inc/home/carousel-2');?>
         </div>
         <div class="col-md-6 block-bg">
         <?php get_template_part('inc/home/block-xwzx');?>
         </div>
      </div>
   </div>
   <div class="container my-5">
     <div class="row two-columns-2-1 justify-content-between">
         <div class="col-md-8 col-sm-8 block-bg">
            <div class="row two-columns justify-content-between">
               <div class="col-md-6 col-sm-6">
                  <?php get_template_part('inc/home/carousel-3');?>
               </div>
               <div class="col-md-6 col-sm-6">
                  <?php get_template_part('inc/home/block-tab-news');?>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-4 block-bg">
            <?php get_template_part('inc/home/block-xxgk');?>
         </div>
      </div>
   </div>
   <div class="container my-5">
      <?php get_template_part('inc/home/block-xmzs');?>
   </div>
   <div class="container my-5">
      <?php get_template_part('inc/home/block-qywh');?>
   </div>

<?php get_footer();?>
