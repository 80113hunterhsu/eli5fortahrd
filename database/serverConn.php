<?php
    $servername = "localhost";
    $username = "eli5fortahrd";
    $password = "eli5fortahrd";
    $dbname = "eli5fortahrd";

    $db = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_set_charset($db, 'utf8mb4');

    if ($db -> connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    function consoleLog($msg) {
        echo '<script>' . 'console.log("'.$msg.'");' . '</script>';
    }

    consoleLog("Connected to $dbname successfully");
?>