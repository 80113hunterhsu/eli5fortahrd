<?php
    session_start();

    // load db connection
    include("../../../../database/serverConn.php");

    $course_id = $_POST['review_course'];
    $review_name = $_SESSION['name'];
    $review_username = $_SESSION['username'];
    $review_score = $_POST['review_score'];
    $review_comment = $_POST['review_comment'];

    $cmd_addReview = "INSERT INTO review (review_name, review_username, review_score, review_comment, course_id) VALUES ('$review_name', '$review_username', '$review_score', '$review_comment', '$course_id')";
    $addReview = mysqli_query($db, $cmd_addReview);
    if ($addReview) {
        $_SESSION['new_review'] = "success";
        header("Location: ../../../?course=$course_id#reviews");
    }

    mysqli_close($db);
?>