<?php
// presi dati da database.json
$subjects = file_get_contents('database.json');

// DA INDEX A PHP
// DECODIFICO IL DATABASE assegnandolo ad una nuova variabile - aperto e spacchettato per apportare modifiche
$subjectsDecoded = json_decode($subjects);

// SE I DATI IN POST SONO STATI INVIATI CORRETTAMENTE;
if (isset($_POST['newSubject'])) { //CONDIZIONE DI ESISTENZA DATI --- // preo da  axios.post('./create.php', newSubject: this.userSubject,

    //SE $_POST['newSubject'] ha ricevuto i dati corretamente:
    // creiamo una nuova variabile il cui valore è un oggetto che vogliamo pushare nel database
    $addSubject = [
        'subject' => $_POST['newSubject'],    // DATI OTTENUTI TRAMITE chiamata axios get
        'done' => false
    ];

    $subjectsDecoded [] = $addSubject; // AGGIUNGIAMO IL NUOVO ARRAY AI DATI DECODIFICATI - l'array verrà sovascritto

    $subjectsReEncoded = json_encode($subjectsDecoded); //RIMPACHETTIAMO I DATI DECODIFICATI

    file_put_contents('database.json', $subjectsReEncoded); //PUSHAMO NEL DATABASE TUTTI GLI ELEMENTI PRESENTI NEL DATABASE + il pacchetto ricodificato}
}

// PREDISPOSTO IL FILE A RICEVERE CHIAMATA API
header('Content-Type: application/json');
// DATI DA FORNIRE TRAMITE CHIAMATA API:
echo $subjectsReEncoded;
