<!DOCTYPE html>
<?php
  session_start();

  if (!(isset($_SESSION['loginStat']))) {
    $_SESSION['loginStat'] = "not_logged_in";
  }
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>課程評論 - 科技系懶人包</title>

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
        <!-- account -->
        <div class="container text-center my-auto col-10" id="userLogin">
            <h1 class="mb-1 ">課程評論</h1>
            <h3 class="mb-5"></h3>
            <div class="tagBtnGroup">
                <a class="btn btn-primary btn-lg m-2 <?php if ($_SESSION['loginStat'] != "success") echo("hider"); ?>" href="?action=new_review" role="button">我要寫評論</a>
                <a class="btn btn-success btn-lg m-2 js-scroll-trigger" href="#reviews" role="button">我看看就好</a>
            </div>
        </div>
		<div class="overlay"></div>
	</header>

    <!-- Call to Action -->
    <section class="content-section bg-primary text-white" id="reviews">
        <div class="container text-center">
            <h2 class="mb-5">
                所有評論
            </h2>
            <?php include("./templates/review_wrapper.php"); ?> 
            
        </div>
    </section>
    
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
	