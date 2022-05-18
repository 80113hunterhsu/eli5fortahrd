<!-- forgotPass -->
<div class="container text-center my-auto col-lg-4 col-sm-10" id="userForgotPass">
    <h1 class="mb-1 ">忘記密碼</h1>
    <h3 class="mb-5">
        <em></em>
    </h3>
    <form>
        <div class="form-group">
        <label for="user_account_recovery">
            <b class="h3">學號</b>
        </label>
        <input type="text" class="form-control" id="user_account_recovery" aria-describedby="user_account_recovery" placeholder="學號" required="1">
        </div>
        <div class="form-group">
        <label for="user_email">
            <b class="h3">電子郵件</b>
        </label>
        <input type="text" class="form-control" id="user_email" placeholder="密碼" required="1">
        </div>
        <a class="btn btn-dark btn-lg mr-2" href="#" role="button" onClick="noForgotPass();">返回</a>
        <a class="btn btn-danger btn-lg mr-2" href="#" role="button" type="submit">重設密碼</a>
    </form>
</div>