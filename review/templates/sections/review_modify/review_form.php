<!-- modify review -->
<?php
    $review_id = $_GET['review_id'];

    $cmd_getInfo = "SELECT * FROM review WHERE review_id = '$review_id'";
    $getInfo = mysqli_query($db, $cmd_getInfo);
    $modifyTarget = mysqli_fetch_assoc($getInfo);

    $course_id = $modifyTarget['course_id'];
    $_SESSION['course_id'] = $course_id;
    $review_score = $modifyTarget['review_score'];
    $review_comment = $modifyTarget['review_comment'];

    $cmd_loadCourses = "SELECT * FROM course";
    $loadCourses = mysqli_query($db, $cmd_loadCourses);
?>
<form action="./templates/sections/review_modify/review_modify_action.php" method="POST">
    <input class="hider" id="review_id" name="review_id" type="text" value="<?php echo $review_id; ?>">
    <div class="form-group">
        <select class="form-select form-control" id="review_course" name="review_course" required="1" disabled>
            <option>請選擇課程</option>
            <?php
                while ($row = mysqli_fetch_assoc($loadCourses)) {
                    //echo $row['course_name'] . "<br>";
                    //include("subject_wrapper.php"); 
                    $row_course_id = $row['course_id'];
                    $row_course_name = $row['course_name'];
                    if ($course_id == $row_course_id) {
                        $selected = " selected";
                    }
                    else {
                        $selected = "";
                    }
                    echo("<option value='$row_course_id'$selected>$row_course_name</option>");
                }
            ?>
        </select>
    </div>

    <div class="form-group">
        <select class="form-select form-control" id="review_score" name="review_score" required="1">
            <option>請選擇分數</option>
            <option value="1"<?php if($review_score == "1")echo(" selected"); ?>>1</option>
            <option value="2"<?php if($review_score == "2")echo(" selected"); ?>>2</option>
            <option value="3"<?php if($review_score == "3")echo(" selected"); ?>>3</option>
            <option value="4"<?php if($review_score == "4")echo(" selected"); ?>>4</option>
            <option value="5"<?php if($review_score == "5")echo(" selected"); ?>>5</option>
        </select>
    </div>

    <div class="form-group">
        <textarea class="form-control" id="review_comment" name="review_comment" size="400" rows="8" placeholder="課程評論（400字內，選填）"><?php echo $review_comment; ?></textarea>
    </div>
    <input class="btn btn-success btn-lg" type="submit" value="修改評論">
</form>