jQuery(document).ready(function() { 
	// jQuery('.top-slider-home-page').slick({
	// 	infinite: true,
	// 	arrows : false,
	// 	slidesToShow: 1,
	// 	slidesToScroll: 1,
	// 	swipe: true,
	// 	responsive: [
	// 	{
	// 		breakpoint: 1024,
	// 		settings: {
	// 			slidesToShow: 1,
	// 			slidesToScroll: 1,
	// 			infinite: true,
	// 			arrows : false,
	// 			dots: true
	// 		}
	// 	},
	// 	{
	// 		breakpoint: 600,
	// 		settings: {
	// 			slidesToShow: 1,
	// 			slidesToScroll: 1,
	// 			arrows : false,
	// 			dots: true
	// 		}
	// 	},
	// 	{
	// 		breakpoint: 480,
	// 		settings: {
	// 			slidesToShow: 1,
	// 			slidesToScroll: 1,
	// 			arrows : false,
	// 			dots: true
	// 		}
	// 	}
	// 	]
	// });
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
				arrows : false,
				dots: true
			}
		},
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows : false,
				dots: true
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows : false,
				dots: true
			}
		}
		]
	});
	jQuery('.uk-category-product').slick({
		infinite: true,
		slidesToShow: 5,
		slidesToScroll: 1,
		swipe: true,
		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 1,
				infinite: true,
				arrows : false,
				dots: true
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				arrows : false,
				dots: true
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				arrows : false,
				dots: true
			}
		}
		]
	});
});
( function( $ ) {
	
} )( jQuery );

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