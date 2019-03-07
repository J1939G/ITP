window.onscroll = function() {scrollFunction()};
window.onresize = function() {menu('menu-page-container');menu('menu-page-container');};
function gebi(id){
    return document.getElementById(id).style;
}
function scrollFunction() {
    if( document.body.scrollTop  > 5 || document.documentElement.scrollTop > 5 ){
        gebi('navigation').fontSize = "0.5em";
        gebi('arrow').fontSize = "0.5rem";
    } else {
        gebi('navigation').fontSize = "1em";
        gebi('arrow').fontSize = "1rem";
    }
}

function portrait() {
    var images = document.querySelectorAll('.thumb img');

    images.forEach(function(element) {
        if( element.width <= element.height){
            element.style.width = '50%';
            element.style.display = 'block';
            element.style.margin = 'auto';
        }
  });
}

function menu(Class){
    item = document.getElementsByClassName(Class)[0];
    aspectRatioMax = window.matchMedia("(max-aspect-ratio: 4/5)");

    if( aspectRatioMax.matches) {
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
    else if(window.matchMedia("(min-aspect-ratio: 4/5)").matches && window.matchMedia("(max-aspect-ratio: 3/2)").matches){
        item.style.height = "100%";
        if( item.style.transform != "translateX(0%)" ){
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