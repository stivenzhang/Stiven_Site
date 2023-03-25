<?php
include_once  "DBConnection.php";
$connection = connection();
$username = $_POST['username'];

$password = trim($_POST['password']).md5("sha256md5");
$hashedPassword = hash("sha256", $password);
$query = "select * from users where username like ? and password like ?";
$statement = $connection->prepare($query);
$statement->bind_param("ss", $username, $hashedPassword);
$statement->execute();
$queried = $statement->get_result();
$row = $queried->fetch_assoc();
if(isset($row["id"])){
    session_start();
    $_SESSION['id'] = $row["id"];
}else
    http_response_code(404);
$connection->close();
die();