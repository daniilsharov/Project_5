<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $created_at = $updated_at = date('Y-m-d H:i:s');

    $sql = "INSERT INTO users (firstname, lastname, email, password, created_at) 
        VALUES ('$firstname', '$lastname', '$email', '$password', '$created_at')";
    if ($conn->query($sql) === TRUE) {
        header('Location: login.php');
        exit;
    } else {
        $error = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
    <form action="register.php" method="POST">
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" id="firstname" required>

        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" id="lastname" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <label for="confirm_password">Confirm Password</label>
        <input type="password" name="confirm_password" id="confirm_password" required>

        <div class="submit-container">
            <input type="submit" value="Register">
        </div>
    </form>

    <p class="login-link">Already have an account? <a href="login.php">Login</a></p>
</body>
</html>
