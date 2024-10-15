<?php
require '../../includes/init.php';

$Id = $_POST['ProductId'];
$products = selectOne("SELECT * FROM products WHERE Id = '$Id'");
$categories = select("SELECT * FROM categories");

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
                                <h5 class="card-title">Insert Products</h5>
                                <label for="exampleInputEmail1" class="form-label">Category</label>
                                <div class="mb-3">
                                    <select class="form-select" id="CategoryId">
                                        <?php foreach ($categories as $category): ?>
                                            <option value="<?= $category['Id'] ?>"> <?= $category['Name'] ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <input type="hidden" id="ProductId" name="ProductId" value="<?= $products['Id'] ?>">
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" id="Name" name="Name" value="<?= $products['Name'] ?>" autofocus>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <input type="text" class="form-control" id="Description" name="Description" value="<?= $products['Description'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Price</label>
                                    <input type="number" class="form-control" id="Price" name="Price" value="<?= $products['Price'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Main Image</label><br>
                                    <img src="<?= urlOf('assets/images/uploads/') . $products['ImageFileName'] ?>" style="height: 250px; width: 350px;">
                                    <input class="form-control" type="file" id="Image" value="<?= $products['ImageFileName'] ?>">
                                </div>
                                <button type="button" class="btn btn-outline-success" onclick="insertData()">Submit</button>
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
                    <h5 class="modal-title">Product Updated</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" tabindex="-1" id="error">
        <div class="modal-dialog">
            <div class="modal-content bg-dark">
                <div class="modal-header text-white">
                    <h5 class="modal-title">Product Not Updated</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php
    include pathOf('includes/scripts.php');
    ?>
    <script>
        function insertData() {
            var form = new FormData();
            form.append('ProductId', $('#ProductId').val()); // Add Product ID
            form.append('CategoryId', $('#CategoryId').val());
            form.append('Name', $('#Name').val());
            form.append('Description', $('#Description').val());
            form.append('Price', $('#Price').val());
            form.append('Image', $('#Image')[0].files[0]);

            $.ajax({
                url: '../../api/products/update.php',
                method: 'POST',
                data: form,
                processData: false,
                contentType: false,
                success: function(response) {
                    $("#success").modal('show');
                    setTimeout(function() {
                        window.location.href = 'index.php';
                    }, 2000);
                },
                error: function(response) {
                    $("#error").modal('show');
                    setTimeout(function() {
                        $('#error').modal('hide');
                    }, 2000);
                }
            })
        }
    </script>
    <?php
    include pathOf('includes/pageend.php');
    ?>
