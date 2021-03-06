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

$proffice_enable_page_background = get_theme_mod('page_banner_switch', true);


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
                            <a href="<?php echo esc_url( home_url() ); ?>">
                                <?php

                                // at the beginning of the theme install, show the logo
                                if (!has_custom_logo()) { ?>
                                    <h2><?php bloginfo('name'); ?></h2>
                               <?php }else{
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

<?php if( is_page() && !is_front_page() ): ?>
    <?php if($proffice_enable_page_background == 'yes'){ ?>
        <div class="banner-arae">
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

<?php }elseif(is_home() && !is_front_page()) : ?>

    <?php if(has_header_image()) : ?>
        <div class="banner-arae banner-area-blog">
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
        <?php else: ?>
        <div class="only-title-blog">
            <div class="col-12 text-center">
                <h2>
                    <?php wp_title(''); ?>
                </h2>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>