<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package proffice
 */

get_header();
?>
<div class="blog-area innerpage no-padding">
    <div class="container">
        <div class="row">

          <?php if(is_active_sidebar('blog-sidebar')) : ?>
          <div class="col-lg-8">
            <?php else: ?>
          <div class="col-lg-12">
          <?php endif; ?>
            <?php 

                  	while ( have_posts() ) : the_post(); 
        			get_template_part( 'template-parts/posts/content', get_post_format() );

        			the_post_navigation(array(
                'prev_text'  => __( 'Previous Post: %title','proffice' ),
                'next_text'  => __( 'Next Post: %title','proffice' ),
              ));

        			// If comments are open or we have at least one comment, load up the comment template.
        			if ( comments_open() || get_comments_number() ) :
        				comments_template();
        			endif;


              endwhile; 

            ?>
          </div><!-- end blog psots --> 
        <?php if(is_active_sidebar('blog-sidebar')) : ?>
          <?php get_sidebar(); ?>
        <?php endif; ?>     
        </div>
    </div>
</div>
<?php
get_footer();
