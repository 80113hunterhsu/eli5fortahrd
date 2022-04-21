<!DOCTYPE html>
<html lang="zh-tw">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
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
    <script src="js/includeHTML.js"></script>
    <script src="js/tagSwitcher.js"></script>
    <script src="js/webhostHide.js"></script>
    <script src="js/subMenu.js"></script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HP1QM4Q74D"></script>
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
	<nav id="sidebar-wrapper" w3-include-html="templates/sidebar.html"></nav>
    <?php //include("./templates/sidebar.php"); ?>
	
	<!-- Header -->
	<header class="masthead d-flex">
		<div class="container text-center my-auto">
			<h1 class="mb-1 ">科技系懶人包！</h1>
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
			        <a id="indexTagger1" class="btn btn-primary btn-md js-scroll-trigger indexTag" href="#allContents1" onClick="getTag(0, 1)">
                        所有分類
                    </a>
                    <a id="indexTagger3" class="btn btn-dark btn-md js-scroll-trigger indexTag" href="#allContents2" onClick="getTag(0, 3)">
                        設計與科技組
                    </a>
                    <a id="indexTagger2" class="btn btn-dark btn-md js-scroll-trigger indexTag" href="#allContents3" onClick="getTag(0, 2)">
                        學習與科技組
                    </a>
                    <a id="indexTagger4" class="btn btn-dark btn-md js-scroll-trigger indexTag" href="#allContents4" onClick="getTag(0, 4)">
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
				<div class="col-lg-6 index_all index_dt">
					<a class="portfolio-item" href="subjects/LaserCut.html">
						<div class="caption">
							<div class="caption-content">
								<div class="h2">雷射切割</div>
								<p class="mb-0">喜歡動手動腳？來試試手感吧！</p>
							</div>
						</div>
						<img class="img-fluid" src="img/portfolio/LaserCut.jpg" alt="LaserCut">
					</a>
				</div>
                <div class="col-lg-6 index_all index_dt">
					<a class="portfolio-item" href="subjects/Graphics.html">
						<div class="caption">
							<div class="caption-content">
								<div class="h2">圖學</div>
								<p class="mb-0">這裡沒有塗鴉，只有真理！</p>
							</div>
						</div>
						<img class="img-fluid" src="img/portfolio/Graphics.jpg" alt="Graphics">
					</a>
				</div>
                <div class="col-lg-6 index_all index_dt hider">
					<a class="portfolio-item" href="subjects/EngineeringDesign.html">
						<div class="caption">
							<div class="caption-content">
								<div class="h2">工程設計</div>
								<p class="mb-0">做就對了，想那麼多幹什麼？</p>
							</div>
						</div>
						<img class="img-fluid" src="img/portfolio/EngineeringDesign.jpg" alt="EngineeringDesign">
					</a>
				</div>
            <!-- dt END -->
            <!-- lt: Learning and Technology -->
				<div class="col-lg-6 index_all index_lt">
					<a class="portfolio-item" href="subjects/InternetIntro.html">
						<div class="caption">
							<div class="caption-content">
								<div class="h2">網際網路概論</div>
								<p class="mb-0">看課本想睡覺？那來看看這裡！</p>
							</div>
						</div>
						<img class="img-fluid" src="img/portfolio/InternetIntro.jpg" alt="InternetIntro">
					</a>
				</div>
            <!-- lt END -->
            <!-- cs: Computer Science Double Major -->
				<div class="col-lg-6 index_all index_cs">
					<a class="portfolio-item" href="subjects/ComputerProgramming.html">
						<div class="caption">
							<div class="caption-content">
								<div class="h2">程式設計</div>
								<p class="mb-0">雙主修資工的你，該看一下吧</p>
							</div>
						</div>
						<img class="img-fluid" src="img/portfolio/ComputerProgramming.jpg" alt="ComputerProgramming">
					</a>
				</div>
				<div class="col-lg-6 index_all index_cs">
					<a class="portfolio-item" href="subjects/Calculus.html">
						<div class="caption">
							<div class="caption-content">
								<div class="h2">微積分</div>
								<p class="mb-0">微積分變危機了？沒關係，我也是。</p>
							</div>
						</div>
						<img class="img-fluid" src="img/portfolio/Calculus.jpg" alt="Calculus">
					</a>
				</div>
            <!-- cs END -->
			</div>
		</div>
	</section>
	
    <!-- Advice and Resource Upload -->
    <section class="content-section bg-primary text-white">
    	<div class="container text-center">
    		<span id="helpTAHRDtitle">想為科技系盡一份心力嗎？</span>
            <p id="helpTAHRDsubtitle" class="mb-4">歡迎分享懶人包主題或是填寫回饋！</p>
            <div class="tagBtnGroup mb-5">
    		    <a class="btn btn-xl btn-light" href="https://forms.gle/tN4t4k7mt91NMgQ4A" target="_blank">懶人包主題提供</a>
                <a class="btn btn-xl btn-dark" href="https://forms.gle/oXptZdPXLTaC2wiN7" target="_blank">意見回饋</a>
            </div>
        </div>
    </section>
    
    <!-- About -->
    <section class="content-section bg-light" id="about">
    	<div class="container text-center">
    		<div class="row">
    			<div class="col-lg-10 mx-auto">
                    <p id="thankYouNote">特別感謝</p><br>
    				<span class="lead mb-5">
                        - 學習資料提供 - <br>
                        陳致愷、陳昱綸、蘇柏霖、柯宗佑
                        <hr>
                        - 網站架設建議 - <br>
                        丁玉良老師、徐翊堯同學：）<br>
                        以及參與109-2 數位學習方法與策略的各位同學們！
                    </span>
    		    </div>
        	</div>
        </div>
    </section>
    
    <!-- Github Page -->
    <section class="content-section bg-primary text-white">
    	<div class="container text-center">
    		<span id="joinUsTitle">你會寫網站嗎？</span>
            <p id="joinUsSubtitle" class="mb-4">到我們的GitHub Page晃晃吧～</p>
            <div class="tagBtnGroup mb-5">
    		    <a class="btn btn-xl btn-light" href="https://github.com/80113hunterhsu/eli5fortahrd" target="_blank">GitHub</a>
                <a class="btn btn-xl btn-dark" href="https://forms.gle/wVsRpPNTjnZMMeMZ6" target="_blank">加入我們</a>
            </div>
        </div>
    </section>
    
	<!-- Footer -->
	<footer class="footer text-center" w3-include-html="templates/footer.html" style="background-color: #ffc107;"></footer>
	
	<!-- Scroll to Top Button--> 
	<a class="scroll-to-top rounded js-scroll-trigger" href="#page-top"> <i class="fas fa-angle-up"></i> </a> 
	
	<!-- Bootstrap core JavaScript --> 
	<script src="vendor/jquery/jquery.min.js"></script> 
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
	
	<!-- Plugin JavaScript --> 
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script> 
	
	<!-- Custom scripts for this template --> 
	<script src="js/stylish-portfolio.min.js"></script>
    <script>includeHTML();</script> <!--w3-include-html caller-->
</body>
</html>
	