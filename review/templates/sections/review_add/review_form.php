<!-- register -->
<?php
    $cmd_loadCourses = "SELECT * FROM course";
    $loadCourses = mysqli_query($db, $cmd_loadCourses);
?>
<form action="./templates/sections/review_add/review_add_action.php" method="POST">
    <div class="form-group">
        <select class="form-select form-control" id="review_course" name="review_course" required="1">
            <option selected>請選擇課程</option>
            <?php
                while ($row = mysqli_fetch_assoc($loadCourses)) {
                    //echo $row['course_name'] . "<br>";
                    //include("subject_wrapper.php"); 
                    $row_course_id = $row['course_id'];
                    $row_course_name = $row['course_name'];
                    echo("<option value='$row_course_id'>$row_course_name</option>");
                }
            ?>
        </select>
    </div>

    <div class="form-group">
        <select class="form-select form-control" id="review_score" name="review_score" required="1">
            <option selected>請選擇分數</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>

    <div class="form-group">
        <textarea class="form-control" id="review_comment" name="review_comment" size="400" rows="8" placeholder="課程評論（400字內，選填）"></textarea>
    </div>
    <input class="btn btn-success btn-lg" type="submit" value="送出評論">
</form>