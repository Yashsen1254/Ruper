<?php

    require '../../includes/init.php';
    header('Content-Type: application/json');

    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $UserName = $_POST['UserName'];
    $Password = $_POST['Password'];

    $query = "INSERT INTO admins (Name,Email,UserName,Password) VALUES (?,?,?,?)";
    $param = [$Name, $Email, $UserName, $Password];

    execute($query, $param);

    echo json_encode(["status" => "success", "message" => "Admin Submitted Successfully"]);

?>