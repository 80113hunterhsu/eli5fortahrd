<?php
    session_start();

    // load db connection
    include("../../../../database/serverConn.php");

    $course_id = $_POST['review_course'];
    $review_username = $_SESSION['name'];
    $review_score = $_POST['review_score'];
    $review_comment = $_POST['review_comment'];

    $cmd_addReview = "INSERT INTO review (review_username, review_score, review_comment, course_id) VALUES ('$review_username', '$review_score', '$review_comment', '$course_id')";
    $addReview = mysqli_query($db, $cmd_addReview);
    if ($addReview) {
        $_SESSION['new_review'] = "success";
        header("Location: ../../../");
    }

    /* $cmd_checkExist = "SELECT * FROM user WHERE username = '$username'";
    $checkExist = mysqli_query($db, $cmd_checkExist);
    if (mysqli_num_rows($checkExist) != 0) {
        $_SESSION['register'] = "user_exists";
        //header("Location: ../../?action=register");
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
                //header("Location: ../../?action=welcome");
            }
        }
        else {
            $_SESSION['register'] = "pwd_incorrect";
            //header("Location: ../../?action=register");
        }
    }
 */
    mysqli_close($db);
?>