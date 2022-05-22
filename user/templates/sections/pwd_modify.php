<!-- pwd modify -->
<?php
    include("../database/serverConn.php");
?>
<div class="container text-center my-auto col-lg-6 col-10" id="userRegister">
    <h1 class="mb-1 ">修改密碼</h1>
    <h4 class="mb-5">
        <?php
            if ($_SESSION['pwd_modify'] == 'pwd_confirm_failed') {
                echo "請重新輸入舊密碼";
            }
            else if ($_SESSION['pwd_modify'] == 'check_new_pwd') {
                echo "請重新確認新密碼";
            }
        ?>
    </h4>
    <form action="./templates/actions/pwd_modify_action.php" method="POST">
        <div class="form-group">
            <input type="password" class="form-control" id="user_pwd_old" name="user_pwd_old" pattern="^\w+$" title="密碼請使用英、數字及底線(A-Z a-z _)" placeholder="舊密碼" required="1">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="user_pwd_new" name="user_pwd_new" pattern="^\w+$" title="密碼請使用英、數字及底線(A-Z a-z _)" placeholder="新密碼" required="1">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="user_pwdCheck_new" name="user_pwdCheck_new" pattern="^\w+$" title="密碼請使用英、數字及底線(A-Z a-z _)" placeholder="確認新密碼" required="1">
        </div>
        <a class="btn btn-dark btn-lg m-2" href="?action=welcome" role="button">返回</a>
        <input class="btn btn-success btn-lg ml-2" type="submit" value="登入">
    </form>
</div>