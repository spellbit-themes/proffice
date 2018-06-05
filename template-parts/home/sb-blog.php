<?php 

$title    = get_theme_mod('blog_title');
$subtitle = get_theme_mod('blog_subtitle');
$count    = get_theme_mod('blog_post_number');
$order    = get_theme_mod('blog_post_order');

$enable = get_theme_mod('enable_blog_section', true);
?>

<?php if($enable == '1'){ ?>
<div class="blog-area">
    <div class="container">
        <div class="row">

          <?php if($title OR $sub_title ): ?>
           <div class="col-12 section-ttile text-center">
              <?php if($title): ?>
                 <h2><?php echo esc_html($title); ?></h2>
              <?php endif; ?>   
              
              <?php if($sub_title): ?>
                <span><?php echo esc_html($sub_title); ?></span>
              <?php endif; ?>   
           </div>
         <?php endif; ?> 


    <?php 
        $q = new WP_Query(array(
            'post_type'         => 'post',
            'posts_per_page'    => $count,
            'order'             => $order,
            'post__not_in'      => get_option( 'sticky_posts' )
                
        ));

       
  
        while( $q->have_posts() ):$q->the_post();

        $content = wp_trim_words(get_the_content(), 15, '');  
       
    ?>
                      
               
               <div class="col-lg-4 col-md-6 col-12">
                  <article class="single-blog">
                      <figure class="blog-thumb">
                          <?php the_post_thumbnail('blog-thumb'); ?>
                      </figure>
                      <div class="blog-content">
                          <h2><a href="<?php the_permalink(); ?>"><?php esc_html(the_title()); ?></a></h2>
                          <?php echo wpautop($content); ?>
                          <footer class="blog-footer">
                              <ul>
                                  <li><a href="<?php the_permalink(); ?>"><?php echo get_the_date('F d, Y'); ?></a></li>
                                  <li><?php the_category(' '); ?></li>
                                  <li><?php comments_popup_link('<i class="fa fa-commenting" aria-hidden="true"></i> ', '<i class="fa fa-commenting" aria-hidden="true"></i>  1', '<i class="fa fa-commenting" aria-hidden="true"></i>  %', '', ''); ?></li>
                                  <li><a href="#"> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                              </ul>
                          </footer>
                      </div>
                  </article> 
               </div><!-- end single blog -->
                                
            <?php endwhile; ?>

        </div>
    </div>
</div>

<?php } ?> 