<!-- account -->
<div class="container text-center my-auto col-10" id="userLogin">
    <h1 class="mb-1 ">帳號管理</h1>
    <h3 class="mb-5">
        歡迎登入，<?php echo $_SESSION['name'] ?><br>
        <a id="showEmail" href="#" onClick="showEmail();">檢視電子郵件</a>
        <span id="emailSection" style="display: none;"><?php echo $_SESSION['email']; ?></span>
        <script>
            function showEmail() {
                document.querySelector('#showEmail').style.display = 'none';
                document.querySelector('#emailSection').style.display = 'inline';
            }
        </script>
        <?php
            // register success
            if (isset($_SESSION['register'])) {
                unset($_SESSION['register']);
            }
            //account
            if (!(isset($_SESSION['account_manage']))) {
                $_SESSION['account_manage'] = "";
            }
            else if ($_SESSION['account_manage'] == 'success') {
                echo "<p class='h4 m-4' style='color: red;'>帳號資料修改成功</p>";
                unset($_SESSION['account_manage']);
            }
            if (!(isset($_SESSION['pwd_modify']))) {
                $_SESSION['pwd_modify'] = "";
            }
            else if ($_SESSION['pwd_modify'] == 'success') {
                echo "<p class='h4 m-4' style='color: red;'>密碼修改成功</p>";
                unset($_SESSION['pwd_modify']);
            }
        ?>
    </h3>
    <div class="tagBtnGroup">
        <a class="btn btn-primary btn-lg m-2" href="?action=account_manage" role="button">帳號資料修改</a>
        <a class="btn btn-danger btn-lg m-2" href="?action=pwd_modify" role="button">修改密碼</a>
        <a class="btn btn-success btn-lg m-2" href="?action=logout" role="button">登出</a>
    </div>
</div>