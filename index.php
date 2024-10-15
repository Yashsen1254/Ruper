<?php
    require './includes/init.php';
    include pathOf('includes/header.php');
    include pathOf('includes/navbar.php');
?>

	<body class="home">
		<div id="page" class="hfeed page-wrapper">
			<div id="site-main" class="site-main">
				<div id="main-content" class="main-content">
					<div id="primary" class="content-area">
						<div id="content" class="site-content" role="main">
							<section class="section">
								<!-- Block Sliders -->
								<div class="block block-sliders">
									<div class="slick-sliders" data-autoplay="true" data-dots="true" data-nav="false" data-columns4="1" data-columns3="1" data-columns2="1" data-columns1="1" data-columns1440="1" data-columns="1">
										<div class="item slick-slide">
											<div class="item-content">
												<div class="content-image">
													<img width="1920" height="1080" src="<?= urlOf('assets/media/slider/1.jpg') ?>" alt="Image Slider">
												</div>
												<div class="section-padding">
													<div class="section-container">
														<div class="item-info horizontal-start vertical-middle">
															<div class="content">
																<div class="subtitle-slider">20%OFF.END MONDAY</div>
																<h2 class="title-slider">Chair Collection</h2>
																<div class="description-slider">Save up to $500 on outdoor packages </div>
																<a class="button-slider button-white" href="<?= urlOf('pages/shop.php') ?>">SHOP NOW</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="item slick-slide">
											<div class="item-content">
												<div class="content-image">
													<img width="1920" height="1080" src="<?= urlOf('assets/media/slider/2.jpg') ?>" alt="Image Slider">
												</div>
												<div class="section-padding">
													<div class="section-container">
														<div class="item-info horizontal-start vertical-middle">
															<div class="content">
																<div class="subtitle-slider">20%OFF.END MONDAY</div>
																<h2 class="title-slider">Interior lighting</h2>
																<div class="description-slider">Save up to $500 on outdoor packages </div>
																<a class="button-slider button-white" href="<?= urlOf('pages/shop.php') ?>">SHOP NOW</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="item slick-slide">
											<div class="item-content">
												<div class="content-image">
													<img width="1920" height="1080" src="<?= urlOf('assets/media/slider/3.jpg') ?>" alt="Image Slider">
												</div>
												<div class="section-padding">
													<div class="section-container">
														<div class="item-info horizontal-start vertical-middle">
															<div class="content">
																<div class="subtitle-slider">20%OFF.END MONDAY</div>
																<h2 class="title-slider">Home office</h2>
																<div class="description-slider">Save up to $500 on outdoor packages </div>
																<a class="button-slider button-white" href="<?= urlOf('pages/shop.php') ?>">SHOP NOW</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>

							<section class="section section-padding m-b-60">
								<div class="section-container">
									<!-- Block Banners (Layout 1) -->
									<div class="block block-banners layout-1 banners-effect">
										<div class="section-row">
											<div class="section-column left sm-m-b">
												<div class="section-column-wrap">
													<div class="block-widget-wrap">
														<div class="block-widget-banner layout-1">
															<div class="bg-banner">
																<div class="banner-wrapper banners">
																	<div class="banner-image">
																		<a href="<?= urlOf('pages/shop.php') ?>">
																			<img width="571" height="622" src="<?= urlOf('assets/media/banner/product-cat-1.jpg') ?>" alt="Banner Image">
																		</a>
																	</div>
																	<div class="banner-wrapper-infor">
																		<div class="info">
																			<div class="content">
																				<a class="button button-white" href="<?= urlOf('pages/shop.php') ?>">Furniture</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="section-column right">
												<div class="section-column-wrap">
													<div class="block-widget-wrap p-0">
														<div class="block-section m-b-15">
															<div class="section-container">
																<div class="section-row">
																	<div class="section-column column-50 sm-m-b">
																		<div class="block-widget-wrap">
																			<div class="block-widget-banner layout-1">
																				<div class="bg-banner">
																					<div class="banner-wrapper banners">
																						<div class="banner-image">
																							<a href="<?= urlOf('pages/shop.php') ?>">
																								<img width="406" height="304" src="<?= urlOf('assets/media/banner/product-cat-2.jpg') ?>" alt="Banner Image">
																							</a>
																						</div>
																						<div class="banner-wrapper-infor">
																							<div class="info">
																								<div class="content">
																									<a class="button button-white" href="<?= urlOf('pages/shop.php') ?>">Lighting</a>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="section-column column-50">
																		<div class="block-widget-wrap">
																			<div class="block-widget-banner layout-1">
																				<div class="bg-banner">
																					<div class="banner-wrapper banners">
																						<div class="banner-image">
																							<a href="<?= urlOf('pages/shop.php') ?>">
																								<img width="406" height="304" src="<?= urlOf('assets/media/banner/product-cat-3.jpg') ?>" alt="Banner Image">
																							</a>
																						</div>
																						<div class="banner-wrapper-infor">
																							<div class="info">
																								<div class="content">
																									<a class="button button-white" href="<?= urlOf('pages/shop.php') ?>">Modern</a>
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
														<div class="block-section">
															<div class="section-container">
																<div class="section-row">
																	<div class="section-column">
																		<div class="block-widget-wrap">
																			<div class="block-widget-banner layout-1">
																				<div class="bg-banner">
																					<div class="banner-wrapper banners">
																						<div class="banner-image">
																							<a href="<?= urlOf('pages/shop.php') ?>">
																								<img width="406" height="304" src="<?= urlOf('assets/media/banner/product-cat-4.jpg') ?>" alt="Banner Image">
																							</a>
																						</div>
																						<div class="banner-wrapper-infor">
																							<div class="info">
																								<div class="content">
																									<a class="button button-white" href="<?= urlOf('pages/shop.php') ?>">Accessories</a>
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
												</div>
											</div>
										</div>								
									</div>
								</div>
							</section>

							<section class="section section-padding m-b-70">
								<div class="section-container">
									<!-- Block Banners (Layout 2) -->
									<div class="block block-banners layout-2 banners-effect">
										<div class="section-row">
											<div class="section-column left sm-m-b">
												<div class="section-column-wrap">
													<div class="block-widget-wrap">
														<div class="block-widget-banner layout-2">
															<div class="bg-banner">
																<div class="banner-wrapper banners">
																	<div class="banner-image">
																		<a href="<?= urlOf('pages/shop.php') ?>">
																			<img width="825" height="475" src="<?= urlOf('assets/media/banner/banner-1.jpg') ?>" alt="Banner Image">
																		</a>
																	</div>
																	<div class="banner-wrapper-infor">
																		<div class="info">
																			<div class="content">
																				<a class="link-title" href="<?= urlOf('pages/shop.php') ?>">') ?>">
																					<h3 class="title-banner">Let the adventure<br> begin. </h3>
																				</a>
																				<div class="banner-image-description">
																					Sed lectus. Aliquam lorem ante, <br>dapibus in, viverra quis, feugiat a, tellus
																				</div>
																				<a class="button button-outline" href="<?= urlOf('pages/shop.php') ?>">') ?>">SHOP NOW</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="section-column right">
												<div class="section-column-wrap">
													<div class="block-widget-wrap">
														<div class="block-widget-banner layout-3">
															<div class="bg-banner">
																<div class="banner-wrapper banners">
																	<div class="banner-image">
																		<a href="<?= urlOf('pages/shop.php') ?>">
																			<img width="571" height="475" src="<?= urlOf('assets/media/banner/banner-2.jpg') ?>" alt="Banner Image">
																		</a>
																	</div>
																	<div class="banner-wrapper-infor">
																		<div class="info">
																			<div class="content">
																				<a class="link-title" href="<?= urlOf('pages/shop.php') ?>">') ?>">
																					<h3 class="title-banner">UP TO <span>20% OFF</span></h3>
																				</a>
																				<div class="banner-image-description">
																					Don't miss savings on bedroom, living,
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
								</div>
							</section>

							<section class="section section-padding background-1 section-mb-l">
								<div class="section-container">
									<!-- Block Video -->
									<div class="block block-video">
										<div class="section-row">
											<div class="section-column left">
												<div class="section-column-wrap">
													<div class="block-widget-wrap">
														<div class="block-widget-video">
															<div class="video-thumb">
																<img width="565" height="635" class="img-responsive" src="<?= urlOf('assets/media/banner/video-1.jpg') ?>" alt="Image Video">
															</div>
															<div class="video-wrap">
																<div class="content-video modal fade" id="video-popup" tabindex="-1" role="dialog" aria-hidden="true">
																	<div class="modal-dialog modal-dialog-centered" role="document">
																		<div class="modal-content">
																			<div class="modal-body">
																				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																					<span aria-hidden="true">&times;</span>
																				</button>
																				<div class="embed-responsive embed-responsive-16by9">
																					<iframe class="embed-responsive-item" src="#" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
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
											<div class="section-column right">
												<div class="section-column-wrap">
													<div class="block-widget-wrap">
														<div class="block-widget-video">
															<div class="video-text">
																<h2 class="title">From bottle <br>to chair</h2>
																<div class="description">In our design and production processes, we are always looking at where environmental thinking and economic improvement intersect – resulting in minimal waste in every aspect. The way we utilise PET Technology, emphasizes this vision.</div>
																<a href="#" class="button button-white">OUR STORIES</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>

							<section class="section section-padding m-b-70">
								<div class="section-container">
									<!-- Block Feature -->
									<div class="block block-feature">
										<div class="block-widget-wrap">
											<div class="row lg-m-lr">
												<div class="col-lg-3 col-md-6 col-sm-6 md-b-15 lg-p-lr">
													<div class="box">
														<div class="box-icon">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg-icon plant" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><g xmlns="http://www.w3.org/2000/svg" id="Shipping"><path d="M54.416,37.9a3.906,3.906,0,0,0-1.665-1.562,4,4,0,0,0-3.8.1L38.915,42.227A3.978,3.978,0,0,0,37.657,40a4.062,4.062,0,0,0-2.667-1H28.829a1,1,0,0,1-.708-.293l-.244-.244A4.964,4.964,0,0,0,24.345,37H16.66c-.151,0-.3.01-.5.025a5,5,0,0,0-3.039,1.438L10.5,41.086l-.933-.933a1,1,0,0,0-1.414,0L2.494,45.8a1,1,0,0,0,0,1.415l14.139,14.15a1,1,0,0,0,1.415,0l5.66-5.66a1,1,0,0,0,0-1.414l-.793-.793.207-.207A1,1,0,0,1,23.829,53h11.1a4.933,4.933,0,0,0,2.5-.674l15.52-8.96a3.96,3.96,0,0,0,2-3.466A4.018,4.018,0,0,0,54.416,37.9ZM17.34,59.246,4.615,46.511l4.244-4.238L21.586,55ZM51.95,41.634,36.422,50.6a2.941,2.941,0,0,1-1.492.4h-11.1a2.978,2.978,0,0,0-2.122.879l-.207.207L11.914,42.5l2.623-2.623a2.988,2.988,0,0,1,1.807-.86c.11-.009.213-.017.316-.017h7.685a2.979,2.979,0,0,1,2.118.877l.244.244A2.978,2.978,0,0,0,28.829,41H34.99a2.048,2.048,0,0,1,1.344.5,1.962,1.962,0,0,1,.66,1.287,1.9,1.9,0,0,1-.133.92,1.809,1.809,0,0,1-.448.709A1.983,1.983,0,0,1,35,45H28.42a1,1,0,0,0,0,2H35a3.973,3.973,0,0,0,2.827-1.173,3.829,3.829,0,0,0,.781-1.113l11.338-6.546a2.014,2.014,0,0,1,1.914-.04,1.929,1.929,0,0,1,.823.77,2.015,2.015,0,0,1,.267,1A1.983,1.983,0,0,1,51.95,41.634Z" fill="" data-original="" style=""></path><path d="M15,34H51a1,1,0,0,0,1-1V3a1,1,0,0,0-1-1H15a1,1,0,0,0-1,1V33A1,1,0,0,0,15,34ZM35,4v8H31V4ZM16,4H29v9a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V4H50V32H16Z" fill="" data-original="" style=""></path><path d="M25,28H19a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z" fill="" data-original="" style=""></path><path d="M25,25H19a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z" fill="" data-original="" style=""></path><path d="M29,25H28a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Z" fill="" data-original="" style=""></path><path d="M25,22H19a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z" fill="" data-original="" style=""></path><path d="M29,22H28a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Z" fill="" data-original="" style=""></path><path d="M29,28H28a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Z" fill="" data-original="" style=""></path><path d="M47,24H37a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H47a1,1,0,0,0,1-1V25A1,1,0,0,0,47,24Zm-1,4H38V26h8Z" fill="" data-original="" style=""></path></g></g></svg>
															</span>
														</div>
														<div class="box-title-wrap">
															<h3 class="box-title">
																Free Shipping
															</h3>
															<p class="box-description">
																You will love at great low prices
															</p>
														</div>
													</div>
												</div>
												<div class="col-lg-3 col-md-6 col-sm-6 md-b-15 lg-p-lr">
													<div class="box">
														<div class="box-icon">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg-icon2 plant" x="0" y="0" viewBox="0 0 513.063 513.063" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><g xmlns="http://www.w3.org/2000/svg" id="XMLID_779_"><g id="XMLID_484_"><path id="XMLID_581_" d="m418.532 205.063h-191.127c8.838-10.159 14.208-23.411 14.208-37.902 0-31.889-25.943-57.832-57.832-57.832s-57.832 25.943-57.832 57.832c0 14.491 5.37 27.743 14.207 37.902h-45.624c-27.57 0-50 22.43-50 50v58.999c0 5.523 4.477 10 10 10s10-4.477 10-10v-58.999c0-16.542 13.458-30 30-30h280c16.542 0 30 13.458 30 30v54h-104c-27.57 0-50 22.43-50 50s22.43 50 50 50h104v54c0 16.542-13.458 30-30 30h-280c-16.542 0-30-13.458-30-30v-59.078c0-5.523-4.477-10-10-10s-10 4.477-10 10v59.078c0 27.57 22.43 50 50 50h324c27.57 0 50-22.43 50-50v-208c0-27.57-22.43-50-50-50zm-234.751-75.733c20.861 0 37.832 16.971 37.832 37.832s-16.971 37.832-37.832 37.832c-20.86 0-37.832-16.971-37.832-37.832s16.971-37.832 37.832-37.832zm230.724 95.733h4.027c16.542 0 30 13.458 30 30v54h-24v-54c0-11.247-3.735-21.637-10.027-30zm-143.973 134c0-16.542 13.458-30 30-30h148v60h-148c-16.542 0-30-13.458-30-30zm148 134h-4.027c6.292-8.363 10.027-18.752 10.027-30v-54h24v54c0 16.542-13.458 30-30 30z" fill="" data-original="" style=""></path><path id="XMLID_1260_" d="m297.972 349.062c-2.64 0-5.22 1.07-7.08 2.93s-2.92 4.44-2.92 7.07 1.06 5.21 2.92 7.07c1.87 1.86 4.44 2.93 7.08 2.93 2.63 0 5.2-1.07 7.07-2.93 1.86-1.86 2.93-4.44 2.93-7.07s-1.07-5.21-2.93-7.07c-1.86-1.861-4.44-2.93-7.07-2.93z" fill="" data-original="" style=""></path><path id="XMLID_1711_" d="m329.283 137.66c31.889 0 57.832-25.943 57.832-57.832 0-31.888-25.943-57.832-57.832-57.832s-57.832 25.943-57.832 57.832 25.943 57.832 57.832 57.832zm0-95.663c20.86 0 37.832 16.971 37.832 37.832s-16.971 37.832-37.832 37.832-37.832-16.971-37.832-37.832 16.971-37.832 37.832-37.832z" fill="" data-original="" style=""></path><path id="XMLID_1712_" d="m231.613 98.581c5.523 0 10-4.477 10-10v-78.581c0-5.523-4.477-10-10-10s-10 4.477-10 10v78.581c0 5.523 4.477 10 10 10z" fill="" data-original="" style=""></path><path id="XMLID_1757_" d="m183.613 64c5.523 0 10-4.477 10-10v-44c0-5.523-4.477-10-10-10s-10 4.477-10 10v44c0 5.523 4.477 10 10 10z" fill="" data-original="" style=""></path><path id="XMLID_1760_" d="m54.532 369.062c2.63 0 5.21-1.07 7.07-2.93s2.93-4.44 2.93-7.07-1.07-5.21-2.93-7.07-4.43-2.93-7.07-2.93c-2.63 0-5.21 1.07-7.07 2.93s-2.93 4.44-2.93 7.07 1.07 5.21 2.93 7.07 4.439 2.93 7.07 2.93z" fill="" data-original="" style=""></path></g></g></g></svg>
															</span>
														</div>
														<div class="box-title-wrap">
															<h3 class="box-title">
																Flexible Payment
															</h3>
															<p class="box-description">
																Pay with Multiple Credit Cards
															</p>
														</div>
													</div>
												</div>
												<div class="col-lg-3 col-md-6 col-sm-6 md-b-15 lg-p-lr">
													<div class="box">
														<div class="box-icon">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg-icon2 plant" x="0" y="0" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><g xmlns="http://www.w3.org/2000/svg"><g><path d="M384.834,180.699c-0.698,0-348.733,0-348.733,0l73.326-82.187c4.755-5.33,4.289-13.505-1.041-18.26    c-5.328-4.754-13.505-4.29-18.26,1.041l-82.582,92.56c-10.059,11.278-10.058,28.282,0.001,39.557l82.582,92.561    c2.556,2.865,6.097,4.323,9.654,4.323c3.064,0,6.139-1.083,8.606-3.282c5.33-4.755,5.795-12.93,1.041-18.26l-73.326-82.188    c0,0,348.034,0,348.733,0c55.858,0,101.3,45.444,101.3,101.3s-45.443,101.3-101.3,101.3h-61.58    c-7.143,0-12.933,5.791-12.933,12.933c0,7.142,5.79,12.933,12.933,12.933h61.58c70.12,0,127.166-57.046,127.166-127.166    C512,237.745,454.954,180.699,384.834,180.699z" fill="" data-original="" style=""></path></g></g></g></svg>
															</span>
														</div>
														<div class="box-title-wrap">
															<h3 class="box-title">
																14 Day Returns
															</h3>
															<p class="box-description">
																Within 30 days for an exchange.
															</p>
														</div>
													</div>
												</div>
												<div class="col-lg-3 col-md-6 col-sm-6 md-b-15 lg-p-lr">
													<div class="box">
														<div class="box-icon">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg-icon2 plant" x="0" y="0" viewBox="0 0 479.965 479.965" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><path xmlns="http://www.w3.org/2000/svg" d="m433.737 148.658-.135 232.91c-.012 22.527-23.058 37.706-43.805 28.854-10.328-4.417-4.09-19.158 6.31-14.704 10.146 4.33 21.489-3.028 21.495-14.16l.135-232.905c0-73.143-59.51-132.653-132.658-132.653h-70.684c-73.148 0-132.658 59.51-132.658 132.658l.046 84.339c.002 4.418-3.577 8.002-7.996 8.004-4.418.002-8.002-3.576-8.004-7.996l-.046-84.343c0-81.974 66.687-148.662 148.658-148.662h70.684c81.97 0 148.658 66.688 148.658 148.658zm-43.249 46.3c0-3.576-2.373-6.718-5.813-7.695-28.699-8.157-52.95-29.228-64.479-58.278-2.517-6.346-11.366-6.82-14.53-.746-12.747 24.464-32.552 44.98-58.176 58.619.114-10.951-2.578-22.012-8.212-32.027-2.812-4.998-9.796-5.469-13.283-.994-10.676 13.7-29.434 32.284-58.17 43.013-4.14 1.546-6.242 6.154-4.697 10.293 1.547 4.141 6.156 6.24 10.293 4.697 25.487-9.516 43.953-24.507 56.473-37.942 2.062 7.8 2.186 16.173.035 24.402-1.667 6.384 4.701 11.939 10.803 9.414 29.883-12.382 54.279-32.693 71.328-58.765 14.307 25.285 36.867 43.099 62.429 51.882v104.087c0 48.504-28.468 92.987-72.524 113.327-4.011 1.853-5.762 6.605-3.91 10.617 1.853 4.01 6.603 5.762 10.617 3.91 49.378-22.797 81.397-72.475 81.813-126.779.005-.179.003-110.857.003-111.035zm-154.324 195.644c-14.535-14.533-38.057-14.534-52.593 0-4.693 4.697-12.335 4.695-17.028 0l-31.007-31.005c-4.695-4.695-4.694-12.336.001-17.03 4.077-4.078 7.078-8.897 8.919-14.326 1.419-4.185-.822-8.727-5.007-10.146-4.183-1.42-8.727.822-10.146 5.007-1.045 3.083-2.755 5.824-5.082 8.151-10.932 10.934-10.932 28.723 0 39.657l31.007 31.006c10.935 10.934 28.725 10.932 39.657 0 8.279-8.281 21.684-8.281 29.964 0l14.647 14.646c8.28 8.28 8.282 21.683 0 29.964-23.261 23.263-61.109 23.261-84.368 0l-75.518-75.518c-23.261-23.26-23.261-61.108 0-84.368 8.261-8.263 21.702-8.263 29.963-.002l1.599 1.6c5.206 5.208 13.771 1.152 13.753-5.771l-.188-69.488c-.012-4.411-3.591-7.979-8-7.979-4.426 0-8.012 3.593-8 8.021l.147 54.248c-47.626-19.81-89.98 65.661-40.588 115.054l75.518 75.518c29.501 29.499 77.496 29.499 106.997 0 14.533-14.535 14.534-38.058-.001-52.593zm-18.427-113.602v-21c0-4.418-3.582-8-8-8s-8 3.582-8 8v21c0 4.418 3.582 8 8 8s8-3.582 8-8zm80-21c0-4.418-3.582-8-8-8s-8 3.582-8 8v21c0 4.418 3.582 8 8 8s8-3.582 8-8zm-30.8 81.6c-11.185 8.39-26.871 8.649-38.399.001-3.534-2.652-8.549-1.936-11.2 1.599s-1.936 8.549 1.599 11.2c17.277 12.963 40.807 12.596 57.601.001 3.535-2.651 4.251-7.666 1.601-11.2-2.655-3.537-7.671-4.252-11.202-1.601z" fill="" data-original="" style=""></path></g></svg>
															</span>
														</div>
														<div class="box-title-wrap">
															<h3 class="box-title">
																Online Support
															</h3>
															<p class="box-description">
																24 hours a day, 7 days a week
															</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div><!-- #content -->
					</div><!-- #primary -->
				</div><!-- #main-content -->
			</div>
			
		</div>
		<div id="page2">
        <div id="move">
            <div class="marque">
                <h1>RUPER FURNITURE</h1>
                <img src="https://www.brandium.nl/wp-content/uploads/2023/07/arrow-br.svg">
            </div>
            <div class="marque">
                <h1>RUPER FURNITURE</h1>
                <img src="https://www.brandium.nl/wp-content/uploads/2023/07/arrow-br.svg">
            </div>
            <div class="marque">
                <h1>RUPER FURNITURE</h1>
                <img src="https://www.brandium.nl/wp-content/uploads/2023/07/arrow-br.svg">
            </div>
            <div class="marque">
                <h1>RUPER FURNITURE</h1>
                <img src="https://www.brandium.nl/wp-content/uploads/2023/07/arrow-br.svg">
            </div>
            <div class="marque">
                <h1>RUPER FURNITURE</h1>
                <img src="https://www.brandium.nl/wp-content/uploads/2023/07/arrow-br.svg">
            </div>
        </div>
    </div>
<?php
    include pathOf('includes/footer.php');
    include pathOf('includes/scripts.php');
    include pathOf('includes/pageend.php');
?>