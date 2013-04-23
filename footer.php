		</section>
		
		<footer>
			<p>&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?></p>
		</footer>
	<!-- End Container -->
	</div> 

<script type="application/x-javascript">window.addEventListener("load",function(){setTimeout(function(){window.scrollTo(0,1);},0);});</script>

<?php wp_enqueue_script( 'js-combo', get_bloginfo( 'template_directory' ) . '/js/script-min.js', array('jquery')); ?>
<?php wp_footer(); ?>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/waypoints.min.js"></script>

<script>
	$('.project').waypoint(function() {
		var id=(this.id);
		var title=$(this).find('h1').html();
		console.log(id);
		console.log(title);
	});
</script>

</body>
</html>