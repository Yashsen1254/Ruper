<?php
    require '../includes/init.php';

	$Id = $_POST['Id'];
	$products = selectOne("SELECT * FROM products WHERE Id = $Id");

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
										Shopping Cart
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
									<div class="shop-cart">	
										<div class="row">
											<div class="col-xl-8 col-lg-12 col-md-12 col-12">
												<form class="cart-form" action="#" method="post">
													<div class="table-responsive">
														<table class="cart-items table" cellspacing="0">
															<thead>
																<tr>
																	<th class="product-thumbnail">Product</th>
																	<th class="product-price">Price</th>
																	<th class="product-quantity">Quantity</th>
																	<th class="product-subtotal">Subtotal</th>
																	<th class="product-remove">&nbsp;</th>
																</tr>
															</thead>
															<tbody>
																<tr class="cart-item">		
																	<td class="product-thumbnail">
																		<a href="shop-details.html">
																			<img width="600" height="600" src="<?= urlOf('admin/assets/images/uploads/') . $products['ImageFileName'] ?>" class="product-image" alt="">
																		</a>				
																		<div class="product-name">
																			<a href="shop-details.html"><?= $products['Name'] ?></a>								
																		</div>
																	</td>
																	<td class="product-price">
																		<span class="price">₹<?= $products['Price'] ?></span>
																	</td>
																	<td class="product-quantity">
																		<div class="quantity">
																			<button type="button" class="minus">-</button>	
																			<input type="number" class="qty" step="1" min="0" max="10" name="quantity" value="2" title="Qty" size="4" placeholder="" inputmode="numeric" autocomplete="off">
																			<button type="button" class="plus">+</button>
																		</div>
																	</td>
																	<td class="product-subtotal">
																		<span>$300.00</span>
																	</td>
																	<td class="product-remove">
																		<a href="#" class="remove">×</a>						
																	</td>
																</tr>
																<tr>
																	<td colspan="6" class="actions">
																		<div class="bottom-cart">
																			<h2><a href="<?= urlOf('pages/shop.php') ?>">Continue Shopping</a></h2>
																			<button type="submit" name="update_cart" class="button" value="Update cart">Update cart</button>
																		</div>	
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</form>
											</div>
											<div class="col-xl-4 col-lg-12 col-md-12 col-12">
												<div class="cart-totals">
													<h2>Cart totals</h2>
													<div>
														<div class="order-total">
															<div class="title">Total</div>
															<div><span>$480.00</span></div>
														</div>
													</div>
													<div class="proceed-to-checkout">		
														<a href="<?= urlOf('pages/checkout.php') ?>" class="checkout-button button">
															Proceed to checkout
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="shop-cart-empty">
										<div class="return-to-shop">
											<a class="button" href="<?= urlOf('pages/shop.php') ?>">
												Return to shop		
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php
    include pathOf('includes/footer.php');
    include pathOf('includes/scripts.php');
    include pathOf('includes/pageend.php');
?>  