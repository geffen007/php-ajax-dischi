let $ = require('jquery');

$(document).ready(function(){
    getdisc();


});

function getdisc(){
    $.ajax(
    {
        'url': 'http://localhost/Esercizi/04/php-ajax-dischi/database/server.php',
        'method': 'GET',
        'success': function(response){
        disc(response);
        arrayAuthor(response);
        },
        'error': function(){
        alert('Errore');
        }
    });
}

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


function arrayAuthor(response) {
    var authors = [];
    for (var i = 0; i < response.length; i++) {
        var author =  response[i].author;
        if (authors.includes(author)==false){
            authors.push(author);
        }
    }
    selectAuthor(authors);
}

function selectAuthor (array){
    for (var i = 0; i < array.length; i++) {
        var context = {
            author: array[i]
        }
        var source = $('#entry-select').html();
        var template = Handlebars.compile(source);
        var html = template(context);
        $('select').append(html);
    }
}
