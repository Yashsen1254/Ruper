<?php
require 'includes/init.php'; // Include the init.php to access the functions
include pathOf('includes/header.php');
include pathOf('includes/sidebar.php');
include pathOf('includes/navbar.php');

// Fetch totals using the functions defined in init.php
$totalProducts = selectOne("SELECT COUNT(*) AS count FROM Products")['count'];
$totalClients = selectOne("SELECT COUNT(*) AS count FROM Clients")['count'];
$totalCategories = selectOne("SELECT COUNT(*) AS count FROM Categories")['count'];
$totalOrders = selectOne("SELECT COUNT(*) AS count FROM Orders")['count'];
$totalSales = selectOne("SELECT SUM(TotalPrice) AS total FROM Orders")['total'] ?? 0; // Default to 0 if NULL

// Fetch weekly sales
$totalWeeklySales = selectOne("SELECT SUM(TotalPrice) AS total FROM Orders WHERE DATE(date) >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)")['total'] ?? 0;

// Fetch monthly sales
$totalMonthlySales = selectOne("SELECT SUM(TotalPrice) AS total FROM Orders WHERE MONTH(date) = MONTH(CURDATE()) AND YEAR(date) = YEAR(CURDATE())")['total'] ?? 0;

// Fetch yearly sales
$totalYearlySales = selectOne("SELECT SUM(TotalPrice) AS total FROM Orders WHERE YEAR(date) = YEAR(CURDATE())")['total'] ?? 0;

?>
<body class="page-sidebar-collapsed">
    <div class="page-container">
        <div class="page-content">
            <div class="main-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card stats-card">
                                    <div class="card-body">
                                        <div class="stats-info">
                                            <h5 class="card-title"><?php echo number_format($totalProducts); ?></h5>
                                            <p class="stats-text">Total Products</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card stats-card">
                                    <div class="card-body">
                                        <div class="stats-info">
                                            <h5 class="card-title"><?php echo number_format($totalClients); ?></h5>
                                            <p class="stats-text">Total Clients</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card stats-card">
                                    <div class="card-body">
                                        <div class="stats-info">
                                            <h5 class="card-title"><?php echo number_format($totalCategories); ?></h5>
                                            <p class="stats-text">Total Categories</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card stats-card">
                                    <div class="card-body">
                                        <div class="stats-info">
                                            <h5 class="card-title"><?php echo number_format($totalOrders); ?></h5>
                                            <p class="stats-text">Total Orders</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card stats-card">
                                    <div class="card-body">
                                        <div class="stats-info">
                                            <h5 class="card-title">₹<?php echo number_format($totalWeeklySales); ?></h5>
                                            <p class="stats-text">Total Weekly Sales</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card stats-card">
                                    <div class="card-body">
                                        <div class="stats-info">
                                            <h5 class="card-title">₹<?php echo number_format($totalMonthlySales); ?></h5>
                                            <p class="stats-text">Total Monthly Sales</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card stats-card">
                                    <div class="card-body">
                                        <div class="stats-info">
                                            <h5 class="card-title">₹<?php echo number_format($totalYearlySales); ?></h5>
                                            <p class="stats-text">Total Yearly Sales</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card stats-card">
                                    <div class="card-body">
                                        <div class="stats-info">
                                            <h5 class="card-title">₹<?php echo number_format($totalSales); ?></h5>
                                            <p class="stats-text">Total Payment Received</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
include pathOf('includes/scripts.php');
?>
