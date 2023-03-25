<?php
include_once  "DBConnection.php";
$connection = connection();
$username = $_POST['username'];
$password = $_POST['password'];
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
$query = "select * from users where username like ? and password like ?";
$statement = $connection->prepare($query);
$statement->bind_param("ss", $username, $hashedPassword);
$statement->execute();
$queried = $statement->get_result();
if(isset($queried->fetch_assoc()["id"])){
    session_start();
    $_SESSION['id'] = $queried->fetch_assoc()["id"];
    header("Location: ../index.php");
}else{
    header("Location: ../login.php");
    return "Error 404";
}
$connection->close();
die();