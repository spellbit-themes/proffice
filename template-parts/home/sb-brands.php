<?php 
$brands = get_theme_mod('proffice_brands');
$enable_brand = get_theme_mod('brand_switch', 'yes');

if($enable_brand == 'yes'){ ?>
  <div class="product-carosel-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-carosel-active owl-carousel">
                <?php
                if($brands):
                    foreach ($brands as $brand) {
                    $url = wp_get_attachment_image_src($brand['brand_logo'], 'brand-thumb');
                ?>
                        <div class="single-product">
                            <img src="<?php echo esc_url($url['0']); ?>" class="responsive-img" alt="">
                        </div>
                <?php } else: ?>
                        <div class="single-product">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/p1.png" class="responsive-img" alt="">
                        </div>
                        <!-- end single product -->
                        <div class="single-product">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/p2.png" class="responsive-img" alt="">
                        </div>
                        <!-- end single product -->
                        <div class="single-product">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/p3.png" class="responsive-img" alt="">
                        </div>
                        <!-- end single product -->
                        <div class="single-product">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/p4.png" class="responsive-img" alt="">
                        </div>
                        <!-- end single product -->
                        <div class="single-product">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/p5.png" class="responsive-img" alt="">
                        </div>
                        <!-- end single product -->
                        <div class="single-product">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/p6.png" class="responsive-img" alt="">
                        </div>
                        <!-- end single product -->
                        <div class="single-product">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/p1.png" class="responsive-img" alt="">
                        </div>
                        <!-- end single product -->
                        <div class="single-product">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/p2.png" class="responsive-img" alt="">
                        </div>
                        <!-- end single product -->
                        <div class="single-product">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/p3.png" class="responsive-img" alt="">
                        </div>
                        <!-- end single product -->
                        <div class="single-product">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/p4.png" class="responsive-img" alt="">
                        </div>
                        <!-- end single product -->

                 <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>    