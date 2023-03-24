<?php
include_once  "DBConnection.php";
$connection = connection();
$query = "create schema if not exists Sistemi_Stiven_Zhang, 
          use Sistemi_Stiven_Zhang,
          create table if not exists users(
            id int primary key auto_increment,
            username varchar(50),
            password varchar(64)
          )";
$connection->query($query);