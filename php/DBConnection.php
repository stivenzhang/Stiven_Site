<?php
function connection(){
    //$host = "database";
    $host = "localhost";
    $user = "root";
    $password = 'tiger';
    $database = "Sistemi_Stiven_Zhang";
    $connection = new mysqli($host, $user, $password, $database, 8080);
    if($connection->connect_error)
        die();
    return $connection;
}