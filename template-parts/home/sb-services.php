<?php 
$proffice_title = get_theme_mod('section_service_title','Our Services');
$proffice_sub_title = get_theme_mod('section_service_subtitle','What We Do');

$proffice_services = get_theme_mod('proffice_services');

$proffice_enable = get_theme_mod('service_switch', 'yes');



?>
<?php if($proffice_enable == 'yes'){ ?>
<div class="services-area">
   <div class="container">
       <div class="row">
       

        <!-- if there is title or subtitle, then show the div content -->
        <?php if($proffice_title OR $proffice_sub_title ): ?>
           <div class="col-12 section-ttile text-center">
            <!-- if there is title, then show the title with mark up, otherwise don't show title even with the title markup --> 
              <?php if($proffice_title): ?>
                 <h2><?php echo esc_html($proffice_title); ?></h2>
              <?php endif; ?>   
              
              <!-- if there is subtitle, then show the title with mark up, otherwise don't show title even with the subtitle markup --> 
              <?php if($proffice_sub_title): ?>
                <span><?php echo esc_html($proffice_sub_title); ?></span>
              <?php endif; ?>   
           </div>

         <?php endif; ?>



        <?php 
        if($proffice_services):
        foreach ($proffice_services as $service) { ?>
           <div class="col-lg-4 col-md-6 col-12">
               <div class="single-services">
                   <i class="fa fa-<?php echo esc_html($service['service_icon']); ?>" aria-hidden="true"></i>
                   <h3><?php echo esc_html($service['service_title']); ?></h3>
                   <?php echo wpautop(esc_html($service['service_desc'])); ?>
               </div>
           </div>       

        <?php } else: ?>

          <div class="col-lg-4 col-md-6 col-12">
                   <div class="single-services">
                       <i class="fa fa-desktop" aria-hidden="true"></i>
                       <h3><?php _e('web design','proffice'); ?></h3>
                       <p><?php _e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus vitae architecto officia voluptatem aspernatur qui.','proffice'); ?></p>
                   </div>
               </div><!-- end single services -->
               <div class="col-lg-4 col-md-6 col-12">
                   <div class="single-services">
                       <i class="fa fa-fire" aria-hidden="true"></i>
                       <h3><?php _e('web development','proffice'); ?></h3>
                       <p><?php _e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus vitae architecto officia voluptatem aspernatur qui.','proffice'); ?></p>
                   </div>
               </div><!-- end single services -->
               <div class="col-lg-4 col-md-6 col-12">
                   <div class="single-services">
                       <i class="fa fa-leaf" aria-hidden="true"></i>
                       <h3><?php _e('graphic design','proffice'); ?></h3>
                       <p><?php _e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus vitae architecto officia voluptatem aspernatur qui.','proffice'); ?></p>
                   </div>
               </div><!-- end single services -->
               <div class="col-lg-4 col-md-6 col-12">
                   <div class="single-services">
                       <i class="fa fa-cloud-download" aria-hidden="true"></i>
                       <h3><?php _e('digital marketing','proffice'); ?></h3>
                       <p><?php _e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus vitae architecto officia voluptatem aspernatur qui.','proffice'); ?></p>
                   </div>
               </div><!-- end single services -->
               <div class="col-lg-4 col-md-6 col-12">
                   <div class="single-services">
                       <i class="fa fa-angellist" aria-hidden="true"></i>
                       <h3><?php _e('software development','proffice'); ?></h3>
                       <p><?php _e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus vitae architecto officia voluptatem aspernatur qui.','proffice'); ?></p>
                   </div>
               </div><!-- end single services -->
               <div class="col-lg-4 col-md-6 col-12">
                   <div class="single-services">
                       <i class="fa fa-assistive-listening-systems" aria-hidden="true"></i>
                       <h3><?php _e('graphic design','proffice'); ?></h3>
                       <p><?php _e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus vitae architecto officia voluptatem aspernatur qui.','proffice'); ?></p>
                   </div>
               </div><!-- end single services -->

      <?php endif; ?>

         </div>
   </div>
</div>
<?php } ?>