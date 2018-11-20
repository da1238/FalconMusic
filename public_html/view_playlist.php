<?php
include '../private_html/dbconfig.inc.php';
//$user_id = $_SESSION['User'];
$user_id = 1;
$sql = "SELECT * FROM user JOIN user_playlist ON user_id = user_fk JOIN playlist ON playlist_fk = playlist_id WHERE user_id = :u";
$stmt = $pdo -> prepare($sql);
$stmt -> bindParam(":u",$user_id);
$stmt -> execute();
if($stmt -> rowCount() == 0){
    $smarty -> assign("noList", true);
}else {
    $song_list = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $user_name = $row['First_Name']. ' ' . $row['Last_Name'];
        $song_lists[] = $row;
        $smarty -> assign("Lists", $song_lists);
    }
}
if(isset($_GET['id'])){
    $sql = "SELECT * FROM playlist JOIN Song_In_Playlist ON Playlist_ID = Playlist_FK JOIN Song ON Song_ID = SONG_FK WHERE playlist_id = :id ORDER BY Order_Number";
    $stmt = $pdo -> prepare($sql);
    $stmt -> bindParam(":id",$_GET['id']);
    $stmt -> execute();
    $songs_in_playlist = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $playlist_name = $row['Playlist_Name'];
        $songs_in_playlist[] = $row;
        $smarty -> assign("Lists", $songs_in_playlist);
    }
}


$smarty -> assign("playlist_name", $playlist_name);
$smarty -> assign("user_name",$user_name);
$smarty -> display("view_playlist.tpl");