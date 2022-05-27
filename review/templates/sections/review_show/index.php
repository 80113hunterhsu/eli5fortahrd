<!-- Header -->
<header class="masthead d-flex">
    <!-- account -->
    <div class="container text-center my-auto col-10" id="userLogin">
        <h1 class="mb-1 ">課程評論</h1>
        
        <div class="tagBtnGroup">
            <a class="btn btn-primary btn-lg m-2" href="./?action=new_review" role="button">我要寫評論</a>
            <a class="btn btn-light btn-lg m-2 js-scroll-trigger" href="#reviews" role="button">我看看就好</a>
        </div>
    </div>
    <div class="overlay"></div>
</header>

<!-- Call to Action -->
<section class="content-section bg-primary text-white" id="reviews">
    <div class="container text-center">
        <h2 class="mb-3">
            所有評論
        </h2>
        <h3 class="mb-3">
            <?php
                if (!(isset($_SESSION['new_review']))) {
                    $_SESSION['new_review'] = "";
                }
                if ($_SESSION['new_review'] == "success") {
                    echo("<p class='h4 m-4' style='color: red;'>已新增評論</p>");
                    unset($_SESSION['new_review']);
                }

                if (!(isset($_SESSION['review_deleted']))) {
                    $_SESSION['review_deleted'] = "";
                }
                if ($_SESSION['review_deleted'] == "success") {
                    echo("<p class='h4 m-4' style='color: red;'>已刪除評論</p>");
                    unset($_SESSION['review_deleted']);
                }
                else if ($_SESSION['review_deleted'] == "failed") {
                    echo("<p class='h4 m-4' style='color: red;'>無法刪除評論，請稍候重試</p>");
                    unset($_SESSION['review_deleted']);
                }
                
                if (!(isset($_SESSION['modify_review']))) {
                    $_SESSION['modify_review'] = "";
                }
                if ($_SESSION['modify_review'] == "success") {
                    echo("<p class='h4 m-4' style='color: red;'>已更新評論</p>");
                    unset($_SESSION['modify_review']);
                }
                else if ($_SESSION['modify_review'] == "failed") {
                    echo("<p class='h4 m-4' style='color: red;'>無法更新評論，請稍候重試</p>");
                    unset($_SESSION['modify_review']);
                }
            ?>
        </h3>
        <?php include("review_wrapper.php"); ?> 
        
    </div>
</section>