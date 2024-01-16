<?php
class Movie
{
    public $nome; 
    public $genere;
    public $linguaOriginale;
    public $durata;
    public $anno;

    public function __construct($name, $genre, $originalLanguage, $duration, $year)
    {
        $this->nome = $name;
        $this->genere = $genre;
        $this->linguaOriginale = $originalLanguage;
        $this->durata = $duration;
        $this->anno = $year;
    } 

    public function getMovieCompleto(){
        $result = $this->nome . ", " . $this->genere . ", " . $this->linguaOriginale . ", " . $this->durata . ", " . $this->anno;
        return $result;
    }
}
?>