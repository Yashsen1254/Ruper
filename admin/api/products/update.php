<?php
require '../../includes/init.php';
header("Content-type:application/json");

$Id = $_POST['ProductId'];
$categoryId = $_POST['CategoryId'];
$Name = $_POST['Name'];
$Description = $_POST['Description'];
$Price = $_POST['Price'];
$Image = $_FILES['Image'];
$IsDeleted = 1;
$time = time();
$fileName = "$time-" . $_FILES['Image']['name'];
$tmpFileName = $_FILES['Image']['tmp_name'];
move_uploaded_file($tmpFileName, pathOf("assets/images/uploads/$fileName"));

$query = "UPDATE Products SET CategoryId=?, Name=?, Description=?, Price=?, ImageFileName=?, IsDeleted= ? WHERE Id=?";
$params = [$categoryId, $Name, $Description, $Price, $fileName,$IsDeleted, $Id];

$result = execute($query, $params);
if ($result)
    echo json_encode(["success" => true]);
else
    echo json_encode(["success" => false]);
?>