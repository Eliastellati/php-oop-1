<?php 

include __DIR__ . "/classes/Movie.php"; 
include __DIR__ . "/partials/text.php"; 


$movies = [
    $movie1= new Movie ("I sogni segreti di Walter Mitty", 2013, $text1, "https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTiYuhoJh_waGNmobvS25k7c0Q_7W9w5icEHpaipyTK3TyepRDC"),
    $movie2= new Movie ("Il buon, il brutto, il cattivo", 1966, $text2, "https://s3-eu-west-1.amazonaws.com/static.screenweek.it/movie/11145/poster/ita/share.jpg?1470940568"),
    $movie3= new Movie ("Call me by your name", 2019, $text3, "https://images-na.ssl-images-amazon.com/images/I/812SKExc1tL.jpg")
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My Movies</title>
</head>
<body>
    <main>
    <?php foreach($movies as $movie) {?>
        <div class="film">
            <img src='<?= $movie->posterPath ?>' alt="">
            <div class="movie-info">
                <h2><?= $movie->title; ?></h2>
                <h5><?= $movie->year; ?></h5>
                <p><?= $movie->lessText(200); ?></p>
            </div>
        </div>
    <?php } ?>
    
    </main>
</body>
</html>