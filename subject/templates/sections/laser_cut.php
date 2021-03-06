<!-- Header -->
<style>
    header {
        background-image: url(../img/subjects/LaserCut/titleBG.jpg) !important;
    }
</style>
<header class="masthead d-flex">
    <div id="pageTitle" class="container text-center my-auto">
        <h1 class="mb-1">雷射切割</h1>
        <h3 class="mb-5">
            <em>喜歡動手動腳？來試試手感吧！</em>
			<?php include("./templates/course_score.php"); ?>
        </h3>
        <div class="tagBtnGroup">
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#vidTop" onClick="tagger(1)">
                雷切機怎麼用？
            </a>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#links">
                超級實用網站連結
            </a>
        </div>
    </div>
    <div class="overlay"></div>
</header>

<script type="text/javascript">
    var prev;   //previous video index
    var cur = 1;    //current video index, default: 1
    var vidFirst = 1;   //current video counter start index, default: 1
    var vidCount = [3, 2];	//[tag1, tag2]   //listed by videoTag orders
    
    var vidTagNo = 1;   //video tag index, default: 1(laser cutter tutorial);
    var vidPrevTag;     //previous video tag, used for button color changing in tagBtnColor()
    function tagger(tagNo) {    //video tag switcher, receives tagNo while button onClick
        vidPrevTag = vidTagNo;
        vidTagNo = tagNo;
        document.getElementById("vidTitleTag").innerHTML = vidTagList[tagNo - 1];
        console.log("Tag Switched to " + vidTagList[tagNo - 1]);
        cur = 1;
        switcher();
        //getTag(1, tagNo);
    }
    
    /* Lists */
    var vidTagList = [
        "雷切機使用教學", 
        "3D列印"
    ]
    var vidList = [
        //tag01: 雷切機使用教學    vidList[0]
        [
            //title     vidList[0][0]
            [
                //title 1
                "雷切機本機 - 01", 
                //title 2
                "雷切機本機 - 02", 
                //title 3
                "軟體操作"
            ], 
            //src       vidList[0][1]
            [
                //src 1
                "https://www.youtube-nocookie.com/embed/CStomx2LJzc", 
                //src 2
                "https://www.youtube-nocookie.com/embed/qMuZWL75o1A", 
                //src 3
                "https://www.youtube-nocookie.com/embed/ituTymYlreA"
            ]
        ],
        //tag02: 3D列印   vidList[1]
        [
            //title     vidList[1][0]
            [
                //title 1   vidList[1][0][0]
                "3D列印機本機1", 
                //title 2   vidList[1][0][1]
                "切片軟體操作"
            ], 
            //src       vidList[1][1]
            [   //replace the dashes with youtube links, same as above
                //src 1     vidList[1][1][0]
                "https://www.youtube-nocookie.com/embed/-----------", 
                //src 2     vidList[1][1][1]
                "https://www.youtube-nocookie.com/embed/-----------"
            ]
        ]
    ];
    
    function switcher() {   //video switcher, called by prevVid()/nextVid()/tagger()
        document.getElementById("vidTitle").innerHTML = vidList[vidTagNo - 1][0][cur - 1]; //getTitle
        $('iframe').attr('src',vidList[vidTagNo - 1][1][cur - 1]);;   //getSrc
        _log();
    }
    
    function _log(){    //console logger
        console.log("Switched to video " + vidList[vidTagNo - 1][0][cur - 1]);
    }
    
    function prevVid(){     //previous video index finder
        prev = cur;
        if (cur == vidFirst){
            cur = vidCount[vidTagNo - 1];
        }
        else {
            cur = cur - 1;
        }
        switcher();
    }
    function nextVid(){     //next video index finder
        prev = cur;
        if(cur == vidCount[vidTagNo - 1]) {
            cur = vidFirst;
        }
        else {
            cur = cur + 1;
        }
        switcher();
    }
</script>

<section class="content-section" id="laserCutterTutorial">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-12" id="vidTop">
                <center>
                    <table width="100%" border="0">
                        <center>
                            <p>
                                <!--<a id="LCtagger1" class="btn btn-md btn-primary LCtag" href="#vidTop1" onClick="tagger(1)">
                                    雷切機使用教學
                                </a>
                                <a id="LCtagger2" class="btn btn-md btn-dark LCtag" href="#vidTop1" onClick="tagger(2)">
                                    3D列印
                                </a>-->
                            </p>
                            <h2 id="vidTitleTag" style="font-size:2.5rem;">雷切機使用教學</h2>
                            <h2 id="vidTitle" style="font-size:2.5rem;">雷切機本機 - 01</h2>
                        </center>
                        <tbody class="nav-item">
                            <tr style="text-align:center;">
                                <td style="width: 5%;">
                                    <a id="btn-prev" href="#prev" onclick="prevVid()" style="">
                                        <img src="../img/features/prev.png" alt="prev">
                                    </a>
                                </td>
                                <td style="width: 90%;">
                                    <div id="vid" style="display:block;">
                                        <center>
                                            <p></p>
                                            <div class="embed-responsive embed-responsive-4by3 dynVid rad20">
                                                <iframe class="video embed-responsive-item" src="https://www.youtube-nocookie.com/embed/CStomx2LJzc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                            </div>
                                        </center>
                                    </div>
                                </td>
                                <td style="width: 5%;">
                                    <a id="btn-next" href="#next" onclick="nextVid()" style="">
                                        <img src="../img/features/next.png" alt="next">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </center>
            </div>
        </div>
    </div>
</section>

<!-- links -->
<section class="content-section bg-light" id="links">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2>超級實用網頁連結</h2>
                <p class="lead mb-5">
                    Maker必備的秘密武器
                </p>
                <div class="tagBtnGroup">
                    <a class="btn btn-dark btn-xl js-scroll-trigger" href="https://www.thingiverse.com/" target="_blank">
                        MakerBot Thingiverse
                    </a>
                    <a class="btn btn-dark btn-xl js-scroll-trigger" href="https://www.tinkercad.com/" target="_blank">
                        AutoDesk TinkerCAD
                    </a>
                    <a class="btn btn-dark btn-xl js-scroll-trigger" href="https://inkscape.org/" target="_blank">
                        InkScape
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>