<article class="post">
   <div class="post-content-detail">
      <header class="entry-header">
         <h3 class="entry-title"><?php the_title(); ?></h3>
      </header>
      <?php
        if((get_theme_mod('CLOUDPRESS_enable_single_post_date', true) === true) || (get_theme_mod('CLOUDPRESS_enable_single_post_category', true) === true) || (get_theme_mod('CLOUDPRESS_enable_single_post_tag', true) === true)):
        ?>
      <div class="entry-meta">
         <?php
            $CLOUDPRESS_blog_meta_sort = get_theme_mod('CLOUDPRESS_blog_meta_sort', array('blog_date', 'blog_category', 'blog_tag', 'blog_author', 'blog_commment',));
            if (!empty($CLOUDPRESS_blog_meta_sort) && is_array($CLOUDPRESS_blog_meta_sort)) :
                foreach ($CLOUDPRESS_blog_meta_sort as $CLOUDPRESS_blog_meta_sort_key => $CLOUDPRESS_blog_meta_sort_val) :
                    if (get_theme_mod('CLOUDPRESS_enable_single_post_date', true) === true):
                        if ('blog_date' === $CLOUDPRESS_blog_meta_sort_val) :
                            ?>
         <span class="entry-date">
         <time><?php echo esc_html(get_the_date()); ?></time>
         </span>
         <?php
            endif;
            endif;

            if (get_theme_mod('CLOUDPRESS_enable_single_post_category', true) === true):
            if ('blog_category' === $CLOUDPRESS_blog_meta_sort_val) :
                $CLOUDPRESS_cat_list = get_the_category_list();
                if (!empty($CLOUDPRESS_cat_list)) {
                    ?>
         <span class="cat-links"><?php the_category(" "); ?></span>
         <?php
            }
            endif;
            endif;

            if (get_theme_mod('CLOUDPRESS_enable_single_post_tag', true) === true):
            if ('blog_tag' === $CLOUDPRESS_blog_meta_sort_val) :
            $CLOUDPRESS_tag_list = get_the_tag_list();
            if (!empty($CLOUDPRESS_tag_list)) {
                ?><span class="tag-links"><?php the_tags('', '', ''); ?></span><?php
            }
            endif;
            endif;
            endforeach;
            endif;
            ?>
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
