<?php
require __DIR__ . '/Models/Movie.php';

$mov_fightClub = new Movie("Fight Club", "Thriller", "americano", "2h 19m", "1999");


var_dump($mov_fightClub);
echo "<br>";

echo $mov_fightClub->getMovieCompleto();

echo "<br>";

$mov_tenet = new Movie("tenet", "azione", "americano", "2h 30m", "2020");

var_dump($mov_tenet);

echo $mov_tenet->getMovieCompleto();
?>
