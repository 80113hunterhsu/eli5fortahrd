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
                echo("<a class='dropdown-item$active' href='?action=show&course=$row_course_id#reviews'>$row_course_name</a>");
            }
        ?>
    </div>
</div>

<div id="reviews_wrapper" class="row justify-content-center">
    <?php
        if ($course_id != "") {
            include("subject_wrapper.php"); 
        }
    ?>
</div>