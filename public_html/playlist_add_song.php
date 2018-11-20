<?php
include '../private_html/dbconfig.inc.php';
$sql = "INSERT INTO Song_In_Playlist(Song_FK, Playlist_FK) VALUES (:s, :p)";
$stmt = $pdo -> prepare($sql);
$stmt -> bindParam(":s",$Song_FK);
$stmt -> bindParam(":p", $Playlist_FK);
$stmt -> execute();

$sql = "SELECT * FROM Song";
$stmt = $pdo -> prepare($sql);
$stmt -> bindParam(":id",$_GET['id']);
$stmt -> execute();
$songs = array();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $song_name= $row['Title'];
    $songs[] = $row;
    $smarty -> assign("Lists", $songs);
}

