"use strict";

var $ = function(id) {
    return document.getElementById(id);
}

var toggle = function(){
    var sec = this;
        sec.setAttribute('class','sec');
} 

window.onload = function(){
    var main = $('formid');
    var sec = main.getElementsByTagName('section');

    for (let i = 0; i < sec.length; i++) {
        sec[i].onclick = toggle;
    }
    sec[0].firstChild.focus;
}