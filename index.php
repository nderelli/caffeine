<?php get_header(); ?>
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<article id="<?php the_slug(); ?>"class="scroll project">
					<h1 class="hidden"><?php the_title(); ?></h1>
					<?php $images = get_field('project_images'); ?>
 						<?php if ($images): ?>
							<?php foreach ($images as $image): ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<?php endforeach; ?>
						<?php else: ?>
						    <aside class="alt-img">
						    	<?php the_content(); ?>
						    </aside>
						<?php endif; ?>
				</article>	
			<?php endwhile; endif; ?>

			<?php $query = new WP_Query( 'post_type=page' );
			while ( $query->have_posts() ) : $query->the_post(); ?>
			<article class="page scroll" id="<?php the_slug(); ?>">
				<?php the_content(); ?>
			</article>
			<?php endwhile;	wp_reset_postdata(); ?>	
<?php get_footer(); ?>

<?php  ?>