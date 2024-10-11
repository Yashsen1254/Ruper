<?php
if (isset($_SESSION['UserId'])) {
    $ClientId = $_SESSION['UserId'];
    $carts = select("SELECT carts.*, products.Name, products.Price, products.ImageFileName FROM carts JOIN products ON carts.ProductId = products.Id WHERE carts.ClientId = $ClientId");
}
?>
<header id="site-header" class="site-header header-v1">
				<div class="header-mobile">
					<div class="section-padding">
						<div class="section-container">
							<div class="row">
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 header-left">
									<div class="navbar-header">
										<button type="button" id="show-megamenu" class="navbar-toggle"></button>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 header-center">
									<div class="site-logo">
										<a href="index-2.html">
											<img width="400" height="79" src="<?= urlOf('assets/media/logo.png') ?>" alt="Ruper – Furniture HTML Theme" />
										</a>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3 header-right">
									<!-- Wishlist -->
									<div class="wishlist-box">
												<a href="<?= urlOf('pages/wishlist.php') ?>"><i class="icon-heart"></i></a>
												<span class="count-wishlist">1</span>
											</div>
									<div class="ruper-topcart dropdown">
										<div class="dropdown mini-cart top-cart">
											<div class="remove-cart-shadow"></div>
											<a class="dropdown-toggle cart-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<div class="icons-cart"><i class="icon-large-paper-bag"></i><span class="cart-count">2</span></div>
											</a>
											<div class="dropdown-menu cart-popup">
												<div class="cart-empty-wrap">
													<ul class="cart-list">
														<li class="empty">
															<span>No products in the cart.</span>
															<a class="go-shop" href="<?= urlOf('pages/shop.php') ?>">GO TO SHOP<i aria-hidden="true" class="arrow_right"></i></a>
														</li>
													</ul>
												</div>
												<div class="cart-list-wrap">
													<ul class="cart-list ">
														<li class="mini-cart-item">
															<a href="#" class="remove" title="Remove this item"><i class="icon_close"></i></a>
															<a href="shop-details.html" class="product-image"><img width="600" height="600" src="<?= urlOf('assets/media/product/3.jpg') ?>" alt=""></a>
															<a href="shop-details.html" class="product-name"><?= $carts['Name'] ?></a>		
															<div class="quantity">Qty: 1</div>
															<div class="price">$150.00</div>
														</li>
													</ul>
													<div class="total-cart">
														<div class="title-total">Total: </div>
														<div class="total-price"><span>$100.00</span></div>
													</div>
													<div class="free-ship">
														<div class="total-percent"><div class="percent" style="width:20%"></div></div>
													</div>
													<div class="buttons">
														<a href="<?= urlOf('pages/cart.php') ?>" class="button btn view-cart btn-primary">View cart</a>
														<a href="<?= urlOf('pages/checkout.php') ?>" class="button btn checkout btn-default">Check out</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="header-mobile-fixed">
						<!-- Shop -->
						<div class="shop-page">
							<a href="shop-grid-left.html"><i class="wpb-icon-shop"></i></a>
						</div>
						<!-- Wishlist -->
						<div class="wishlist-box">
							<a href="shop-wishlist.html"><i class="wpb-icon-heart"></i></a>
						</div>
					</div>
				</div>

				<div class="header-desktop">
					<div class="header-wrapper">
						<div class="section-padding">
							<div class="section-container p-l-r">
								<div class="row">
									<div class="col-xl-3 col-lg-2 col-md-12 col-sm-12 col-12 header-left">
										<div class="site-logo">
											<a href="index-2.html">
												<img width="400" height="79" src="<?= urlOf('assets/media/logo.png') ?>" alt="Ruper – Furniture HTML Theme" />
											</a>
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-center header-center">
										<div class="site-navigation">
											<nav id="main-navigation">
												<ul id="menu-main-menu" class="menu">
													<li class="level-0 menu-item">
														<a href="<?= urlOf('index.php') ?>"><span class="menu-item-text">Home</span></a>
													</li>
													<li class="level-0 menu-item">
														<a href="<?= urlOf('pages/shop.php') ?>"><span class="menu-item-text">Shop</span></a>
													</li>
													<li class="level-0 menu-item">
														<a href="<?= urlOf('pages/about.php') ?>"><span class="menu-item-text">About</span></a>
													</li>
													<li class="level-0 menu-item">
														<a href="<?= urlOf('pages/contact.php') ?>"><span class="menu-item-text">Contact</span></a>
													</li>
												</ul>
											</nav>
										</div>
									</div>

									<div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12 header-right">
										<div class="header-page-link">
											<div class="wishlist-box">
												<?php if (!isset($_SESSION['UserId'])) { ?>
													<a href="<?= urlOf('pages/register.php') ?>"><i class="fa-regular fa-user"></i></a>
												<?php } ?>
												<?php if (isset($_SESSION['UserId'])) { ?>
													<a href="<?= urlOf('admin/api/logout/logout.php') ?>"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
												<?php } ?>
											</div>
											<!-- Wishlist -->
											<div class="wishlist-box">
												<a href="<?= urlOf('pages/wishlist.php') ?>"><i class="icon-heart"></i></a>
											</div>
											
											<!-- Cart -->
											<div class="ruper-topcart dropdown light">
												<div class="dropdown mini-cart top-cart">
													<div class="remove-cart-shadow"></div>
													<a class="dropdown-toggle cart-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<div class="icons-cart"><i class="icon-large-paper-bag"></i></div>
													</a>
													<div class="dropdown-menu cart-popup">
														<div class="cart-empty-wrap">
															<ul class="cart-list">
																<li class="empty">
																	<span>No products in the cart.</span>
																	<a class="go-shop" href="shop-grid-left.html">GO TO SHOP<i aria-hidden="true" class="arrow_right"></i></a>
																</li>
															</ul>
														</div>
														<div class="cart-list-wrap">
															<?php if (isset($_SESSION['UserId'])) {
															foreach ($carts as $cart) { ?>
															<ul class="cart-list ">
																<li class="mini-cart-item">
																	<button class="remove" title="Remove this item" onclick="deleteCartItem(<?= $cart['Id'] ?>)">X</button>
																	<a href="shop-details.html" class="product-image"><img width="600" height="600" src="<?= urlOf('admin/assets/images/uploads/') . $cart['ImageFileName'] ?>" alt=""></a>
																	<a href="shop-details.html" class="product-name"><?= $cart['Name'] ?></a>		
																	<div class="quantity"><?= $cart['Quantity'] ?> Quantity</div>
																	<div class="price">₹<?= $cart['Price'] ?></div>
																</li>
															</ul>
															<?php }} ?>
															<div class="total-cart">
																<div class="title-total">Total: </div>
																<div class="total-price"><span>$100.00</span></div>
															</div>
															<div class="free-ship">
																<div class="total-percent"><div class="percent" style="width:20%"></div></div>
															</div>
															<div class="buttons">
																<a href="<?= urlOf('pages/cart.php') ?>" class="button btn view-cart btn-primary">View cart</a>
																<a href="<?= urlOf('pages/checkout.php') ?>" class="button btn checkout btn-default">Check out</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<script>
				function deleteCartItem(Id) {
					$.ajax({
						url: "../admin/api/carts/delete.php",
						method: "POST",
						data: {
							Id: Id
						},
						success: function(response) {
							location.reload();
						}
					})
				}
			</script>