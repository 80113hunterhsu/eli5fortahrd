<?php 
    session_start();
    // load db connection
    include("../../../database/serverConn.php");

    $username = $_SESSION['username'];
    $password = $_POST['user_pwd_old'];
    $password_new = $_POST['user_pwd_new'];
    $passwordCheck_new = $_POST['user_pwdCheck_new'];

    $cmd_login = "SELECT * FROM user WHERE username = '$username'";
    $login = mysqli_query($db, $cmd_login);
    $row = mysqli_fetch_assoc($login);
    $db_username = $row['username'];
    $db_password = $row['password'];

    if (password_verify($password, $db_password)) {
        if ($password_new == $passwordCheck_new) {
            $password = password_hash($password_new, PASSWORD_DEFAULT);
            $cmd_pwdModify = "UPDATE user SET password='$password' WHERE username='$username'";
            $pwdModify = mysqli_query($db, $cmd_pwdModify);
            $_SESSION['pwd_modify'] = "success";
            header("Location: ../../?action=welcome");
        }
        else {
            $_SESSION['pwd_modify'] = "check_new_pwd";
            header("Location: ../../?action=pwd_modify");
        }
    }
    else {
        $_SESSION['pwd_modify'] = "pwd_confirm_failed";
        header("Location: ../../?action=pwd_modify");
    }
    //echo $_SESSION['pwd_modify'];

    mysqli_close($db);
?>