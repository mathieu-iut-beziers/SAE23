<?php
require_once('config-db.php');
session_start();
global $pdo;
if(isset($_POST['objet'])){
    $objet=$_POST['objet'];
    $desc=$_POST['desc'];
    $prix=$_POST['prix'];
    $dispo=$_POST['stock'];
    $stmt=$pdo->prepare('INSERT INTO `base_materielle`(`type`, `description`, `prix`, `stock`) VALUES (:o,:d,:p,:s)');
    $stmt->execute(array('o'=>$objet,'d'=>$desc,'p'=>$prix,'s'=>$dispo));
    $stmt->closeCursor();
    header('Location: location.php');
}else{
    header('Location: location.php');
}
?>