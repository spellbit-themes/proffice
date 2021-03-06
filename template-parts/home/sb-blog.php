<?php 

$proffice_title    = get_theme_mod('section_blog_title','Blog');
$proffice_sub_title = get_theme_mod('section_blog_subtitle','Latest News');
$proffice_count    = get_theme_mod('section_blog_post_count',3);
$proffice_order    = get_theme_mod('blog_order','asc');
$proffice_enable = get_theme_mod('blog_switch', true);
?>

<?php if($proffice_enable == 'yes'){ ?>
<div class="blog-area">
    <div class="container">
        <div class="row">

          <?php if($proffice_title OR $proffice_sub_title ): ?>
           <div class="col-12 section-ttile text-center">
              <?php if($proffice_title): ?>
                 <h2><?php echo esc_html($proffice_title); ?></h2>
              <?php endif; ?>   
              
              <?php if($proffice_sub_title): ?>
                <span><?php echo esc_html($proffice_sub_title); ?></span>
              <?php endif; ?>   
           </div>
              <!-- if there is no title or subtitle, then show the default markup -->
         <?php endif; ?>


    <?php
        $q = new WP_Query(array(
            'post_type'         => 'post',
            'posts_per_page'    => $proffice_count,
            'order'             => $proffice_order,
            'post__not_in'      => get_option( 'sticky_posts' )
                
        ));

       
  
        while( $q->have_posts() ):$q->the_post();

        $proffice_content = wp_trim_words(get_the_content(), 15, '');
       
    ?>
                      
               
               <div class="col-lg-4 col-md-6 col-12">
                  <article class="single-blog">
                      <figure class="blog-thumb">
                          <?php the_post_thumbnail('proffice-blog-thumb'); ?>
                      </figure>
                      <div class="blog-content">
                          <h2><a href="<?php the_permalink(); ?>"><?php esc_html(the_title()); ?></a></h2>
                          <?php echo wpautop(esc_html($proffice_content)); ?>
                          <footer class="blog-footer">
                              <ul>
                                  <li><a href="<?php the_permalink(); ?>"><?php echo esc_html(get_the_date('F d, Y')); ?></a></li>
                                  <li><i class="fa fa-folder-o" aria-hidden="true"></i><?php the_category(','); ?></li>
                                  <li><?php comments_popup_link('0<i class="fa fa-commenting" aria-hidden="true"></i>','1 comment<i class="fa fa-commenting" aria-hidden="true"></i>','% <i class="fa fa-commenting" aria-hidden="true"></i>','comment-class','<span class="dashicons dashicons-welcome-comments"></span>'); ?></li>
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