<?php
require '../../includes/init.php';

$index = 0;
// $payments = select("SELECT Payments.Id, Orders.*, Orders.Id AS 'OrderId' FROM Payments INNER JOIN Orders ON Payments.OrderId = Orders.Id");
$payments = select("SELECT Payments.Id, Orders.Id AS 'OrderId', Orders.TotalPrice, Checkouts.FirstName, Checkouts.Phone, Checkouts.StreetAddress FROM Payments INNER JOIN Orders ON Payments.OrderId = Orders.Id INNER JOIN Checkouts ON Orders.CartId = Checkouts.CartId");


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
                                <h5 class="card-title">Payment</h5>
                                <table id="zero-conf" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Name</th>
                                            <th>Number</th>
                                            <th>Address</th>
                                            <th>Total Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($payments as $payment): ?>
                                            <tr>
                                                <td><?= $index += 1 ?></td>
                                                <td><?= $payment['FirstName'] ?></td>
                                                <td><?= $payment['Phone'] ?></td>
                                                <td><?= $payment['StreetAddress'] ?></td>
                                                <td><?= $payment['TotalPrice'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Name</th>
                                            <th>Number</th>
                                            <th>Address</th>
                                            <th>Total Amount</th>
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