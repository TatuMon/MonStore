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

        expandedEl.children('img').attr('src', ss.attr('src').replace('t_screenshot_med', 't_1080p'));
        expandedEl.slideToggle(500);
        expandedEl.on('click', function(e){
            var container = $(this);

            if (container.is(e.target) && container.has(e.target).length === 0) 
            {
                container.css('display', 'none');
            }
        });
    })
});

