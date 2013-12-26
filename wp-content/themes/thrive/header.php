<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-114x114.png">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css">
	
	<!-- Scripts -->
	<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<div class="container">			
			<div class="row">
				<div class="col-sm-3 logo">
					<a href="<?php bloginfo('wpurl'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="technology advice logo"></a>
				</div>
				
				<div class="col-sm-9">
					<nav class="navbar navbar-default main-navigation" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Menu</a>
						</div>
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<?php wp_nav_menu(
			   					array(
									'menu' => 'Main Menu', 
									'menu_class' => 'nav navbar-nav'
								)
		   					);?>
						</div>
					</nav>
				</div>
			</div>
			
			<div class="row">
				<div class="tagline col-sm-12">
					<h1><?php bloginfo('description'); ?></h1>
					<h2><?php bloginfo('name'); ?></h2>
				</div>	
			</div>
			
			<div class="row">
				<div class="col-sm-12">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</header>