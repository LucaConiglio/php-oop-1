<?php 

require_once "./classes/Movie.php";
require_once "./classes/Genre.php";
$generePulp = new Genre("drammatico");

$newMovie = new Movie("indiana jones", "azione", "125 minuti","harrison ford ecc.", $generePulp );




var_dump($newMovie);

?>
