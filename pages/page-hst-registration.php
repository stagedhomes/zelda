<?php
/*
    Template Name: HST Registration
*/

get_header(); ?>

<script src='https://www.google.com/recaptcha/api.js'></script>

<script>
	window.onload = function() {
		// Captcha Verification.
		var recaptcha = document.forms["registration"]["g-recaptcha-response"];
		recaptcha.required = true;
		recaptcha.oninvalid = function(e) {
			// do something
			alert("Please complete the captcha");
		} // recaptcha.oninvalid
	} // window.onload
</script>

	<div class="container" style="padding-top: 40px">
		<div class="row">
			<section class="col-md-12 entry-content" style="padding-bottom: 40px">
				<?php the_content(); ?>
			</section>

			<!-- Form -->
			<section class="col-sm-offset-1 col-md-offset-2 col-sm-10 col-md-8" style="padding-bottom: 40px">
				
				<form id="registration" action="https://stagedhomes.com/training/all-classes.php" method="post">
					<!-- First and Last Name -->
					<div class="form-group">
						<label for="strFullName"><strong>First and Last Name</strong></label>
						<input type="text" name="strFullName" class="form-control" placeholder="Enter First and Last Name" required />
					</div>
					
					<!-- Hidden: Subject of Email or Slack -->
					<input type="hidden" name="strSubject" value="<?php echo get_post_meta($post->ID, "strSubject", true); ?>" />

					<!-- Email Address -->
					<div class="form-group">
						<label for="strEmail"><strong>Email Address</strong></label>
						<input type="email" name="strEmail" class="form-control" placeholder="Enter Email Address" required />
					</div>

					<!-- Phone Number -->
					<div class="form-group">
						<label for="strPhone"><strong>Phone Number</strong></label>
						<input type="text" name="strPhone" class="form-control" placeholder="Enter Phone Number" required />
					</div>

					<!-- Your City -->
					<div class="form-group">
						<label for="strCity"><strong>Your City</strong></label>
						<input type="text" name="strCity" class="form-control" placeholder="Enter City" required />
					</div>
					
					<!-- Your State -->
					<div class="form-group">
						<label for="strState"><strong>Your State</strong></label>
						<input type="text" name="strState" class="form-control" placeholder="Enter State" required />
					</div>
					
					<!-- CAPTCHA -->
					<div class="text-center" >
						<div class="g-recaptcha" style="display: inline-block;" data-sitekey="6Le-_AMTAAAAALK8HJZy0WyzIKsMp5T1sEvQNIYr"></div>
					</div>
					
					<!-- Submit -->
					<div class="text-center">
						<button type="submit" class="btn btn-default btn-lg">SUBMIT</button>
					</div>
				</form>				
			</section>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->

	<?php get_footer();