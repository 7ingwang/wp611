<?php
   $CLOUDPRESS_home_news_title=get_theme_mod('home_news_section_title',__('Latest News','CLOUDPRESS'));
   $CLOUDPRESS_home_news_subtitle=get_theme_mod('home_news_section_discription',__('From Our Blog','CLOUDPRESS'));
   $CLOUDPRESS_home_blog_enable=get_theme_mod('latest_news_section_enable','on');
   if($CLOUDPRESS_home_blog_enable=="on"):
   ?>
<section class="section-module blog" id="blog">
   <div class="container-fluid">
      <?php if(!empty($CLOUDPRESS_home_news_title) || !empty($CLOUDPRESS_home_news_subtitle)):?>
      <div class="row">
         <div class="col-md-12">
            <div class="section-header">
               <?php if(!empty($CLOUDPRESS_home_news_title)):?>
               <h5 class="section-subtitle"><?php echo esc_html($CLOUDPRESS_home_news_title);?></h5>
               <?php endif; if(!empty($CLOUDPRESS_home_news_subtitle)):?>
               <h2 class="section-title"><?php echo esc_html($CLOUDPRESS_home_news_subtitle);?></h2>
               <?php endif;?>    
            </div>
         </div>
      </div>
      <?php endif;?>
      <div class="row">
            <?php
               $CLOUDPRESS_args = array( 'post_type' => 'post','post__not_in'=>get_option("sticky_posts"),'posts_per_page' => 3) ;    
               query_posts( $CLOUDPRESS_args );
               if(query_posts( $CLOUDPRESS_args ))
               {
               while(have_posts()):the_post();
               { ?>
            <div class="col-md-4">
               <article class="post">
                  <?php if(has_post_thumbnail()){ ?>                    
                  <figure class="post-thumbnail">
                     <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                  </figure>
                  <?php } ?>
                  <div class="post-content">
                     <?php if(get_theme_mod('blog_meta_section_enable',true)==true):?>
                     <div class="entry-meta">
                        <span class="entry-date"><a href="<?php echo esc_url( home_url('/') ); ?>/<?php echo esc_html(date( 'Y/m' , strtotime( get_the_date() )) ); ?>"><time><?php echo esc_html(get_the_date());?></time></a></span>
                        <?php $CLOUDPRESS_cat_list = get_the_category_list();
                           if(!empty($CLOUDPRESS_cat_list)) { ?>
                        <span class="cat-links"><?php the_category(' '); ?></span>
                        <?php }
                           if(has_tag()):?>
                        <span class="tag-links"><?php the_tags('',' ');?></span>
                        <?php endif;?>
                     </div>
                     <?php endif;?>
                     <header class="entry-header">
                        <h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
                     </header>
                     <div class="entry-content">
                        <?php the_excerpt();?>
                        <p><a href="<?php the_permalink(); ?>" class="more-link btn-ex-small btn-animate border"><?php echo esc_html__('READ MORE','CLOUDPRESS');?></a></p>
                     </div>
                  </div>
               </article>
            </div>
            <?php  } endwhile; }?>        
      </div>
   </div>
</section>
<?php endif;?>