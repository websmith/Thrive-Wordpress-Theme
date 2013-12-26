<div class="smart-advisor">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>The Smart Advisor Tool</h2>
				<p>We've built a tool that will let you compare hundreds of software or hardware vendors by answering a few questions about what you need.</p>
				<a href="./" class="smart-advisor-btn">Try it Free</a>
			</div>
		</div>
	</div>
</div>

<div class="subscribe">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>Stay Up to Date</h2>
				<p>Subscribe to our Email list</p>
				<?php 				
					// get our subscription form
					$subscriptionForm = \SimpleSubscribe\Developers::getSubscriptionForm();
					// with this we determine modal windows class, since it's hidden automatically,
					// with every submission, we should make it visible, therefore add class "visible"
					$modalWindowVisible = $subscriptionForm->isSubmitted() ? 'visible' : '';
					// just empty variable to be filled with errors / success message
					$subscriptionMessage = '';
					// is it valid or not?
					if($subscriptionForm->isSubmitted() && $subscriptionForm->isValid()){
						// it is, this is our messages
						$subscriptionMessage = 'You have succesfully subscribed, e-mail is on it\'s way!';
					} elseif($subscriptionForm->isSubmitted() && $subscriptionForm->hasErrors()) {
						// it's not! get error messages in variable
						$subscriptionMessage = print_r($subscriptionForm->getAllErrors(), TRUE);
					}
						echo $subscriptionForm;
					?>
				</div>
			</div>
		</div>
	</div>

<div class="widgets">
	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
	
	<?php endif; ?>
	<div class="cl"></div>
</div>