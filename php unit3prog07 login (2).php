
<?php
session_start();

$conn = mysqli_connect("localhost:3307", "root", "", "login");


if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

  
    $sql = "SELECT * FROM user WHERE username = ? AND password = ?";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "ss", $username, $password);

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);


    if (mysqli_num_rows($result) == 1) {

      
        $_SESSION["username"] = $username;

       
        header("Location: php unit3prog07 home.php");
        exit();

    } else {
        echo "<p style='color:red;'>Invalid Username or Password</p>";
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>

<h2>Login</h2>

<form method="post" action="">

    <label>Username:</label>
    <input type="text" name="username" required>
    <br><br>

    <label>Password:</label>
    <input type="password" name="password" required>
    <br><br>

    <input type="submit" value="Login">

</form>

</body>
</html>
