<div id="carousel-2" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carousel-2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carousel-2" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carousel-2" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carousel-2" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carousel-2" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">

    <?php
      // 显示所有分类下设置了特色图片的5篇文章（包括子分类文章）
      query_posts('showposts=5'); ?>
    <?php $query_index = 0; while (have_posts()) : $query_index++; the_post(); ?>
      <?php
        // 判断是否是第一条
        if($query_index==1){ ?>
        <div class="carousel-item active">
        <?php } else { ?>
        <div class="carousel-item">
        <?php } ?>
          <a href="<?php the_permalink(); ?>" class="list-item-pic">
            <?php the_post_thumbnail('large', array('class' => 'cover')); ?>
            <h6 class="title"><?php $title = get_the_title();$trimmed_title = wp_trim_words( $title, 28, '...' ); echo $trimmed_title; ?></h6>
          </a>
        </div>
    <?php endwhile; wp_reset_query(); ?>

  </div>
</div>
