<?php
include_once  "DBConnection.php";
$connection = connection();
$username = $_POST['username'];
$password = $_POST['password'];
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
$query = "select * from users where username = ?";
$statement = $connection->prepare($query);
$statement->bind_param("s", $username);
$queried = $statement->execute();
if(count($queried->fetch_assoc()) == 0){
    $query = "insert into users (username, password) values (?, ?)";
    $statement = $connection->prepare($query);
    $statement->bind_param("ss", $username, $hashedPassword);
    $queried = $statement->execute();
}else{
    http_response_code(400);
    return "User already registered";
}
$connection->close();
header("Location: ../login.php");
die();