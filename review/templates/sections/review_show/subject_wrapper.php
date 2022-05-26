<?php
    $cmd_loadReviews = "SELECT * FROM review WHERE course_id = '$course_id'";
    $loadReviews = mysqli_query($db, $cmd_loadReviews);
?>
<div class="card col-10 p-0">
    <div id="<?php echo $course_id ?>" class="pt-2 pb-2">
        <?php 
            //for ($i = 0; $i < 5; $i++) {
            if (mysqli_num_rows($loadReviews) != 0) {
                while ($review = mysqli_fetch_assoc($loadReviews)) {
                    include("comment_wrapper.php"); 
                }
            }
            else {
                echo "<h4 class='text-dark m-0'>查無評論或評分！</h4>";
            }
        ?>
    </div>
</div>