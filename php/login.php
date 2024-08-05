<?php
include_once  "DBConnection.php";
$connection = connection();
$username = mysqli_real_escape_string($connection, $_POST['username']);
$password = mysqli_real_escape_string($connection, trim($_POST['password']).md5("sha256md5"));
$query = "select * from users where username like ?";
$statement = $connection->prepare($query);
$statement->bind_param("s", $username);
$statement->execute();
$queried = $statement->get_result();
$row = $queried->fetch_assoc();
if(password_verify($password, $row['password'])){
    echo $row["id"];
}else{
    http_response_code(404);
}
$connection->close();
die();