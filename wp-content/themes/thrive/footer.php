</section>

<footer>
	<div class="container">
		<div class="row">
			<section class="col-sm-4 quicknav">
				<h4 class="footer-title">Technology Advice</h4>
				<nav role="navigation">
					<?php wp_nav_menu(
						array(
							'menu' => 'Main Menu', 
							'menu_class' => 'footer-nav'
						)
					);?>
				</nav>
			</section>
			
			<section class="col-sm-4 follow">
				<h4 class="footer-title">Follow Us</h4>
				<ul class="social">
					<li class="twitter"><a href="https://twitter.com/Technology_Adv" target="_blank">Twitter</a></li>
					<li class="facebook"><a href="https://www.facebook.com/techadvice" target="_blank">Facebook</a></li>
					<li class="rss"><a href="http://feeds.feedburner.com/technologyadvice/Hnmi" target="_blank">RSS</a></li>
					<li class="gplus"><a href="https://plus.google.com/+Technologyadvice/posts" target="_blank">Google Plus</a></li>
					<li class="linkedin"><a href="http://www.linkedin.com/company/technology-advice" target="_blank">LinkedIn</a></li>
					<li class="youtube"><a href="http://www.youtube.com/user/TechnologyAdvice1" target="_blank">You Tube</a></li>
				</ul>
				<div class="cl"></div>
			</section>
			
			<section class="col-sm-4 contribute">
				<h4 class="footer-title">Contribute</h4>
				<p>Interested in contributing to our blog?</p>
				<a href="#" class="footer-btn">Pitch an Idea</a>
			</section>
		</div>
		
		<div class="row">
			<div class="col-sm-12 copyright">
				<p>&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?></p>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
