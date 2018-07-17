<?php $proffice_content = wp_trim_words(get_the_content(), 40, ''); ?>
<article <?php post_class(array('single-blog', 'innerpage', 'Fullpage')) ?>>
    <figure class="blog-thumb">
		<?php the_post_thumbnail('proffice-blog-full-image'); ?>
    </figure>
  <div class="blog-content">
    <?php if(is_single()){?>
      <h2><?php esc_html(the_title()); ?></h2>
    <?php }else{ ?>
      <h2><a href="<?php the_permalink(); ?>"><?php esc_html(the_title()); ?></a></h2>
    <?php } ?>
      <?php if(!is_single()){?>
      <?php echo wpautop($proffice_content); ?><a href="<?php the_permalink(); ?>" class="new-links"><?php _e('Read More','proffice'); ?> <i class="fa fa-long-arrow-right"></i></a>
      <?php }else{ ?>
        <?php echo wpautop(the_content()); ?>
      <?php } ?>
      <footer class="blog-footer">
          <ul>
              <li><?php _e('Posted on','proffice'); ?> <?php echo esc_html(get_the_date('F d, Y')); ?></li>
              <li><?php the_category(''); ?></li>
              <li><?php comments_popup_link('0<i class="fa fa-commenting" aria-hidden="true"></i>','1<i class="fa fa-commenting" aria-hidden="true"></i>','% <i class="fa fa-commenting" aria-hidden="true"></i>','comment-class','<span class="dashicons dashicons-welcome-comments"></span>'); ?>
              </li>
          </ul>
      </footer>
  </div>
</article> 