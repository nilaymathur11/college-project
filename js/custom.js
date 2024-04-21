

//recruiters-slider
$("#life-slider").owlCarousel({
    //autoPlay: 5000, //Set AutoPlay to 5 seconds
    autoplay: true,
    //smartSpeed: 2000, // Default is 250
    items: 3, //Set Testimonial items
    loop: true,
    margin: 20,
    singleItem: true,
    touchDrag: true,
    mouseDrag: true,
    pagination: true,
    nav: true,
    dots: true,
    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            autoplayTimeout: 2000,
        },
        480: {
            items: 1,
            autoplayTimeout: 2000,
        },
        568: {
            items: 1,
        },
        600: {
            items: 2,
        },
        667: {
            items: 3,
        },
        1000: {
            items: 3
        }
    }
});

//recruiters-slider
$("#eligi-slider, #facilities-slider").owlCarousel({
    //autoPlay: 5000, //Set AutoPlay to 5 seconds
    autoplay: true,
    //smartSpeed: 2000, // Default is 250
    items: 4, //Set Testimonial items
    loop: true,
    margin: 15,
    singleItem: true,
    touchDrag: true,
    mouseDrag: true,
    pagination: true,
    nav: true,
    dots: true,
    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            autoplayTimeout: 2000,
        },
        480: {
            items: 1,
            autoplayTimeout: 2000,
        },
        568: {
            items: 1,
            autoplayTimeout: 2000,
        },
        600: {
            items: 2,
        },
        667: {
            items: 2,
        },
        1000: {
            items: 4
        }
    }
});

//gallery Carousel
$("#gallery-memeber").owlCarousel({
    autoplay: false,

    //smartSpeed: 2000, // Default is 250

    items: 5, //Set Testimonial items

    loop: false,

    margin: 0,

    singleItem: true,

    touchDrag: true,

    mouseDrag: true,

    pagination: true,

    nav: false,

    dots: true,

    navText: ["<i class='fa fa-arrow-left'></i>", "<i class='fa fa-arrow-right'></i>"],

    responsiveClass: true,

    responsive: {

        0: {

            items: 1,
            center: true,
            stagePadding: 50,
            loop: true,

        },

        568: {

            items: 2,

            center: true,
            stagePadding: 50,
            loop: true,
        },

        600: {

            items: 2,
            center: true,
            stagePadding: 50,

        },

        667: {

            items: 3,

        },

        768: {

            items: 3,

        },

        1000: {

            items: 5,

        }

    }

});

//recruiters-slider
$("#recruiters-slider").owlCarousel({
    //autoPlay: 5000, //Set AutoPlay to 5 seconds
    autoplay: true,
    //smartSpeed: 2000, // Default is 250
    items: 5, //Set Testimonial items
    loop: true,
    margin: 15,
    singleItem: true,
    touchDrag: true,
    mouseDrag: true,
    pagination: false,
    nav: false,
    dots: true,
    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    responsiveClass: true,
    responsive: {
        0: {
            items: 2,
            autoplayTimeout: 2000,
        },
        480: {
            items: 2,
            autoplayTimeout: 2000,
        },
        568: {
            items: 3,
            autoplayTimeout: 2000,
        },
        600: {
            items: 3,
        },
        667: {
            items: 5,
        },
        1000: {
            items: 5
        }
    }

});

// Closes responsive menu when a scroll trigger link is clicked
$('.js-scroll-trigger').on('click', function () {
    $('.navbar-collapse').collapse('hide');
});

/* -------------------------------  
         WOW ANIMATED JS START
/* ----------------------------- */
// Elements Animation
if ($('.wow').length) {
    var wow = new WOW(
        {
            boxClass: 'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 0,          // distance to the element when triggering the animation (default is 0)
            mobile: true,       // trigger animations on mobile devices (default is true)
            live: true       // act on asynchronously loaded content (default is true)
        }
    );
    wow.init();
}



/* -------------------------------	
        INPUT PLACEHOLDER
/* ----------------------------- */

$('input,textarea').focus(function () {

    $(this).data('placeholder', $(this).attr('placeholder'))

        .attr('placeholder', '');

}).blur(function () {

    $(this).attr('placeholder', $(this).data('placeholder'));

});

/* ---------------------	
        back-top
/* --------------------- */

if ($('#back-top').length) {

    var scrollTrigger = 100, // px

        backToTop = function () {

            var scrollTop = $(window).scrollTop();

            if (scrollTop > scrollTrigger) {

                $('#back-top').addClass('show');

            } else {

                $('#back-top').removeClass('show');

            }

        };

    backToTop();

    $(window).on('scroll', function () {

        backToTop();

    });

    $('#back-top').on('click', function (e) {

        e.preventDefault();

        $('html,body').animate({

            scrollTop: 0

        }, 700);

    });

}

var stickyNavTop = $('#header').offset().top;
var stickyNav = function () {
    var scrollTop = $(window).scrollTop();
    if (scrollTop > stickyNavTop) {

        $('#header').addClass('sticky');

    } else {

        $('#header').removeClass('sticky');

    }

};

stickyNav();



$(window).scroll(function () {

    stickyNav();

});

$('a[href^="#applyBox"]').on('click', function (event) {
    var target = $(this.getAttribute('href'));
    if (target.length) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1000);
    }
});

$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 300) {
        $('#sideNavi').fadeIn();
    } else {
        $('#sideNavi').fadeOut();
    }

});

$(".openMenu").click(() => {
    $(".mobNavbar").fadeIn(200);
})

$(".closeMenu").click(() => {
    $(".mobNavbar").fadeOut(200);
})

$(".backTop").click(() => {
    window.scrollTo(0, 0)
})

$(window).scroll(() => {
    if (window.scrollY > 1) {
        $(".backTop").fadeIn(200);
    } else {
        $(".backTop").fadeOut(200);
    }
})

$(".sideBar").click(() => {
    $(".floatForm").fadeIn(200);
    $(".floatForm").css("display", "flex")
})

$(".msgIcon").click(() => {
    $(".askForm").fadeToggle(200);
    $(".askForm").css("display", "flex");
    $(".msgIcon img").attr("src", function (index, attr) {
        return attr === "images/close-icon.svg" ? "images/msg-icon.png" : "images/close-icon.svg";
    });
});

$(".closeFloatForm").click(() => {
    $(".floatForm").fadeOut(200);
})