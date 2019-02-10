window.onscroll = function() {scrollFunction()};
function gebi(id){
    return document.getElementById(id).style;
}
function makeAppear(child){
    item = document.querySelector('#container div:nth-child(' + child + ')');
    if( (item.getBoundingClientRect().top) < document.body.clientHeight){
        item.childNodes[0].style.color='black';
        item.childNodes[0].style.transform='scale(1)';
    }
}
function scrollFunction() {
    if( document.body.scrollTop  > 5 ){
        gebi('context').fontSize = "0.5em";
        gebi('arrow').fontSize = "0.5rem";
    } else {
        gebi('context').fontSize = "1em";
        gebi('arrow').fontSize = "1rem";
    }
    makeAppear(1);
    makeAppear(5);
    makeAppear(7);
}
function menu(id){
    item = document.getElementById(id);
    if( item.style.height != "100vh" ){
        item.style.height = "100vh";
        gebi('arrow').transform = "rotate(180deg)";
        gebi('context').fontSize = "1em";
        gebi('arrow').fontSize = "1em";
    }
    else {
        item.style.height = "5em";
        gebi('arrow').transform = "rotate(0deg)";
    }
}