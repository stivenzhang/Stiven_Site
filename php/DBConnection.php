<?php
function connection(){
    $host = "database";
    $user = "root";
    $password = 'tiger';
    $database = "Sistemi_Stiven_Zhang";
    $connection = new mysqli($host, $user, $password, $database, 3306);
    if($connection->connect_error)
        die();
    return $connection;
}