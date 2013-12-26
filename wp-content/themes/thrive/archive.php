<?php get_header(); ?>
<section class="main" role="main">
	<div class="featured">
		<div class="container">
			<div class="row">
				<?php if (have_posts()) : ?>
				
				<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
				
				<?php /* If this is a category archive */ if (is_category()) { ?>
				<div class="col-sm-12"><h2 class="featured-title">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2></div>
				
				<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<div class="col-sm-12"><h2 class="featured-title">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2></div>
				
				<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<div class="col-sm-12"><h2 class="featured-title">Archive for <?php the_time('F jS, Y'); ?></h2></div>
				
				<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<div class="col-sm-12"><h2 class="featured-title">Archive for <?php the_time('F, Y'); ?></h2></div>
				
				<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<div class="col-sm-12"><h2 class="featured-title">Archive for <?php the_time('Y'); ?></h2></div>
				
				<div class="col-sm-12"><?php /* If this is an author archive */ } elseif (is_author()) { ?>
					<h2 class="featured-title">Author Archive</h2></div>
				
				<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<div class="col-sm-12"><h2 class="featured-title">Blog Archives</h2></div>
				
				<?php } ?>
			</div>
			<div class="row">			
				<?php while (have_posts()) : the_post(); ?>
				<article class="col-sm-4 article">
					<div <?php post_class(); ?>>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($size, $attr); ?> </a>
						<div class="entry article-wrap">
							<h3 class="post-title" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							
							<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>	
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
				<h2 class="featured-title">Nothing Found</h2>
			</div>
			<?php endif; ?>
		</div>
	</div>
	
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>