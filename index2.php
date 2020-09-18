<?php
include __DIR__ .'/php/db.php';
?>

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
            </div>
        </div>

        <div class="container">
            <div class="discs">
            <?php foreach ($database as $disc) { ?>
                <div class="disc">
                    <div class="copertina">
                        <img src="<?php echo $disc['poster'] ?>" alt="folder <?php echo $disc['title'] ?>">
                    </div>
                    <div class="details">
                        <h3 class="discname"><?php echo $disc['title'] ?></h3>
                        <p class="author"><?php echo $disc['author'] ?></p>
                        <p class="year"><?php echo $disc['year'] ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>



    </body>
</html>
