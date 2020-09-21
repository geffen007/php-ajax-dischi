<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js" integrity="sha512-zT3zHcFYbQwjHdKjCu6OMmETx8fJA9S7E6W7kBeFxultf75OPTYUJigEKX58qgyQMi1m1EgenfjMXlRZG8BXaw==" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="dist/app.css">
    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php Ajax Dischi</title>
    </head>
    <body>
        <div class="topbar">
            <div class="container">
                <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Logoappliandrospotify.png" alt="">
                <select class="author" name="">
                    <option value="all">All</option>
                </select>
            </div>

        </div>

        <div class="container">
            <div class="discs">
            </div>
        </div>

    <script id="entry-template" type="text/x-handlebars-template">
        <div class="disc">
            <div class="copertina">
                <img src="{{poster}}" alt="folder {{title}}">
            </div>
            <div class="details">
                <h3 class="discname">{{title}}</h3>
                <p class="author">{{author}}</p>
                <p class="year">{{year}}</p>
            </div>
        </div>
    </script>

    <script id="entry-select" type="text/x-handlebars-template">
        <option value="{{author}}">{{author}}</option>
    </script>

    <script src="dist/app.js" charset="utf-8"></script>
    </body>
</html>
