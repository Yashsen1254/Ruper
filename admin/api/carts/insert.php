<?php

    require '../../includes/init.php';
    header('Content-Type: application/json');

    $ProductId = $_POST['ProductId'];
    $UserId = $_POST['UserId'];

    $query = "INSERT INTO carts (ProductId, UserId) VALUES (?, ?)";
    $param = [$ProductId, $UserId];

    execute($query, $param);

    echo json_encode(["status" => "success", "message" => "Cart Submitted Successfully"]);

?>