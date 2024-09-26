<?php
require '../includes/init.php';
include pathOf('includes/header.php');
include pathOf('includes/navbar.php');
?>

<body class="page">
    <div id="page" class="hfeed page-wrapper">

        <div id="site-main" class="site-main">
            <div id="main-content" class="main-content">
                <div id="primary" class="content-area">
                    <div id="title" class="page-title text-center">
                        <div class="section-container">
                            <div class="content-title-heading">
                                <h1 class="text-title-heading">Register</h1>
                            </div>
                            <div class="breadcrumbs">
                                <a href="<?= urlOf('index.php') ?>">Home</a><span class="delimiter"></span>Register
                            </div>
                        </div>
                    </div>

                    <div id="content" class="site-content" role="main">
                        <div class="container">
                            <div class="row justify-content-center align-items-center min-vh-100">
                                <div class="col-lg-6 col-md-8 col-sm-10">
                                    <div class="card shadow p-4">
                                        <h2 class="text-center mb-4">Register</h2>
                                            <div class="form-group">
                                                <label for="username">Name<span class="required">*</span></label>
                                                <input type="text" class="form-control" name="Name" id="Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="username">Email<span class="required">*</span></label>
                                                <input type="email" class="form-control" name="Email" id="Email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="username">Username<span class="required">*</span></label>
                                                <input type="text" class="form-control" name="UserName" id="UserName" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password <span class="required">*</span></label>
                                                <input type="password" class="form-control" name="Password" id="Password" required>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary w-100" onclick="insertData()">Register</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- #content -->
                </div><!-- #primary -->
            </div><!-- #main-content -->
        </div>
        <script>
            function insertData() {
                var Name = $('#Name').val();
                var UserName = $('#UserName').val();
                var Email = $('#Email').val();
                var Password = $('#Password').val();

                $.ajax({
                    url: '../admin/api/register.php',
                    type: 'POST',
                    data: {
                        Name: Name,
                        UserName: UserName,
                        Email: Email,
                        Password: Password
                    },
                    success: function(response) {
                        alert("Client Added");
                        window.location.herf = './login.php';
                    }
                });
            }
        </script>
<?php
    include pathOf('includes/footer.php');
    include pathOf('includes/scripts.php');
    include pathOf('includes/pageend.php');
?>