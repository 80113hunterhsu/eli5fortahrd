<!-- account manage -->
<?php
    include("../database/serverConn.php");
    $username = $_SESSION['username'];
    
    $cmd_getInfo = "SELECT name, email FROM user WHERE username = '$username'";
    $getInfo = mysqli_query($db, $cmd_getInfo);
    $row = mysqli_fetch_assoc($getInfo);
    $name = $row['name'];
    $email = $row['email'];
?>
<div class="container text-center my-auto col-lg-6 col-10" id="userRegister">
    <h1 class="mb-1 ">帳號資料修改</h1>
    <h4 class="mb-5"></h4>
    <form action="./templates/actions/account_manage_action.php" method="POST">
        <div class="form-group">
            <input type="text" class="form-control" id="user_name" name="user_name" aria-describedby="user_name" placeholder="暱稱" required="1" value="<?php echo $name; ?>">
        </div>

        <div class="form-group">
            <input type="email" class="form-control" id="user_email" name="user_email" pattern="^.+@.+$" placeholder="電子郵件" required="1" value="<?php echo $email; ?>">
        </div>

        <a class="btn btn-dark btn-lg m-2" href="?action=welcome" role="button">返回</a>
        <input class="btn btn-success btn-lg m-2" type="submit" value="修改">
    </form>
</div>