<!-- navbar -->
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand"> <a class="js-scroll-trigger" href="#page-top"><b>科技系懶人包！</b></a> </li>
        <!--dt-->
        <li class="sidebar-nav-item"> 
            <a id="dtTrig" href="#nav_dt" onClick="navSub(0)"> 
                設計與科技組 
                <i class="fa fa-plus" id="dtOn" aria-hidden="true"></i> 
                <i class="fa fa-minus" id="dtOff" aria-hidden="true" style="display: none;"></i> 
            </a> 
        </li>
            <li class="sidebar-nav-item"> <a class="js-scroll-trigger nav_dt" href="../subjects/LaserCut.php">雷射切割</a> </li>
            <li class="sidebar-nav-item"> <a class="js-scroll-trigger nav_dt" href="../subjects/Graphics.php">圖學</a> </li>
            <li class="sidebar-nav-item hider"> <a class="js-scroll-trigger nav_dt" href="../subjects/EngineeringDesign.php">工程設計</a> </li>
        <!--lt-->
        <li class="sidebar-nav-item"> 
            <a id="ltTrig" href="#nav_lt" onClick="navSub(1)"> 
                學習與科技組 
                <i class="fa fa-plus" id="ltOn" aria-hidden="true"></i> 
                <i class="fa fa-minus" id="ltOff" aria-hidden="true" style="display: none;"></i> 
            </a> 
        </li>
            <li class="sidebar-nav-item"> <a class="js-scroll-trigger nav_lt" href="../subjects/InternetIntro.php">網際網路概論</a> </li>
        <!--cs-->
        <li class="sidebar-nav-item"> 
            <a id="csTrig" href="#nav_cs" onClick="navSub(2)"> 
                資工系雙主修 
                <i class="fa fa-plus" id="csOn" aria-hidden="true"></i> 
                <i class="fa fa-minus" id="csOff" aria-hidden="true" style="display: none;"></i> 
            </a> 
        </li>
            <li class="sidebar-nav-item"> <a class="js-scroll-trigger nav_cs" href="../subjects/ComputerProgramming.php">程式設計</a> </li>
            <li class="sidebar-nav-item"> <a class="js-scroll-trigger nav_cs" href="../subjects/Calculus.php">微積分</a> </li>

        <hr>
        <!--------------------------------->
        <li class="sidebar-nav-item <?php if (isset($_SESSION['loginStat'])) echo("hider")?>"> 
            <a class="js-scroll-trigger" href="../user/?action=login">登入</a>
            <a class="js-scroll-trigger" href="../user/?action=register">註冊</a>
        </li>
        <li class="sidebar-nav-item <?php if (!(isset($_SESSION['loginStat']))) echo("hider")?>"> 
            <a class="js-scroll-trigger" href="../user/?action=welcome">您好，<?php echo $_SESSION['name']; ?></a>
            <a class="js-scroll-trigger" href="../user/?action=logout">登出</a>
        </li>

        <hr>
        <!--------------------------------->
        <li class="sidebar-nav-item"> <a class="js-scroll-trigger" href="https://forms.gle/tN4t4k7mt91NMgQ4A" target="_blank">懶人包主題提供</a> </li>
        <li class="sidebar-nav-item"> <a class="js-scroll-trigger" href="https://forms.gle/oXptZdPXLTaC2wiN7" target="_blank">意見回饋</a> </li>

        <hr>
        <!--------------------------------->
        <li class="sidebar-nav-item"> <a class="js-scroll-trigger" href="https://github.com/80113hunterhsu/eli5fortahrd" target="_blank">GitHub</a> </li>
        <li class="sidebar-nav-item"> <a class="js-scroll-trigger" href="https://forms.gle/wVsRpPNTjnZMMeMZ6" target="_blank">加入我們</a> </li>
    </ul>
</nav>