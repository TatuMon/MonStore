//Add new parameter to url
//This allows to use paginator in both search and game route

$('.pag-link').on('click', function(){
    var searchParams = new URLSearchParams(window.location.search);
    searchParams.set("page", $(this).text());
    window.location.search = searchParams.toString();
})