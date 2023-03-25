<?php
include_once  "DBConnection.php";
$connection = connection();
$username = $_POST['username'];
$password = $_POST['password'];
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
$query = "select * from users where username = ?";
$statement = $connection->prepare($query);
$statement->bind_param("s", $username);
$statement->execute();
$queried = $statement->get_result();
if(!isset($queried->fetch_assoc()['id'])){
    $query = "insert into users (users.username, users.password) values (?, ?)";
    $statement = $connection->prepare($query);
    $statement->bind_param("ss", $username, $hashedPassword);
    $queried = $statement->execute();
}else{
    header("Location: ../registration.php");
    return "User already registered";
}
$connection->close();
header("Location: ../login.php");
die();