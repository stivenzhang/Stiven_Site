<?php
function connection(){
    $host = "database";
    $user = "root";
    //For the aws
    //$password = 'tiger';
    $password = 'root';
    $database = "Sistemi_Stiven_Zhang";
    $connection = new mysqli($host, $user, $password, $database);
    if($connection->connect_error)
        die();
    return $connection;
}