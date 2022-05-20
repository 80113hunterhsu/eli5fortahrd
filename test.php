<?php
    include("./database/serverConn.php");
    include("test2.php");
    $nl = "<br>";
    $password2 = "Hunter1";
    echo $password . $nl;
    if (password_verify($password2, $encrypt)) {
        consoleLog("Password Valid.");
    }
    else {
        consoleLog("Nope.");
    }
?>