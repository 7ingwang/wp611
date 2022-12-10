<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <?php if (has_post_thumbnail()) { ?>
   <figure class="post-thumbnail">
      <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
      </a>
   </figure>
   <?php
      }
      ?>
   <div class="post-content">
      <header class="entry-header">
         <h5 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
      </header>
      <div class="entry-content">
         <?php the_excerpt(); ?>
      </div>
   </div>
</article>
