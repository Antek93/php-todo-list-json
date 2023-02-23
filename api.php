<?php

// DA DATABASE A PHP
// presi dati da database.json
$subjects = file_get_contents('database.json');


// DA INDEX A PHP
// DECODIFICO IL DATABASE assegnandolo ad una nuova variabile
$subjectsDecoded = json_decode($subjects);
// SE I DATI IN POST SONO STATI INVIATI CORRETTAMENTE;
if (isset($_POST['subject'])) { //CONDIZIONE DI ESISTENZA DATI

    //SE $_POST['newSubject'] ha ricevuto i dati corretamente:
    // creiamo una nuova variabile il cui valore è un oggetto che vogliamo pushare nel database
    $subject = [
        'subject' => $_POST['subject'],    // DATI OTTENUTI TRAMITE chiamata axios get
        'done' => false
    ];

    $subjectsDecoded [] = $subject; // AGGIUNGIAMO IL NUOVO ARRAY AI DATI DECODIFICATI - l'array verrà sovascritto

    $subjectsReEncoded = json_encode($subjectsDecoded); //RIMPACHETTIAMO I DATI DECODIFICATI

    file_put_contents('database.json', $subjectsReEncoded); //PUSHAMO NEL DATABASE TUTTI GLI ELEMENTI PRESENTI NEL DATABASE + il pacchetto ricodificato}
}
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
