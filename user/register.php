<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>註冊 - 科技系懶人包</title>

	<!-- Bootstrap Core CSS -->
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Custom Fonts -->
	<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="../vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
	
	<!-- Custom CSS -->
	<link href="../css/stylish-portfolio.min.css" rel="stylesheet">
	<link href="../css/customDefined.css" rel="stylesheet">
    
    <!-- Custom JS-->
    <script src="../js/tagSwitcher.js"></script>
    <script src="../js/subMenu.js"></script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HP1QM4Q74D"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-HP1QM4Q74D');
    </script>
	
	<!-- Onpage Style -->
	<style>
		header {
			/*background-image: url(img/indexBG.jpg) !important;*/
			background-size: 100%; 
			color: #ffffff;
			opacity: 0.85;
			text-shadow: 2px 2px black;
		}
	</style>
</head>
	
<body id="page-top">
    <!-- Home Button-->
	<a class="home-toggle rounded" href="../">
		<i class="fas fa-home"></i>
	</a>
	<!-- Navigation -->
	<a class="menu-toggle rounded" href="#">
		<i class="fas fa-bars"></i>
	</a>
	<?php include("./templates/sidebar.php"); ?>
	
	<!-- Header -->
	<header class="masthead d-flex">
        <div class="container text-center my-auto col-lg-4 col-sm-10" id="userRegister">
			<h1 class="mb-1 ">註冊</h1>
			<h3 class="mb-5">
				<em></em>
			</h3>
            <form>
              <div class="form-group">
                <label for="user_name">
                  <b class="h3">暱稱</b>
                </label>
                <input type="text" class="form-control" id="user_name" aria-describedby="user_name" placeholder="暱稱" required="1">
              </div>
              <div class="form-group">
                <label for="user_account">
                  <b class="h3">學號</b>
                </label>
                <input type="text" class="form-control" id="user_account" aria-describedby="user_account" placeholder="學號" required="1">
              </div>
              <div class="form-group">
                <label for="user_pwd">
                  <b class="h3">密碼</b>
                </label>
                <input type="text" class="form-control" id="user_pwd" placeholder="密碼" required="1">
              </div>
              <div class="form-group">
                <label for="user_email">
                  <b class="h3">電子郵件</b>
                </label>
                <input type="text" class="form-control" id="user_email" placeholder="電子郵件" required="1">
              </div>
              <a class="btn btn-success btn-lg" href="#" role="button" type="submit">註冊</a>
            </form>
		</div>
		<div class="overlay"></div>
	</header>
    
	<!-- Footer -->
	<?php include("./templates/footer.php"); ?>
	
	<!-- Scroll to Top Button--> 
	<a class="scroll-to-top rounded js-scroll-trigger" href="#page-top"> <i class="fas fa-angle-up"></i> </a> 
	
	<!-- Bootstrap core JavaScript --> 
	<script src="../vendor/jquery/jquery.min.js"></script> 
	<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
	
	<!-- Plugin JavaScript --> 
	<script src="../vendor/jquery-easing/jquery.easing.min.js"></script> 
	
	<!-- Custom scripts for this template --> 
	<script src="../js/stylish-portfolio.min.js"></script>
</body>
</html>
	