<?php

// classi

class Movie {
    public $title;
    public $year;
    public $description;

    public function __construct($title, $year, $description) {

        $this -> title = $title;
        $this -> year = $year;
        $this -> description = $description;

    }

    public function getMovieData() {

        return "titolo: " . $this -> title . "<br>" . "anno: " . $this -> year . "<br>" . "descrizione: " . $this -> description;

    }
}




// elementi nelle classi

$movie1 = new Movie("la prateria", "2010", "descrivo la prateria e la sua storia");

$movie2 = new Movie("la montagna", "2006", "vedremmo come la montagna è e sarà");



// mostra in pagina

echo $movie1 -> getMovieData();

echo "<br> <br>";

echo $movie2 -> getMovieData();


?>
