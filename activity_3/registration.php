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
    <?php
    $hostname = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $database = "integ"; 

    $conn = new mysqli($hostname, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "INSERT INTO accounts (username, email, password) VALUES ('$username', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            $message = "User registered successfully!";
        } else {
            $message = "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
    ?>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h2>User Registration</h2>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="REGISTER">
    </form>

     <!-- JavaScript to display a pop-up message -->
    <script>
        if ("<?php echo $message; ?>") {
            alert("<?php echo $message; ?>");
        }
    </script>
</body>
</html>
