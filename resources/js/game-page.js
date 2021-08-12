//Toggle animation
$('#add-info-links').children().each(function(i, obj){
    $(this).on('click', function(){
        $($(this).attr('href')).slideToggle(500);
    });
});

//Check if a game has external links
$('.game-links').each(function(i, obj){
    if($(this).children().length == 0){
        $(this).append('<p>No available links</p>');
    }
});

