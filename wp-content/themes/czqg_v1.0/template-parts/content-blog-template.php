<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <?php if (has_post_thumbnail()) { ?>
   <figure class="post-thumbnail">
      <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
      </a>
   </figure>
   <?php
      }
      ?>
   <div class="post-content">
    <?php do_action('CLOUDPRESS_blog_meta_contents');?>
      <header class="entry-header">
         <h5 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
      </header>
      <div class="entry-content">
         <?php the_excerpt(); ?>
         <a href="<?php the_permalink();?>" class="more-link"><?php echo esc_html__('阅读详情'); ?><i class="icon-more"></i></a>
      </div>
   </div>
</article>
