<?php

    require '../../includes/init.php';
    header('Content-Type: application/json');

    $CartId = $_POST['CartId'];
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $ZipCode = $_POST['ZipCode'];
    $City = $_POST['City'];
    $StreetAddress = $_POST['StreetAddress'];
    $TotalPrice = $_POST['TotalPrice'];

    $query = "INSERT INTO checkouts (CartId, FirstName, LastName, Email, Phone, ZipCode, City, StreetAddress, TotalPrice) VALUES (?,?,?,?,?,?,?,?,?)";
    $param = [$CartId, $FirstName, $LastName, $Email, $Phone, $ZipCode, $City, $StreetAddress, $TotalPrice];    

    execute($query, $param);

    echo json_encode(["status" => "success", "message" => "Categories Submitted Successfully"]);

?>