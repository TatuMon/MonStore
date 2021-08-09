$(function(){
    let dropdown = $('.dropdown');
    
    dropdown.on('click', function(){
        $(this).siblings('.content').slideToggle(500);
    })
})