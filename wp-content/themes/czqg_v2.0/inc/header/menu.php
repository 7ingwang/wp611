<?php
   $menu_class='d-flex justify-content-md-between';
   wp_nav_menu(array(
      'theme_location' => 'CLOUDPRESS-primary',
      'menu_class'    => 'nav navbar-nav '.$menu_class.'',
      'fallback_cb' => 'CLOUDPRESS_fallback_page_menu',
      'walker' => new CLOUDPRESS_nav_walker())
   );
?>
