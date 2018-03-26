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
        $(window).scroll(function () {
            var top = $(document).scrollTop();

            if (top > 10) {
                if (!($(".header-top").hasClass("main-navigation"))) {
                    $(".header-top").addClass("main-navigation");
                }
            }
            else {
                $(".header-top").removeClass("main-navigation");

            }
        });
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