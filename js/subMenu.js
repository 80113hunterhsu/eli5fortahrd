var navDT, navLT, navCS, nav;
var dtOn, dtOff, ltOn, ltOff, csOn, csOff, navSwitch;
var tagStat = [0, 0, 0]; //tag off by default

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

function getNav() {
    navDT = document.getElementsByClassName("nav_dt");  //nav[0]
    navLT = document.getElementsByClassName("nav_lt");  //nav[1]
    navCS = document.getElementsByClassName("nav_cs");  //nav[2]
    nav = [navDT, navLT, navCS];
    
    dtOn = document.getElementById("dtOn");     //navSwitch[0][0]
    dtOff = document.getElementById("dtOff");   //navSwitch[0][1]
    ltOn = document.getElementById("ltOn");     //navSwitch[1][0]
    ltOff = document.getElementById("ltOff");   //navSwitch[1][1]
    csOn = document.getElementById("csOn");     //navSwitch[2][0]
    csOff = document.getElementById("csOff");   //navSwitch[2][1]
    navSwitch = [[dtOn, dtOff], [ltOn, ltOff], [csOn, csOff]];
}

function navSub(navTagNo) {
    getNav();
    
    if (tagStat[navTagNo] == 0) {
        navSubOn(navTagNo);
        tagStat[navTagNo] = 1;
    }
    else if (tagStat[navTagNo] == 1) {
        navSubOff(navTagNo);
        tagStat[navTagNo] = 0;
    }
}

async function navSubOn(navTagNo) {
    navSwitch[navTagNo][0].style.display = "none";
    navSwitch[navTagNo][1].style.display = "block";
    let links = nav[navTagNo];
    //for (var i = 0; i < links.length; i++) {
    //  links[i].style.opacity = 1;  
    //}
    await sleep(50);
    for (var i = 0; i < links.length; i++) {
        //links[i].style.display = "block !important";
        links[i].style.setProperty('display', 'block', 'important');
        await sleep(5);
    }
}

async function navSubOff(navTagNo) {
    navSwitch[navTagNo][1].style.display = "none";
    navSwitch[navTagNo][0].style.display = "block";
    let links = nav[navTagNo];
    //for (var i = 0; i < links.length; i++) {
    //  links[i].style.opacity = 0;  
    //}
    await sleep(50);
    for (var i = 0; i < links.length; i++) {
        //links[i].style.display = "none";
        links[i].style.setProperty('display', 'none', 'important');
        await sleep(5);
    }
}