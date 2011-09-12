<?php get_header(); ?>

	<div id="content" class="col span-9 nudge-1">
		<?php if (have_posts()) : ?>
		
			<?php while (have_posts()) : the_post(); ?>
			
				<div class="col last span-8">
					<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					<h3><span class='low'><?php $key="subtitle"; echo get_post_meta($post->ID, $key, true); ?></span></h3></div>

				<div class="sectionone">
					<?php the_content('Continue reading...'); ?>
				</div>
				
			<?php endwhile; ?>
		
		<?php else : ?>
		
			<h3>Page Not Found</h3>
			<p>Sorry, but you are looking for something that isn't here.</p>
			
		<?php endif; ?>
		
	</div>

	<hr />

<?php get_sidebar(); ?>

<?php get_footer(); ?>