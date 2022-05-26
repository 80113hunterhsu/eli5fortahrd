<!DOCTYPE html>
<?php
  session_start();

  $action = $_GET['action'];
  // page redirection
  if (!(isset($_SESSION['loginStat']))) {
    $_SESSION['loginStat'] = "not_logged_in";
  }
  if ($action == "logout") {
    header("Location: ./templates/actions/logout_action.php");
  }
  else if (($action == "login" || $action == "register" || $action == "pwd_rescue") && ($_SESSION['loginStat'] == "success")) {
    header("Location: ./?action=welcome");
  }
  else if (($action == "welcome" || $action == "account_manage" || $action == "pwd_modify") && ($_SESSION['loginStat'] == "not_logged_in")) {
    header("Location: ./?action=login");
  }
  // page title
  $action_list = array(
    "login" => "登入", 
    "register" => "註冊", 
    "pwd_rescue" => "忘記密碼", 
    "welcome" => "帳號管理", 
    "account_manage" => "帳號資料修改", 
    "pwd_modify" => "修改密碼"
  );
  // page loader path
  $load_list = array(
    "login" => "login", 
    "register" => "register", 
    "pwd_rescue" => "pwd_rescue", 
    "welcome" => "account", 
    "account_manage" => "account_manage", 
    "pwd_modify" => "pwd_modify"
  );
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php echo($action_list[$action]); ?> - 科技系懶人包</title>

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
			color: #000;
			opacity: 0.85;
			*text-shadow: 2px 2px black;
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
    	<?php include("./templates/sections/" . $load_list[$action] . ".php"); ?>
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
	