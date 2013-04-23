
$(document).ready(function() {

	$('.logo').click(function(){
        $('header').toggleClass('front');

	});

	$('header').click(function(){
		if ($(this).hasClass('front')) {
			$(this).removeClass('front');
		};		
	});
	
	$('.scroll').click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 250);
	});
});