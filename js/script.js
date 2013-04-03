// Implemented media-query-specific js functionality via http://adactio.com/journal/5429/
var viewport_size = ''; //viewport size

$(document).ready(function() {
	if (window.getComputedStyle) { //for IE
		viewport_size = window.getComputedStyle(document.body,':after').getPropertyValue('content');
	} else {
		viewport_size = 'desktop'; //for IE
	}
		// .logo").click(function(){
		// $("header").toggleClass('sticky');
		// 
		// 

		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top}, 250);
		});


	
	
	
	if (viewport_size.indexOf("desktop") !== -1) { // aka if viewport_size == 'desktop':
		// Desktop behavior
	} else {
		// Mobile behavior
	}
});