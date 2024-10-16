<?php
require '../includes/init.php';
if(isset($_SESSION['UserId'])) {
$ClientId = $_SESSION['UserId'];
$wishlists = select("SELECT wishlists.*, products.Name, products.Price, products.ImageFileName, products.Id AS 'ProductId' FROM wishlists JOIN products ON wishlists.ProductId = products.Id WHERE wishlists.ClientId = $ClientId");
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
                                            <?php if(isset($_SESSION['UserId'])) { 
                                            foreach ($wishlists as $wishlist): ?>
                                            <tr class="wishlist-item">
                                                <td class="wishlist-item-remove">
												<button onclick="deleteWishlistItem(<?= $wishlist['Id'] ?>)">X</button>
												</td>
                                                <td class="wishlist-item-image">
                                                    <a href="shop-details.html">
                                                        <img width="600" height="600" src="<?= urlOf('admin/assets/images/uploads/') . $wishlist['ImageFileName'] ?>" alt="">
                                                    </a>
                                                </td>
                                                <input type="hidden" value="1" id="Quantity">
                                                <td class="wishlist-item-info">
                                                    <div class="wishlist-item-name">
                                                        <a href="shop-details.html"><?= $wishlist['Name'] ?></a>
                                                    </div>
                                                    <div class="wishlist-item-price">
                                                        <span>₹<?= $wishlist['Price'] ?></span>
                                                    </div>
                                                </td>
                                                <td>
													<button onclick="addToCart(<?= $wishlist['ProductId'] ?>)">Add to cart</button>
                                                </td>
                                            </tr>
                                            <?php endforeach; }?>
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
        ?>
        <script>
            function addToCart(ProductId) {
                var isLoggedIn = <?= isset($_SESSION['UserId']) ? 'true' : 'false' ?>;
                var UserId = <?= isset($_SESSION['UserId']) ? $_SESSION['UserId'] : 'null' ?>;
                console.log(ProductId);
                console.log(UserId);
                var Quantity = $("#Quantity").val();
                if (!isLoggedIn) {
                    alert('Please log in to add items to the cart');
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
                        alert("Product added to cart");
                        location.reload();
                    }
                });

                $.ajax({
                    url: '../admin/api/wishlists/delete.php',
                    type: 'POST',
                    data: {
                        Id: ProductId
                    },
                    success: function(response) {
                        location.reload();
                    }
                })
            }

			function deleteWishlistItem(Id) {
					$.ajax({
						url: "../admin/api/wishlists/delete.php",
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

        <?php
        include pathOf('includes/pageend.php');
        ?>