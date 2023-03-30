<?php
function connection(){
    $host = "database";
    $user = "root";
    $password = 'tiger';
    $database = "Sistemi_Stiven_Zhang";
    $port = "3306";
    $connection = new mysqli($host, $user, $password, $database, $port);
    if($connection->connect_error)
        die();
    return $connection;
}