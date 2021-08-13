//Toggle animation of external links
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

//Screenshot expand animation
$('.screenshot').each(function(i, obj){
    $(this).on('click', function(){
        let ss = $(this);
        let expandedEl = $('#expanded-ss');

        expandedEl.children('img').attr('src', ss.attr('src'));
        expandedEl.slideToggle(500);
        expandedEl.on('click', function(e){
            $(this).slideToggle(500);
        });
    })
});

