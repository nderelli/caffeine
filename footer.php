		</section>
		
		<footer>
			<p>&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?></p>
		</footer>

	</div>

<script type="application/x-javascript">window.addEventListener("load",function(){setTimeout(function(){window.scrollTo(0,1);},0);});</script>
<?php wp_enqueue_script( 'js-combo', get_bloginfo( 'template_directory' ) . '/js/script.js', array('jquery')); ?>

<?php wp_footer(); ?>

</body>
</html>