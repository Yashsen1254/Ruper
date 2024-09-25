<?php
require '../../includes/init.php';
$index = 0;
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
                                <h5 class="card-title">Categories Table</h5>
                                <a href="add.php" class="btn btn-outline-light">Add</a>
                                <table id="zero-conf" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Name</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($categories as $categorie): ?>
                                            <tr>
                                                <td><?= $index += 1 ?></td>
                                                <td><?= $categorie['Name'] ?></td>
                                                <form action="./update.php" method="post">
                                                    <td>
                                                        <input type="hidden" value="<?= $categorie['Id'] ?>" id="Id" name="Id">
                                                        <button type="submit" class="btn btn-outline-success">Update</button>
                                                    </td>
                                                </form>
                                                <td>
                                                    <button type="button" class="btn btn-outline-danger" onclick="deleteData(<?= $categorie['Id'] ?>)">Delete</button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Name</th>
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

<?php
    include pathOf('includes/scripts.php');
?>
<script>
    function deleteData(Id) {
        if (confirm("sure you want to delete this categorie"));
        $.ajax({
            url: "../../api/categories/delete.php",
            method: "POST",
            data: {
                Id: Id
            },
            success: function (response) {
                alert('Category Deleted');
                location.reload();
            }
        })
    }
</script>
<?php
    include pathOf('includes/pageend.php');
?>