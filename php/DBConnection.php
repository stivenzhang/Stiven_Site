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
    $query = "delete from users";
    $connection->query($query);
    return $connection;
}