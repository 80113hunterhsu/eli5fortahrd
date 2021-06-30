var hided = 0;
function checkHost() {
    for (var i = 0; i < 50; i++) {
        if (document.getElementsByTagName("a")[i].href == "https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website&utm_content=footer_img") {
            document.getElementsByTagName("a")[i].parentNode.style.display = "none";
            console.log("000WebHost Mark Hided. ");
            hided = 1;
            break;
        }        
    }
    if (hided == 0) {
        console.log("000WebHost Mark Not Found. ");
    }
}

window.onload = checkHost;