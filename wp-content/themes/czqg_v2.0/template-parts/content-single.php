<article class="post">
   <div class="post-content-detail">
      <header class="entry-header">
         <h3 class="entry-title"><?php the_title(); ?></h3>
      </header>
      <?php
        if((get_theme_mod('CLOUDPRESS_enable_single_post_date', true) === true) || (get_theme_mod('CLOUDPRESS_enable_single_post_category', true) === true) || (get_theme_mod('CLOUDPRESS_enable_single_post_tag', true) === true)):
        ?>
      <div class="entry-meta">
         <span class="entry-date">
         <time><?php echo esc_html(get_the_date()); ?></time>
         </span>
      </div>
      <?php endif;?>
   </div>

   <?php if (has_post_thumbnail()) { ?>
   <figure class="post-thumbnail">
      <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
   </figure>
   <?php } ?>
   <div class="post-content <?php if (!has_post_thumbnail()) { echo 'featured';} ?>">
      <div class="entry-content">
         <?php the_content(); ?>
         <?php  wp_link_pages(); ?>
      </div>
   </div>
</article>
