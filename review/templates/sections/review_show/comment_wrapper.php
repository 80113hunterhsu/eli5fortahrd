<div class="card-body text-dark row justify-content-center pt-1 pb-1">
    <div class="col-12 m-1 p-1 row border-top border-bottom">
        <div class="col-12 p-0">
            <div class="m-3 float-left h5"><strong><?php echo $review['review_name']; ?></strong></div>
            <div class="m-3 float-right h5 d-flex align-items-center">
                <!-- <span class="text-dark"><?php //echo '#' . $review['review_id']; ?></span> -->
                <?php 
                    if (!(isset($_SESSION['username']))) {
                        $_SESSION['username'] = "";
                    }
                    if ($review['review_username'] == $_SESSION['username']) {
                        include("others_btn.php"); 
                    }
                ?>
                    
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill ml-2 mr-1" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>
                <?php echo $review['review_score']; ?>
            </div>
        </div>
        <div class="float-left text-left col-12 h4 <?php if ($review['review_comment'] == "") {echo "m-0 hider";} ?>">
            <?php echo nl2br($review['review_comment']); ?>
        </div>
    </div> 
</div>