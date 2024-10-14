<?php

require '../../includes/init.php';
header('Content-Type: application/json');

$Id = $_POST['Id'];

$query = "UPDATE orders SET Status = 'Delevered' WHERE Id = ?";
$param = [$Id];

execute($query, $param);

echo json_encode(["status" => "success", "message" => "Order Updated Successfully"]);

$paymentquery = "INSERT INTO Payments (OrderId) VALUES (?)";
$paymentparam = [$Id];

execute($paymentquery, $paymentparam);
echo json_encode(["status" => "success", "message" => "Payment Added Successfully"]);

?>