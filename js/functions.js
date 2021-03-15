$(function(){
    var currentValue = 0;
    var isDrag = false;

    $('.pointer-barra').mousedown(function(){
        isDrag = true;
    });

    $(document).mouseup(function(){
        isDrag = false;
    });

    $('.barra-preco').mousemove(function(e){
        if(isDrag){
            var elBase = $(this);
            var mouseX = e.pageX - elBase.offset().left;
            console.log(mouseX);
        }
    });

});