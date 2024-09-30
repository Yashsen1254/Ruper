<?php
    $cartData = select("SELECT * FROM Carts WHERE Id = $CartId");
    $quantity = $cartData[0]['Quantity'];
    $query = "INSERT INTO Orders (CartId, TotalQuantity, TotalPrice, Status) VALUES (?,?,?,?)";
    $param = [$CartId, $quantity, $TotalPrice, "Pending"];
    execute($query, $param);
    echo json_encode(["status" => "success", "message" => "Order Submitted Successfully"]);
?>