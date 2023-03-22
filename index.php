<?php 

// classe movie
class Movie{
    // istanze
public $title;
public $category;
public $duration;

// costruttore base
public function __construct($_title,$_category,$_duration)
{
 $this->title=$_title;
 $this->category=$_category;
 $this->duration=$_duration;
}

// metodo get
public function getGoodVision(){
    return "BUONAVISIONE,stai guardando $this->title";
}

}

// film
$movie=new Movie("Back to future","sci-fi","1h 56m");
var_dump($movie);
$movie_goodvision=$movie->getGoodVision();
echo $movie_goodvision;

// serie tv
$serie=new Movie("Breaking Bad","drammatic","5 stagioni");
var_dump($serie);
$serie_goodvision=$serie->getGoodVision();
echo $serie_goodvision;


?>