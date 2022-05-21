<?php
    // load db connection
    include("../../../database/serverConn.php");

    $user_list = 'user';
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $username = strtoupper($_POST['user_account']);
    $password = $_POST['user_pwd'];
    $passwordCheck = $_POST['user_pwdCheck'];
    //echo("name=$name<br>email=$email<br>username=$username<br>password=$password<br>passwordCheck=$passwordCheck<br>");

    if ($password == $passwordCheck) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        //echo $password;
        $cmd_checkExist = "SELECT * FROM $user_list WHERE username = '$username'";
        $checkExist = mysqli_query($db, $cmd_checkExist);
        if (mysqli_num_rows($checkExist) != 0) {
            header("Location: ../../?action=user_exists");
        }
        else {
            $cmd_addUser = "INSERT INTO user (username, password, name, email) VALUES ('$username', '$password', '$name', '$email')";
            $addUser = mysqli_query($db, $cmd_addUser);
            if ($addUser) {
                header("Location: ../../?action=welcome");
            }
        }
    }
    else {
        header("Location: ../../?action=pwd_incorrect");
    }

?>