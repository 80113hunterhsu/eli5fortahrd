<?php
    session_start();

    // load db connection
    include("../../../database/serverConn.php");

    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $username = strtoupper($_POST['user_account']);
    $password = $_POST['user_pwd'];
    $passwordCheck = $_POST['user_pwdCheck'];
    //echo("name=$name<br>email=$email<br>username=$username<br>password=$password<br>passwordCheck=$passwordCheck<br>");

    $cmd_checkExist = "SELECT * FROM user WHERE username = '$username'";
    $checkExist = mysqli_query($db, $cmd_checkExist);
    if (mysqli_num_rows($checkExist) != 0) {
        $_SESSION['register'] = "user_exists";
        header("Location: ../../?action=register");
    }
    else {
        if ($password == $passwordCheck) {
            $password = password_hash($password, PASSWORD_DEFAULT);
            
            $cmd_addUser = "INSERT INTO user (username, password, name, email) VALUES ('$username', '$password', '$name', '$email')";
            $addUser = mysqli_query($db, $cmd_addUser);
            
            if ($addUser) {
                $_SESSION['name'] = "$name";
                $_SESSION['username'] = "$username";
                $_SESSION['email'] = "$email";
                $_SESSION['loginStat'] = "success";
                header("Location: ../../?action=welcome");
            }
        }
        else {
            $_SESSION['register'] = "pwd_incorrect";
            header("Location: ../../?action=register");
        }
    }

    mysqli_close($db);
?>