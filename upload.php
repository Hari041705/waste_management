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
    <title>Upload Image | TrackMate</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include('navbar.php'); ?>

<div class="content">
    <h2>Upload Image</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" required>
        <button type="submit">Upload</button>
    </form>
</div>
</body>
</html>
