//eli5fortahrd tag switcher
//index.html
var tagIndex = [
    //usage: tagIndex[tag title/tag class][num];
    //tag title
    [
        "所有分類", 
        "學習與科技組", 
        "設計與科技組", 
        "資工系雙主修"
    ], 
    //tag class
    [
        "index_all" //all categories
        "index_lt", //learning & technology
        "index_dt", //design & technology
        "index_cs"  //computer science
    ]
];

function switcher(var tagOn, var tagOff) {
    tagOff.style.display = "none";
    tagOn.style.display = "inline";
}

function caller(var callOn, var callOff) {
    
}