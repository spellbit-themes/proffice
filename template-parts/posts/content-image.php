<?php $content = wp_trim_words(get_the_content(), 40, ''); ?>
<article class="single-blog innerpage Fullpage post-image">
  <figure class="blog-thumb">
      <?php the_post_thumbnail('blog-full-image'); ?>
  </figure>
  <div class="blog-content">
      <?php if(is_single()){?>
      <h2><?php the_title(); ?></h2>
    <?php }else{ ?>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php } ?>
      <?php if(!is_single()){?>
        <?php echo wpautop($content); ?><a href="<?php the_permalink(); ?>">Read More</a>
      <?php }else{ ?>
        <?php echo wpautop(the_content()); ?>
      <?php } ?>
      <footer class="blog-footer">
          <ul>
              <li>Posted on <?php echo get_the_date('F d, Y'); ?></li>
              <li><?php the_category(''); ?></li>
              <li> <?php comments_popup_link('No comment','1 comment','% comments','comment-class','Comments off'); ?>
              </li>
              
          </ul>
      </footer>
  </div>
</article> 