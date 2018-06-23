<?php
/**
 * The template for displaying archive pages
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

          <?php if(is_active_sidebar('page-sidebar')) : ?>
          <div class="col-lg-8">
            <?php else: ?>
          <div class="col-lg-12">
          <?php endif; ?>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
</div>
        <?php if(is_active_sidebar('page-sidebar')) : ?>
          <?php get_sidebar(); ?>
        <?php endif; ?>
        </div>
    </div>
</div>

<?php
get_sidebar();
get_footer();
