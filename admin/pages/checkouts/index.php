<?php
require '../../includes/init.php';

$index = 0;
$checkouts = select('SELECT * FROM Checkouts');

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
                                <h5 class="card-title">Checkouts</h5>
                                <table id="zero-conf" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>ZipCode</th>
                                            <th>City</th>
                                            <th>Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($checkouts as $checkout): ?>
                                            <tr>
                                                <td><?= $index += 1 ?></td>
                                                <td><?= $checkout['FirstName'] ?></td>
                                                <td><?= $checkout['LastName'] ?></td>
                                                <td><?= $checkout['Email'] ?></td>
                                                <td><?= $checkout['Phone'] ?></td>
                                                <td><?= $checkout['ZipCode'] ?></td>
                                                <td><?= $checkout['City'] ?></td>
                                                <td><?= $checkout['StreetAddress'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>ZipCode</th>
                                            <th>City</th>
                                            <th>Address</th>
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