<?php

?>
<div class="card col-10 p-0">
    <a class="btn btn-link text-decoration-none p-0 m-0" data-toggle="collapse" href="#<?php echo $row['course_id'] ?>">
        <div class="card-header">
            <h3 class="mb-0 justify-content-center">
                <?php echo $row['course_name'] ?>
            </h3>
        </div>
    </a>
    <div id="<?php echo $row['course_id'] ?>" class="collapse" data-parent="#reviews_wrapper">
        <div class="card-body text-dark row justify-content-center">
            <?php
                include("comment_wrapper.php");
            ?>
        </div>
    </div>
</div>