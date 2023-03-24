<?php
include_once  "DBConnection.php";
$connection = connection();
$username = $_POST['username'];
$password = $_POST['password'];
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
$query = "select * from users where username like ? and password like ?";
$statement = $connection->prepare($query);
$statement->bind_param("ss", $username, $hashedPassword);
$queried = $statement->execute();
if(count($queried->fetch_assoc()) != 0){
    header("Location: ../index.php");
}else{
    http_response_code(404);
    return "Error 404";
}
$connection->close();
die();