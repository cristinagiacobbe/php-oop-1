<?php

/* Create un file index.php in cui:
- è definita una classe ‘Movie’
  => all'interno della classe sono dichiarate delle variabili d'istanza
  => all'interno della classe è definito un costruttore
  => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.

Bonus 2: Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle.
Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati. */

class Movie
{

    public function __construct(public string $title, public int $year, public string $nationality, public string $genre, public $age)
    {
        $this->title = $title;
        $this->year = $year;
        $this->nationality = $nationality;
        $this->genre = $genre;
        $this->age = $age = "";
    }
    public function IsModern($year)
    {
        if ($this->year > 1982) {
            return "Modern";
        } else {
            return "Classic";
        };
    }
}


$MovieA = new Movie('Inside out', 2020, 'USA', 'cartoon', '');
$MovieB = new Movie('La vita à bella', 2000, 'Italy', 'comedy', '');
$MovieC = new Movie("C'è ancora domani", 2023, 'Italy', 'comedy', '');
$MovieD = new Movie('Via col vento', 1970, 'USA', 'drama', '');

$ageMovieA = $MovieA->IsModern($MovieA->year);
$ageMovieB = $MovieB->IsModern($MovieB->year);
$ageMovieC = $MovieC->IsModern($MovieC->year);
$ageMovieD = $MovieD->IsModern($MovieD->year);


var_dump($MovieA);
var_dump($ageMovieA);
var_dump($MovieB);
var_dump($ageMovieB);
var_dump($MovieC);
var_dump($ageMovieC);
var_dump($MovieD);
var_dump($ageMovieD);
