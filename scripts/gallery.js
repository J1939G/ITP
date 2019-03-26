window.onscroll = function() {scrollFunction()};
window.onresize = function() {menu('#navigation div');menu('#navigation div');};
function gebi(id){
    return document.getElementById(id).style;
}

function scrollFunction() {
    scroll();
    if( document.body.scrollTop  > 5 || document.documentElement.scrollTop > 5 ){
        gebi('navigation').fontSize = "0.5em";
        gebi('arrow').fontSize = "0.5rem";
    } else {
        gebi('navigation').fontSize = "1em";
        gebi('arrow').fontSize = "1rem";
    }
    makeAppear(3);
    makeAppear(4);
}

function makeAppear( child) {
    var element, name, arr;
    element = document.querySelector('#content div:nth-child(' + child + ')');
    if( (element.getBoundingClientRect().top) < document.body.clientHeight){
        name = "visibleText";
        arr = element.className.split(" ");
        if (arr.indexOf(name) == -1) {
        element.className += " " + name;
        }
    }
}

function scroll(){
    scrolledIMG = document.querySelector("#content div:nth-child(5)");
    if( document.documentElement == null){
        sT = document.body.scrollTop;
    } else {
        sT = document.documentElement.scrollTop;
    }


    if( document.body.scrollTop == '0'){ 
        scrolledIMG.scrollTo(sT/4,0);
    }
    else {
        scrolledIMG.scrollTo(sT/4,0);
    }
}

aspectRatioMax = window.matchMedia("(max-aspect-ratio: 4/5)");

function menu(query){
    item = document.querySelector(query);
    if( aspectRatioMax.matches ) {
        item.style.transform = "translateX(0%)";
        if( item.style.height != (window.innerHeight + 'px') ){
            item.style.height = (window.innerHeight + 'px');
            gebi('arrow').transform = "rotate(180deg)";
            gebi('arrow').fontSize = "1em";
            gebi('navigation').fontSize = "1em";
        }
        else {
            item.style.height = "0px";
            gebi('arrow').transform = "inherit";
        }
    }
    else {
        item.style.height = "100%";
        if( item.style.transform != "translateX(0%)" ){
            gebi('arrow').fontSize = "1em";
            gebi('navigation').fontSize = "1em";
            item.style.transform = "translateX(0%)";
            gebi('arrow').transform = "rotate(90deg)";
        } else {
            item.style.transform = "translateX(-100%)";
            gebi('arrow').transform = "rotate(270deg)";
            gebi('arrow').fontSize = "1em";
            gebi('navigation').fontSize = "1em";
        }
    }
}