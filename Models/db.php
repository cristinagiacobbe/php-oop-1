<?php

require_once __DIR__ . '/Movie.php';
require_once __DIR__ . '/genre.php';

$movies = [
    new Movie(
        'Inside out',
        2015,
        '',
        [
            new Genre('Soft Comedy', 'soft-comedy'),
            new Genre('Psicho Comedy', 'psicho-comedy')
        ]
    ),
    new Movie(
        'Mary Poppins',
        1964,
        '',
        [
            new Genre('Soft Comedy', 'soft-comedy'),
            new Genre('Musical Comedy', 'musical-comedy')
        ]
    ),
    new Movie(
        'Oppenheimer',
        2023,
        '',
        [
            new Genre('Soft Dramatic', 'soft-dramatic'),
            new Genre('Storic Drama', 'storic-drama')
        ]
    ),
    new Movie(
        'Via col vento',
        1939,
        '',
        [
            new Genre('Strong Dramatic', 'strong-dramatic'),
            new Genre('Storic Drama', 'storic-drama')
        ]
    )
];
