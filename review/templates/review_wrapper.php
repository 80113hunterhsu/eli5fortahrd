<?php
    $course_id = $_GET['course'];
    //echo "here" . isset($course_id);
    include("../database/serverConn.php");
    if ($course_id == "") {
        $course_name = "請選擇課程";
    }
    else {
        $cmd_loadCourseName = "SELECT * FROM course WHERE course_id = '$course_id'";
        $loadCourseName = mysqli_query($db, $cmd_loadCourseName);
        $currentCourse = mysqli_fetch_assoc($loadCourseName);
        $course_name = $currentCourse['course_name'];
    }
    $cmd_loadCourses = "SELECT * FROM course";
    $loadCourses = mysqli_query($db, $cmd_loadCourses);
?>
<!-- <div id="reviews_wrapper" class="row justify-content-center">
    <?php
        /* while ($row = mysqli_fetch_assoc($loadCourse)) {
            //echo $row['course_name'] . "<br>";
            include("subject_wrapper.php"); 
        } */
    ?>
</div> -->

<div class="dropdown">
    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
        <?php 
            echo $course_name;
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
                echo("<a class='dropdown-item$active' href='?course=$row_course_id'>$row_course_name</a>");
            }
        ?>
    </div>
</div>