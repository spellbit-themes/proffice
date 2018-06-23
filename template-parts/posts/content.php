<?php $content = wp_trim_words(get_the_content(), 40, ''); ?>
<article <?php post_class(array('single-blog', 'innerpage', 'Fullpage')) ?>>
    <figure class="blog-thumb">
		<?php the_post_thumbnail('blog-full-image'); ?>
    </figure>
  <div class="blog-content">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php echo wpautop($content); ?><a href="<?php the_permalink(); ?>">Read More</a>
      <footer class="blog-footer">
          <ul>
              <li>Posted on <?php echo get_the_date('F d, Y'); ?></li>
              <li><?php the_category(''); ?></li>
              <li><i class="fa fa-commenting" aria-hidden="true"></i> <?php comments_popup_link('No comment','1 comment','% comments','comment-class','Comments off'); ?>
              </li>
              
          </ul>
      </footer>
  </div>
</article> 