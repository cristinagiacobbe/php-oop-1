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
require __DIR__ . '/Models/Movie.php';
require __DIR__ . '/Models/db.php';

/* $MovieA->age = $MovieA->IsModern($MovieA->year);
$MovieB->age = $MovieB->IsModern($MovieB->year);
$MovieC->age = $MovieC->IsModern($MovieC->year);
$MovieD->age = $MovieD->IsModern($MovieD->year); */

/* var_dump($MovieA);
var_dump($MovieB);
var_dump($MovieC);
var_dump($MovieD);
var_dump(Movie::$nationality) */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Oop Movies</title>
</head>

<body>
    <div class="container">
        <h1 class="text-primary">Four film made in <?php echo $MovieA->Nationality() ?></h1>
        <h6 class="text-success">A short list of movies made in <?php echo Movie::StaticNationality()   ?></h6>
        <div class="row row-cols-3 g-3">
            <div class="col">
                <?php foreach ($movies as $movie) : ?>
                    <div class="card">
                        <div class="card-body">
                            <h3><?php echo $movie->title ?></h3>
                            <p><?php echo $movie->year ?></p>
                            <p><?php echo $movie->genre ?></p>
                            <p class="text-danger"><?php echo $movie->IsModern($year) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>

</html>