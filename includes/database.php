
<?php

$host = "localhost"; // change this to your MySQL hostname
$user = "user_661773b4"; // change this to your MySQL username
$pass = "1c39d8a5fadf2d6730d46844fa22346f"; // change this to your MySQL password
$dbname = "db_0ed9c61a"; // change this to your MySQL database name

$db = new mysqli($host, $user, $pass, $dbname);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

?>


