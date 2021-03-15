$(function(){
    var currentValue = 0;
    var isDrag = false;

    $('.pointer-barra').mousedown(function(){
        var isDrag = true;
    });

    $(document).mouseup(function(){
        isDrag = false;
    });

    $('.barra-preco').mousemove(function(){
        if(isDrag){
            console.log("Mouse Arrastado");
        }
    });

});