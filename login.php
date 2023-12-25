<?php
 $username = $_POST['login_username'];
 $password = $_POST['login_password'];


if (isset($_POST['login_username']) && isset($_POST['login_password'])) {
    
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "test55";

    $conn = mysqli_connect($host, $user, $password, $db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM food WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        
        $_SESSION['username'] = $username;
        echo "<h1 style='color:blue;'>Login successful. Welcome, $username!</h1>";
    } else {
        
        echo "<h1 style='color:red;'>Login failed. Please check your username and password.</h1>";
    }

    mysqli_close($conn);
}
