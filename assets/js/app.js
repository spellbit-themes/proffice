! function(e) {
    "use strict";
    jQuery(document).on("ready", function() {
        e(".menu-click").on("click", function() {
            return e(".main-menu > ul").toggleClass("show"), !1
        }), e(window).width() < 767.98 && e(".main-menu ul li.menu-item-has-children").on("click", function() {
            return e(this).children("ul.sub-menu").slideToggle(), e(this).toggleClass("change-icon"), !1
        }), e(".slider-active").on("translate.owl.carousel", function() {
            e(".slide-content h2").removeClass("animated bounceIn").css("opacity", "0"), e(".slide-content p").removeClass("animated flipInX").css("opacity", "0"), e(".slide-content a.th-primary").removeClass("animated slideInLeft").css("opacity", "0"), e(".slide-content a.th-primary-outline").removeClass("animated slideInRight").css("opacity", "0")
        }), e(".slider-active").on("translated.owl.carousel", function() {
            e(".slide-content h2").addClass("animated bounceIn").css("opacity", "1"), e(".slide-content p").addClass("animated flipInX").css("opacity", "1"), e(".slide-content a.th-primary").addClass("animated slideInLeft").css("opacity", "1"), e(".slide-content a.th-primary-outline").addClass("animated slideInRight").css("opacity", "1")
        }), e(window).on("scroll", function() {
            e(window).scrollTop() < 300 ? e(".site-header").removeClass("sticky slideInDown animated") : e(".site-header").addClass("sticky slideInDown animated")
        }), e(".slider-active").owlCarousel({
            loop: !0,
            margin: 0,
            autoplay: !0,
            video: !0,
            animateOut: "fadeOut",
            animateIn: "fadeIn",
            autoplayTimeout: 6e3,
            nav: !0,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            mouseDrag: !1,
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
        }), e(".brand__active").owlCarousel({
            //loop: !0,
            margin: 10,
            nav: !0,
            mouseDrag: !0,
            dots: !1,
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
        }), e.scrollUp({
            scrollText: '<i class="fa fa-angle-double-up"></i>'
        }), e(".product-carosel-active").owlCarousel({
            //loop: !0,
            margin: 10,
            nav: !1,
            mouseDrag: !0,
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
        })
    })
}(jQuery);