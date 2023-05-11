<?php

$PlaylistId = 1;

$PDO = new PDO('mysql:host=localhost;dbname=chinook', 'root', '');

$statement = $PDO -> prepare("DELETE FROM playlist_track WHERE PlaylistId = ?");
$statement -> execute([$PlaylistId]);

$statement = $PDO -> prepare("DELETE FROM playlists WHERE PlaylistId = ?");
$statement -> execute([$PlaylistId]);

$PDO = null;

?>