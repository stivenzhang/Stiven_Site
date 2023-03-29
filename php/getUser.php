<?php
include_once "DBConnection.php";
$connection = connection();
$id = $_POST["id"];
$query = "select username from users where id = '$id'";
$queried = $connection->query($query);
echo $queried;
$row = $queried->fetch_assoc();
if(!is_null($row['username']))
    echo $row['username'];
else
    http_response_code(404);