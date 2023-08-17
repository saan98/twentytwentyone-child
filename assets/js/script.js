const nextIcon = '<img src="' + customData.imagePath + '">';
const prevIcon = '<img src="' + customData2.imagePath2 + '">';

$('#owl-carousel-1').owlCarousel({
    loop: false,
    margin: 10,
    dots: false,
    nav: true,
    autoplay: false,
    navText:[
        prevIcon,
        nextIcon
    ],
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:true
        },
        1000:{
            items:3.5,
            nav:true,
            loop:false
        }
    }
});

$('#owl-carousel-2').owlCarousel({
    loop: false,
    margin: 10,
    dots: false,
    nav: true,
    autoplay: false,
    navText:[
        prevIcon,
        nextIcon
    ],
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:true
        },
        1000:{
            items:4.3,
            nav:true,
            loop:false
        }
    }
});
$('#owl-carousel-3').owlCarousel({
    loop: false,
    margin: 10,
    dots: false,
    nav: true,
    autoplay: false,
    navText:[
        prevIcon,
        nextIcon
    ],
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:true
        },
        1000:{
            items:4.3,
            nav:true,
            loop:false
        }
    }
});

$('.owl-next').on('click', function() {
    $('.owl-carousel-1').trigger('stop.owl.autoplay');
  });