<?php
require '../../includes/init.php';
$index = 0;
$admins = select("SELECT * FROM admins");

include pathOf('includes/header.php');
include pathOf('includes/navbar.php');
include pathOf('includes/sidebar.php');
?>

<body class="page-sidebar-collapsed">
    <div class="page-container">
        <div class="page-content">
            <div class="main-wrapper">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Admin Table</h5>
                                <a href="add.php" class="btn btn-outline-light">Add</a>
                                <table id="zero-conf" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>UserName</th>
                                            <th>Password</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($admins as $admin): ?>
                                            <tr>
                                                <td><?= $index += 1 ?></td>
                                                <td><?= $admin['Name'] ?></td>
                                                <td><?= $admin['Email'] ?></td>
                                                <td><?= $admin['UserName'] ?></td>
                                                <td><?= $admin['Password'] ?></td>
                                                <form action="./update.php" method="post">
                                                    <td>
                                                        <input type="hidden" value="<?= $admin['Id'] ?>" id="Id" name="Id">
                                                        <button type="submit" class="btn btn-outline-success">Update</button>
                                                    </td>
                                                </form>
                                                <td>
                                                    <button type="button" class="btn btn-outline-danger" onclick="deleteData(<?= $admin['Id'] ?>)">Delete</button>
                                                </td>
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
                                            <th>Edit</th>
                                            <th>Delete</th>
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
                        <h5 class="modal-title">Admin Deleted</h5>
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
                        <h5 class="modal-title">Admin Not Deleted</h5>
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
            function deleteData(Id) {
                $.ajax({
                    url: "../../api/admins/delete.php",
                    method: "POST",
                    data: {
                        Id: Id
                    },
                    success: function(response) {
                        $("#success").modal("show");
                        location.reload();
                    },
                    error: function(response) {
                        $("#error").modal("show");
                        location.reload();
                    }
                })
            }
        </script>
        <?php
        include pathOf('includes/pageend.php');
        ?>