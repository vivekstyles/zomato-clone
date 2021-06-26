// var $ =  function (id){
//     return document.querySelector(id)
// }

// var change = function (){
//     var li = this
//     console.log(li.firstChild.nodeValue)
//     if (li.firstChild.nodeValue == 'Menu') {
//         var att = $('#menu').getAttribute('class')
//         if (att == 'dont_show') {
//             $('#menu').setAttribute('class','show')
//             $('#online').setAttribute('class','dont_show')
//             $('#aside').setAttribute('class','dont_show')
//         }
//     }else if(li.firstChild.nodeValue == 'Order Online'){
//         var att = $('#online').getAttribute('class')
//         if (att == 'dont_show') {
//             $('#online').setAttribute('class','show')
//             $('#aside').setAttribute('class','show')
//             $('#menu').setAttribute('class','dont_show')
            
//         }
//     }
// }
// window.onload = function() {
//     var nav = $('#section-2').getElementsByTagName('nav')
//     var ul = nav[0].getElementsByTagName('ul')
//     var li = ul[0].getElementsByTagName('li')

//     for (let i = 0; i < li.length; i++) {
        
//         li[i].onclick = change
//     }
// }