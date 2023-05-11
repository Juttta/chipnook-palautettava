<?php

$PDO = new PDO("mysql:host=localhost;dbname=chinook", "root", "");

$body = file_get_contents("arist.json");
$arist = json_decode($body, true);
$album = json_decode($body, true);
$track = json_decode($body, true);

//Oli tarkoitus tehdä tähän myös albumi ja muutama kappale, mutta aika loppui kesken. 

$sql = "INSERT INTO artists(name) Values('$arist[name]')";

$PDO -> exec($sql);

?>
