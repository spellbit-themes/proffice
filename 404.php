<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package proffice
 */

get_header();
?>

<div class="blog-area innerpage text-center">
    <div class="container">
        <div class="row">
			<div class="col-lg-12">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'proffice' ); ?></h1>
				</header><!-- .page-header -->


					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'proffice' ); ?></p>
			</div>
        </div>
    </div>
</div>


<?php
get_footer();
