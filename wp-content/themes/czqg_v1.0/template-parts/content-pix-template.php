<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <?php if (has_post_thumbnail()) { ?>
      <a class="post-thumbnail" href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
      <h6 class="title"><?php the_title(); ?></h6>
      </a>
   <?php
      }
      ?>
</article>
