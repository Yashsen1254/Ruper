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
										Wishlist
									</h1>
								</div>
								<div class="breadcrumbs">
									<a href="<?= urlOf('index.php') ?>">Home</a><span class="delimiter"></span><a href="<?= urlOf('pages/shop.php') ?>">Shop</a><span class="delimiter"></span>Wishlist
								</div>
							</div>
						</div>

						<div id="content" class="site-content" role="main">
							<div class="section-padding">
								<div class="section-container p-l-r">
									<div class="shop-wishlist">	
										<table class="wishlist-items">                            
											<tbody>
												<tr class="wishlist-item">
													<td class="wishlist-item-remove"><span></span></td>
													<td class="wishlist-item-image">
				                                        <a href="shop-details.html">
															<img width="600" height="600" src="<?= urlOf('assets/media/product/3.jpg') ?>" alt="">
														</a>
			                           				</td>
													<td class="wishlist-item-info">
														<div class="wishlist-item-name">
															<a href="shop-details.html">Chair Oak Matt Lacquered</a>
														</div>
														<div class="wishlist-item-price">
															<span>$150.00</span>
														</div>
													</td>
                                					<td class="wishlist-item-actions">
					                                    <div class="wishlist-item-add">
															<div class="btn-add-to-cart" data-title="Add to cart">
																<a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
															</div>
									        			</div>
									        		</td>
												</tr>
											</tbody>
										</table>
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