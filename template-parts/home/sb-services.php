<?php 
$title = get_theme_mod('services_area_title');
$sub_title = get_theme_mod('services_area_sub_title');

$services = get_theme_mod('sb_proffice_services');

$enable = get_theme_mod('enable_service_section', true);



?>
<?php if($enable == '1'){ ?>
<div class="services-area">
   <div class="container">
       <div class="row">
       

        <!-- if there is title or subtitle, then show the div content -->
        <?php if($title OR $sub_title ): ?>
           <div class="col-12 section-ttile text-center">
            <!-- if there is title, then show the title with mark up, otherwise don't show title even with the title markup --> 
              <?php if($title): ?>
                 <h2><?php echo esc_html($title); ?></h2>
              <?php endif; ?>   
              
              <!-- if there is subtitle, then show the title with mark up, otherwise don't show title even with the subtitle markup --> 
              <?php if($sub_title): ?>
                <span><?php echo esc_html($sub_title); ?></span>
              <?php endif; ?>   
           </div>

           <!-- if there is no title or subtitle, then show the default markup -->
         <?php else: ?>
            <div class="col-12 section-ttile text-center">
                 <h2> our services</h2>
                 <span>
                     we provides
                 </span>
             </div>
         <?php endif; ?>  



        <?php 
        if($services):
        foreach ($services as $service) { ?>
           <div class="col-lg-4 col-md-6 col-12">
               <div class="single-services">
                   <i class="fa fa-<?php echo $service['service_icon']; ?>" aria-hidden="true"></i>
                   <h3><?php echo $service['service_title']; ?></h3>
                   <?php echo wpautop($service['service_desc']); ?>
               </div>
           </div>       

        <?php } else: ?>

          <div class="col-lg-4 col-md-6 col-12">
                   <div class="single-services">
                       <i class="fa fa-desktop" aria-hidden="true"></i>
                       <h3>web design</h3>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus vitae architecto officia voluptatem aspernatur qui.</p>
                   </div>
               </div><!-- end single services -->
               <div class="col-lg-4 col-md-6 col-12">
                   <div class="single-services">
                       <i class="fa fa-fire" aria-hidden="true"></i>
                       <h3>web design</h3>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus vitae architecto officia voluptatem aspernatur qui.</p>
                   </div>
               </div><!-- end single services -->
               <div class="col-lg-4 col-md-6 col-12">
                   <div class="single-services">
                       <i class="fa fa-leaf" aria-hidden="true"></i>
                       <h3>web design</h3>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus vitae architecto officia voluptatem aspernatur qui.</p>
                   </div>
               </div><!-- end single services -->
               <div class="col-lg-4 col-md-6 col-12">
                   <div class="single-services">
                       <i class="fa fa-cloud-download" aria-hidden="true"></i>
                       <h3>web design</h3>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus vitae architecto officia voluptatem aspernatur qui.</p>
                   </div>
               </div><!-- end single services -->
               <div class="col-lg-4 col-md-6 col-12">
                   <div class="single-services">
                       <i class="fa fa-angellist" aria-hidden="true"></i>
                       <h3>web design</h3>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus vitae architecto officia voluptatem aspernatur qui.</p>
                   </div>
               </div><!-- end single services -->
               <div class="col-lg-4 col-md-6 col-12">
                   <div class="single-services">
                       <i class="fa fa-assistive-listening-systems" aria-hidden="true"></i>
                       <h3>web design</h3>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus vitae architecto officia voluptatem aspernatur qui.</p>
                   </div>
               </div><!-- end single services -->

      <?php endif; ?>

         </div>
   </div>
</div>
<?php } ?>