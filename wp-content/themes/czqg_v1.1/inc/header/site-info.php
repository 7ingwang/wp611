<?php the_custom_logo();?>
<?php  if ( display_header_text() ) :
   if((get_option('blogname')!='') || (get_option('blogdescription')!='')):?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-logo-link-url">
   <?php if(get_option('blogname')!=''):?>
   <h3 class="site-title"><?php bloginfo( 'name' ); ?></h3>
   <?php endif;
      $CLOUDPRESS_description = get_bloginfo( 'description', 'display' );
      if(get_option('blogdescription')!='')
      {
          if ( $CLOUDPRESS_description || is_customize_preview() ) : ?>
   <div class="site-description"><?php echo $CLOUDPRESS_description; ?></div>
   <?php endif; }?>
</a>
<?php endif; endif;?>
