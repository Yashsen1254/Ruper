<?php
require '../../includes/init.php';

$Id = $_POST['Id'];
$categories = selectOne("SELECT * FROM categories WHERE Id = $Id");

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
                                <h5 class="card-title">Update Categories</h5>
                                <input type="hidden" value="<?= $categories['Id'] ?>" id="Id">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="Name" name="Name" value="<?= $categories['Name'] ?>" autofocus>
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
                    <h5 class="modal-title">Category Updated</h5>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <div class="modal" tabindex="-1" id="error">
        <div class="modal-dialog">
            <div class="modal-content bg-dark">
                <div class="modal-header text-white">
                    <h5 class="modal-title">Category Not Updated</h5>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <?php
    include pathOf('includes/scripts.php');
    ?>
    <script>
        function insertData() {
            var Id = $('#Id').val();
            var Name = $('#Name').val();

            if (!Name.trim()) {
                $('#error').modal('show');
                setTimeout(function() {
                    $('#error').modal('hide');
                }, 2000);
                return;
            }

            $.ajax({
                url: '../../api/categories/update.php',
                type: 'POST',
                data: {
                    Id: Id,
                    Name: Name
                },
                success: function(response) {
                    $("#success").modal('show');
                    setTimeout(function() {
                        window.location.href = 'index.php';
                    }, 2000);
                },
                error : function(response) {
                    $("#error").modal('show');
                    setTimeout(function() {
                        $('#error').modal('hide');
                    }, 2000);
                }
            });
        }
    </script>
    <?php
    include pathOf('includes/pageend.php');
    ?>