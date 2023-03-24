<?php
function connection(){
    $host = "database";
    $user = "root";
    $password = 'tiger';
    $connection = new mysqli($host, $user, $password, "Sistemi_Stiven_Zhang");
    if($connection->connect_error){
        die();
    }
    $query = "CREATE DATABASE Sistemi_Stiven_Zhang, use Sistemi_Stiven_Zhang";
    $connection->query($query);
    return $connection;
}