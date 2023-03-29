<?php
function connection(){
    //For aws
    $host = "database";
    //$host = "localhost";
    $user = "root";
    //For aws
    $password = 'tiger';
    //$password = 'root';
    $database = "sistemi_stiven_zhang";
    $port = "3306";
    $connection = new mysqli($host, $user, $password, $database, $port);
    if($connection->connect_error)
        die();
    return $connection;
}