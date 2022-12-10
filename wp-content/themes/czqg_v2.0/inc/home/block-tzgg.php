<div class="block block-bg">
   <h6 class="title-bar"><span class="block-title">通知公告</span><a class="more" href="category/tzgg/"><i class="icon-more"></i></a></h6>

   <ul class="list-group">
   <?php query_posts('category_name=tzgg&showposts=6'); ?>
   <?php while (have_posts()) : the_post(); ?>
      <li class="list-group-item">
         <a href="<?php the_permalink(); ?>" class="d-flex justify-content-between"><span class="title"><?php $title = get_the_title();$trimmed_title = wp_trim_words( $title, 60, '...' ); echo $trimmed_title; ?></span><span class="date"><?php the_time('Y-m-d');?></span></a>
      </li>
   <?php endwhile; wp_reset_query(); ?>
   </ul>
</div>

