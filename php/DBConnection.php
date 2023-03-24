<?php
function connection(){
    $host = "127.0.0.1";
    $user = "root";
    $password = "tiger";
    $port = "3306";
    $connection = new mysqli($host, $user, $password, NULL , $port);
    if($connection->connect_error){
        die();
    }
    return $connection;
}