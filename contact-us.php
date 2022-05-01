<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
      <title>Contact Us</title>
<?php include 'header.php'; ?>





<section id="page-title" class="dark text-light" data-bg-video="img/explore.mp4">
	<img src="img/logo.png" class="banner-logo">
<div class="container">
<!-- <div class="breadcrumb">
<ul>
<li><a href="index.php">Home</a> </li>
<li><a href="">Contact Us</a> </li>

</ul>
</div> -->
<div class="page-title">
<h1>Contact Us</h1>

</div>
</div>
</section>
<section class="p-b-100 p-t-100">
	<div class="container">
		<div class="row">

			<div class="col-lg-6">

				<img src="img/logo.png">
				<p class="lead-1">Innovations is just 14 years old Advertising Agency in Delhi, providing multiple options for Branding and Advertising. The core strength of our team is strategising media planning and buying for media like Television, FM Radio, Digital and Outdoor. We also have in-house Production facility for Ideating, Scripting, Visualising and Producing TV AD Commercials, Short Films, AVs. Jingles (for Radio) etc.</p>

				<ul class="list-icon" >

					<li><i class="fa fa-phone"></i> <a href="tel:+91 9811 400 322">+91 9811 400 322</a> </li>
					<li><i class="fa fa-envelope-square"></i> <a href="mailto:marketing@mediainnovations.in">marketing@mediainnovations.in</a> </li>

				</ul>
				<div class="social-icons m-t-30 social-icons-colored">
					<ul>
						<li class="social-youtube"><a href="#" class="foot-a"><i class="fab fa-youtube"></i></a></li>
						<li class="social-linkedin"><a href="#" class="foot-a"><i class="fab fa-linkedin"></i></a></li></ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="heading-text heading-section">
						<h2 class="about-heading">Get<span class="span-heading"> In Touch</span></h2>
						<form class="widget-contact-form mt-5" novalidate action="submit.php" role="form" method="post">
							<div class="row">
								<div class="form-group col-md-6">
									<label for="name">Name</label>
									<input type="text" aria-required="true" name="name" required class="form-control required name" placeholder="Enter your Name">
								</div>
								<div class="form-group col-md-6">
									<label for="email">Email</label>
									<input type="email" aria-required="true" name="email" required class="form-control required email" placeholder="Enter your Email">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-12">
									<label for="subject">Your Phone</label>
									<input type="tel" name="phone" required class="form-control required" placeholder="Enter Your Phone">
								</div>
							</div>
							<div class="form-group">
								<label for="message">Message</label>
								<textarea type="text" name="message" required rows="5" class="form-control required" placeholder="Enter your Message"></textarea>
							</div>

							<input type="submit" class="btn contact-btn" name="submit"><a href="#" class="btn btn-outline format-button1 "><span>Contact Us</span></a>
						</form>
					</div>
				</div>
			</div>
		</section>




		<?php include 'footer.php'; ?>

		</html>
