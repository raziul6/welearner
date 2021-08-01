
(function ($) {
    "use strict";

    feather.replace();

    // Testimonial Slider
    var testimonialActive = $('.testimonial-wrapper');
    testimonialActive.owlCarousel({
        loop: true,
        margin: 0,
        smartSpeed: 800,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        dots:false,
        nav: false,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            }
        }
    });

    // Testimonial Slider
    var teamActive = $('.team-carousel');
    teamActive.owlCarousel({
        loop: true,
        smartSpeed: 800,
        autoplay: false,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        dots:false,
        nav: false,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            }
        }
    });


})(jQuery);