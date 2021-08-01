var index = 1;

$('.news-arrow-next').on('click', function(){
    if(index < 3){
        $('#carousel-0').css('transform', 'translateX(-' + 550 * index + 'px)');
        index += 1;
    } else {
        $('#carousel-0').css('transform', 'translateX(0px)');
        index = 1;
    }
});
