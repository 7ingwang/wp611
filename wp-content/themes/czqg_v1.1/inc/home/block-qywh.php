<div class="block">
   <h5 class="title-bar large"><span class="block-title">企业文化</span><a class="more" href="category/qywh/"><i class="icon-more"></i></a></h5>
   <div class="row three-columns justify-content-between">
   <?php query_posts('cat=7&showposts=3'); ?>
   <?php while (have_posts()) : the_post(); ?>
      <div class="col col-md-4">
         <a href="<?php the_permalink(); ?>" class="list-item-pic">
            <img class="cover" src="<?php echo catch_that_image();?>" alt="">
            <h6 class="title"><?php $title = get_the_title();$trimmed_title = wp_trim_words( $title, 21, '...' ); echo $trimmed_title; ?></h6>
         </a>
      </div>
   <?php endwhile; wp_reset_query(); ?>
   </div>
</div>

