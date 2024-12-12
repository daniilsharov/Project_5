<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo $_SESSION['firstname']; ?>!</h1>
        <p>You are successfully logged in.</p>
        <a href="logout.php" class="logout-button">Logout</a>
    </div>
</body>
</html>
