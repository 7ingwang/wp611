<?php 
   // Template Name: Business Template
   	get_header();   
  	do_action( 'spiceb_CLOUDPRESS_sections', false );
   	get_template_part('template-parts/index', 'news');
    get_footer();
?>