//Add new parameter to url
//This allows to use paginator in both search and game route

//This goes with paginator
$('.pag-link').on('click', function(){
    var searchParams = new URLSearchParams(window.location.search);
    searchParams.set("page", $(this).text()-1);
    window.location.search = searchParams.toString();
})

//This goes with the order functionality
$('.filter-opt').on('click', function(){
    let by = $(this).attr('data-by');
    let how = $(this).attr('data-how');
    var searchParams = new URLSearchParams(window.location.search);
    searchParams.set('by', by);
    searchParams.set('how', how);
    window.location.search = searchParams.toString();
})

//This goes with the filter functionality
$('#genres').children().on('click', function(){
    let genre = $(this).attr('data-genre');
    var searchParams = new URLSearchParams(window.location.search);
    searchParams.set('genre', genre);
    window.location.search = searchParams.toString();
})