<?php
    require '../includes/init.php';

	$ClientId = $_SESSION['UserId'];
	$carts = select("SELECT carts.*, products.Name, products.Price, products.ImageFileName FROM carts JOIN products ON carts.ProductId = products.Id WHERE carts.ClientId = $ClientId");


    include pathOf('includes/header.php');
    include pathOf('includes/navbar.php');
?>
	<body class="shop">
		<div id="page" class="hfeed page-wrapper">

			<div id="site-main" class="site-main">
				<div id="main-content" class="main-content">
					<div id="primary" class="content-area">
						<div id="title" class="page-title">
							<div class="section-container">
								<div class="content-title-heading">
									<h1 class="text-title-heading">
										Checkout
									</h1>
								</div>
								<div class="breadcrumbs">
									<a href="<?= urlOf('index.php') ?>">Home</a><span class="delimiter"></span><a href="<?= urlOf('pages/shop.php') ?>">Shop</a><span class="delimiter"></span>Shopping Cart
								</div>
							</div>
						</div>

						<div id="content" class="site-content" role="main">
							<div class="section-padding">
								<div class="section-container p-l-r">
									<div class="shop-checkout">
										<form name="checkout" method="post" class="checkout" action="#" autocomplete="off">
											<div class="row">
												<div class="col-xl-8 col-lg-7 col-md-12 col-12">
													<div class="customer-details">
														<div class="billing-fields">
															<h3>Billing details</h3>
															<div class="billing-fields-wrapper">
																<p class="form-row form-row-first validate-required">
																	<label>First name <span class="required" title="required">*</span></label>
																	<span class="input-wrapper"><input type="text" class="input-text" id="FirstName" name="FirstName"></span>
																</p>
																<p class="form-row form-row-last validate-required">
																	<label>Last name <span class="required" title="required">*</span></label>
																	<span class="input-wrapper"><input type="text" class="input-text" id="LastName" name="LastName"></span>
																</p>
																<p class="form-row form-row-wide validate-required validate-email">
																	<label>Email address <span class="required" title="required">*</span></label>
																	<span class="input-wrapper">
																		<input type="email" class="input-text" id="Email" name="Email">
																	</span>
																</p>
																<p class="form-row form-row-wide validate-required validate-phone">
																	<label>Phone <span class="required" title="required">*</span></label>
																	<span class="input-wrapper">
																		<input type="tel" class="input-text" id="Phone" name="Phone">
																	</span>
																</p>
																<p class="form-row address-field validate-required validate-postcode form-row-wide">
																	<label>Postcode / ZIP <span class="required" title="required">*</span></label>
																	<span class="input-wrapper">
																		<input type="text" class="input-text" id="ZipCode" name="ZipCode">
																	</span>
																</p>
																<p class="form-row form-row-wide">
																	<label>City <span class="optional"></span></label>
																	<span class="input-wrapper"><input type="text" class="input-text" id="City" name="City"></span>
																</p>
																<p class="form-row address-field validate-required form-row-wide">
																	<label>Street address <span class="required" title="required">*</span></label>
																	<span class="input-wrapper">
																		<input type="text" class="input-text" id="StreetAddress" name="StreetAddress">
																	</span>
																</p>
															</div>
														</div>
														<div class="account-fields">
															<p class="form-row form-row-wide">
																<label class="checkbox">
																	<input class="input-checkbox" type="checkbox" name="createaccount" value="1"> 
																	<span>Create an account?</span>
																</label>
															</p>
														</div>
													</div>
												</div>
												<div class="col-xl-4 col-lg-5 col-md-12 col-12">
													<div class="checkout-review-order">
														<div class="checkout-review-order-table">
															<div class="review-order-title">Product</div>
															<div class="cart-items">
																<?php foreach($carts as $item): ?>
																<div class="cart-item">
																	<div class="info-product">
																		<div class="product-thumbnail">
																			<img width="600" height="600" src="<?= urlOf('admin/assets/images/uploads/') . $item['ImageFileName'] ?>" alt="">					
																		</div>
																		<div class="product-name">
																			<?= $item['Name'] ?>
																			<strong class="product-quantity">QTY : <?= $item['Quantity'] ?></strong>											
																		</div>
																	</div>
																	<div class="product-total">
																		<span>₹<?= $item['Price'] ?></span>
																	</div>
																</div>
																<?php endforeach; ?>
															</div>
															<div class="order-total">
																<h2>Total</h2>
																<div class="total-price">
																	<strong>
																		<span>₹</span>
																	</strong> 
																</div>
															</div>
														</div>
														<div id="payment" class="checkout-payment">
															<div class="form-row place-order">
																<div class="terms-and-conditions-wrapper">
																	<div class="privacy-policy-text"></div>
																</div>
																<button type="submit" class="button alt" name="checkout_place_order" value="Place order">Place order</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div><!-- #content -->
					</div><!-- #primary -->
				</div><!-- #main-content -->
			</div>
<?php
    include pathOf('includes/footer.php');
    include pathOf('includes/scripts.php');
    include pathOf('includes/pageend.php');
?>