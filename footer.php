<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package proffice
 */

$social_profiles = get_theme_mod('footer_social_profiles');
$default_copyinfo = 'All right reserved by <a href="'.esc_html( wp_get_theme()->get( 'ThemeURI' ) ).'" target="_blank">Spellbit</a>';
$copy_info       = get_theme_mod('footer_copyright_text',$default_copyinfo);
?>
<!--footer section start-->
<?php if(is_active_sidebar('footer-widget')): ?>
<footer class="site-footer">
    <div class="container">
        <div class="row">
        <?php dynamic_sidebar( 'footer-widget' ); ?>              
        </div>
    </div>
</footer>
 <?php endif; ?> 
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-12"><?php if($copy_info){
                 echo wpautop($copy_info);
             }
            ?></div>
                <div class="col-md-6 col-12">
                    <ul class="f-social">
                        <?php
                        if( $social_profiles ):
                         foreach ($social_profiles as $value) { ?>
                           <li><a href="<?php echo $value['social_link']; ?>"><i class="fa fa-<?php echo $value['social_icon']; ?>" aria-hidden="true"></i></a></li>
                        <?php } else: ?>
                        
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li> 
                    <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php wp_footer(); ?>
</body>

</html>