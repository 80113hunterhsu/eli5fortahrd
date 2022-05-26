<!-- Header -->
<header class="masthead d-flex">
    <!-- account -->
    <div class="container text-center my-auto col-10" id="userLogin">
        <h1 class="mb-1 ">課程評論</h1>
        <h3 class="mb-5">
            <?php
                if (!(isset($_SESSION['new_review']))) {
                    $_SESSION['new_review'] = "";
                }
                if ($_SESSION['new_review'] == "success") {
                    echo("<p class='h4 m-4' style='color: red;'>已新增評分或評論</p>");
                    unset($_SESSION['new_review']);
                }

                if (!(isset($_SESSION['review_deleted']))) {
                    $_SESSION['review_deleted'] = "";
                }
                if ($_SESSION['review_deleted'] == "success") {
                    echo("<p class='h4 m-4' style='color: red;'>已刪除評分或評論</p>");
                    unset($_SESSION['review_deleted']);
                }
                else if ($_SESSION['review_deleted'] == "failed") {
                    echo("<p class='h4 m-4' style='color: red;'>無法刪除評分或評論，請稍候重試</p>");
                    unset($_SESSION['review_deleted']);
                }
            ?>
        </h3>
        <div class="tagBtnGroup">
            <a class="btn btn-primary btn-lg m-2 <?php if ($_SESSION['loginStat'] != "success") echo("hider"); ?>" href="./?action=new_review
            " role="button">我要寫評論</a>
            <a class="btn btn-success btn-lg m-2 js-scroll-trigger" href="#reviews" role="button">
                <?php if ($_SESSION['loginStat'] != "success") {echo("讓我看看！");} else {echo("我看看就好");} ?>
            </a>
        </div>
    </div>
    <div class="overlay"></div>
</header>

<!-- Call to Action -->
<section class="content-section bg-primary text-white" id="reviews">
    <div class="container text-center">
        <h2 class="mb-3">
            所有評論
            <?php
                if ($course_id != "") {
                    echo(" - " . $course_name);
                }
            ?>
        </h2>
        <?php include("review_wrapper.php"); ?> 
        
    </div>
</section>