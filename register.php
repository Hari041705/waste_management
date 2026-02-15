<?php
include('create_table.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Registration Successful'); window.location='signin.php';</script>";
    } else {
        echo "<script>alert('Error: Could not register');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="style1.css">
</head>
<body>
  <div class="container">
    <h2>Register</h2>
    <form method="POST">
      <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" required>
      </div>
      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password" required>
      </div>
      <button type="submit">Register</button>
      <p>Already have an account? <a href="signin.php">Sign in here</a></p>
    </form>
  </div>
</body>
</html>
