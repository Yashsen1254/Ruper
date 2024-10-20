<?php
require '../includes/init.php';

$ProductId = $_POST['Id'];
$products = selectOne("SELECT * FROM products WHERE Id = $ProductId");

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
                                <h1 class="text-title-heading"></h1>
                            </div>
                            <div class="breadcrumbs">
                                <a href="<?= urlOf('index.php') ?>">Home</a><span class="delimiter"></span><a href="<?= urlOf('pages/shop.php') ?>">Shop</a>
                            </div>
                        </div>
                    </div>
                    <div id="content" class="site-content" role="main">
                        <div class="shop-details zoom" data-product_layout_thumb="scroll" data-zoom_scroll="true" data-zoom_contain_lens="true" data-zoomtype="inner" data-lenssize="200" data-lensshape="square" data-lensborder="" data-bordersize="2" data-bordercolour="#f9b61e" data-popup="false">
                            <div class="product-top-info">
                                <div class="section-padding">
                                    <div class="section-container p-l-r">
                                        <div class="row">
                                            <div class="product-images col-lg-7 col-md-12 col-12">
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="scroll-image main-image">
                                                            <div class="image-additional slick-carousel" data-asnavfor=".image-thumbnail" data-fade="true" data-columns4="1" data-columns3="1" data-columns2="1" data-columns1="1" data-columns="1" data-nav="true">
                                                                <div class="img-item slick-slide">
                                                                    <img width="900" height="900" src="<?= urlOf('admin/assets/images/uploads/') . $products['ImageFileName'] ?>" alt="" title="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-info col-lg-5 col-md-12 col-12">
                                                <h1 class="title"><?= $products['Name'] ?></h1>
                                                <span class="price">
                                                    <span>₹<?= $products['Price'] ?></span>
                                                </span>
                                                <div class="description">
                                                    <p><?= $products['Description'] ?></p>
                                                </div>
                                                <div class="buttons">
                                                    <div class="add-to-cart-wrap">
                                                        <div class="quantity">
                                                            <button type="button" class="plus">+</button>
                                                            <input type="number" class="qty" step="1" min="0" max="" value="1" title="Qty" size="4" placeholder="" inputmode="numeric" autocomplete="off" id="Quantity" name="Quantity">
                                                            <button type="button" class="minus">-</button>
                                                        </div>
                                                    </div>
                                                    <div class="btn-quick-buy" data-title="Wishlist">
                                                        <button class="product-btn" onclick="addToCart(<?= $products['Id'] ?>)">Add To Cart</button>
                                                    </div>
                                                    <div class="btn-wishlist" data-title="Wishlist">
                                                        <button class="product-btn" onclick="addToWishlist(<?= $products['Id'] ?>)">Add to wishlist</button>
                                                    </div>
                                                </div>
                                                <div class="product-meta">
                                                    <span class="posted-in">Category: <a href="#" rel="tag"><?= $products['CategoryId'] ?></a></span>
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

        <!-- Wishlist Modal -->
        <div class="modal fade" id="wishlistModal" tabindex="-1" aria-labelledby="wishlistModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="wishlistModalLabel">Success</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Product added to Wishlist!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add to Cart Modal -->
        <div class="modal fade" id="addtocartmodal" tabindex="-1" aria-labelledby="addtocartModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addtocartModalLabel">Success</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Product added to Cart!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include pathOf('includes/footer.php');
        include pathOf('includes/scripts.php');
        ?>

        <script>
            function addToCart(ProductId) {
                var isLoggedIn = <?= isset($_SESSION['UserId']) ? 'true' : 'false' ?>;
                var UserId = <?= isset($_SESSION['UserId']) ? $_SESSION['UserId'] : 'null' ?>;
                console.log(ProductId);
                console.log(UserId);
                var Quantity = $("#Quantity").val();

                if (!isLoggedIn) {
                    alert("Please log in to add products to the cart.");
                    window.location.href = "./login.php";
                    return;
                }

                $.ajax({
                    url: '../admin/api/carts/insert.php',
                    type: 'POST',
                    data: {
                        ProductId: ProductId,
                        UserId: UserId,
                        Quantity: Quantity
                    },
                    success: function(response) {
                        console.log(response.success);
                        $('#addtocartmodal').modal('show'); // Corrected selector
                    }
                });
            }

            function addToWishlist(ProductId) {
                var isLoggedIn = <?= isset($_SESSION['UserId']) ? 'true' : 'false' ?>;
                var UserId = <?= isset($_SESSION['UserId']) ? $_SESSION['UserId'] : 'null' ?>;
                console.log(ProductId);
                console.log(UserId);

                if (!isLoggedIn) {
                    alert("Please log in to add products to the wishlist.");
                    window.location.href = "./login.php";
                    return;
                }

                $.ajax({
                    url: '../admin/api/wishlists/insert.php',
                    type: 'POST',
                    data: {
                        ProductId: ProductId,
                        UserId: UserId
                    },
                    success: function(response) {
                        console.log(response.success);
                        $('#wishlistModal').modal('show');
                    }
                });
            }
        </script>
        
        <?php
        include pathOf('includes/pageend.php');
        ?>
