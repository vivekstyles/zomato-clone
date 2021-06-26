var $ = function(id){
    return document.querySelector(id);
};

var count 
var LIfood 
var node
var foodList = [];
var display = function (){
    var inp = this
    var count = parseInt($('#yrOrd').firstChild.nodeValue)
    var getValAtr = inp.getAttribute('value') 
    var getShowItm = $('#view_details').getAttribute('class')

    //  getting price
    let par = inp.parentNode
    let ul = par.getElementsByTagName('ul')
    let li = ul[0].getElementsByTagName('li')
    let span = li[1].getElementsByTagName('span')
    let noSpan = li[2].getElementsByTagName('span')
    let mobile = parseInt(noSpan[0].firstChild.nodeValue)
    let price = parseFloat(span[0].firstChild.nodeValue)
    let subtotal = parseFloat($('#subtotal').firstChild.nodeValue)
    let par2 = inp.parentNode
    let inp2 = par2.getElementsByTagName('input')

    if (getValAtr == 'add +') {
        inp.setAttribute('value','added')
        inp.setAttribute('class','submit')

        $('#yrOrd').firstChild.nodeValue = count + parseInt(1)
        $('#subtotal').firstChild.nodeValue = Math.abs(parseFloat(price + subtotal)).toFixed(2) 
        $('#show_item').setAttribute('class','show_item');
        getAlLi = $('#list').getElementsByTagName('li')

        node = document.createTextNode(inp2[0].getAttribute('value'))
        linode = document.createElement('li')
        linode.setAttribute('id',inp2[0].getAttribute('value'))
        linode.setAttribute('class','fs-5 p-1 mt-1 text-dark text-capitalize')
        linode.appendChild(node)
        $('#list').appendChild(linode)
        
        node = document.createTextNode('₹'+price+'.00')
        linode = document.createElement('li')
        linode.setAttribute('id',price)
        linode.setAttribute('class','fs-5 p-1 mt-1 text-dark text-capitalize text-center')
        linode.appendChild(node)
        $('#price').appendChild(linode)

        node = document.createTextNode(mobile)
        linode = document.createElement('li')
        linode.setAttribute('id',mobile)
        linode.setAttribute('class','fs-5 p-1 mt-1 text-dark text-capitalize text-center d-none')
        linode.appendChild(node)
        $('#mobile').appendChild(linode)

        
    } else {
        inp.setAttribute('value','add +')
        inp.setAttribute('class','')
        $('#yrOrd').firstChild.nodeValue = count - parseInt(1)
        let calculate = parseFloat(Math.abs(price - subtotal)).toFixed(2)
        $('#subtotal').firstChild.nodeValue = String(calculate)
        getAlli = $('#list').getElementsByTagName('li')
        PriceAlli = $('#price').getElementsByTagName('li')
        mobileAlli = $('#mobile').getElementsByTagName('li')

        for (let i = 0; i < getAlli.length; i++) {
            if (getAlli[i].firstChild.nodeValue == inp2[0].getAttribute('value')) {
                // getAlli[i].firstChild.nodeValue = ''
                var idi  = document.getElementById(getAlli[i].getAttribute('id'))
                var uli = document.getElementById('list')
                uli.removeChild(idi)
            }   
        }

        for (let i = 0; i < PriceAlli.length; i++) {
            if (parseFloat(PriceAlli[i].getAttribute('id')) === price) {
                var pid = document.getElementById(PriceAlli[i].getAttribute('id'))
                var pli = document.getElementById('price')
                pli.removeChild(pid)
            }   
        }
        for (let i = 0; i < mobileAlli.length; i++) {
            if (parseInt(mobileAlli[i].getAttribute('id')) === mobile) {
                var mid = document.getElementById(mobileAlli[i].getAttribute('id'))
                var mli = document.getElementById('mobile')
                mli.removeChild(mid)
            }   
        }

        if ($('#yrOrd').firstChild.nodeValue == '0') {
            $('#show_item').setAttribute('class','dont_show_item')
        }
        
    }
}

var form = function (){
    let li = document.getElementById('mobile').getElementsByTagName('li')
    for (let i = 0; i < li.length; i++) {
        let value = li[i].firstChild.nodeValue
        let input = document.createElement('input')
        input.setAttribute('type', 'hidden')
        input.setAttribute('name','mobile[]')
        input.setAttribute('value',parseInt(value))
        document.getElementById('form').appendChild(input)
    }
    $('form').submit()
}

var show_details = function (){
    var attr = $('#view_details').getAttribute('class');
    if (attr == 'dont_view_details') {
        $('#view_details').setAttribute('class','view_details');
    }else{
        $('#view_details').setAttribute('class','dont_view_details');
    }
}

var close_container = function (){
    var getAttribute = $('#view_details').getAttribute('class');
    if (getAttribute == 'view_details') {
        $('#view_details').setAttribute('class','dont_view_details');
    }
}

var change = function (){
    var li = this
    li.setAttribute('class','colour')
    console.log(li.firstChild.nodeValue)
    if (li.firstChild.nodeValue == 'Menu') {
        var att = $('#menu').getAttribute('class')
        if (att == 'dont_show') {
            $('#menu').setAttribute('class','show')
            $('#online').setAttribute('class','dont_show')
            $('#aside').setAttribute('class','dont_show')
            var nav = $('#section-2').getElementsByTagName('nav')
            var ul = nav[0].getElementsByTagName('ul')
            var li = ul[0].getElementsByTagName('li')
            for (let i = 0; i < li.length; i++) {
                if (li[i].firstChild.nodeValue == 'Order Online') {
                    li[i].removeAttribute('class')
                }
            }
        }
    }else if(li.firstChild.nodeValue == 'Order Online'){
        var att = $('#online').getAttribute('class')
        if (att == 'dont_show') {
            $('#online').setAttribute('class','show')
            $('#aside').setAttribute('class','show')
            $('#menu').setAttribute('class','dont_show')
            var nav = $('#section-2').getElementsByTagName('nav')
            var ul = nav[0].getElementsByTagName('ul')
            var li = ul[0].getElementsByTagName('li')
            for (let i = 0; i < li.length; i++) {
                if (li[i].firstChild.nodeValue == 'Menu') {
                    li[i].removeAttribute('class')
                }
            }
            
        }
    }
}

window.onload = function() {
    var clsNme = document.getElementsByClassName('food-list');
    for (let i = 0; i < clsNme.length; i++) {
        var input = clsNme[i].getElementsByTagName('input')
        var li = clsNme[i].getElementsByTagName('li')
        input[1].onclick = display
    } 
    $('#btn').onclick = form
    $('#triggerId').onclick = show_details
    $('#close_container').onclick = close_container
    var nav = $('#section-2').getElementsByTagName('nav')
    var ul = nav[0].getElementsByTagName('ul')
    var li = ul[0].getElementsByTagName('li')

    for (let i = 0; i < li.length; i++) {
        li[i].onclick = change
    }
}