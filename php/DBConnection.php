<?php
function connection(){
    $host = "database";
    $user = "root";
    $password = '$_ENV["MYSQL_ROOT_PASSWORD"]';
    $connection = new mysqli($host, $user, $password, NULL);
    if($connection->connect_error){
        die();
    }
    return $connection;
}