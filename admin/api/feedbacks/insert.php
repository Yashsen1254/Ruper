<?php
require '../../includes/init.php';
header('Content-Type: application/json');

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];

$queery = "INSERT INTO Feedback (Name, Email, Message) VALUES(?,?,?)";
$param = [$Name, $Email, $Message];

execute($queery, $param);

echo json_encode(["status" => "success", "message" => "Feedback Submitted Successfully"]);
?>