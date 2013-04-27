var stickyTitles = {
	'config' : {
		'container' : $('.content')
	},

    'init' : function(config) {
    	stickyTitles.$container = stickyTitles.config.container;
    	console.log(stickyTitles.$container);

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
});
