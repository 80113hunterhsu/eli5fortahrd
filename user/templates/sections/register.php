<!-- register -->
<style>
    
</style>
<div class="container text-center my-auto col-lg-4 col-10" id="userRegister">
    <h1 class="mb-1 ">註冊</h1>
    <h3 class="mb-5">
        <?php
            if ($action == 'user_exists') {
                echo "此學號已註冊，是否嘗試<a href='?action=login'>登入</a>？";
            }
        ?>
    </h3>
    <form action="./templates/actions/register_action.php" method="POST">
        <div class="form-group">
            <input type="text" class="form-control" id="user_name" name="user_name" aria-describedby="user_name" placeholder="暱稱" required="1">
        </div>

        <div class="form-group">
            <input type="email" class="form-control" id="user_email" name="user_email" pattern="^.+@.+$" placeholder="電子郵件" required="1">
        </div>

        <?php if ($action == 'username_error') echo("<p style='color: red;'>請輸入正確格式的學號</p>"); ?>
        <div class="form-group">
            <input type="text" class="form-control" id="user_account" name="user_account" pattern="^\d{8}\w$" title="請輸入師大學號 (ex: 40871999H)" placeholder="學號" required="1" aria-describedby="user_account">
        </div>

        <?php if ($action == 'pwd_incorrect') echo("<p style='color: red;'>密碼不符，請重新輸入</p>"); ?>
        <div class="form-group">
            <input type="password" class="form-control" id="user_pwd" name="user_pwd" pattern="^\w+$" title="密碼請使用英、數字及底線(A-Z a-z _)" placeholder="密碼" required="1">
        </div>

        <div class="form-group">
            <input type="password" class="form-control" id="user_pwdCheck" name="user_pwdCheck" placeholder="確認密碼" required="1">
        </div>
        <input class="btn btn-success btn-lg" type="submit" value="註冊">
    </form>
</div>