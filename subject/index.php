<!DOCTYPE html>
<?php
	session_start();
	include("../database/serverConn.php");

    $title = $_GET['title'];
    $title_list = array(
        "calculus" => "微積分", 
        "computer_programming" => "程式設計", 
        "engineering_design" => "工程設計", 
        "graphics" => "圖學", 
        "internet_introduction" => "網際網路概論", 
        "laser_cut" => "雷射切割"
    );
	$course_id_list = array(
		"calculus" => "MAU0180", 
        "computer_programming" => "CSU0001", 
        "engineering_design" => "ITU0162", 
        "graphics" => "ITU0004", 
        "internet_introduction" => "ITU1028", 
        "laser_cut" => "SELF0001"
	);
	$course_id = $course_id_list[$title];
	$cmd_getCourseScore = "SELECT course_score FROM course WHERE course_id = '$course_id'";
	$getCourseScore = mysqli_fetch_assoc(mysqli_query($db, $cmd_getCourseScore));
	$course_score = $getCourseScore['course_score'];
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php echo $title_list[$title]; ?> - 科技系懶人包</title>

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
	
	<!-- Style -->
	<style>
		header {
			background-size: cover;
			background-position: top right;
			color: #ffffff !important;
			text-shadow: 2px 2px black !important;
		}
        header:before {
            content: "";
            background: rgba(0, 0, 0, 0.6);
            position: absolute;
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
        }
		#pageTitle {
			z-index: 999;
		}
	</style>
</head>
	
<body id="page-top">
	<!-- Home Button-->
	<a class="home-toggle rounded" href="../"> <i class="fas fa-home"></i> </a>
	<!-- Navigation --> 
	<a class="menu-toggle rounded" href="#"> <i class="fas fa-bars"></i> </a>
	<?php include("./templates/sidebar.php"); ?>
	
	<!-- dynamic loader for subjects -->
    <?php include("./templates/sections/" . $title . ".php") ?>
    
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
	