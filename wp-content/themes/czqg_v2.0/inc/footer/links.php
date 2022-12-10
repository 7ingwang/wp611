<div class="container">
<?php
      $menu_class='';
    wp_nav_menu(array(
                'theme_location' => 'CLOUDPRESS-links',
                'menu_class'    => 'navbar-nav d-flex '.$menu_class.'',
                'fallback_cb' => 'CLOUDPRESS_fallback_page_menu',
                'walker' => new CLOUDPRESS_nav_walker())
                );
?>
</div>
