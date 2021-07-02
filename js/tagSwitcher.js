//eli5fortahrd tag switcher
/*
Page No:
    0: index.html
    1: LaserCut.html
    2: internetIntro.html
    3: calculus.html
    4: cpi.html
*/
function getTag(pageNo, callNo) {
    switch (pageNo) {
        case 0:
            indexCaller(callNo);
            break;
    }
}

//0: index.html
var tagIndex = [
    //usage: tagIndex[tag title/tag class][num];
    //tag class
    [
        "",  //0: title
        "index_all",    //1: all categories
        "index_lt",     //2: learning & technology
        "index_dt",     //3: design & technology
        "index_cs"      //4: computer science
    ], 
    //tag title
    [
        "", 
        "所有分類", 
        "學習與科技組", 
        "設計與科技組", 
        "資工系雙主修"
    ]
];
function indexCaller(callNo) {
    var calledTitle = document.getElementById("index_title");
    calledTitle.innerHTML = tagIndex[1][callNo];
    console.log("Tag: " + tagIndex[1][callNo]);
    
    var tagOff = document.getElementsByClassName("index_all");
    var tagOn = document.getElementsByClassName(tagIndex[0][callNo]);
    for (var i = 0; i < tagOff.length; i++) {
        tagOff[i].style.display = "none";
    }
    for (var i = 0; i < tagOn.length; i++) {
        tagOn[i].style.display = "block";
    }
}

//1: LaserCut.html
