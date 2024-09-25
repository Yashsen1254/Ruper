<?php
    require '../../includes/init.php';
    $index = 0;
    $roles = select("SELECT * FROM roles");

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
                                <h5 class="card-title">Roles Table</h5>
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
                                      <?php foreach($roles as $role): ?>
                                        <tr>
                                            <td><?= $index += 1 ?></td>
                                            <td><?= $role['Name'] ?></td>
                                            <form action="./update.php" method="post">
                                                <td>
                                                    <input type="hidden" value="<?= $role['RoleId'] ?>" id="RoleId" name="RoleId">
                                                    <button type="submit" class="btn btn-outline-success">update</button>
                                                </td>
                                            </form>
                                            <td>
                                              <button type="button" class="btn btn-outline-danger" onclick="deleteData(<?= $role['RoleId'] ?>)">Delete</button>
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
        if(confirm("Are you sure you want to delete this role?")) {
            $.ajax({
                url: '../../api/roles/delete.php',
                type: 'POST',
                data: {
                    Id: Id
                },
                success: function(response) {
                  if(response == response.success) {
                    alert("Role deleted successfully");
                    location.reload();
                  } else {
                    alert("Role not deleted");
                  }
                }
            });
        }
      }
    </script>
    <?php
    include pathOf('includes/pageend.php');
?>