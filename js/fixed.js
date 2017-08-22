jQuery( document ).ready(function() {
	jQuery(window).scroll(function () {
	    if( jQuery(window).scrollTop() > jQuery('.bottom-header').offset().top && !(jQuery('.bottom-header').hasClass('top-header'))){
	      jQuery('.bottom-header').addClass('top-header');
	    } else if (jQuery(window).scrollTop() == 0){
	      jQuery('.bottom-header').removeClass('top-header');
	    }
	});
});

