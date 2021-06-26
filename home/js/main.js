
var $ = function(id){
    return document.querySelector(id)
}

var change = function(){
    let li = this
    let p = li.getElementsByTagName('p')
    let img = p[0].getElementsByTagName('img')
    img[0].setAttribute('width','275')
    console.log(img[0].getAttribute('width'))
    img[0].setAttribute('hight','195')
}
var change1 = function(){
    let li = this
    let p = li.getElementsByTagName('p')
    let img = p[0].getElementsByTagName('img')
    img[0].setAttribute('width','270')
    console.log(img[0].getAttribute('width'))
    img[0].setAttribute('hight','190')
}

window.onload = function() {
    var ul = $('#orders').getElementsByTagName('ul');
    var li = ul[0].getElementsByTagName('li')
    for (let i = 0; i < li.length; i++) {

        li[i].onmouseover = change
        li[i].onupmouseout = change1
    }
}
