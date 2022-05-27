<?php
    session_start();

    // load db connection
    include("../../../../database/serverConn.php");

    $review_id = $_POST['review_id'];
    $course_id = $_SESSION['course_id'];
    unset($_SESSION['course_id']);
    $review_score = $_POST['review_score'];
    $review_comment = $_POST['review_comment'];

    $cmd_modifyReview = "UPDATE review SET review_score = '$review_score', review_comment = '$review_comment' WHERE review_id = '$review_id'";
    
    if ($modifyReview = mysqli_query($db, $cmd_modifyReview)) {
        $_SESSION['modify_review'] = "success";
    }
    else {
        $_SESSION['modify_review'] = "failed";
    }
    header("Location: ../../../?course=$course_id");

    mysqli_close($db);
?>