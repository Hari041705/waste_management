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
    <title>Product Tracking | TrackMate</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include('navbar.php'); ?>

<div class="content">
    <h2>Product Tracking</h2>
    <p>Track your orders or shipments here. (Feature coming soon!)</p>
</div>
</body>
</html>
