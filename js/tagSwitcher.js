//eli5fortahrd tag switcher
/*
Page No:
    0: index.html
    1: LaserCut.html
    2: InternetIntro.html
    3: Calculus.html
    4: ComputerProgramming.html
    5: Graphics.html
    6: EngineeringDesign.html
*/
function getTag(pageNo, callNo) {
    switch (pageNo) {
        case 0:
            indexCaller(callNo);
            break;
        case 1: 
            laserCutCaller(callNo);
            break;
        case 5:
            graphicsCaller(callNo);
            break;
    }
}
function colorChange(tagName, tagger, callNo) {
    var removeTagColor = document.getElementsByClassName(tagName);
    for (var i = 0; i < removeTagColor.length; i++) {
        removeTagColor[i].classList.remove('btn-primary');
        removeTagColor[i].classList.add('btn-dark');
    }
    
    var addTagColor = tagger + callNo;
    document.getElementById(addTagColor).classList.remove('btn-dark');
    document.getElementById(addTagColor).classList.add('btn-primary');
}

//0: index.html
function indexCaller(callNo) {
    var tagIndex = [
        //usage: tagIndex[tag title/tag class][num];
        //tag class
        //tag title
        [
            "", 
            "所有分類", 
            "學習與科技組", 
            "設計與科技組", 
            "資工系雙主修"
        ], 
        [
            "",
            "index_all",    //1: all categories
            "index_lt",     //2: learning & technology
            "index_dt",     //3: design & technology
            "index_cs"      //4: computer science
        ]
    ];
    //get title
    var calledTitle = document.getElementById("index_title");
    calledTitle.innerHTML = tagIndex[0][callNo];
    console.log("Tag: " + tagIndex[0][callNo]);
    //get tagged items
    var tagOff = document.getElementsByClassName("index_all");
    var tagOn = document.getElementsByClassName(tagIndex[1][callNo]);
    for (var i = 0; i < tagOff.length; i++) {
        tagOff[i].style.display = "none";
    }
    for (var i = 0; i < tagOn.length; i++) {
        tagOn[i].style.display = "block";
    }
    //get pressed tag color
    colorChange("indexTag", "indexTagger", callNo);
}

//1: LaserCut.html
function laserCutCaller(callNo) {
    //get pressed tag color
    colorChange("LCtag", "LCtagger", callNo);
}

//5: Graphics.html
function graphicsCaller(callNo) {
    var tagIndex = [
        //usage: tagIndex[callNo];
        [
            "", 
            "一點透視作圖", 
            "兩點透視作圖", 
            "三點透視作圖", 
            "程式作圖", 
            "等角圖", 
            "橢圓", 
            "等分已知圓面積", 
            "擺線畫法"
        ]
    ];
    //get title
    var calledTitle = document.getElementById("index_title");
    calledTitle.innerHTML = tagIndex[0][callNo];
    console.log("Tag: " + tagIndex[0][callNo]);
    //get tagged items
    var tagOff = document.getElementsByClassName("index_all");
    var tagOn = document.getElementsByClassName(tagIndex[1][callNo]);
    for (var i = 0; i < tagOff.length; i++) {
        tagOff[i].style.display = "none";
    }
    for (var i = 0; i < tagOn.length; i++) {
        tagOn[i].style.display = "block";
    }
    //get pressed tag color
    colorChange("indexTag", "indexTagger", callNo);
}