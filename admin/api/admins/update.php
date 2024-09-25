<?php
    require '../../includes/init.php';
    header('Content-Type: application/json');

    $Id = $_POST['Id'];
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $UserName = $_POST['UserName'];
    $Password = $_POST['Password'];

    $query = "UPDATE admins SET Name = ?, Email = ?, UserName = ?, Password = ? WHERE Id = ?";
    $param = [$Name, $Email, $UserName, $Password, $Id];

    $result = execute($query, $param);

    if($result) {
        echo json_encode(["status" => "success", "message" => "Admin Updated Successfully"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Something Went Wrong"]);
    }
?>