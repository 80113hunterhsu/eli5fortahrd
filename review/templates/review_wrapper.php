<?php
    include("../database/serverConn.php");
    $cmd_loadCourse = "SELECT * FROM course ORDER BY course_id DESC";
    $loadCourse = mysqli_query($db, $cmd_loadCourse);
?>
<div id="reviews_wrapper" class="row justify-content-center">
    <?php
        while ($row = mysqli_fetch_assoc($loadCourse)) {
            //echo $row['course_name'] . "<br>";
            include("subject_wrapper.php"); 
        }
    ?>
</div>