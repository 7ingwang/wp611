<?php
   /**
    * The template for displaying 404 request
    * @package CZQG
    */
get_header();?>
<section class="section-module">
   <div class="container my-5 py-5">
      <div class="row v-center">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="error-404 text-center">
               <h1>404</h1>
               <h6><?php esc_html_e("很抱歉，您要找的页面不存在", "CLOUDPRESS"); ?></h6>
               <div class="ptop-20 text-center my-5">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('返回首页', 'CLOUDPRESS'); ?></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="clearfix"></div>
<?php get_footer(); ?>
