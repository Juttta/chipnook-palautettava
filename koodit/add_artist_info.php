<?php

$PDO = new PDO("mysql:host=localhost;dbname=chinook", "root", "");

$body = file_get_contents("arist.json");
$arist = json_decode($body, true);

$sql = "INSERT INTO artists(name) Values('$arist[name]')";

$PDO -> exec($sql);

?>
