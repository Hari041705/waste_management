<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: signin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Animation | TrackMate</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include('navbar.php'); ?>

<div class="content">
    <h2>Animation Page</h2>
    <p>Here you can add CSS or JavaScript animations later.</p>
</div>
</body>
</html>
