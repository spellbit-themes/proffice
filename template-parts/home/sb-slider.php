<?php 
$proffice_slides = get_theme_mod('proffice_slides');
$proffice_enable_slide = get_theme_mod('slider_switch', 'yes');
?>


<?php if($proffice_enable_slide == 'yes'){ ?>
<div class="site--slider__area">
    <div class="slider-active owl-carousel">
            <?php
            if( $proffice_slides ):
                foreach ($proffice_slides as $slide) {
                    $title  = $slide['slide_title'];
                    $desc   = $slide['slide_desc'];
                    $left_btn_text = $slide['left_btn_text'];
                    $left_btn_url = $slide['left_btn_url'];
                    $right_btn_text = $slide['right_btn_text'];
                    $right_btn_url = $slide['right_btn_url'];
                $url = wp_get_attachment_image_src($slide['slide_bg'], 'slide_full_image');
            ?>

        <div class="single-slider" style="background-image: url(<?php echo $url['0']; ?>)">
            <div class="slide-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h2><?php echo esc_url($title); ?></h2>
                            <?php echo wpautop(esc_html($desc)); ?>
                           <?php if($left_btn_text): ?>
                            <a href="<?php echo esc_url($left_btn_url); ?>" class="btn-mr th-primary pill"> <?php echo esc_html($left_btn_text); ?></a>
                            <?php endif; ?>
	                <?php if($right_btn_text): ?>
                            <a href="<?php echo esc_url($right_btn_url); ?>" class="btn-mr th-primary-outline pill"> <?php echo esc_html($right_btn_text); ?></a>
	                <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } else: ?>
                        <div class="single-slider" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/slider/slide-1.jpg)">
                <div class="slide-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h2><?php _e('WE BUILD UP YOUR BUSINESS','proffice'); ?></h2>
                                <p><?php _e('Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris','proffice'); ?></p>
                                <a href="#" class="btn-mr th-primary pill"> <?php _e('learn more','proffice'); ?></a>
                                <a href="#" class="btn-mr th-primary-outline pill"> <?php _e('our services','proffice'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end single slider -->
            <div class="single-slider" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/slider/slide-2.jpg)">
                <div class="slide-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h2><?php _e('WE BUILD UP YOUR BUSINESS','proffice'); ?></h2>
                                <p><?php _e('Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris','proffice'); ?></p>
                                <a href="#" class="btn-mr th-primary pill"> <?php _e('learn more','proffice'); ?></a>
                                <a href="#" class="btn-mr th-primary-outline pill"> <?php _e('our services','proffice'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end single slider -->
            <div class="single-slider" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/slider/slide-3.jpg)">
                <div class="slide-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h2><?php _e('WE BUILD UP YOUR BUSINESS','proffice'); ?></h2>
                                <p><?php _e('Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris','proffice'); ?></p>
                                <a href="#" class="btn-mr th-primary pill"> <?php _e('learn more','proffice'); ?></a>
                                <a href="#" class="btn-mr th-primary-outline pill"> <?php _e('our services','proffice'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end single slider -->
    <?php endif; ?>
    </div>
</div>
<?php } ?>