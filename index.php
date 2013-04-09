<?php get_header(); ?>
		<section>
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
		</section>
<?php get_footer(); ?>
