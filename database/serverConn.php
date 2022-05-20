<?php
    session_start();

    $servername = "localhost";
    $username = "test_user";
    $password = "test_password";
    $dbname = "testDB";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_set_charset($conn, 'utf8mb4');

    if ($conn -> connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    function consoleLog($msg) {
        echo '<script>' . 'console.log("'.$msg.'");' . '</script>';
    }

    echo "<script>console.log('Connected to $dbname successfully');</script>";
?>