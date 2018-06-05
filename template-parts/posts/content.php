<article class="single-blog innerpage Fullpage">
	<h2>content-standard</h2>	
  <div class="blog-content">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php echo wpautop(the_content()); ?>
      <footer class="blog-footer">
          <ul>
              <li>Posted on <?php echo get_the_date('F d, Y'); ?></li>
              <li><?php the_category(''); ?></li>
              <li><?php comments_popup_link('<i class="fa fa-commenting" aria-hidden="true"></i> Be first', '<i class="fa fa-commenting" aria-hidden="true"></i> 1 comment', '<i class="fa fa-commenting" aria-hidden="true"></i> %d comments', '', '<i class="fa fa-commenting" aria-hidden="true"></i> Comment is disallowed.'); ?>
              </li>
              
          </ul>
      </footer>
  </div>
</article> 