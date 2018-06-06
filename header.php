<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package proffice
 */
$enable_page_background = get_theme_mod('enable_page_title_bg', true); 
$page_bg_images = get_theme_mod('pg_bg_image');

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <!--[if lt IE 9]>
<script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Header start-->
    <header class="site-header">
        <div class="main-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-12 col">
                        <div class="site-logo">
                            <a href="<?php home_url(); ?>">
	                            <?php


	                            // at the beginning of the theme install, show the logo
	                            if (!has_custom_logo()) {
		                            ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.png" alt="">
		                            <?php
	                            }else{
		                            // Display the Custom Logo
		                            the_custom_logo();
                                }
	                            ?>
                            </a>
                        </div>
                    </div>
                    <!-- end logo -->
                    <div class="col-md-9 col col-12">
                        <div class="mobile-menu">
                            <div class="menu-click">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <!-- mobile menu -->
                        <div class="main-menu">

                            <?php

                                wp_nav_menu(array(
                                    'theme_location' => 'menu-1',
                                    'container' => '',
                                    'menu_id' => 'nav',
                                    'fallback_cb' => 'sb_proffice_default_menu',
                                ));
                            ?>
                            
                        </div>

                    </div>
                    <!-- end main menu -->
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end main header -->
    </header>

<?php if( is_page() ): ?>
  <?php if($enable_page_background == '1'){ ?>  
    <div class="banner-arae" style="background-image: url(<?php echo esc_url($page_bg_images); ?>);">
        <div class="container">
            <div class="row bn_height justify-content-center align-items-center">
                <div class="col-12 text-center">
                    <h2>
					    <?php wp_title(''); ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>
<?php }else{ ?>   
    <div class="only-title">
        <div class="col-12 text-center">
            <h2>
			    <?php wp_title(''); ?>
            </h2>
        </div>
    </div>

<?php } ?> 

<?php endif; ?>
