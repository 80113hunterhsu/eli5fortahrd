<?php
    session_start();
    
    include("../../../../database/serverConn.php");
    $review_id = $_GET['review_id'];
    //echo $review_id;
    $cmd_getInfo = "SELECT * FROM review WHERE review_id = '$review_id'";
    $getInfo = mysqli_query($db, $cmd_getInfo);
    $deleteTarget = mysqli_fetch_assoc($getInfo);
    $course_id = $deleteTarget['course_id'];

    $cmd_reviewDelete = "DELETE FROM review WHERE review_id = '$review_id'";
    $reviewDelete = mysqli_query($db, $cmd_reviewDelete);

    if ($reviewDelete) {
        $_SESSION['review_deleted'] = "success";
    }
    else {
        $_SESSION['review_deleted'] = "failed";
    }
    header("Location: ../../../?course=$course_id#reviews");

    mysqli_close($db);
?>