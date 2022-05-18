<!-- login -->
<div class="container text-center my-auto col-lg-4 col-sm-10" id="userLogin">
    <h1 class="mb-1 ">登入</h1>
    <h3 class="mb-5">
        <em></em>
    </h3>
    <form>
        <div class="form-group">
        <label for="user_account">
            <b class="h3">學號</b>
            <span id="user_account_required" style="display: none;">
            <b style="color: red;"><br>請輸入學號</b>
            </span>
        </label>
        <input type="text" class="form-control" id="user_account" aria-describedby="user_account" placeholder="學號" required="1">
        </div>
        <div class="form-group">
        <label for="user_pwd">
            <b class="h3">密碼</b>
            <span id="user_pwd_required" style="display: none;">
            <b style="color: red;"><br>請輸入密碼</b>
            </span>
        </label>
        <input type="text" class="form-control" id="user_pwd" placeholder="密碼" required="1">
        </div>
        <a class="btn btn-danger btn-lg mr-2" href="?action=forgetPW" role="button">忘記密碼</a>
        <a class="btn btn-success btn-lg ml-2" href="#" role="button" type="submit">登入</a>
    </form>
</div>