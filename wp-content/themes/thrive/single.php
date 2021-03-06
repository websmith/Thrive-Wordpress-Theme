<?php get_header(); ?>

	
<section class="main" role="main">
	<div class="featured single">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">	
						<h2><?php the_title(); ?></h2>							
						<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
						<?php the_post_thumbnail($size, $attr); ?>
						<div class="entry">				
							<?php the_content(); ?>
							<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>				
							<?php the_tags( 'Tags: ', ', ', ''); ?>
						</div>			
						<?php edit_post_link('Edit this entry','','.'); ?>			
					</div>
					<?php comments_template(); ?>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>