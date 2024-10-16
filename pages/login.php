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
                                <h1 class="text-title-heading">Login</h1>
                            </div>
                            <div class="breadcrumbs">
                                <a href="<?= urlOf('index.php') ?>">Home</a><span class="delimiter"></span>Login
                            </div>
                        </div>
                    </div>
                    <div id="content" class="site-content" role="main">
                        <div class="container">
                            <div class="row justify-content-center align-items-center min-vh-100">
                                <div class="col-lg-6 col-md-8 col-sm-10">
                                    <div class="card shadow p-4">
                                        <h2 class="text-center mb-4">Login</h2>
                                        <form method="post" class="login">
                                            <div class="form-group">
                                                <label for="username">Email<span class="required">*</span></label>
                                                <input type="email" class="form-control" name="Email" id="Email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password <span class="required">*</span></label>
                                                <input type="password" class="form-control" name="Password" id="Password" required>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary w-100" onclick="sendData()">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- #content -->
                </div><!-- #primary -->
            </div><!-- #main-content -->
        </div>
<?php
    include pathOf('includes/footer.php');
    include pathOf('includes/scripts.php');
    ?>
        <script>
    function sendData() {
        var data = {
            Email: $('#Email').val(),
            Password: $('#Password').val()
        }

        $.post('../admin/api/login.php', data, function (response) {
            console.log(response);
            if (response.success !== true)
                return;

			window.location.href = '../index.php';
        });
    }
</script>

    <?php
    include pathOf('includes/pageend.php');
?>
