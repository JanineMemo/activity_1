<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
    </style>
    <link rel="stylesheet" type="text/css" href="http://localhost/integ/css/style.css">

</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <h2>User Registration</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            // Store the data in the browser's local storage using JavaScript
            echo "<script>";
            echo "localStorage.setItem('username', '" . $username . "');";
            echo "localStorage.setItem('email', '" . $email . "');";
            echo "localStorage.setItem('password', '" . $password . "');";
            echo "</script>";
        }
        ?>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="REGISTER">
    </form>
</body>
</html>
