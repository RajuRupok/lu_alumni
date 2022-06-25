(function ($) {
    "use strict";
    var wWidth = $(window).width();

    jQuery(document).ready(function ($) {


        //------------dropdown menu--------------
        $(".dropdown").on("click", function (e) {
            e.stopPropagation();
            $(this).toggleClass("dropdown_open");
            $(this).siblings(".dropdown").removeClass("dropdown_open");
        });
        $("body").on("click", function () {
            $(".dropdown").removeClass("dropdown_open");
        });


        /*----------beadcrumbs dropdown menu------------*/
        $("body").on("click", function() {
            $(".pre_header .dropdowns").removeClass("show");
        })

        $(".pre_header .dropdowns").on("click", function(e) {
            e.stopPropagation();
            $(this).toggleClass("show");
        })


    });


    //*-------faq tab active class remove------
    $(".general .nav li").on("click", function () {
        $(".installation .nav li>a").removeClass("active");
    });
    $(".installation .nav li").on("click", function () {
        $(".general .nav li>a").removeClass("active");
    });


    /*-------nice select-----*/
    $('select').niceSelect();





    //-------------testimonial-6,7,8 carousel-------------
    $(".comncarousel").owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        autoplay: true,
        smartSpeed: 1200,
        autoplayTimeout: 3000
    });


    //*----------carousel-1--------------
    $(".carousel1_wrapper").owlCarousel({
        items: 6,
        loop: true,
        dots: true,
        margin: 30,
        autoplay: true,
        smartSpeed: 1200,
        autoplayTimeout: 3000,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 2,
            },
            768: {
                items: 3,
            },
            992: {
                items: 4,
            },
            1200: {
                items: 5,
            }
        }
    });


    //*---------carousel-2----------
    $(".carousel2_wrapper").owlCarousel({
        items: 3,
        loop: true,
        dots: false,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        margin: 30,
        autoplay: true,
        smartSpeed: 1200,
        autoplayTimeout: 3000,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 2,
            },
            768: {
                items: 3,
            }
        }
    });


    //*---------carousel-3--------
    $(".carousel3_wrapper").owlCarousel({
        items: 3,
        loop: true,
        dots: true,
        margin: 30,
        autoplay: true,
        smartSpeed: 1200,
        autoplayTimeout: 3000,
        responsiveClass: true,
        responsive: {
            0: {
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


    //*----carousel-4--------
    $(".carousel4_wrapper").owlCarousel({
        items: 3,
        loop: true,
        dots: false,
        margin: 30,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        autoplay: false,
        smartSpeed: 1200,
        autoplayTimeout: 3000,
        responsiveClass: true,
        responsive: {
            0: {
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


    //*---------carousel-5---------
    $(".carousel5_wrapper").owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        autoplay: true,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        smartSpeed: 1200,
        autoplayTimeout: 3000
    });


    //*-------carousel-6--------
    $(".carousel6_wrapper").owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        autoplay: true,
        smartSpeed: 1200,
        autoplayTimeout: 3000
    });


    //*-------carousel-6--------
    $(".carousel7_wrapper").owlCarousel({
        items: 1,
        loop: true,
        dots: false,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        autoplay: false,
        smartSpeed: 1200,
        autoplayTimeout: 3000
    });


    //*----carousel-14--------
    $(".carousel8_wrapper").owlCarousel({
        items: 5,
        loop: true,
        dots: false,
        margin: 30,
        stagePadding: 10,
        autoplay: true,
        smartSpeed: 1200,
        autoplayTimeout: 3000,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 2,
            },
            768: {
                items: 3,
            },
            992: {
                items: 4,
            },
            1200: {
                items: 5,
            }
        }
    });


    /*------------progress bar-------------*/
    var smProgress = $('.sm-progress');
    if (smProgress.length > 0) {
        smProgress.waypoint(function () {
            jQuery('.skill-bar').each(function () {
                jQuery(this).find('.progress-content').animate({
                    width: jQuery(this).attr('data-percentage')
                }, 2000);
                jQuery(this).find('.progress-mark').animate({
                    left: jQuery(this).attr('data-percentage')
                }, {
                    duration: 2150,
                    step: function (now, salam) {
                        var data = Math.round(now);
                        jQuery(this).find('.percent').html(data + '%');
                    }
                })
            })
        }, {
            offset: '90%'
        })
    }

    //--------Scroll Top---------
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('.scroll_top').fadeIn();
            $('.scroll_top').removeClass('not_visible');
        } else {
            $('.scroll_top').fadeOut();
        }
    });
    $('.scroll_top').on('click', function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    });


}(jQuery));
