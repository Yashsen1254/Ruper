<?php
require '../includes/init.php';

$ClientId = $_SESSION['UserId'];
$carts = select("SELECT carts.*, products.Name, products.Price, products.ImageFileName FROM carts JOIN products ON carts.ProductId = products.Id WHERE carts.ClientId = $ClientId AND Carts.IsDeleted = 1");

$totalAmount = 0;

foreach ($carts as $item) {
	$totalAmount += $item['Price'] * $item['Quantity'];
}

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
									<div class="checkout">
										<div class="row">
											<div class="col-xl-8 col-lg-7 col-md-12 col-12">
												<div class="customer-details">
													<div class="billing-fields">
														<h3>Billing details</h3>
														<div class="billing-fields-wrapper">
															<p class="form-row">
																<label>First name <span class="required" title="required">*</span></label>
																<span class="input-wrapper"><input type="text" class="input-text" id="FirstName" name="FirstName"></span>
															</p>
															<p class="form-row">
																<label>Last name <span class="required" title="required">*</span></label>
																<span class="input-wrapper"><input type="text" class="input-text" id="LastName" name="LastName"></span>
															</p>
															<p class="form-row">
																<label>Email address <span class="required" title="required">*</span></label>
																<span class="input-wrapper">
																	<input type="email" class="input-text" id="Email" name="Email">
																</span>
															</p>
															<p class="form-row">
																<label>Phone <span class="required" title="required">*</span></label>
																<span class="input-wrapper">
																	<input type="tel" class="input-text" id="Phone" name="Phone">
																</span>
															</p>
															<p class="form-row">
																<label>Postcode / ZIP <span class="required" title="required">*</span></label>
																<span class="input-wrapper">
																	<input type="text" class="input-text" id="ZipCode" name="ZipCode">
																</span>
															</p>
															<p class="form-row">
																<label>City <span class="optional"></span></label>
																<span class="input-wrapper"><input type="text" class="input-text" id="City" name="City"></span>
															</p>
															<p class="form-row">
																<label>Street address <span class="required" title="required">*</span></label>
																<span class="input-wrapper">
																	<input type="text" class="input-text" id="StreetAddress" name="StreetAddress">
																</span>
															</p>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-4 col-lg-5 col-md-12 col-12">
												<div class="checkout-review-order">
													<div class="checkout-review-order-table">
														<div class="review-order-title">Product</div>
														<div class="cart-items">
															<?php foreach ($carts as $item): ?>
																<input type="hidden" value="<?= $item['Id'] ?>" id="CartId" name="CartId">
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
																		<span>₹<?= $item['Price'] * $item['Quantity'] ?></span>
																	</div>
																</div>
															<?php endforeach; ?>
														</div>
														<div class="order-total">
															<h2>Total</h2>
															<div class="total-price">
																<strong>
																	<span>₹<?= $totalAmount ?></span>
																</strong>
															</div>
														</div>
													</div>
													<div id="payment" class="checkout-payment">
														<div class="form-row place-order">
															<div class="terms-and-conditions-wrapper">
																<div class="privacy-policy-text"></div>
															</div>
															<button class="button alt" type="submit" onclick="insertData()">Place order</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- #content -->
				</div><!-- #primary -->
			</div><!-- #main-content -->

			<div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="checkoutModal">Success</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Checkout Done!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Close</button>
                    </div>
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
				var CartId = $('#CartId').val();
				var FirstName = $('#FirstName').val();
				var LastName = $('#LastName').val();
				var Email = $('#Email').val();
				var Phone = $('#Phone').val();
				var ZipCode = $('#ZipCode').val();
				var City = $('#City').val();
				var StreetAddress = $('#StreetAddress').val();
				var TotalPrice = '<?= $totalAmount ?>';
				$('#checkoutModal').modal('show');
				$.ajax({
					url: '../admin/api/checkouts/insert.php',
					type: 'POST',
                    data: {
						CartId: CartId,
						FirstName: FirstName,
						LastName: LastName,
						Email: Email,
						Phone: Phone,
						ZipCode: ZipCode,
						City: City,
						StreetAddress: StreetAddress,
						TotalPrice: TotalPrice
					},
					success: function(response) {
                    }
				});
			}
		</script>
		<?php
		include pathOf('includes/pageend.php');
		?>