<?php

$db_host = 'localhost';
$db_name = 'u_210024470_website';
$username = 'website';
$password = '1234';

try{
    $db = new PDO("mysql:dbame=$db_name;host=$db_host", $username, $password)
}catch(PDOException $ex) {
    echo("Failed to connect to the database.<br>");
    echo($ex->getMessage());
    exit;
}

?>