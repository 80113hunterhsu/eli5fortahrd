<!-- Header -->
<style>
    header {
        background-image: url(../img/subjects/EngineeringDesign/titleBG.jpg) !important;
    }
</style>
<header class="masthead d-flex">
    <div id="pageTitle" class="container text-center my-auto">
        <h1 class="mb-1">工程設計</h1>
        <h3 class="mb-5">
            <em>做就對了，想那麼多幹什麼？</em>
			<?php include("./templates/course_score.php"); ?>
        </h3>
        <div class="tagBtnGroup">
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#vidTop">教學影片</a>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#links">推薦學習內容</a>
        </div>
    </div>
    <div class="overlay"></div>
</header>

<script type="text/javascript">
    var prev;   //previous video index
    var cur = 1;    //current video index, default: 1
    var vidFirst = 1;   //current video counter start index, default: 1
    var vidCount = [1];	//[tag1, tag2]   //listed by videoTag orders
    
    var vidTagNo = 1;   //video tag index, default: 1(laser cutter tutorial);
    var vidPrevTag;     //previous video tag, used for button color changing in tagBtnColor()
    function tagger(tagNo) {    //video tag switcher, receives tagNo while button onClick
        vidPrevTag = vidTagNo;
        vidTagNo = tagNo;
        document.getElementById("vidTitleTag").innerHTML = vidTagList[tagNo - 1];
        console.log("Tag Switched to " + vidTagList[tagNo - 1]);
        cur = 1;
        switcher();
        getTag(1, tagNo);
    }
    
    /* Lists */
    var vidTagList = [
        "教學影片"
    ]
    var vidList = [
        //tag01: 雷切機使用教學    vidList[0]
        [
            //title     vidList[0][0]
            [
                //title 1
                "有限元素分析教學"
            ], 
            //src       vidList[0][1]
            [
                //src 1
                "https://www.youtube-nocookie.com/embed/5vC1RSQwBqA"
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

<!-- tutorial -->
<section class="content-section" id="tutorial">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-12" id="vidTop">
                <center>
                    <table width="100%" border="0">
                        <tbody class="nav-item">
                            <tr style="text-align:center;">
                                <td style="width: 5%;">
                                    <a class="hider" id="btn-prev" href="#prev" onclick="prevVid()" style="">
                                        <img src="../img/features/prev.png" alt="prev">
                                    </a>
                                </td>
                                <td style="width: 90%;">
                                    <div id="vid" style="display:block;">
                                        <center>
                                            <p>
                                                <!--<a id="LCtagger1" class="btn btn-md btn-primary LCtag" href="#vidTop1" onClick="tagger(1)">
                                                    教學影片
                                                </a>-->
                                            </p>
                                            <h2 id="vidTitleTag" style="font-size:2.5rem;">教學影片</h2>
                                            <h2 id="vidTitle" style="font-size:2.5rem;">有限元素分析教學</h2>
                                            <p></p>
                                            <div class="embed-responsive embed-responsive-4by3 dynVid rad20">
                                                <iframe class="video embed-responsive-item" src="https://www.youtube-nocookie.com/embed/5vC1RSQwBqA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                            </div>
                                        </center>
                                    </div>
                                </td>
                                <td style="width: 5%;">
                                    <a class="hider" id="btn-next" href="#next" onclick="nextVid()" style="">
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
                <h2>推薦學習內容</h2>
                <p class="lead mb-5">
                    課程專題網頁
                </p>
                <div class="tagBtnGroup">
                    <a class="btn btn-dark btn-xl js-scroll-trigger" href="https://sites.google.com/ttsh.tp.edu.tw/rc-car-engineering-design/" target="_blank">
                        工程設計專題 - 電動車
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>