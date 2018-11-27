<?php
include '../private_html/dbconfig.inc.php';
//$user_id = $_SESSION['User'];
$user_id = 1;
$sql = "SELECT * FROM user JOIN user_playlist ON User_ID = User_FK JOIN playlist ON Playlist_FK = Playlist_ID WHERE User_ID = :u";
$stmt = $pdo -> prepare($sql);
$stmt -> bindParam(":u",$user_id);
$stmt -> execute();
//echo $sql . "</br>" . $user_id . $stmt -> rowCount();
//exit();
if($stmt -> rowCount() == 0){
    $smarty -> assign("noList", true);
}else {
    $playlists = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $playlists[] = $row;
        $smarty -> assign("Lists", $playlists);
    }
}

$smarty ->display("playlist.tpl");
