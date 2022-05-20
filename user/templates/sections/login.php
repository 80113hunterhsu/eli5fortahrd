<!-- login -->
<div class="container text-center my-auto col-lg-4 col-sm-10" id="userLogin">
    <h1 class="mb-1 ">登入</h1>
    <h3 class="mb-5">
        <!-- <em></em> -->
        <?php
            if ($action == 'loginFailed') {
                echo "登入資訊錯誤，請重新嘗試";
            }
        ?>
    </h3>
    <form action="./templates/actions/login_action.php" method="POST">
        <div class="form-group">
            <label for="user_account"><b class="h3">學號</b></label>
            <input type="text" class="form-control" id="user_account" name="user_account" aria-describedby="user_account" placeholder="學號" required="1">
        </div>
        <div class="form-group">
            <label for="user_pwd"><b class="h3">密碼</b></label>
            <input type="password" class="form-control" id="user_pwd" name="user_pwd" placeholder="密碼" required="1">
        </div>
        <a class="btn btn-danger btn-lg mr-2" href="?action=forgetPW" role="button">忘記密碼</a>
        <input class="btn btn-success btn-lg ml-2" type="submit" value="登入">
    </form>
</div>