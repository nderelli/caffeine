var stickyTitles = {
	'config' : {
		'container' : $('.content')
	},

    'init' : function(config) {
    	stickyTitles.$container = stickyTitles.config.container;
    	//console.log(stickyTitles.$container);

    	stickyTitles.initialized = true;
    },

    'buildSectionNav' : function() {},
    'buildItemNav' : function() {},
    'showSection' : function() {},
    'showContentItem' : function() {}
}


$(document).ready(function() {
	stickyTitles.init();
		
	$('.scroll').click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
	});

	$(function() {
		$('.project-list a').removeClass('active');
		$('.content').waypoint(function(direction) {
			if(direction === 'up') {
				$('.project-list a').removeClass('active');
				$('#description').addClass('hide');
			}
			if (direction === 'down') {
				$('#description').removeClass('hide');
			}
		}, { offset: 100 });

		$('.project').waypoint(function(direction) {
		  	var id = $(this).attr('id');
		  	var title = $(this).find('h1').html();
		  	var description = $(this).find('p').html();

		  	$('.project-list a').removeClass('active');

		  	if (direction === 'down') {
		  	  $(window).scrollTop($(window).scrollTop() + 1);
		  	  $('.project-list a[href="#'+id+'"]').addClass('active');
		  	  if ($('header').hasClass('front')) {
		  	  	$('#description').addClass('vh');
		  	  } 
		  	  $('#description').html('<span>'+title+' +</span>');
		  	  $('#description').append('<p class="hide"><span>'+description+'</span></p>');
		  	}
		  	
		  	if (direction === 'up') {
		  		var prevProject = $(this).prev('.project');
		  		var prevTitle = prevProject.find('h1').html();
		  		var prevDesc = prevProject.find('p').html();
		  		var prevId = prevProject.attr('id');
		  		$('.project-list a[href="#'+prevId+'"]').addClass('active');
		  		if ($('header').hasClass('front')) {
		  			$('#description').addClass('vh');
		  		} else {
		  			
		  		};
		  		$('#description').html('<span>'+prevTitle+' +</span>');
		  		$('#description').append('<p class="hide"><span>'+prevDesc+'</span></p>');
		  	};

		}, { offset: 100 });

		$('article.page').first().waypoint(function(direction) {
			$('#description').removeClass('hide');
			if (direction === 'down') {
				$('.project-list a').removeClass('active');
				$('#description').addClass('vh');
			} else {
				var prevProject = $(this).prev('.project');
				var prevTitle = prevProject.find('h1').html();
				var prevDesc = prevProject.find('p').html();

				if ($('header').hasClass('front')) {
					$('#description').addClass('vh');
				} else {
					$('#description').html('<span>'+prevTitle+' +</span>');
					$('#description').append('<p class="hide"><span>'+prevDesc+'</span></p>');
					$('#description').removeClass('vh');
				};

				var id = prevProject.attr('id');
				$('.project-list a[href="#'+id+'"]').addClass('active');
			}
		}, { offset: 100 });

		$('.logo > div').click(function(){
			$('#description').addClass('vh');
		    $('header').toggleClass('front');
		    if ($('header').hasClass('front')) {
		    	$('header').click(function() {
		    		$(this).removeClass('front');
		    		$('#description').removeClass('vh');
		    	});
		    } else {
		    	$('#description').removeClass('vh');
		    }
		});

		$('#description').click(function(){
			$(this).find('p').toggleClass('hide');
			console.log('BAH');
		});

	});
});
