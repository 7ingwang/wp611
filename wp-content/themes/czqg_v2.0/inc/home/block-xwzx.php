<div class="block block-xwzx">
   <h5 class="title-bar large"><span class="block-title">新闻中心</span><a class="more" href="category/xwzx/"><i class="icon-more"></i></a></h5>

   <ul class="list-group">
   <?php
     query_posts('category_name=xwzx&showposts=3'); ?>
   <?php while (have_posts()) : the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="list-group-item">
         <p class="date"><b><?php the_time('Y-m-d');?></b></p>
         <h6 class="title"><?php $title = get_the_title();$trimmed_title = wp_trim_words( $title, 32, '...' ); echo $trimmed_title; ?></h6>
         <p class="summary">
            <?php if (has_excerpt()) {
                   echo $description = get_the_excerpt(); //文章编辑中的摘要
               }else {
                   echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 160,"……"); //文章编辑中若无摘要，自定截取文章内容字数做为摘要
            } ?>
         </p>
      </a>
   <?php endwhile; wp_reset_query(); ?>
   </ul>
</div>


