<?php

    require '../../includes/init.php';
    header('Content-Type: application/json');

    $ProductId = $_POST['ProductId'];
    $ClientId = $_POST['UserId'];
    $Quantity = $_POST['Quantity'];

    $query = "INSERT INTO carts (ProductId, ClientId, Quantity) VALUES (?, ?, ?)";
    $param = [$ProductId, $ClientId, $Quantity];

    execute($query, $param);

    echo json_encode(["status" => "success", "message" => "Cart Submitted Successfully"]);

?>