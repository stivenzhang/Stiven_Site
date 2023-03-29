<?php
function connection(){
    //For aws
    $host = "database";
    //$host = "localhost";
    $user = "root";
    //For aws
    $password = 'tiger';
    //$password = 'root';
    $database = "Sistemi_Stiven_Zhang";
    $connection = new mysqli($host, $user, $password, $database);
    if($connection->connect_error)
        die();
    return $connection;
}