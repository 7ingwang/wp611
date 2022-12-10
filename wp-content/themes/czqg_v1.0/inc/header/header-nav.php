<?php if ( get_header_image() != ''):?>
   <div class="container-fluid">
      <div class="row">
         <div class="wp-custom-header">
            <img class="img-fluid" src="<?php echo esc_url(header_image()); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>"/>
         </div>
      </div>
   </div>
<?php endif;?>
<div class="site-brand">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <?php get_template_part('inc/header/site-info');?>
         </div>
         <div class="col-lg-6">
            <?php echo get_search_form(); ?>
            <a href="http://qggs.xmglpt.com" target="_blank" class="go-platform"><i class="icon-platform"></i>项目管理平台</a>
         </div>
      </div>
   </div>
</div>
<nav class="main-nav navbar navbar-expand-lg">
   <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation','CLOUDPRESS');?>">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
         <div class="ml-auto">
            <?php get_template_part('inc/header/menu');?>
         </div>
      </div>
   </div>
</nav>
