/*
* ----------------------------------------------------------------------------------------
    Template Name: mr stater
    Template URI: https://spellbit.com/
    Description: 
    Author: mahedi amin
    Author URI: https://mahediamin.com
    Version: 1.0.0

* ----------------------------------------------------------------------------------------
*/

(function ($) {
    'use strict';

    jQuery(document).on("ready", function () {


        
        
        
        
        $(".menu-click").on("click", function(){

	$(".main-menu > ul").toggleClass('show');
	return false;
});



if ($(window).width() < 767.98) {
   // for mobile menu
      
        $(".main-menu ul li.menu-item-has-children").on("click", function(){
            
            $(this).children("ul.sub-menu").slideToggle();
            $(this).toggleClass('change-icon');
            return false;
            
        });
       
        
};

        /*
        *
        *  Owl carsole animation
        */
           
        $(".slider-active").on("translate.owl.carousel", function () {
            $(".slide-content h2").removeClass("animated bounceIn").css("opacity", "0");
            $(".slide-content p").removeClass("animated flipInX").css("opacity", "0");
            $(".slide-content a.th-primary").removeClass("animated slideInLeft").css("opacity", "0");
            $(".slide-content a.th-primary-outline").removeClass("animated slideInRight").css("opacity", "0");
        });

        $(".slider-active").on("translated.owl.carousel", function () {
            $(".slide-content h2").addClass("animated bounceIn").css("opacity", "1");
            $(".slide-content p").addClass("animated flipInX").css("opacity", "1");
            $(".slide-content a.th-primary").addClass("animated slideInLeft").css("opacity", "1");
            $(".slide-content a.th-primary-outline").addClass("animated slideInRight").css("opacity", "1");
        });
        
        
        
        
        
        //sticky menu 

        $(window).on('scroll', function () {
            var scroll = $(window).scrollTop();
            if (scroll < 300) {
                $(".site-header").removeClass("sticky slideInDown animated");
            } else {
                $(".site-header").addClass("sticky slideInDown animated");
            }
        });
        
        
        
        // owl carosel slider activation
        
        
        $('.slider-active').owlCarousel({
            loop: true,
            margin: 0,
            autoplay: true,
            video: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            autoplayTimeout: 6000,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            mouseDrag: false,
            responsive: {
                210: {
                    items: 1
                },
                320: {
                    items: 1
                },
                479: {
                    items: 1
                },
                768: {
                    items: 1
                },
                980: {
                    items: 1
                },
                1199: {
                    items: 1
                }
            }
        });
        
          // brand active
        $('.brand__active').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            mouseDrag: true,
            dots: false,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsive: {
                210: {
                    items: 1
                },
                320: {
                    items: 1
                },
                479: {
                    items: 2
                },
                768: {
                    items: 3
                },
                980: {
                    items: 5
                },
                1199: {
                    items: 5
                },
                1600: {
                    items: 5
                }
            }
        });
        
        
        
        
         $.scrollUp({
            scrollText: '<i class="fa fa-angle-double-up"></i>'

        });
        
        //product carosel active
        $('.product-carosel-active').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            mouseDrag: true,
            responsive: {
                210: {
                    items: 1
                },
                320: {
                    items: 1
                },
                479: {
                    items: 4
                },
                768: {
                    items: 4
                },
                980: {
                    items: 5
                },
                1199: {
                    items: 5
                }
            }
        });
        
        



    });

})(jQuery);