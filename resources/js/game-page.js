//Check if a game has external links

$('.game-links').each(function(i, obj){
    if($(this).children().length == 0){
        $(this).append('<p>No available links</p>');
    }
})