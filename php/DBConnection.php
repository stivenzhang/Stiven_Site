<?php
function connection(){
    $host = "localhost";
    $user = "root";
    $password = "tiger";
    $port = "3306";
    $connection = new mysqli($host, $user, $password, $port);
    if($connection->connect_error){
        die();
    }
    return $connection;
}