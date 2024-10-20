<?php
require '../../includes/init.php';

$index = 0;
$clients = select("SELECT * FROM clients");

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
                                <h5 class="card-title">Clients</h5>
                                <table id="zero-conf" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>UserName</th>
                                            <th>Password</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($clients as $client): ?>
                                            <tr>
                                                <td><?= $index += 1 ?></td>
                                                <td><?= $client['Name'] ?></td>
                                                <td><?= $client['Email'] ?></td>
                                                <td><?= $client['UserName'] ?></td>
                                                <td><?= $client['Password'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>UserName</th>
                                            <th>Password</th>
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