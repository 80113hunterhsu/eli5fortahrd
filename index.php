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
	<meta name="description" content="科技系懶人包是由一群科技112的學生共同打造，為了讓科技系所有同學能夠更加了解系上甚至系外的課程內容及評價而架設的平台">
	<meta name="author" content="">
	<title>首頁 - 科技系懶人包</title>

	<!-- Bootstrap Core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Custom Fonts -->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
	
	<!-- Custom CSS -->
	<link href="css/stylish-portfolio.min.css" rel="stylesheet">
	<link href="css/customDefined.css" rel="stylesheet">
    
    <!-- Custom JS-->
    <!--<script src="js/includeHTML.js"></script>-->
    <script defer src="js/tagSwitcher.js"></script>
    <!-- <script defer src="js/webhostHide.js"></script> -->
    <script defer src="js/subMenu.js"></script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async defer src="https://www.googletagmanager.com/gtag/js?id=G-HP1QM4Q74D"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-HP1QM4Q74D');
    </script>
    
    <!-- AdSense --><!--
    <script data-ad-client="ca-pub-5444892029178204" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5444892029178204"
     crossorigin="anonymous"></script>-->
	
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
	<!-- Navigation -->
	<a class="menu-toggle rounded" href="#">
		<i class="fas fa-bars"></i>
	</a>
	<?php include("./templates/sidebar.php"); ?>
	
	<!-- Header -->
	<header class="masthead d-flex">
		<div class="container text-center my-auto">
			<h1 class="mb-1">科技系懶人包！</h1>
			<h3 class="mb-5">
				<em>懶人包在手，便知有沒有</em>
			</h3>
            <div class="tagBtnGroup">  <!--getTag(pageNo, callNo): tagSwitcher.js-->
            <!--item template: copy this <a> to add a category, remember to fill in getTag(0, [no.])
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="#allContents" onClick="getTag(0, [no.])">[category name]</a>
            -->
			    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#allContents" onClick="getTag(0, 1)">所有分類</a>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="#allContents" onClick="getTag(0, 3)">設計與科技組</a>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="#allContents" onClick="getTag(0, 2)">學習與科技組</a>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="#allContents" onClick="getTag(0, 4)">資工系雙主修</a>
            </div>
		</div>
		<div class="overlay"></div>
	</header>
	<div class="hider">
		<img class="hider" src="img/bg-masthead.webp" alt="bg-masthead">
	</div>
	
	<!-- allContents -->
	<section class="content-section" id="allContents">
		<div class="container">
			<div class="content-section-heading text-center">
				<h3 class="text-secondary mb-0">擇你所愛，愛你所選</h3>
                <!--page title-->
				<h2 class="mb-3" id="index_title">所有分類</h2>
                <!--category tag switch-->
                <div class="tagBtnGroup mb-5">  <!--getTag(callNo): tagSwitcher.js-->
                <!--item template: copy this <a> to add a category tag, remember to fill in getTag(0, [no.])
                    <a id="indexTagger[no.]" class="btn btn-dark btn-md js-scroll-trigger indexTag" href="#allContents1" onClick="getTag(0, [no.])">
                        [tag name (same as category name)]
                    </a>
                -->
			        <a id="indexTagger1" class="btn btn-primary btn-md js-scroll-trigger indexTag" href="#allContents" onClick="getTag(0, 1)">
                        所有分類
                    </a>
                    <a id="indexTagger3" class="btn btn-dark btn-md js-scroll-trigger indexTag" href="#allContents" onClick="getTag(0, 3)">
                        設計與科技組
                    </a>
                    <a id="indexTagger2" class="btn btn-dark btn-md js-scroll-trigger indexTag" href="#allContents" onClick="getTag(0, 2)">
                        學習與科技組
                    </a>
                    <a id="indexTagger4" class="btn btn-dark btn-md js-scroll-trigger indexTag" href="#allContents" onClick="getTag(0, 4)">
                        資工系雙主修
                    </a>
                </div>
			</div>
			<div class="row no-gutters">
            <!--item tags-->
                <!--dt = design & tech-->
                <!--lt = learning & tech-->
                <!--cs = computer science-->
            <!--item template: copy this <div> to add a subject entry
                <div class="col-lg-6 index_all index_[category]">
					<a class="portfolio-item" href="[#destination.html]">
						<div class="caption">
							<div class="caption-content">
								<div class="h2">[subject title]</div>
								<p class="mb-0">[subject subtitle]</p>
							</div>
						</div>
						<img class="img-fluid" src="[destination image 700x467]" alt="[image alternative text]">
					</a>
				</div>
            -->
            <!-- dt: Design and Technology -->
				<?php include("./templates/sections/home_links/link-laser_cut.php"); ?>
                <?php include("./templates/sections/home_links/link-graphics.php"); ?>
                <?php include("./templates/sections/home_links/link-engineering_design.php"); ?>
            <!-- dt END -->
            <!-- lt: Learning and Technology -->
				<?php include("./templates/sections/home_links/link-internet_introduction.php"); ?>
            <!-- lt END -->
            <!-- cs: Computer Science Double Major -->
				<?php include("./templates/sections/home_links/link-computer_programming.php"); ?>
				<?php include("./templates/sections/home_links/link-calculus.php"); ?>
            <!-- cs END -->
			</div>
		</div>
	</section>
	
    <?php include("./templates/sections/advise_resource.php"); ?>
    
    <?php include("./templates/sections/about.php"); ?>
    
    <?php include("./templates/sections/github.php"); ?>
    
	<!-- Footer -->
	<?php include("./templates/footer.php"); ?>
	
	<!-- Scroll to Top Button--> 
	<a class="scroll-to-top rounded js-scroll-trigger" href="#page-top"> <i class="fas fa-angle-up"></i> </a> 
	
	<!-- Bootstrap core JavaScript --> 
	<script defer src="vendor/jquery/jquery.min.js"></script> 
	<script defer src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
	
	<!-- Plugin JavaScript --> 
	<script defer src="vendor/jquery-easing/jquery.easing.min.js"></script> 
	
	<!-- Custom scripts for this template --> 
	<script defer src="js/stylish-portfolio.min.js"></script>
    
	<!-- Custom Font Loader --> 
	<link href="css/customFonts.css" rel="stylesheet" type="text/css">
</body>
</html>