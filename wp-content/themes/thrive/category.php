<?php get_header(); ?>

<section class="main" role="main">
	<div class="featured">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="featured-title"><?php single_cat_title(); ?></h2>
				</div>
			</div>
			<div class="row">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="col-sm-4 article">
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<a href="<?php the_permalink() ?>"><?php the_post_thumbnail($size, $attr); ?> </a>
						<div class="entry article-wrap">
							<h3 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
							<?php /*include (TEMPLATEPATH . '/inc/meta.php' );*/ ?>
							<?php the_excerpt(); ?>
						</div>
					</div>
				</article>
				<?php endwhile; ?>
				<div class="cl"></div>
			</div>
		<?php
			global $wp_query;
			$num = 999999999; // need an unlikely integer
			
			echo paginate_links( array(
				'base' => str_replace($num, '%#%', esc_url( get_pagenum_link($num))),
				'format' => '?paged=%#%',
				'current' => max(1, get_query_var('paged')),
				'total' => $wp_query->max_num_pages
			));
		?>
		<?php else : ?>
		<div class="col-sm-12">
			<h2 class="featured-title">Nothing found</h2>
		</div>
		<?php endif; ?>
	</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>