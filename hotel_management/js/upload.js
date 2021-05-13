var $ = function(id) {
    return document.getElementById(id);
}

var joinlist = function (){
    var price = $('price').value;
    var category = $('category').value;
    var isValid = true;

    if (price == '') {
        $('price_error').firstChild.nodeValue = 'empty';
    }

    if (category == '') {
        $('category_error').firstChild.nodeValue = 'empty';
    }
}
var join = function (){

    $('price_error').firstChild.nodeValue = 'empty';

    $('category_error').firstChild.nodeValue = 'empty';

}

window.onload = function() {
    // alert('hello');
    // $('price').oninput = join;
    $('price').onfocus = joinlist;
    // $('formtag').setAttribute('action','#');


}
