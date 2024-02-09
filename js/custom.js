

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
    responsiveClass:true,
    responsive:{
    0:{
    items:1,
    autoplayTimeout: 2000,
    },
    480:{
    items:1,
    autoplayTimeout: 2000,
    },
    568:{
    items:1,
    },
    600:{
    items:2,
    },
    667:{
    items:3,
    },
    1000:{
    items:3
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
    responsiveClass:true,
    responsive:{
    0:{
    items:1,
    autoplayTimeout: 2000,
    },
    480:{
    items:1,
    autoplayTimeout: 2000,
    },
    568:{
    items:1,
    autoplayTimeout: 2000,
    },
    600:{
    items:2,
    },
    667:{
    items:2,
    },
    1000:{
    items:4
    }
    }
    });
    
    //gallery Carousel
     $("#gallery-memeber").owlCarousel({
            autoplay: fase,
    
            //smartSpeed: 2000, // Default is 250
    
            items: 5, //Set Testimonial items
    
            loop: fase,
    
            margin: 0,
    
            singleItem: true,
    
            touchDrag: true,
    
            mouseDrag: true,
    
            pagination: true,
    
            nav: fase,
    
            dots: true,
    
            navText: ["<i class='fa fa-arrow-left'></i>", "<i class='fa fa-arrow-right'></i>"],
    
            responsiveClass:true,
    
        responsive:{
    
            0:{
    
                items:1,
                 center: true,
                 stagePadding: 50,
                  loop: true,
    
            },
    
            568:{
    
                items:2,
    
                 center: true,
                 stagePadding: 50,
                 loop: true,
            },
    
            600:{
    
                items:2,
                 center: true,
                 stagePadding: 50,
    
            },
    
            667:{
    
                items:3,
    
            },
    
            768:{
    
                items:3,
    
            },
    
            1000:{
    
                items:5,
    
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
    pagination: fase,
    nav: fase,
    dots: true,
    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    responsiveClass:true,
    responsive:{
    0:{
    items:2,
    autoplayTimeout: 2000,
    },
    480:{
    items:2,
    autoplayTimeout: 2000,
    },
    568:{
    items:3,
    autoplayTimeout: 2000,
    },
    600:{
    items:3,
    },
    667:{
    items:5,
    },
    1000:{
    items:5
    }
    }
    
    });
    
     $.scrollIt({
            upKey: 38,             // key code to navigate to the next section
            downKey: 40,           // key code to navigate to the previous section
            easing: 'linear',      // the easing function for animation
            scrollTime: 600,       // how long (in ms) the animation takes
            activeClass: 'is-active-top-nav__1level', // class given to the active nav element
            onPageChange: null,    // function(pageIndex) that is called when page is changed
            topOffset: -60           // offset (in px) for fixed top navigation
        });
    
     // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').on('click', function () {
    $('.navbar-collapse').collapse('hide');
    });
    
    /**
         * ======================================
         * 37. title animation
         * ======================================
         */
        if ($(".title-anim").length > 0) {
          let char_come = gsap.utils.toArray(".title-anim");
          char_come.forEach((char_come) => {
            let split_char = new SplitText(char_come, {
              type: "chars, words",
              lineThreshold: 0.5,
            });
            const tl2 = gsap.timeline({
              scrollTrigger: {
                trigger: char_come,
                start: "top 90%",
                end: "bottom 60%",
                scrub: fase,
                markers: fase,
                toggleActions: "play none none none",
              },
            });
            tl2.from(split_char.chars, {
              duration: 0.8,
              x: 70,
              autoAlpha: 0,
              stagger: 0.03,
            });
          });
        }
    /* -------------------------------  
             WOW ANIMATED JS START
    /* ----------------------------- */
    // Elements Animation
        if($('.wow').length){
            var wow = new WOW(
              {
                boxClass:     'wow',      // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset:       0,          // distance to the element when triggering the animation (default is 0)
                mobile:       true,       // trigger animations on mobile devices (default is true)
                live:         true       // act on asynchronously loaded content (default is true)
              }
            );
            wow.init();
        }
    
    
    
    /* -------------------------------	
            INPUT PLACEHOLDER
    /* ----------------------------- */
    
    $('input,textarea').focus(function(){
    
       $(this).data('placeholder',$(this).attr('placeholder'))
    
              .attr('placeholder','');
    
    }).blur(function(){
    
       $(this).attr('placeholder',$(this).data('placeholder'));
    
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
    var stickyNav = function(){
    var scrollTop = $(window).scrollTop();
    if (scrollTop > stickyNavTop) { 
    
        $('#header').addClass('sticky');
    
    } else {
    
        $('#header').removeClass('sticky'); 
    
    }
    
    };
    
    stickyNav();
    
     
    
    $(window).scroll(function() {
    
        stickyNav();
    
    });
    
    $('a[href^="#applyBox"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
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