<?php

$host = "db.pxxl.pro"; // Changed from localhost
$user = "user_661773b4";
$pass = "1c39d8a5fadf2d6730d46844fa22346f";
$dbname = "db_0ed9c61a";
$port = 29271; // Explicitly specify port

$db = new mysqli($host, $user, $pass, $dbname, $port);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

?>