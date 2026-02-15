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
    <title>Dashboard | TrackMate</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background: #f9f9f9;
            font-family: Arial, sans-serif;
        }

        nav {
            background-color: #5563DE;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
            color: white;
        }

        nav .logo {
            font-size: 22px;
            font-weight: bold;
        }

        nav ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: 500;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .content {
            padding: 50px;
            text-align: center;
        }

        .content h2 {
            color: #333;
        }

        .logout {
            background: #e74c3c;
            color: white;
            padding: 8px 15px;
            border-radius: 6px;
            text-decoration: none;
        }

        .logout:hover {
            background: #c0392b;
        }
    </style>
</head>
<body>

<nav>
    <div class="logo">TrackMate</div>
    <ul>
        <li><a href="dashboard.php">Home</a></li>
        <li><a href="animation.php">Animation</a></li>
        <li><a href="upload.php">Upload Image</a></li>
        <li><a href="tracking.php">Product Tracking</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a class="logout" href="logout.php">Logout</a></li>
    </ul>
</nav>

<div class="content">
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?> 👋</h2>
    <p>This is your dashboard. Choose a section from the navigation bar to explore.</p>
</div>

</body>
</html>
