<?php
include './secrets.php';
function getDb() {
    global $db_host, $db_db, $db_user, $db_pass;
    $conn = new PDO("mysql:host=$db_host;dbname=$db_db", $db_user, $db_pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}

function testFunction() {
}
?>