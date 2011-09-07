<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>

	<div id="content" class="col span-8">
		<?php if (have_posts()) : ?>
		
			<?php while (have_posts()) : the_post(); ?>
			
				<div class="col last span-8">
					<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					<h3><span class='low'><?php $key="subtitle"; echo get_post_meta($post->ID, $key, true); ?></span></h3></div>

				<?php //the_content('Continue reading...'); ?>
				
				<?php $children = & get_children(array('post_parent'=>$post->ID,'post_type'=>'page')); ?>
				
				<?php foreach ($children as $child): setup_postdata($child);?>
				
				<div class="sectionone">
					<div class="post-meta col span-2">
						<ul class="nav">
							<li><a href=""><?php echo get_the_title($child->ID); ?></a></li>
							<?php edit_post_link('Edit this post', '<li>', '</li>'); ?>
						</ul>
					</div>

					<div class="post-content span-8 nudge-2">
						<?php the_content('Continue reading...'); ?>
					</div>
				</div>
				
				<?php endforeach; ?>		
				
			<?php endwhile; ?>
		
		<?php else : ?>
		
			<h3>Page Not Found</h3>
			<p>Sorry, but you are looking for something that isn't here.</p>
			
		<?php endif; ?>
		
	</div>

	<hr />

<?php get_sidebar(); ?>

<?php get_footer(); ?>