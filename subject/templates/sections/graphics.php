<!-- Header -->
<style>
    header {
        background-image: url(../img/subjects/Graphics/titleBG.jpg) !important;
    }
</style>
<header class="masthead d-flex">
    <div id="pageTitle" class="container text-center my-auto">
        <h1 class="mb-1">圖學</h1>
        <h3 class="mb-5">
            <em>這裡沒有塗鴉，只有真理！</em>
			<?php include("./templates/course_score.php"); ?>
        </h3>
        <div class="tagBtnGroup">
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#GraphicsTutorial">
                我最喜歡畫畫了，誒嘿
            </a>
        </div>
    </div>
    <div class="overlay"></div>
</header>

<script type="text/javascript">
    var prev;   //previous video index
    var cur = 1;    //current video index, default: 1
    var vidFirst = 1;   //current video counter start index, default: 1
    var vidCount = [4, 3, 2, 2, 5, 4, 2];	//[tag1, tag2]   //listed by videoTag orders
    
    var vidTagNo = 1;   //video tag index, default: 1
    var vidPrevTag;     //previous video tag, used for button color changing in tagBtnColor()
    function tagger(tagNo) {    //video tag switcher, receives tagNo while button onClick
        vidPrevTag = 1;
        vidTagNo = tagNo;
        document.getElementById("GRtitle").innerHTML = vidTagList[tagNo - 1];
        console.log("Tag Switched to " + vidTagList[tagNo - 1]);
        cur = 1;
        switcher();
        getTag(9, tagNo);
    }
    
    /* Lists */
    var vidTagList = [
        "一點透視作圖", 
        "兩點透視作圖", 
        "三點透視作圖", 
        "程式作圖", 
        "等角圖", 
        "橢圓", 
        "其他"
    ]
    var vidList = [
        //tag01: 一點透視作圖    vidList[0]
        [
            //title     vidList[0][0]
            [
                //title 1
                "一點透視作圖 - 01", 
                //title 2
                "一點透視作圖 - 02", 
                //title 3
                "一點透視作圖 - 03", 
                //title 4
                "一點透視作圖 - 04"
            ], 
            //src       vidList[0][1]
            [
                //src 1
                "https://www.youtube.com/embed/YeQTugspxSo", 
                //src 2
                "https://www.youtube.com/embed/byIMlTlRuAI", 
                //src 3
                "https://www.youtube.com/embed/lgUjAYueUek", 
                //src 4
                "https://www.youtube.com/embed/vAbBwPugOIw"
            ]
        ],
        //tag02: 兩點透視作圖   vidList[1]
        [
            //title     vidList[1][0]
            [
                //title 1
                "兩點透視作圖 - 01", 
                //title 2
                "兩點透視作圖 - 02", 
                //title 3
                "兩點透視作圖 - 03"
            ], 
            //src       vidList[1][1]
            [
                //src 1
                "https://www.youtube.com/embed/dVduOcd5xn8", 
                //src 2
                "https://www.youtube.com/embed/P39MUVmen58", 
                //src 3
                "https://www.youtube.com/embed/n11f4ykhSYA"
            ]
        ],
        //tag03: 三點透視作圖   vidList[2]
        [
            //title     vidList[2][0]
            [
                //title 1
                "三點透視作圖 - 01", 
                //title 2
                "三點透視作圖 - 02"
            ], 
            //src       vidList[2][1]
            [
                //src 1
                "https://www.youtube.com/embed/_Ptvu9k4AwY", 
                //src 2
                "https://www.youtube.com/embed/g81Fmm052XI"
            ]
        ],
        //tag04: 程式作圖   vidList[3]
        [
            //title     vidList[3][0]
            [
                //title 1
                "用程式指令畫圓", 
                //title 2
                "用程式畫內外擺線"
            ], 
            //src       vidList[3][1]
            [
                //src 1
                "https://www.youtube.com/embed/Qn0yzq0o-rI", 
                //src 2
                "https://www.youtube.com/embed/Natp1t4OrI4"
            ]
        ],
        //tag05: 等角圖   vidList[4]
        [
            //title     vidList[4][0]
            [
                //title 1
                "等角投影", 
                //title 2
                "等角圖 - 上方挖孔", 
                //title 3
                "等角圖 - 正面挖孔", 
                //title 4
                "等角圖 - 側面挖孔", 
                //title 5
                "等角圖 - 圓角"
            ], 
            //src       vidList[4][1]
            [
                //src 1
                "https://www.youtube.com/embed/24nq3wB-brQ", 
                //src 2
                "https://www.youtube.com/embed/bw46LV7TGtE", 
                //src 3
                "https://www.youtube.com/embed/0EC32OIdS2g", 
                //src 4
                "https://www.youtube.com/embed/0-rywKvbizI", 
                //src 5
                "https://www.youtube.com/embed/EzYZqXe2ZGU"
            ]
        ],
        //tag06: 橢圓   vidList[5]
        [
            //title     vidList[5][0]
            [
                //title 1
                "橢圓畫法 - 01", 
                //title 2
                "橢圓畫法 - 02", 
                //title 3
                "橢圓畫法 - 03", 
                //title 4
                "橢圓畫法 - 04"
            ], 
            //src       vidList[5][1]
            [
                //src 1
                "https://www.youtube.com/embed/N60kEsCjPVs", 
                //src 2
                "https://www.youtube.com/embed/QxCNQysf-Is", 
                //src 3
                "https://www.youtube.com/embed/R5tlaVcKluw", 
                //src 4
                "https://www.youtube.com/embed/2BY-m9wskHU"
            ]
        ],
        //tag07: 程式作圖   vidList[6]
        [
            //title     vidList[6][0]
            [
                //title 1
                "等分已知圓面積", 
                //title 2
                "擺線畫法"
            ], 
            //src       vidList[6][1]
            [
                //src 1
                "https://www.youtube.com/embed/f6-vFztppAk", 
                //src 2
                "https://www.youtube.com/embed/MmdHtYCWMQA"
            ]
        ]
    ];
    
    function switcher() {   //video switcher, called by prevVid()/nextVid()/tagger()
        document.getElementById("GRvidTitle").innerHTML = vidList[vidTagNo - 1][0][cur - 1]; //getTitle
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

<section class="content-section" id="GraphicsTutorial">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-12" id="vidTop">
                <center>
                    <table width="100%" border="0">
                        <center>
                            <p>
                                <div class="tagBtnGroup">
                                    <a id="GRtagger1" class="btn btn-md btn-primary GRtag" href="#GraphicsTutorial1" onClick="tagger(1)">
                                        一點透視作圖
                                    </a>
                                    <a id="GRtagger2" class="btn btn-md btn-dark GRtag" href="#GraphicsTutorial1" onClick="tagger(2)">
                                        兩點透視作圖
                                    </a>
                                    <a id="GRtagger3" class="btn btn-md btn-dark GRtag" href="#GraphicsTutorial1" onClick="tagger(3)">
                                        三點透視作圖
                                    </a>
                                    <a id="GRtagger4" class="btn btn-md btn-dark GRtag" href="#GraphicsTutorial1" onClick="tagger(4)">
                                        程式作圖
                                    </a>
                                    <a id="GRtagger5" class="btn btn-md btn-dark GRtag" href="#GraphicsTutorial1" onClick="tagger(5)">
                                        等角圖
                                    </a>
                                    <a id="GRtagger6" class="btn btn-md btn-dark GRtag" href="#GraphicsTutorial1" onClick="tagger(6)">
                                        橢圓
                                    </a>
                                    <a id="GRtagger7" class="btn btn-md btn-dark GRtag" href="#GraphicsTutorial1" onClick="tagger(7)">
                                        其他
                                    </a>
                                </div>
                            </p>
                            <h2 id="GRtitle" style="font-size:2.5rem;">一點透視作圖</h2>
                            <h2 id="GRvidTitle" style="font-size:2.5rem;">一點透視作圖 - 01</h2>
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
                                                <iframe class="video embed-responsive-item" src="https://www.youtube.com/embed/YeQTugspxSo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
<section class="content-section bg-light hider" id="links">
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