<?php 

require_once "./classes/Movie.php";
require_once "./classes/Genere.php";
$generePulp = new Genere("drammatico");

$newMovie = new Movie("indiana jones", "azione", "125 minuti","harrison", "ford",  $generePulp );




var_dump($newMovie);

?>
