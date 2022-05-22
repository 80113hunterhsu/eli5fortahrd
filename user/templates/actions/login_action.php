<?php 
    session_start();
    // load db connection
    include("../../../database/serverConn.php");

    $username = strtoupper($_POST['user_account']);
    $password = $_POST['user_pwd'];
    // echo $username;
    // echo $password;

    $cmd_login = "SELECT * FROM user WHERE username = '$username'";
    $login = mysqli_query($db, $cmd_login);

    if (mysqli_num_rows($login) == 1) {
        $row = mysqli_fetch_assoc($login);
        $db_username = $row['username'];
        $db_password = $row['password'];
        // echo "username: " . $row['username'] . "<br>" . "password: " . $row['password'] . "<br>" . "email: " . $row['email'];
        if (password_verify($password, $db_password)) {
            // echo "in";
            $_SESSION['loginStat'] = "success";
            $_SESSION['name'] = $row['name'];
            $_SESSION['username'] = "$username";
            $_SESSION['email'] = $row['email'];
            header("Location: ../../?action=welcome");
        }
        else {
            $_SESSION['loginStat'] = "wrong_pwd";
            header("Location: ../../?action=login");
        }
    }
    else {
        $_SESSION['loginStat'] = "no_account";
        header("Location: ../../?action=login");
    }

    mysqli_close($db);
?>