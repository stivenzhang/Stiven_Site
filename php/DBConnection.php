<?php
function connection(){
    $host = "database";
    $user = "root";
    $password = 'tiger';
    $database = "Sistemi_Stiven_Zhang";
    $connection = new mysqli($host, $user, $password, $database);
    if($connection->connect_error){
        die();
    }
    $query = "create table users (
        id int auto_increment primary key,
        username varchar(50),
        password varchar(64)
    )";
    $connection->query($query);

    return $connection;
}