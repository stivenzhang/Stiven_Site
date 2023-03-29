<?php
include_once "DBConnection.php";
$connection = connection();
$id = $_POST["id"];
$query = "select username from users where id = $id";
$queried = $connection->query($query);
echo $queried->fetch_assoc()['username'];