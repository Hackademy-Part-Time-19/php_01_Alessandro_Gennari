<?php

/* Traccia 5 (extra)
  
  Create un array associativo $corsoHackademy con chiavi: “docenti”, “studenti”, “argomenti”
  con valore associato rispettivamente array contenenti i docenti, alcuni nomi di vostri colleghi, argomenti trattati durante il corso
  
  Es.
  $corsoHackademy = [ "docenti" => ["daniele", "emanuele"], "studenti" => ["pippo",
"franco", "coppola"], "argomenti" => ["html", "css", "bootstrap", "javascript", "php"], ];
  
  Usate questo array per stampare in console una frase di presentazione a piacere:
  Es.
  “Sono pippo e sto studiando bootstrap con daniele” */

$corsoHackademy = [
    "docenti" => ["mattia", "emanuele"],
    "studenti" => ["maria", "alessandro", "francesco"],
    "argomenti" => ["html", "css", "bootstrap", "javascript", "php"],
];


$frasePresentazione = "Ciao, sono". " " . $corsoHackademy ['studenti'][1]. " " . "e sto studiando" . " " . 
                        $corsoHackademy ['argomenti'][4] . " " . "con" . " " . $corsoHackademy ['docenti'][1];

echo $frasePresentazione;
?>

