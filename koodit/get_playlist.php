<?php

$playlist_id = $get["playlist_id"];

$PDO = new PDO('mysql:host=localhost; dbname=chinook', 'root', '');

$stmt = $PDO -> prepare('SELECT tracks.name, tracks.composer FROM tracks WHERE tracks.name = :playlist_id');
$stmt -> bindParam(":playlist_id", $playlist_id);
$stmt -> execute();

$allRows = $stmt -> fetchAll();

foreach($allRows as $row) {echo $row["trackid"];}