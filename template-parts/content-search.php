<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package proffice
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(array('single-blog', 'innerpage', 'Fullpage')); ?>>
	<div class="blog-content search">
		<?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<p class="entry-meta">
			<?php
			proffice_posted_on();
			proffice_posted_by();
			?>
		</p>
		<?php endif; ?>
	
	<figure class="blog-thumb ">
		
	<?php proffice_post_thumbnail(); ?>
	</figure>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="blog-footer">
		<?php proffice_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
