<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "loginid";

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
)";

if (mysqli_query($con, $sql)) {
    echo "Table 'users' created successfully in database 'loginid'.";
} else {
    echo "Error creating table: " . mysqli_error($con);
}


?>
