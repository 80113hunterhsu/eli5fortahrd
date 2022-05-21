<?php
    session_start();

    //$_SESSION['username'] = "Hunter";
    unset($_SESSION['username']);
    echo $_SESSION['username'];
?>