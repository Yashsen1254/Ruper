<?php

    require '../../includes/init.php';
    header('Content-Type: application/json');

    $ProductId = $_POST['ProductId'];
    $ClientId = $_POST['UserId'];

    $query = "INSERT INTO carts (ProductId, ClientId) VALUES (?, ?)";
    $param = [$ProductId, $ClientId];

    execute($query, $param);

    echo json_encode(["status" => "success", "message" => "Cart Submitted Successfully"]);

?>