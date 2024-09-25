<?php
require '../../includes/init.php';

$index = 0;
$wishlists = select("SELECT Wishlists.Id, Products.Name AS 'ProductName', Clients.Name AS 'ClientsName' FROM Products INNER JOIN Wishlists ON Wishlists.ProductId = Products.Id INNER JOIN Clients ON Wishlists.ClientId = Clients.Id");

include pathOf('includes/header.php');
include pathOf('includes/sidebar.php');
include pathOf('includes/navbar.php');
?>

<body class="page-sidebar-collapsed">


    <div class="page-container">
        <div class="page-content">
            <div class="main-wrapper">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Wishlist</h5>
                                <table id="zero-conf" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Product</th>
                                            <th>Client</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($wishlists as $wishlist): ?>
                                            <tr>
                                                <td><?= $index += 1 ?></td>
                                                <td><?= $wishlist['ProductName'] ?></td>
                                                <td><?= $wishlist['ClientsName'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Product</th>
                                            <th>Client</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include pathOf('includes/scripts.php');
        include pathOf('includes/pageend.php');
        ?>