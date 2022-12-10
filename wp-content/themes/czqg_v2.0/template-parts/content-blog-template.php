<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <div class="post-content">
      <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span class="date"><?php the_time('Y-m-d');?></span>
   </div>
</article>
