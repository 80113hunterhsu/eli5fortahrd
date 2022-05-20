<?php 
    include("../../../database/serverConn.php");

    $user_list = 'user';
    $username = $_POST['user_account'];
    $password = $_POST['user_pwd'];
    echo $username;
    echo $password;

    $cmd_login = "SELECT * FROM $user_list WHERE username = '$username'";
    $result = mysqli_query($conn, $cmd_login);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $db_username = $row['username'];
        $db_password = $row['password'];
        echo "username: " . $row['username'] . "<br>" . "password: " . $row['password'] . "<br>" . "email: " . $row['email'];
        if (password_verify($password, $db_password)) {
            echo "in";
        }
        header("Location: ../../?action=welcome");
    }
    else {
        header("Location: ../../?action=loginFailed");
    }

    mysqli_close($conn);
?>