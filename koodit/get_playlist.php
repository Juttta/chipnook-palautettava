
<?php

$playlist_id = 1;

$PDO = new PDO('mysql:host=localhost;dbname=chinook', 'root', '');

$stmt = $PDO -> prepare('SELECT Name, Composer FROM tracks, playlist_track WHERE playlist_track.PlaylistId = :playlist_id AND playlist_track.TrackId = tracks.TrackId');
$stmt -> bindParam(":playlist_id", $playlist_id);
$stmt -> execute();

$allRows = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($allRows as $row){
  echo " <br> ". $row["Composer"];
  echo " <br> "." <h3> ".$row["Name"]."</h3>";}

?>