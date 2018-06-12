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
          <div class="col-12">

          	<?php 

          	while ( have_posts() ) : the_post(); 
			get_template_part( 'template-parts/posts/content', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;


            endwhile; ?>
          </div><!-- end blog psots -->
          
        </div>
    </div>
</div>





	

<?php
get_footer();
