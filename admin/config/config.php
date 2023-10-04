<?php

function getConn() : PDO
{
    $host = "localhost";
    $port = 3306;
    $database = "ppdbsd";
    $username = "root";
    $password = "";

    return new PDO("mysql:host=$host:$port;dbname=$database",$username,$password);
}
?>