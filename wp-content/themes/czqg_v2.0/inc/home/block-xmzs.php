<div class="block block-xmzs">
   <h5 class="title-bar large"><span class="block-title">工程佳绩</span></h5>
   <div class="owl-carousel owl-theme">
      <?php query_posts('cat=7&showposts=8'); ?>
      <?php while (have_posts()) : the_post(); ?>
      <div class="item">
         <a href="<?php the_permalink(); ?>" class="list-item-pic">
            <img class="cover" src="<?php echo catch_that_image();?>" alt="">
            <h6 class="title"><?php $title = get_the_title();$trimmed_title = wp_trim_words( $title, 14, '...' ); echo $trimmed_title; ?></h6>
         </a>
      </div>
      <?php endwhile; wp_reset_query(); ?>
   </div>
</div>



