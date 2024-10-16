<?php
require '../includes/init.php';
include pathOf('includes/header.php');
include pathOf('includes/navbar.php');
?>

<body class="page">
	<div id="page" class="hfeed page-wrapper">

		<div id="site-main" class="site-main">
			<div id="main-content" class="main-content">
				<div id="primary" class="content-area">
					<div id="title" class="page-title">
						<div class="section-container">
							<div class="content-title-heading">
								<h1 class="text-title-heading">
									Contact Us
								</h1>
							</div>
							<div class="breadcrumbs">
								<a href="<?= urlOf('index.php') ?>">Home</a><span class="delimiter"></span>Contact Us
							</div>
						</div>
					</div>

					<div id="content" class="site-content" role="main">
						<div class="page-contact">
							<section class="section section-padding">
								<div class="section-container small">
									<!-- Block Contact Map -->
									<div class="block block-contact-map">
										<div class="block-widget-wrap">
											<iframe src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" aria-label="London Eye, London, United Kingdom"></iframe>
										</div>
									</div>
								</div>
							</section>

							<section class="section section-padding m-b-70">
								<div class="section-container">
									<!-- Block Contact Info -->
									<div class="block block-contact-info">
										<div class="block-widget-wrap">
											<div class="info-icon">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg-icon2 plant" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
													<g>
														<path xmlns="http://www.w3.org/2000/svg" d="m320.174 28.058a8.291 8.291 0 0 0 -7.563-4.906h-113.222a8.293 8.293 0 0 0 -7.564 4.907l-66.425 148.875a8.283 8.283 0 0 0 7.564 11.655h77.336v67.765a20.094 20.094 0 1 0 12 0v-67.765h27.7v288.259h-48.441a6 6 0 0 0 0 12h108.882a6 6 0 0 0 0-12h-48.441v-288.259h117.04a8.284 8.284 0 0 0 7.564-11.657zm-103.874 255.567a8.094 8.094 0 1 1 8.094-8.093 8.1 8.1 0 0 1 -8.094 8.093zm-77.61-107.036 63.11-141.437h108.4l63.11 141.437z" fill="" data-original="" style=""></path>
													</g>
												</svg>
											</div>
											<div class="info-title">
												<h2>Need Help?</h2>
											</div>
											<div class="info-items">
												<div class="row">
													<div class="col-md-4 sm-m-b-30">
														<div class="info-item">
															<div class="item-tilte">
																<h2>Phone</h2>
															</div>
															<div class="item-content">
																810.222.5439
															</div>
														</div>
													</div>
													<div class="col-md-4 sm-m-b-30">
														<div class="info-item">
															<div class="item-tilte">
																<h2>Customer Service</h2>
															</div>
															<div class="item-content">
																<p>Monday to Friday</p>
																<p>8:00am – 4:00pm Sydney, NSW time (UTC +10)</p>
																<p>Saturday and Sunday closed</p>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="info-item">
															<div class="item-tilte">
																<h2>Returns</h2>
															</div>
															<div class="item-content small-width">
																For information on Returns and Refunds, please click <a href="#">here.</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>

							<section class="section section-padding contact-background m-b-0">
								<div class="section-container small">
									<!-- Block Contact Form -->
									<div class="block block-contact-form">
										<div class="block-widget-wrap">
											<div class="block-title">
												<h2>Send Us Your Questions!</h2>
												<div class="sub-title">We’ll get back to you within two days.</div>
											</div>
											<div class="block-content">
												<form action="#" method="post" class="contact-form" novalidate="novalidate">
													<div class="contact-us-form">
														<div class="row">
															<div class="col-sm-12 col-md-6">
																<label class="required">Name</label><br>
																<span class="form-control-wrap">
																	<input type="text" name="name" value="" size="40" class="form-control" aria-required="true" id="Name">
																</span>
															</div>
															<div class="col-sm-12 col-md-6">
																<label class="required">Email</label><br>
																<span class="form-control-wrap">
																	<input type="email" name="email" value="" size="40" class="form-control" aria-required="true" id="Email">
																</span>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12">
																<label class="required">Message</label><br>
																<span class="form-control-wrap">
																	<textarea name="message" cols="40" rows="10" class="form-control" aria-required="true" id="Message"></textarea>
																</span>
															</div>
														</div>
														<div class="form-button">
															<input type="submit" value="Submit" class="button" onclick="insertData()"></span>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div><!-- #content -->
				</div><!-- #primary -->
			</div><!-- #main-content -->
		</div>
		<div class="modal" tabindex="-1" id="success">
            <div class="modal-dialog">
                <div class="modal-content bg-dark">
                    <div class="modal-header text-white">
                        <h5 class="modal-title">Thanks For Feedback</h5>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
		<?php
		include pathOf('includes/footer.php');
		include pathOf('includes/scripts.php');
		?>
		<script>
			function insertData() {
				var Name = $("#Name").val();
				var Email = $("#Email").val();
				var Message = $("#Message").val();

				$.ajax({
					url: "../admin/api/feedbacks/insert.php",
					type: "POST",
					data : {
						Name: Name,
                        Email: Email,
                        Message: Message
					},
					success: function(response) {
                        $("#success").modal('show');
                        setTimeout(function() {
                            location.reload();
                        }, 2000);
                    }
				});
			}
		</script>
		<?php
		include pathOf('includes/pageend.php');
		?>