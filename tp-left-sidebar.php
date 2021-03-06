<?php 

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package proffice
 * Template Name: Left Sidebar
 */
	get_header();
?>


<div class="blog-area innerpage">
    <div class="container">
        <div class="row">

     
        <?php if(is_active_sidebar('page-sidebar')) : ?>
          <?php get_sidebar(); ?>
        <?php endif; ?>
          

          <?php if(is_active_sidebar('page-sidebar')) : ?>
          <div class="col-lg-8">
            <?php else: ?>
          <div class="col-lg-12">
          <?php endif; ?>
          	<?php
              if ( have_posts() ) :
                while ( have_posts() ) : the_post(); 
          	           
                get_template_part( 'template-parts/content','page' );

              endwhile;

              the_posts_navigation();

              else :

                get_template_part( 'template-parts/content', 'none' );

              endif;

            ?>      
          </div><!-- end blog psots -->


        </div>
    </div>
</div>


<?php get_footer(); ?>
