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
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati. 

Aggiungiamo nella classe Movie:
- una proprietá statica che richiamiamo staticamente
- un metodo 'normale' nel quale usiamo la proprietá statica
- un metodo statico che chiamiamo staticamente


*/

class Movie
{
    public static string $nationality = "USA";

    public function Nationality()
    {
        return self::$nationality;
    }

    public static function StaticNationality()
    {
        return "USA";
    }

    public function __construct(public string $title, public int $year, public string $genre, public $age)
    {
        $this->title = $title;
        $this->year = $year;
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


$MovieA = new Movie('Inside out', 2015, 'cartoon', '');
$MovieB = new Movie('Mary Poppins', 1964,  'comedy', '');
$MovieC = new Movie("Oppenheimer", 2023, 'comedy', '');
$MovieD = new Movie('Via col vento', 1939, 'drama', '');

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
var_dump(Movie::$nationality)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oop Movies</title>
</head>

<body>
    <div class="container">
        <h1>Four film made in <?php echo $MovieA->Nationality() ?></h1>
        <h1>Four film made in <?php echo Movie::StaticNationality()   ?></h1>
        <div class="row">
            <div class="col">
                <?php foreach ($Movie as $EachMovie) : ?>
                    <div class="card">
                        <?php echo $EachMovie->title ?>
                        <?php echo $EachMovie->year ?>
                        <?php echo $EachMovie->genre ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>

</html>