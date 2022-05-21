<?php 
    include("../database/serverConn.php");
?>
<!-- login -->
<div class="container text-center my-auto col-lg-4 col-sm-10" id="userLogin">
    <h1 class="mb-1 ">帳號管理</h1>
    <h3 class="mb-5">
        歡迎登入，<?php echo $_SESSION['name'] ?>
    </h3>
    <div>
        <a class="btn btn-danger btn-lg m-2" href="?action=forgetPW" role="button">修改密碼</a>
        <a class="btn btn-success btn-lg m-2" href="?action=logout" role="button">登出</a>
    </div>
</div>