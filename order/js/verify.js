var $ = function(id) {
    return document.querySelector(id)
}

// var minus = function (){
//     var count = parseInt($('qty').getAttribute('value'));
//     count--;
//     if (count >= 1) {
//         var current = $('total').firstChild.nodeValue
//         $('total').firstChild.nodeValue = parseInt($('total').firstChild.nodeValue) - parseInt($('price-list-tag').firstChild.nodeValue);
//         $('qty').setAttribute('value', parseInt(count));
//     }else{
//         $('total').firstChild.nodeValue = parseInt($('price-list-tag').firstChild.nodeValue);
        
//         $('qty').setAttribute('value', parseInt(1));
//     }
    
// }

// var plus = function (){
//     $('total').firstChild.nodeValue = parseInt($('total').firstChild.nodeValue) + parseInt($('price-list-tag').firstChild.nodeValue);
//     var count = parseInt($('qty').getAttribute('value'));
//     count++;
//     $('qty').setAttribute('value', parseInt(count))

// }

// window.onload = function() {
//         $('min').onclick = minus;
//         $('max').onclick = plus;
//         console.log('minus')
// }

var count = 0

var minus = function (ids){
    let id = ids
    let qty = id.nextElementSibling
    let p = id.parentNode.parentNode.nextElementSibling
    let span = p.getElementsByTagName('span')
    let pp = p.nextElementSibling.getElementsByTagName('span')
    let np = p.nextElementSibling
    let count = np.nextElementSibling.firstChild.nodeValue
    let price = parseInt(pp[0].firstChild.nodeValue)
    console.log(count)
    
    count--
    np.nextElementSibling.firstChild.nodeValue = parseInt(count)
    if (count >= 0) {
        qty.setAttribute('value',parseInt(count))
        span[0].firstChild.nodeValue = parseFloat(parseInt(span[0].firstChild.nodeValue) - parseInt(price)).toFixed(2)
    }else{
        count = 0
        qty.setAttribute('value',parseInt(count))
        span[0].firstChild.nodeValue = parseInt(0)
    }
}

var plus = function (ids){
    let id = ids
    let parent = id.parentNode
    let qty = parent.getElementsByTagName('input')
    let p = id.parentNode.parentNode.nextElementSibling
    let span = p.getElementsByTagName('span')
    let pp = p.nextElementSibling.getElementsByTagName('span')
    let np = p.nextElementSibling
    let count = np.nextElementSibling.firstChild.nodeValue
    let price = parseInt(pp[0].firstChild.nodeValue)

    count++
    np.nextElementSibling.firstChild.nodeValue = parseInt(count)
    qty[1].setAttribute('value',parseInt(count))
    span[0].firstChild.nodeValue = parseFloat(parseInt(span[0].firstChild.nodeValue) + parseInt(price)).toFixed(2)
}

var plusTotal = function (){
    var sum = 0
    let or = document.getElementById('orders-continer')
    let pp = or.getElementsByTagName('p')
    
    // tax charges 
    let tax = document.getElementById('tax-1')
    let spantax = tax.getElementsByTagName('span')

    for (let i = 0; i < pp.length; i+=3) {
        let span = pp[i].getElementsByTagName('span')
        console.log(span[0].firstChild.nodeValue)
        sum += parseInt(span[0].firstChild.nodeValue)
    }

    //  sub total 
    let subtotal = document.getElementById('subtotal-1')
    let spansub = subtotal.getElementsByTagName('span')
    spansub[0].firstChild.nodeValue = parseFloat(sum).toFixed(2)

    //  grand tatal 
    let grandTotal = document.getElementById('grandtotal-1')
    let span = grandTotal.getElementsByTagName('span')
    span[0].firstChild.nodeValue = parseFloat(sum + parseInt(spantax[0].firstChild.nodeValue)).toFixed(2)  

}


var minusTotal = function (){
    var sum = 0
    let or = document.getElementById('orders-continer')
    let pp = or.getElementsByTagName('p')

    // tax charges 
    let tax = document.getElementById('tax-1')
    let spantax = tax.getElementsByTagName('span')

    for (let i = 0; i < pp.length; i+=3) {
        let span = pp[i].getElementsByTagName('span')
        sum -= Math.abs(parseInt(span[0].firstChild.nodeValue))
    }
    //  sub total
    let subtotal = document.getElementById('subtotal-1')
    let spansub = subtotal.getElementsByTagName('span')
    spansub[0].firstChild.nodeValue = Math.abs(parseFloat(sum)).toFixed(2)

    //  grand tatal 
    let grandTotal = document.getElementById('grandtotal-1')
    let span = grandTotal.getElementsByTagName('span')
    span[0].firstChild.nodeValue = Math.abs(parseFloat(sum)).toFixed(2)
    var result = span[0].firstChild.nodeValue
    span[0].firstChild.nodeValue = parseFloat(parseInt(result) + parseInt(spantax[0].firstChild.nodeValue)).toFixed(2)
    
}


var addOrder = function (){
    var ids = this
    plus(ids);
    plusTotal()
}
var removeOrder = function(){
    var ids = this
    minus(ids)
    minusTotal()
}

window.onload = function() {
    var min = document.getElementsByClassName('min')
    var max = document.getElementsByClassName('max')
    for (let i = 0; i < min.length; i++) {
        min[i].addEventListener('click',removeOrder)
        max[i].addEventListener('click',addOrder)
    }
}