<?php
   $menu_class='';
   wp_nav_menu(array(
      'theme_location' => 'CLOUDPRESS-primary',
      'menu_class'    => 'nav navbar-nav mr-auto '.$menu_class.'',
      'fallback_cb' => 'CLOUDPRESS_fallback_page_menu',
      'walker' => new CLOUDPRESS_nav_walker())
   );
?>
