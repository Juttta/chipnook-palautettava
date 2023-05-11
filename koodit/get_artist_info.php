<?php

$artist_id = 7;

$PDO = new PDO("mysql:host=localhost;dbname=chinook", "root", "");

$stmt = $PDO -> prepare(
    "SELECT tracks.Name
     FROM tracks
     INNER JOIN albums ON tracks.AlbumId = albums.AlbumId
     INNER JOIN artists ON albums.ArtistId = artists.ArtistId
     WHERE artists.ArtistId = ?");

$stmt -> execute([$artist_id]);

$tracks = $stmt -> fetchAll(PDO::FETCH_ASSOC);

$PDO = null;

header('Content-Type: application/json');
print_r(json_encode($tracks));

?>