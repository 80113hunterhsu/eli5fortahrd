<?php
    $servername = "localhost";
    $username = "test_user";
    $password = "test_password";
    $dbname = "testDB";

    $db = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_set_charset($db, 'utf8mb4');

    if ($db -> connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    function consoleLog($msg) {
        echo '<script>' . 'console.log("'.$msg.'");' . '</script>';
    }

    echo "<script>console.log('Connected to $dbname successfully');</script>";
?>