		</section>
		
		<footer>
			<p>&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?></p>
		</footer>
	<!-- End Container -->
	</div> 

<script type="application/x-javascript">window.addEventListener("load",function(){setTimeout(function(){window.scrollTo(0,1);},0);});</script>

<?php wp_enqueue_script( 'js-combo', get_bloginfo( 'template_directory' ) . '/js/script-min.js', array('jquery')); ?>
<?php wp_footer(); ?>


<script>

	
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

		  	$('.project-list a').removeClass('active');

		  	if (direction === 'down') {
		  	  $(window).scrollTop($(window).scrollTop() + 1);
		  	  $('.project-list a[href="#'+id+'"]').addClass('active');
		  	  if ($('header').hasClass('front')) {
		  	  	$('#description').addClass('vh');
		  	  } 
		  	  $('#description').html('<span>'+title+'</span>');
		  	}
		  	
		  	if (direction === 'up') {
		  		var prevProject = $(this).prev('.project');
		  		var prevTitle = prevProject.find('h1').html();
		  		var prevId = prevProject.attr('id');
		  		$('.project-list a[href="#'+prevId+'"]').addClass('active');
		  		if ($('header').hasClass('front')) {
		  			$('#description').addClass('vh');
		  		} else {
		  			
		  		};
		  		$('#description').html('<span>'+prevTitle+'</span>');
		  	};

		}, { offset: 100 });
		$('article.page').first().waypoint(function(direction) {
			if (direction === 'down') {
				$('.project-list a').removeClass('active');
				$('#description').addClass('vh');
			} else {
				var prevProject = $(this).prev('.project');
				var prevTitle = prevProject.find('h1').html();

				if ($('header').hasClass('front')) {
					$('#description').addClass('vh');
				} else {
					$('#description').html('<span>'+prevTitle+'</span>');
					$('#description').removeClass('vh');
				};

				var id = prevProject.attr('id');
				$('.project-list a[href="#'+id+'"]').addClass('active');
			}
		}, { offset: 100 });

		$('.logo').click(function(){
		    $('header').toggleClass('front');
		    if ($('header').hasClass('front')) {
		    	$('#description').addClass('vh');
		    	$('header').click(function() {
		    		$(this).removeClass('front');
		    		$('#description').removeClass('vh');
		    	});
		    } else {
		    	$('#description').removeClass('vh');
		    }

		       
		});

	});
	



</script>

</body>
</html>