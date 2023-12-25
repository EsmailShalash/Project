<?php

if (isset($_POST['test'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $host = "localhost";
    $user = "root";
    $db = "test55";

    $conn = mysqli_connect($host, $user, "", $db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $insert = "INSERT INTO food VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $insert)) {
        echo "<h1 style='color: blue;'>Done</h1>";
    } else {
        echo "<h1 style='color: red;'>Failed</h1>";
    }

    mysqli_close($conn);
}
?>
