<?php

    require '../../includes/init.php';
    header('Content-Type: application/json');

    $Id = $_POST['Id'];

    $query = "INSERT INTO payments (OrderId) VALUES (?)";
    $param = [$Id];

    execute($query, $param);

    echo json_encode(["status" => "success", "message" => "Payment Inserted Successfully"]);

?>