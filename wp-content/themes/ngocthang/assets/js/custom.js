/*
======================================
[ Facebook ]
======================================
*/

(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

/*
======================================
[ BACK TO TOP ]
======================================
*/
jQuery(document).ready(function($) {
    if ($('#back-to-top').length) {
        var scrollTrigger = 100,
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top').addClass('show');
            } else {
                $('#back-to-top').removeClass('show');
            }
        };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('#back-to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }
});

// jQuery(document).ready(function($) {
//   $('.counter').counterUp({
//     delay: 10,
//     time: 1000
//   });

// });
$('.carousel').carousel({
    interval: 7000
  })
jQuery(document).ready(function($) {
  $('.menu-open').click( function () {
    $('.menu-responsive').animate({left: '0px'}, 200);
    $('.menu-responsive').css('display','block');
});
  $('.menu-close').click( function () {
    $('.menu-responsive').animate({left: '-350px'}, 200);
});
});
jQuery(document).ready(function($){
  $('#accordion-responsive').dcAccordion({
    eventType: 'click',
    autoClose: true,
    saveState: true,
    disableLink: true,
    speed: 'slow',
    showCount: false,
    autoExpand: true,
    classExpand  : 'dcjq-current-parent'
});

});

jQuery(document).ready(function($) {
    $('.review__slider').slick({
        centerMode: true,
        infinite: true,
        centerPadding: '0px',
        slidesToShow: 3,
        speed: 500,
        variableWidth: false,

    });
    document.getElementsByClassName('slick-prev')[0].innerHTML= '<i class="fas fa-chevron-left"></i>';
    document.getElementsByClassName('slick-next')[0].innerHTML= '<i class="fas fa-chevron-right"></i>';
});

/*
======================================
[ FIXED TOP MENU ]
======================================
*/
jQuery(document).ready(function($) {
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 450) {
            $(".header").addClass("fixed");
            $(".header").removeClass("relative");
        } else {
            $(".header").addClass("relative");
            $(".header").removeClass("fixed");
        }
    });
});
/*
======================================
[ Load more ]
======================================
*/
jQuery(document).ready(function($) {


    var sync1 = $("#gallery-full");
    var sync2 = $("#gallery-thumbnail");
    var slidesPerPage = 5;
    var syncedSecondary = true;

    sync1.owlCarousel({
        items: 1,
        slideSpeed: 2000,
        nav: true,
        autoplay: true,
        dots: false,
        loop: true,
        responsiveRefreshRate: 200,
        navText: [
        "<i class='fa fa-angle-left' aria-hidden='true'></i>",
        "<i class='fa fa-angle-right' aria-hidden='true'></i>"
        ],

    }).on('changed.owl.carousel', syncPosition);

    sync2
    .on('initialized.owl.carousel', function() {
        sync2.find(".owl-item").eq(0).addClass("current");
    })
    .owlCarousel({
        items: slidesPerPage,
        dots: false,
        nav: true,
        margin: 10,
        smartSpeed: 200,
        slideSpeed: 500,
        slideBy: slidesPerPage,
        responsiveRefreshRate: 100,
        navText: [
        "<i class='fa fa-angle-left' aria-hidden='true'></i>",
        "<i class='fa fa-angle-right' aria-hidden='true'></i>"
        ],
    }).on('changed.owl.carousel', syncPosition2);

    function syncPosition(el) {
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - (el.item.count / 2) - .5);

        if (current < 0) {
            current = count;
        }
        if (current > count)  {
            current = 0;
        }
        sync2
        .find(".owl-item")
        .removeClass("current")
        .eq(current)
        .addClass("current");
        var onscreen = sync2.find('.owl-item.active').length - 1;
        var start = sync2.find('.owl-item.active').first().index();
        var end = sync2.find('.owl-item.active').last().index();

        if (current > end) {
            sync2.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
            sync2.data('owl.carousel').to(current - onscreen, 100, true);
        }
    }

    function syncPosition2(el) {
        if (syncedSecondary) {
            var number = el.item.index;
            sync1.data('owl.carousel').to(number, 100, true);
        }
    }

    sync2.on("click", ".owl-item", function(e) {
        e.preventDefault();
        var number = $(this).index();
        sync1.data('owl.carousel').to(number, 300, true);
    });
});

jQuery(document).ready(function($) {

  $('#accordion').dcAccordion({
    eventType: 'click',
    autoClose: true,
    saveState: false,
    disableLink: false,
    speed: 'slow',
    showCount: false,
    autoExpand: true,
});

  $('.banner-slide').owlCarousel({
    loop:true,
    margin:10,
    dots:true,
    autoplay:true,
    autoplayTimeout:5000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

  

  $('.owl-slide').owlCarousel({
    loop:true,
    autoplay:true,
    dots: false,
    autoplayTimeout:3000,
    animateOut: 'fadeOut',
    animateIn: 'pulse',
    nav:true,
    navText: [
    "<i class='fa fa-angle-left' aria-hidden='true'></i>",
    "<i class='fa fa-angle-right' aria-hidden='true'></i>"
    ],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
  
  $('.service-slide').owlCarousel({
    loop:true,
//     margin:10,
    dots:true,
    autoplay:true,
    autoplayTimeout:2000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:3
        }
    }
})


  jQuery(document).ready(function($) {
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
});
});

document.getElementById('toggle').onclick = function() {
    document.querySelector('.subcribe').classList.toggle('active-subc');
}


if (window.screen.width > 766) {
    document.getElementById('editor-text').onfocus = function() {
        document.querySelector('.form-foot').style.height = '134px'
    }
}
else if (window.screen.width > 576) {
    document.getElementById('editor-text').onfocus = function() {
        document.querySelector('.form-foot').style.height = '210px'
    }
}
else {
    document.getElementById('editor-text').onfocus = function() {
        document.querySelector('.form-foot').style.height = '245px'
    }
}

document.getElementById('check').onclick = function() {
    document.querySelector('.unbell').classList.toggle('active-check');
    document.querySelector('.bell').classList.toggle('active-check');
}