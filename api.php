<?php

// DA DATABASE A PHP

$subjects = file_get_contents('database.json');

// var_dump($subjects);

// $boolean_subjects = json_decode($subjects, true); //True perché voglio un array associativo

// var_dump($boolean_subjects);

header('Content-Type: application/json');

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

