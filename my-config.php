<?php


// Variable taille max d'image
$maxSize = 1000000;
//Variable pour determiner l'extension des images autorisées
$extensions = ['jpg', 'jpeg', 'png',];
// Création d'un tableau contenant les informations des users 
// la clef permettra de retrouver facilement les renseignements relatifs aux users.
$usersArray = [
    'Arnaud' => [
        'password' => '$2y$10$pJWNsG4J115KDMur5NhfUOP5n1J7e0PHg3Ly0xWIv8uQMAK7Uspwy',
        'formule' => 'Standard',
        'quota' => 5,
       
    ],

    'Arnaud76' => [
        'password' => '$2y$10$pJWNsG4J115KDMur5NhfUOP5n1J7e0PHg3Ly0xWIv8uQMAK7Uspwy',
        'formule' => 'Prenium',
        'quota' => 10
    ],
    'LHP7' => [
        'password' => '$2y$10$pJWNsG4J115KDMur5NhfUOP5n1J7e0PHg3Ly0xWIv8uQMAK7Uspwy',
        'formule' => 'Pro',
        'quota' => 50
    ]
];
