<?php
    require '../includes/init.php';
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
										Home Products		
									</h1>
								</div>
								<div class="breadcrumbs">
									<a href="<?= urlOf('index.php') ?>">Home</a><span class="delimiter"></span><a href="<?= urlOf('pages/shop.php') ?>">Shop</a>
								</div>
							</div>
						</div>
						<div id="content" class="site-content" role="main">
							<div class="section-padding">
								<div class="section-container p-l-r">
									<div class="row">
										<div class="col-xl-12 col-lg-12 col-md-12 col-12">
											<div class="products-topbar clearfix">
												<div class="products-topbar-left">
													<div class="products-count">
														Showing all 21 results
													</div>
												</div>
											</div>
											<div class="tab-content">
												<div class="tab-pane fade show active" id="layout-grid" role="tabpanel">
													<div class="products-list grid">
														<div class="row">
															<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
																<div class="products-entry clearfix product-wapper">
																	<div class="products-thumb">
																		<div class="product-lable">
																			<div class="hot">Hot</div>
																		</div>
																		<div class="product-thumb-hover">
																			<a href="shop-details.html">
																				<img width="600" height="600" src="<?= urlOf('assets/media/product/6.jpg') ?>" class="post-image" alt="">
																				<img width="600" height="600" src="<?= urlOf('assets/media/product/6-2.jpg') ?>" class="hover-image back" alt="">
																			</a>
																		</div>		
																		<div class="product-button">
																			<div class="btn-add-to-cart" data-title="Add to cart">
																				<a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
																			</div>
																			<div class="btn-wishlist" data-title="Wishlist">
																				<button class="product-btn">Add to wishlist</button>
																			</div>
																		</div>
																	</div>
																	<div class="products-content">
																		<div class="contents text-center">
																			<h3 class="product-title"><a href="shop-details.html">Dining Table</a></h3>
																			<span class="price">$150.00</span>
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
						</div><!-- #content -->
					</div><!-- #primary -->
				</div><!-- #main-content -->
			</div>
		</div>
<?php
    include pathOf('includes/footer.php');
    include pathOf('includes/scripts.php');
    include pathOf('includes/pageend.php');
?>