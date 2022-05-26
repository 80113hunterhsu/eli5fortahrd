<!DOCTYPE html>
<?php
  session_start();
  include("../database/serverConn.php");

  if (!(isset($_SESSION['loginStat']))) {
    $_SESSION['loginStat'] = "not_logged_in";
  }

  if (isset($_GET['action'])) {
    $action = $_GET['action'];
  }
  else {
    $action = "show";
  }
  if ($action == "show") {
    if (isset($_GET['course'])) {
        $course_id = $_GET['course'];
    }
    else {
        $course_id = "";
    }
    if ($course_id == "") {
      $course_name = "請選擇課程";
    }
    else {
      $cmd_loadCourseName = "SELECT * FROM course WHERE course_id = '$course_id'";
      $loadCourseName = mysqli_query($db, $cmd_loadCourseName);
      $currentCourse = mysqli_fetch_assoc($loadCourseName);
      $course_name = $currentCourse['course_name'];
    }
  }
  else {
    if ($_SESSION['loginStat'] != "success") {
      header("Location: ../user/?action=login");
    }
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
			background-size: 100%; 
			color: #000;
			opacity: 0.85;
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
	
	<?php
        if ($action == "show") {
            include("./templates/sections/review_show/index.php"); 
        }
        else if ($action == "new_review") {
            include("./templates/sections/review_add/index.php"); 
        }
    ?>
    
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
	