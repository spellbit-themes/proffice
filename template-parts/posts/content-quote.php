<?php $content = wp_trim_words(get_the_content(), 40, ''); ?>
<article class="single-blog innerpage Fullpage quote"> 
  <div class="blog-content">
      <?php if(is_single()){?>
      <h2><?php the_title(); ?></h2>
    <?php }else{ ?>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="badge badge-primary"><i class="fa fa-quote-right" aria-hidden="true"></i></span></h2>
    <?php } ?>
      <?php if(!is_single()){?>
        <?php echo wpautop($content); ?><a href="<?php the_permalink(); ?>" class="new-links">Read More <i class="fa fa-long-arrow-right"></i></a>
      <?php }else{ ?>
        <?php echo wpautop(the_content()); ?>
      <?php } ?>
      <footer class="blog-footer">
          <ul>
              <li>Posted on <?php echo get_the_date('F d, Y'); ?></li>
              <li><?php the_category(''); ?></li>
              <li> <?php comments_popup_link('0<i class="fa fa-commenting" aria-hidden="true"></i>','1<i class="fa fa-commenting" aria-hidden="true"></i>','% <i class="fa fa-commenting" aria-hidden="true"></i>','comment-class','<span class="dashicons dashicons-welcome-comments"></span>'); ?>
              </li>
              
          </ul>
      </footer>
  </div>
</article> 