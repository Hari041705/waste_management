<?php
$host = "localhost";
$user = "root"; // your MySQL username
$pass = "";     // your MySQL password
$db   = "loginid"; // the database you want to delete

$conn = mysqli_connect($host, $user, $pass);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "DROP DATABASE IF EXISTS $db";

if (mysqli_query($conn, $sql)) {
    echo "Database '$db' deleted successfully.";
} else {
    echo "Error deleting database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
