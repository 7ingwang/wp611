<div class="site-brand">
   <div class="container">
      <?php get_template_part('inc/header/site-info');?>
      <?php echo get_search_form(); ?>
      <a href="http://qggs.xmglpt.com" target="_blank" class="go-platform"><i class="icon-platform"></i>项目管理平台</a>
   </div>
</div>

<nav class="main-nav navbar navbar-expand-lg">
   <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <i class="icon-menu">三</i>
      </button>
      <div class="collapse navbar-collapse offcanvas-collapse" id="navbarNavDropdown">
         <div class="ml-auto w-100">
            <?php get_template_part('inc/header/menu');?>
         </div>
      </div>
   </div>
</nav>
