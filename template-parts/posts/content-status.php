<?php $content = wp_trim_words(get_the_content(), 40, ''); ?>
<article class="single-blog innerpage Fullpage post-status">
  <h2>content-status</h2>  
  <div class="blog-content">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php if(!is_single()){?>
        <?php echo wpautop($content); ?><a href="<?php the_permalink(); ?>">Read More</a>
      <?php }else{ ?>
        <?php echo wpautop(the_content()); ?>
      <?php } ?>
      <footer class="blog-footer">
          <ul>
              <li>Posted on <?php echo get_the_date('F d, Y'); ?></li>
              <li><?php the_category(''); ?></li>
              <li><?php comments_popup_link('No comment','1 comment','% comments','comment-class','Comments off'); ?>
              </li>
              
          </ul>
      </footer>
  </div>
</article> 