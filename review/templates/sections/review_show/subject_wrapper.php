<?php
    $cmd_loadReviews = "SELECT * FROM review WHERE course_id = '$course_id'";
    $loadReviews = mysqli_query($db, $cmd_loadReviews);
    $cmd_loadCourseInfo = "SELECT * FROM course WHERE course_id = '$course_id'";
    $loadCourseInfo = mysqli_query($db, $cmd_loadCourseInfo);
    $course_info = mysqli_fetch_assoc($loadCourseInfo);
    $course_score = $course_info['course_score'];
?>
<div class="card col-10 p-0">
    <div id="<?php echo $course_id ?>" class="pt-2 pb-2">
        <?php 
            $review_count = mysqli_num_rows($loadReviews);
            $review_score_sum = 0;
            if ($review_count != 0) {
                while ($review = mysqli_fetch_assoc($loadReviews)) {
                    include("comment_wrapper.php"); 
                    $review_score_sum += $review['review_score'];
                }
            }
            else {
                echo "<h4 class='text-dark m-0'>目前還沒有人評論～</h4>";
            }
            if ($review_count != 0) {
                $course_score = $review_score_sum / (float)$review_count;
            }
            else {
                $course_score = 0;
            }
            $cmd_updateCourseScore = "UPDATE course SET course_score = '$course_score' WHERE course_id = '$course_id'";
            $updateCourseScore = mysqli_query($db, $cmd_updateCourseScore);
        ?>
    </div>
</div>