jQuery(document).ready(function () {

    jQuery('.uk-reviews-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        swipe: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    arrows: false,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true
                }
            }
        ]
    });

    $(function () {
        $('#primary-menu a').each(function () {
            var location = window.location.href;
            var link = this.href;
            var result = location.match(link);
            if (result != null) {
                $(this).addClass('current');
            }
        });
    });
});

// Mobile menu
//
// $('li.menu-item-has-children').click(function () {
//     console.log(this);
//     var checkElement = $(this).children('ul');
//     checkElement.stop().animate({'height': 'toggle'}, 500).parent().toggleClass('active');
//     if (checkElement.is(checkElement)) {
//         return false;
//     }
// });

$(".menu-item-has-children > a").after("<button id='toggleMenu'><i class='fa fa-chevron-down'></i></button>");


$(function () {
    var el = $('.menu-item-has-children #toggleMenu');
    // $('#primary-menu-mobile li:has("ul")').append('<span></span>');
    el.click(function () {
        var checkElement = $(this).next();

        checkElement.stop().animate({'height': 'toggle'}, 500).parent().toggleClass('active');
        if (checkElement.is('ul')) {
            return false;
        }
    });
});


(function ($) {

})(jQuery);

function initMap() {
    var uluru = {lat: 50.009001, lng: 36.324105};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 17,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}