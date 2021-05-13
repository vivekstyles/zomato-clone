var $ = function (id){
    return document.getElementById(id);
}

var stick = function (){
    var link = document.getElementsByTagName('a');
    var firstLink = link[0]
    var traget = firstLink.href;
    if(traget){
        $('nested-ul').firstElementChild.setAttribute('class','active');
    }
}

window.onload = function() {
    $('nested-ul').ondragexit = stick;
    $('nested-ul').focus();
}