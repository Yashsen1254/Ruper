<?php
require '../includes/init.php';

$products = select('SELECT * FROM products WHERE IsDeleted = 1');

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
                                <h1 class="text-title-heading">Home Products</h1>
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
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="layout-grid" role="tabpanel">
                                                <div class="products-list grid">
                                                    <div class="row">
                                                        <?php foreach ($products as $product): ?>
                                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                                                <div class="products-entry clearfix product-wapper">
                                                                    <div class="products-thumb">
                                                                        <div class="product-thumb-hover">
                                                                            <a href="">
                                                                                <img width="600" height="600" src="<?= urlOf('admin/assets/images/uploads/') . $product['ImageFileName'] ?>" class="post-image" alt="">
                                                                                <img width="600" height="600" src="<?= urlOf('admin/assets/images/uploads/') . $product['ImageFileName'] ?>" class="hover-image back" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-button">
                                                                            <div class="btn-wishlist" data-title="Wishlist">
                                                                                <button type="submit" class="product-btn" onclick="addToWishlist(<?= $product['Id'] ?>)">Add to wishlist</button>
                                                                            </div>
                                                                            <div class="btn-compare" data-title="Add To Cart">
                                                                                <form action="./shop-details.php" method="post">
                                                                                    <input type="hidden" value="<?= $product['Id'] ?>" id="Id" name="Id">
                                                                                    <button type="submit" class="product-btn">Update</button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="products-content">
                                                                        <div class="contents text-center">
                                                                            <h3 class="product-title"><a href=""><?= $product['Name'] ?></a></h3>
                                                                            <span class="price">₹<?= $product['Price'] ?></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>
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

    <!-- Bootstrap Modal -->
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
    <?php
    include pathOf('includes/footer.php');
    include pathOf('includes/scripts.php');
    ?>
    <script>
        function addToWishlist(ProductId) {
            var isLoggedIn = <?= isset($_SESSION['UserId']) ? 'true' : 'false' ?>;
            var UserId = <?= isset($_SESSION['UserId']) ? $_SESSION['UserId'] : 'null' ?>;

            // Check if the user is not logged in
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