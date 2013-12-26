<?php get_header(); ?>

<section class="main" role="main">
	<div class="featured">
		<div class="container">
			<div class="row">
				<div class="col-sm-12" id="results">
					<?php if (have_posts()) : ?>
					<h2 class="featured-title">Search Results</h2>
					<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>		
					<?php while (have_posts()) : the_post(); ?>	
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<h2 class="results-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>	
						<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
						<div class="entry">
							<?php the_excerpt(); ?>
						</div>
					</div>
					<?php endwhile; ?>
					<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
					<?php else : ?>
					<h2>No posts found.</h2>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>