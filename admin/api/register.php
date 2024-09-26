<?php
    require '../includes/init.php';
    header('Content-Type: application/json');

    $Name = $_POST['Name'];
    $Username = $_POST['UserName'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $query = "INSERT INTO Clients (Name, UserName, Email, Password) VALUES (?, ?, ?, ?)";
    $param = [$Name, $Username, $Email, $Password];

    execute($query, $param);

    echo json_encode(['success' => true]);
?>