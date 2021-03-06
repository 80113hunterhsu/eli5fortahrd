<?php
    $cmd_loadCourses = "SELECT * FROM course";
    $loadCourses = mysqli_query($db, $cmd_loadCourses);
?>

<div class="dropdown m-4 tagBtnGroup">
    <a class="btn btn-primary btn-lg" href="./?action=new_review" role="button">我要寫評論</a>
    <a class="btn btn-light btn-lg dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown">
        <?php 
            echo "<h5 class='d-inline'>$course_name</h5>";
        ?>
    </a>
    <div class="dropdown-menu">
        <?php
            while ($row = mysqli_fetch_assoc($loadCourses)) {
                //echo $row['course_name'] . "<br>";
                //include("subject_wrapper.php"); 
                $row_course_id = $row['course_id'];
                $row_course_name = $row['course_name'];
                if ($course_id == $row_course_id) {
                    $active = " active";
                }
                else {
                    $active = "";
                }
                echo("<a class='dropdown-item$active' href='?course=$row_course_id'>$row_course_name</a>");
            }
        ?>
    </div>
    <?php
        $course_list = array(
            "MAU0180" => "calculus", 
            "CSU0001" => "computer_programming", 
            "ITU0162" => "engineering_design", 
            "ITU0004" => "graphics", 
            "ITU1028" => "internet_introduction", 
            "SELF0001" => "laser_cut"
        );
        if ($course_id != "") {
            $course_title = $course_list[$course_id];
            echo("<a class='btn btn-success btn-lg' href='../subject/?title=$course_title'><h5 class='d-inline'>前往課程</h5></a>");
        }
    ?>
</div>

<div id="reviews_wrapper" class="row justify-content-center">
    <script>
        function confirmDelete(review_id) {
            if (confirm('確定要刪除這個評論嗎？'/*  + review_id */)) {
                window.location = "./templates/sections/review_modify/delete_comment_action.php?review_id=" + review_id;
            }
        }
    </script>
    <?php
        if ($course_id != "") {
            include("subject_wrapper.php"); 
        }
    ?>
</div>