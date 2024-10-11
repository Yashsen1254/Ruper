<?php

require '../../includes/init.php';
header("Content-type:application/json");

$Username = $_POST['UserName'];
$Password = $_POST['Password'];

$query = "SELECT * FROM admins WHERE UserName = ? AND Password = ?";
$params = [$Username, $Password];

$result = selectOne($query, $params);
if ($result) {
    echo json_encode(["success" => true]);
    $_SESSION['LoggedIn'] = true;
    $_SESSION['UserId'] = $result['Id'];
} else {
    echo json_encode(["success" => false]);
}

?>