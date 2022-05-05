<?php

// Parametri
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

// Controllo parametri
$mailAccess = preg_match('(.|@)', $mail);
$ageCheck = is_numeric($age);
$stringLen = strlen($name);


// Stampa risposta parametri

?>