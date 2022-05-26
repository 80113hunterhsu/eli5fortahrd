<?php
    $cmd_loadCourses = "SELECT * FROM course";
    $loadCourses = mysqli_query($db, $cmd_loadCourses);
?>

<div class="dropdown mb-5">
    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
        <?php 
            echo "<h5 class='d-inline'>$course_name</h5>";
        ?>
    </button>
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
                echo("<a class='dropdown-item$active' href='?course=$row_course_id#reviews'>$row_course_name</a>");
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
            echo("<div class='m-3'><a class='btn btn-success h4' href='../subject/?title=$course_title'>前往課程</a></div>");
        }
    ?>
</div>

<div id="reviews_wrapper" class="row justify-content-center">
    <?php
        if ($course_id != "") {
            include("subject_wrapper.php"); 
        }
    ?>
</div>