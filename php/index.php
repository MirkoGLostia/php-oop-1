<?php

// classi

class Genre {
    public $name;

    public function __construct($name) {

        $this -> name = $name;

    }
}

class Movie {
    public $title;
    public $year;
    public $description;

    public Array $genres;

    public function __construct($title, $year, $description, Genre ...$genres) {

        $this -> title = $title;
        $this -> year = $year;
        $this -> description = $description;

        $this -> genres = $genres;

    }

    public function getMovieData() {

        return "titolo: " . $this -> title . "<br>" . "anno: " . $this -> year . "<br>" . "descrizione: " . $this -> description;

    }
}



// elementi nella classe genres

$adventure = new Genre("avventura");

$mistery = new Genre("mistero");

$romance = new Genre("romantico");

$comic = new Genre("comico");

$horror = new Genre("horror");





// elementi nella classe Movie

$movie1 = new Movie("la prateria", 2010, "descrivo la prateria e la sua storia", $mistery, $horror);

$movie2 = new Movie("la montagna", 2006, "vedremmo come la montagna è e sarà", $adventure, $romance, $comic);



// mostra in pagina

echo $movie1 -> getMovieData();

echo "<br> <br>";

var_dump($movie1 -> genres);

echo "<br> <br>";

echo $movie2 -> getMovieData();

echo "<br> <br>";

var_dump($movie2 -> genres);


?>
