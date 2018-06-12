<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package proffice
 */

get_header();
?>

<div class="blog-area innerpage">
    <div class="container">
        <div class="row">

          <div class="col-lg-8">
          	<?php
              if ( have_posts() ) :
                while ( have_posts() ) : the_post(); 
          	           
                get_template_part( 'template-parts/content', 'page' );

              endwhile;

              the_posts_navigation();

              else :

                get_template_part( 'template-parts/content', 'none' );

              endif;

            ?>      
          </div><!-- end blog psots -->

      
      
            <?php get_sidebar(); ?>
          

        </div>
    </div>
</div>




<?php get_footer(); ?>
