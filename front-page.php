<?php get_header(); ?>





<?php 


$template_parts = get_theme_mod( 'homepage_layout_settings', array( 'sb-slider', 'sb-services', 'sb-blog', 'sb-brands') );


foreach ( $template_parts as $template_part ) {

	echo get_template_part('template-parts/home/'.$template_part);

}

 
?>



<?php get_footer(); ?>