<?php 
    $servername = "localhost";
    $dbname = "testDB";
    $username = "40871218H";
    $password = "Hunter890913";

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