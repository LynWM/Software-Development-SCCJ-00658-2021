<?php

$Username = $_POST['Username'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];

$conn = new mysqli('localhost', 'root', '', 'zenplanner');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into users(username, email, password) 
    values(?, ?, ?)");
    $stmt->bind_param("sss", $Username, $Email, $Password);
    $stmt->execute();
    echo "Account Created";
    $stmt->close();
    $conn->close();
}



?>