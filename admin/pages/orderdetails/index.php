<?php
require '../../includes/init.php';

$index = 0;
$orderitems = select("SELECT Orderitems.Id, Orderitems.TotalQuantity, Orderitems.TotalPrice, Products.Name AS 'ProductName', Orders.Id AS 'OrderId' FROM Products INNER JOIN Orderitems ON Orderitems.ProductId = Products.Id INNER JOIN Orders ON Orderitems.OrderId = Orders.Id");

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
                                <h5 class="card-title">Order Items</h5>
                                <table id="zero-conf" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Order Id</th>
                                            <th>Product Name</th>
                                            <th>Total Quantity</th>
                                            <th>Total Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($orderitems as $orderitem): ?>
                                            <tr>
                                                <td><?= $index += 1 ?></td>
                                                <td><?= $orderitem['OrderId'] ?></td>
                                                <td><?= $orderitem['ProductName'] ?></td>
                                                <td><?= $orderitem['TotalQuantity'] ?></td>
                                                <td><?= $orderitem['TotalPrice'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Order Id</th>
                                            <th>Product Name</th>
                                            <th>Total Quantity</th>
                                            <th>Total Price</th>
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