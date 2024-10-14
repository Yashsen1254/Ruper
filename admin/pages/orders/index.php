<?php
require '../../includes/init.php';

$index = 0;
$orders = select("SELECT Orders.Id, Orders.TotalQuantity, Orders.TotalPrice, Orders.Status, Carts.ProductId AS 'ProductId', Carts.ClientId AS 'ClientId', Clients.UserName AS 'ClientName', Products.Name AS 'ProductName' FROM Orders INNER JOIN Carts ON Orders.CartId = Carts.Id INNER JOIN Clients ON Carts.ClientId = Clients.Id INNER JOIN Products ON Carts.ProductId = Products.Id");

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
                                <h5 class="card-title">Order</h5>
                                <table id="zero-conf" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Client</th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($orders as $order) : ?>
                                            <tr>
                                                <td><?= $index += 1 ?></td>
                                                <td><?= $order['ClientName'] ?></td>
                                                <td><?= $order['ProductName'] ?></td>
                                                <td><?= $order['TotalQuantity'] ?></td>
                                                <td><?= $order['TotalPrice'] ?></td>
                                                <td><?= $order['Status'] ?></td>
                                                <input type="hidden" value="<?= $order['Id'] ?>" id="orderId">
                                                <td><button class="btn btn-outline-success" onclick="insertData(<?= $order['Id'] ?>)">Delevered</button></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Client</th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" tabindex="-1" id="success">
            <div class="modal-dialog">
                <div class="modal-content bg-dark">
                    <div class="modal-header text-white">
                        <h5 class="modal-title">Order Success</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-success">Success</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" tabindex="-1" id="error">
            <div class="modal-dialog">
                <div class="modal-content bg-dark">
                    <div class="modal-header text-white">
                        <h5 class="modal-title">Error</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger">Error</button>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include pathOf('includes/scripts.php');
        ?>
        <script>
            function insertData(Id) {
                $.ajax({
                    url: '../../api/orders/update.php',
                    type: 'POST',
                    data: {
                        Id: Id,
                    },
                    success: function(response) {
                        $("#error").modal("show");
                        location.reload();
                    },
                    error: function(response) {
                        $("#success").modal("show");
                        location.reload();
                    }
                });
            }
        </script>
        <?php
        include pathOf('includes/pageend.php');
        ?>