$(window).load(function () {
	"use strict";
	$('#status').fadeOut();
	$('#preloader').delay(350).fadeOut('slow');
	$('body').delay(350).css({
		'overflow': 'visible'
	});
});
$(function () {
	"use strict";

	/* ---------------------------------------------------------
	 * Background (Backstretch)
	 */

	$.backstretch([
		"img/background/1.jpg",
		"img/background/2.jpg",
		"img/background/3.jpg"
	], {duration: 3800, fade: 1500});

	/* ---------------------------------------------------------
	 * WOW
	 */

	new WOW({
		 mobile: false,
	}).init();


	/* ---------------------------------------------------------
	 * Team carousel
	 */

	$("#teamCarousel").owlCarousel({
		items: 4,
		itemsTablet: [768,3],
		itemsTabletSmall: [690,2],
		itemsMobile : [480,1]
	});

	/* ---------------------------------------------------------
	 * Scroll arrow
	 */

	$("#scroll").click(function () {
	 	if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
	 		var target = $(this.hash);
	 		target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	 		if (target.length) {
	 			$('html,body').animate({
	 				scrollTop: target.offset().top
	 			}, 1200);
	 			return false;
	 		}
	 	}
	 });

});
