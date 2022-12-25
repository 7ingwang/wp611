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
      // 调用5条置顶文章，如果无置顶文章则显示普通文章，无缩略图显示缺省图
      $sticky = get_option('sticky_posts');
      rsort( $sticky );
      $sticky = array_slice( $sticky, 0, 5);
      query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1 ) );
      $query_index = 0; while (have_posts()) : $query_index++; the_post(); ?>
      <?php
        // 判断是否是第一条
        if($query_index==1){ ?>
        <div class="carousel-item active">
        <?php } else { ?>
        <div class="carousel-item">
        <?php } ?>
          <a href="<?php the_permalink(); ?>" class="list-item-pic">
            <?php
            if ( has_post_thumbnail() ) {
              the_post_thumbnail('large', array('class' => 'cover'));
            }
            else {
              echo '<img src="' . get_bloginfo( 'stylesheet_directory' )
                . '/assets/images/default.jpg">';
            }
            ?>
            <h6 class="title"><?php $title = get_the_title();$trimmed_title = wp_trim_words( $title, 28, '...' ); echo $trimmed_title; ?></h6>
          </a>
        </div>
    <?php endwhile; wp_reset_query(); ?>

  </div>
</div>
