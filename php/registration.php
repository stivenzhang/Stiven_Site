<?php
include_once  "DBConnection.php";
$connection = connection();
$username = mysqli_real_escape_string($connection, $_POST['username']);
$password = mysqli_real_escape_string($connection, trim($_POST['password']).md5("sha256md5"));
$hashedPassword = password_hash($password, PASSWORD_BCRYPT, ['cost' => 13,]);
$query = "select * from users where username = ?";
$statement = $connection->prepare($query);
$statement->bind_param("s", $username);
$statement->execute();
$queried = $statement->get_result();
if(!isset($queried->fetch_assoc()['id'])){
    $query = "insert into users (username, password) values (?, ?)";
    $statement = $connection->prepare($query);
    $statement->bind_param("ss", $username, $hashedPassword);
    $queried = $statement->execute();
}else
    http_response_code(406);
$connection->close();
die();