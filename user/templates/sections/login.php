<!-- login -->
<div class="container text-center my-auto col-lg-6 col-sm-10" id="userLogin">
    <h1 class="mb-1 ">登入</h1>
    <h4 class="mb-5">
        <?php
            if ($_SESSION['loginStat'] == 'no_account') {
                echo "<p class='h4 m-4' style='color: red;'>查無此學號，請重新輸入</p>";
                unset($_SESSION['loginStat']);
            }
            else if ($_SESSION['loginStat'] == 'wrong_pwd') {
                echo "<p class='h4 m-4' style='color: red;'>密碼錯誤，請重新輸入</p>";
                unset($_SESSION['loginStat']);
            }
        ?>
    </h4>
    <form action="./templates/actions/login_action.php" method="POST">
        <div class="form-group">
            <input type="text" class="form-control" id="user_account" name="user_account" pattern="^\d{8}\w$" title="請輸入師大學號 (ex: 40871999H)" aria-describedby="user_account" placeholder="學號" required="1">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="user_pwd" name="user_pwd" pattern="^\w+$" title="密碼請使用英、數字及底線(A-Z a-z _)" placeholder="密碼" required="1">
        </div>
        <a class="btn btn-danger btn-lg mr-2" href="?action=pwd_rescue" role="button">忘記密碼</a>
        <input class="btn btn-success btn-lg ml-2" type="submit" value="登入">
    </form>
</div>