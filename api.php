<?php

// DA DATABASE A PHP
// presi dati da database.json
$subjects = file_get_contents('database.json');

// PREDISPOSTO IL FILE A RICEVERE CHIAMATA API
header('Content-Type: application/json');
// DATI DA FORNIRE TRAMITE CHIAMATA API:
echo $subjects;
















// DA PHP A DATABASE

// $boolean_subjects = [
//     [

//         'subject' => 'HTML'
//     ],
//     [

//         'subject' => 'CSS'
//     ],
//     [

//         'subject' => 'Responsive design'
//     ],
//     [

//         'subject' => 'Javascript'
//     ],
//     [

//         'subject' => 'PHP'
//     ],
//     [

//         'subject' => 'Laravel'
//     ]
// ];



// $json_boolean_subjects = json_encode($boolean_subjects);

// header('Content-Type: application/json');

// echo $json_boolean_subjects;
