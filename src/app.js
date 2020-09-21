let $ = require('jquery');

$(document).ready(function(){
    $.ajax(
    {
        'url': 'http://localhost/Esercizi/04/php-ajax-dischi/database/server.php',
        'method': 'GET',
        'success': function(response){
        disc(response);
        },
        'error': function(){
        alert('Errore');
        }
    });

});

function disc(response){
    for (var i = 0; i < response.length; i++) {
        var context = {
            poster: response[i].poster,
            title: response[i].title,
            author: response[i].author,
            year: response[i].year
        }
        var source = $('#entry-template').html();
        var template = Handlebars.compile(source);
        var html = template(context);
        $('.discs').append(html);
    }

}
