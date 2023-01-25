<?php

class Movies
{

    public $name;
    public $genre;
    public $length;

    public function __construct($name, $genre, $length)
    {

        $this->name = $name;
        $this->genre = $genre;
        $this->length = $length;
    }

    public function getMovieName()
    {

        return $this->name
            . " - " . $this->name
            . " (" . $this->genre . ")";
    }
}
echo "<h1>";

$movie1 = new Movies("Avatar", "CGI spam", "Troppo");
$movie2 = new Movies("Fantozzi, 14", "lol", "abbastanza");
var_dump($movie1);
echo "<br><br>";
var_dump($movie2);

echo "</h1>";