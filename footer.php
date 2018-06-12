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
$copy_info       = get_theme_mod('footer_copyright_text');





?>

	<!-- 
    footer section start
 -->
<footer class="site-footer">
    <div class="container">
        <div class="row">
<?php if ( is_active_sidebar( 'footer-widget' ) ) : ?>
     <?php dynamic_sidebar('footer-widget'); ?>
<?php else: ?>
            <div class="col-lg-3 col-md-6 col-12 align-self-center">
                <div class="single-footer">
                    <h2 class="footer-titile">about us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla eligendi quae commodi, repellat assumenda!</p>
                </div>
            </div><!-- end single footer -->
            
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-footer">
                    <h2 class="footer-titile">recent posts</h2>
                <ul class="recnt-posts">
                    <li><a href="#">Category Hierarchy</a></li>
                    <li><a href="#">Category Hierarchy</a></li>
                    <li><a href="#">Category Hierarchy</a></li>
                    <li><a href="#">Category Hierarchy</a></li>
                    <li><a href="#">Category Hierarchy</a></li>
                </ul>
                </div>
            </div><!-- end single footer -->

            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-footer">
                    <h2 class="footer-titile">quick links</h2>
                    <ul class="recnt-posts">
                        <li><a href="#"> home</a></li>
                        <li><a href="#"> services</a></li>
                        <li><a href="#"> services</a></li>
                        <li><a href="#"> media</a></li>
                        <li><a href="#"> corporate</a></li>
                        <li><a href="#"> portfolio</a></li>
                    </ul>
                </div>
            </div><!-- end single footer -->

            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-footer">
                    <h2 class="footer-titile">tags</h2>
                    <div class="tags">
                        <a href="#"> media</a>
                        <a href="#"> media</a>
                        <a href="#"> media</a>
                        <a href="#"> media</a>
                        <a href="#"> media</a>
                        <a href="#"> media</a>
                    </div>
                </div>
            </div><!-- end single footer -->
<?php endif; ?>              
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-12"><?php if($copy_info){ echo wpautop($copy_info);}?></div>
                <div class="col-md-6 col-12">
                    <ul class="f-social">
                        <?php
                        if( $social_profiles ):
                         foreach ($social_profiles as $value) { ?>
                           <li><a href="<?php echo $value['social_profile_link']; ?>"><i class="fa fa-<?php echo $value['social_profile_icon']; ?>" aria-hidden="true"></i></a></li>
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

</footer>
<?php wp_footer(); ?>
</body>

</html>