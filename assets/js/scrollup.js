jQuery( document ).ready(function() {
	jQuery('#scrollup').mouseover( function(){
		jQuery( this ).animate({opacity: 0.65},100);
	}).mouseout( function(){
		jQuery( this ).animate({opacity: 1},100);
	}).click( function(){
		jQuery('html, body').animate({scrollTop: jQuery("#masterhead").offset().top}, 500);
		return false;
	});
	jQuery(window).scroll(function(){
		if ( jQuery(document).scrollTop() > 0 ) {
			jQuery('#scrollup').fadeIn();
		} else {
			jQuery('#scrollup').fadeOut();
		}
	});
});