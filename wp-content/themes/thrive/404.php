<?php get_header(); ?>

<section class="main" role="main">
	<div class="featured">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="featured-title">Error 404 - Page Not Found</h2>
					<hr>
					<p>
						Sorry, but the page you were looking for doesn't seem to exist. It could have been moved to a different location or removed from the server.
					</p>
					<p>
						Please use the Search form below to help you find your missing page.
					</p>
					
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</div>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>