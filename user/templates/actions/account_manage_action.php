<?php
    session_start();
    include("../../../database/serverConn.php");

    $username = $_SESSION['username'];
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];

    $cmd_updateData = "UPDATE user SET name='$name', email='$email' WHERE username='$username'";
    $updateData = mysqli_query($db, $cmd_updateData);
    
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;

    $_SESSION['account_manage'] = "success";
    header("Location: ../../?action=welcome");
    mysqlli_close($db);
?>