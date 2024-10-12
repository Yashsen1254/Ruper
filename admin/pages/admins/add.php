<?php
require '../../includes/init.php';
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
                                <h5 class="card-title">Add Admin</h5>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="Name" name="Name" autofocus>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="Email" name="Email">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">User Name</label>
                                    <input type="text" class="form-control" id="UserName" name="UserName">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="Password" name="Password">
                                </div>
                                <button type="submit" class="btn btn-outline-success" onclick="insertData()">Submit</button>
                            </div>
                        </div>
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
                    <h5 class="modal-title">Admin Inserted</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" tabindex="-1" id="error">
        <div class="modal-dialog">
            <div class="modal-content bg-dark">
                <div class="modal-header text-white">
                    <h5 class="modal-title">Admin Not Inserted</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php
    include pathOf('includes/scripts.php');
    ?>
    <script>
        function insertData() {
            var Name = $('#Name').val();
            var Email = $('#Email').val();
            var UserName = $('#UserName').val();
            var Password = $('#Password').val();

            if (!Name.trim() || !Email.trim() || !UserName.trim() || !Password.trim()) {
                $('#error').modal('show');
                setTimeout(function() {
                    $('#error').modal('hide');
                }, 2000);
                return;
            }
            $.ajax({
                url: '../../api/admins/insert.php',
                type: 'POST',
                data: {
                    Name: Name,
                    Email: Email,
                    UserName: UserName,
                    Password: Password
                },
                success: function(response) {
                    $("#success").modal('show');
                    window.location.href = 'index.php';
                }
            });
        }
    </script>
    <?php
    include pathOf('includes/pageend.php');
    ?>