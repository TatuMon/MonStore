var index = 1;

$('.arrow-next').on('click', function(){
    if(index < 3){
        $('#carousel-0').css('transform', 'translateX(' + -550 * index + 'px)');
        index += 1;
    } else {
        $('#carousel-0').css('transform', 'translateX(0px)');
        index = 1;
    }
    console.log(index)
});

$('.arrow-prev').on('click', function(){
    if(index > 1){
        index -= 1;
        $('#carousel-0').css('transform', 'translateX('+ -550 * (index-1) +'px)');
    }
    console.log(-550 * index)
});