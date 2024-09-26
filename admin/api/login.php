<?php

require '../includes/init.php';
header("Content-type:application/json");

$Email = $_POST['Email'];
$Password = $_POST['Password'];

$query = "SELECT * FROM Clients WHERE Email =? AND Password =?";
$params = [$Email, $Password];

$result = selectOne($query, $params);
if ($result) {
    echo json_encode(["success" => true]);
    $_SESSION['LoggedIn'] = true;
    $_SESSION['UserId'] = $result['Id'];
} else {
    echo json_encode(["success" => false]);
}