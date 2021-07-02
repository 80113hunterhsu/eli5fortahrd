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
    //tag title
    [
        "", 
        "所有分類", 
        "學習與科技組", 
        "設計與科技組", 
        "資工系雙主修"
    ], 
    [
        "",  //0: title
        "index_all",    //1: all categories
        "index_lt",     //2: learning & technology
        "index_dt",     //3: design & technology
        "index_cs"      //4: computer science
    ]
];
function indexCaller(callNo) {
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
    var removeTagColor = document.getElementsByClassName("indexTag");
    for (var i = 0; i < removeTagColor.length; i++) {
        removeTagColor[i].classList.remove('btn-primary');
        removeTagColor[i].classList.add('btn-dark');
    }
    var addTagColor = "indexTagger" + callNo;
    document.getElementById(addTagColor).classList.remove('btn-dark');
    document.getElementById(addTagColor).classList.add('btn-primary');
    //console.log("Tag Button Color Changed. ");
}

//1: LaserCut.html
