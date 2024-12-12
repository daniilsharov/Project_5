<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Welcome to the Home Page</h1>
    <p>Hello, <?php echo $_SESSION['firstname']; ?>!</p>
    <a href="logout.php">Logout</a>
</body>
</html>
