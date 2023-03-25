<?php
include_once  "DBConnection.php";
$connection = connection();
$username = $_POST['username'];
$password = trim($_POST['password']).md5("sha256md5");
$hashedPassword = hash("sha256", $password);
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
}else
    http_response_code(406);
$connection->close();
die();