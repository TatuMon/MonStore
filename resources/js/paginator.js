$('.pag-link').on('click', function(){
    var searchParams = new URLSearchParams(window.location.search);
    searchParams.set("page", $(this).text());
    window.location.search = searchParams.toString();
    console.log('yikes')
})