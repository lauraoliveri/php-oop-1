<?php 

class Movie {    
    public $title;
    public $genre;
    public $director;
    public $duration;
    public $age;

    // l'utente deve avere almeno 13 anni per guardare il fil
    public function Restriction() {
        if ( $age < 13 ) {
            echo 'Conferma di avere almeno 13 anni per vedere il film';
        }
    }

    // per aggiungere un nuovo film in modo breve
    public function __construct($title, $genre, $director, $duration, $age) {
        $this->title = $title; 
        $this->genre = $genre; 
        $this->director = $director; 
        $this->age = $age;
        $this -> duration = $duration;
    }

    // metodo per stampare in html

    public function getFullData(){
        return 'Title:'. $this->title. 'Genre:' .$this->genre. 'Director:'. $this->director. 'Genre:'. $this->genre. 'Duration:' .$this->duration . 'Age required:' . $this->age;
    }
}

// creo i nuovi oggetti
$TheNun = new Movie('The Nun', 'Horror', 'Pinco Pallino', '120 min', '13');
$TheConjuring = new Movie('The Conjuring', 'Horror', 'Pinco Pallino', '120 min', '13');



?>