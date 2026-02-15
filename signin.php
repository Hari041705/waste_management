<?php
session_start(); // ✅ Must be the first line before any HTML

include('create_table.php'); // include your DB connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // ✅ Secure SQL query (prevents SQL injection)
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $con->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        // ✅ Verify password and redirect
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];

            // ✅ Redirect to dashboard
            header("Location: dashboard.php");
            exit;
        } else {
            echo "<script>alert('Invalid username or password');</script>";
        }

        $stmt->close();
    } else {
        echo "Database query failed: " . $con->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
  <link rel="stylesheet" href="style1.css">
</head>
<body>
  <div class="container">
    <h2>Sign In</h2>
    <form method="POST">
      <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" required>
      </div>
      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password" required>
      </div>
      <button type="submit">Sign In</button>
      <p>Don't have an account? <a href="register.php">Register here</a></p>
    </form>
  </div>
</body>
</html>
