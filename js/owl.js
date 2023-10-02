const prev ='<img src="./resources/previousicon.png" alt:"right">';
const next ='<img src="./resources/nexticon.png" alt:"left">';

var owl = $('.owl-carousel');
owl.owlCarousel({
    loop: true,
    autoplay: false,
    autoplaySpeed: 5000,
    autoplayTimeout:10000,
    autoplayHoverPause: false,
    nav: true,
    navText: {
       0: prev,
       1: next
    },
    smartSpeed: 1000,
    margin: 10,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 4
        },
        960: {
            items: 5
        },
        1200: {
            items: 6
        }
    }
});