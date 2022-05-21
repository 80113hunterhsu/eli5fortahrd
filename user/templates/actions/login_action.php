<?php 
    session_start();
    // load db connection
    include("../../../database/serverConn.php");

    $user_list = 'user';
    $username = strtoupper($_POST['user_account']);
    $password = $_POST['user_pwd'];
    // echo $username;
    // echo $password;

    $cmd_login = "SELECT * FROM $user_list WHERE username = '$username'";
    $login = mysqli_query($db, $cmd_login);

    if (mysqli_num_rows($login) == 1) {
        $row = mysqli_fetch_assoc($login);
        $db_username = $row['username'];
        $db_password = $row['password'];
        // echo "username: " . $row['username'] . "<br>" . "password: " . $row['password'] . "<br>" . "email: " . $row['email'];
        if (password_verify($password, $db_password)) {
            // echo "in";
            $_SESSION['loginStat'] = "1";
            $_SESSION['name'] = $row['name'];
            $_SESSION['username'] = "$username";
            header("Location: ../../?action=welcome");
        }
        else {
            header("Location: ../../?action=login_failed");
        }
    }
    else {
        header("Location: ../../?action=login_failed");
    }

    mysqli_close($db);
?>