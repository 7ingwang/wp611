<div class="block block-tabs">
   <ul class="nav nav-tabs">
        <li class="nav-item">
            <a href="#djgz" class="nav-link active" data-bs-toggle="tab">党建工作</a>
         </li>
        <li class="nav-item">
            <a href="#jjjc" class="nav-link" data-bs-toggle="tab">纪检监察</a>
        </li>
        <li class="nav-item">
            <a href="#aqgz" class="nav-link" data-bs-toggle="tab">安全工作</a>
        </li>
        <li class="nav-item">
            <a href="category/tzgg/" class="more"><i class="icon-more"></i></a>
         </li>
   </ul>
   <div class="tab-content">
      <div class="tab-pane fade show active" id="djgz">
         <ul class="list-group">
         <?php query_posts('cat=7&showposts=6'); ?>
         <?php while (have_posts()) : the_post(); ?>
            <li class="list-group-item">
               <a href="<?php the_permalink(); ?>" class="d-flex justify-content-between"><span class="title"><?php $title = get_the_title();$trimmed_title = wp_trim_words( $title, 15, '...' ); echo $trimmed_title; ?></span><span class="date"><?php the_time('Y-m-d');?></span></a>
            </li>
         <?php endwhile; wp_reset_query(); ?>
         </ul>
      </div>
      <div class="tab-pane fade" id="jjjc">
         <ul class="list-group">
         <?php query_posts('cat=1&showposts=6'); ?>
         <?php while (have_posts()) : the_post(); ?>
            <li class="list-group-item">
               <a href="<?php the_permalink(); ?>" class="d-flex justify-content-between"><span class="title"><?php $title = get_the_title();$trimmed_title = wp_trim_words( $title, 15, '...' ); echo $trimmed_title; ?></span><span class="date"><?php the_time('Y-m-d');?></span></a>
            </li>
         <?php endwhile; wp_reset_query(); ?>
         </ul>
      </div>
      <div class="tab-pane fade" id="aqgz">
         <ul class="list-group">
         <?php query_posts('cat=3&showposts=6'); ?>
         <?php while (have_posts()) : the_post(); ?>
            <li class="list-group-item">
               <a href="<?php the_permalink(); ?>" class="d-flex justify-content-between"><span class="title"><?php $title = get_the_title();$trimmed_title = wp_trim_words( $title, 15, '...' ); echo $trimmed_title; ?></span><span class="date"><?php the_time('Y-m-d');?></span></a>
            </li>
         <?php endwhile; wp_reset_query(); ?>
         </ul>
      </div>
   </div>
</div>
