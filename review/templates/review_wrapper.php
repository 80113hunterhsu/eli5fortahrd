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

<div class="dropdown">
    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
        請選擇課程
    </button>
    <div class="dropdown-menu">
        <?php
            while ($row = mysqli_fetch_assoc($loadCourse)) {
                //echo $row['course_name'] . "<br>";
                //include("subject_wrapper.php"); 
                $course_id = $row['course_id'];
                $course_name = $row['course_name'];
                echo("<a class='dropdown-item' href='#'>$course_name</a>");
            }
        ?>
    </div>
</div>