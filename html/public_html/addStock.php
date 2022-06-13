<?php
session_start();
require_once('config-db.php');
global $pdo;
$id=$_GET['id'];

if(isset($_POST['nb'])){
    $nombre=$_POST['nb'];
    if(intval($nombre)>=0){
        $stmt=$pdo->prepare('UPDATE base_materielle SET stock=:nb WHERE id_mat=:id');
        $stmt->execute(array('nb'=>$nombre,'id'=>$id));
        $stmt->closeCursor();
        header('Location: location.php');
    }else{
        header('Location: location.php?action=addStock&id='.$id.'&error=true');
    }
}else{
    header('Location: location.php');
}
?>