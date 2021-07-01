//eli5fortahrd tag switcher
//index.html
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

function itemCaller(tagNo) {
    console.log("tagNo = " + tagNo);
    var tagOff = document.getElementsByClassName("index_all");
    var tagOn = document.getElementsByClassName(tagIndex[0][tagNo]);
    for (var i = 0; i < tagOff.length; i++) {
        tagOff[i].style.display = "none";
    }
    for (var i = 0; i < tagOn.length; i++) {
        tagOn[i].style.display = "block";
    }
}

function titleCaller(titleNo) {
    var calledTitle = document.getElementById("index_title");
    calledTitle.innerHTML = tagIndex[1][titleNo];
    console.log("Tag: " + tagIndex[1][titleNo]);
}

function getTag(callNo) {
    //get title with titleCaller
    titleCaller(callNo);
    
    //get items of current tag
    itemCaller(callNo);
}

