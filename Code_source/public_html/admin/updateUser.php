<?php

require_once('../config-db.php');
session_start();
global $pdo;
$id=$_POST['id'];
$login=$_POST['login'];
$pass=$_POST['pass'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$tel=$_POST['tel'];
$mail=$_POST['mail'];

$stmtClient=$pdo->prepare('UPDATE base_client SET nom=:n,prenom=:p,phone=:t,adresse=:a,mail=:m WHERE id='.$id.'');
$stmtClient->execute(array('n'=>$nom,'p'=>$prenom,'t'=>$tel,'a'=>$adresse,'m'=>$mail));
$stmtClient->closeCursor();

if($pass != ""){
    $stmtCo=$pdo->prepare('UPDATE base_co SET user=:u AND `password`=PASSWORD(:p) WHERE id='.$id.'');
    $stmtCo->execute(array('u'=>$login,'p'=>$pass));
    $stmtClient->closeCursor();
}else{
    $stmtCo=$pdo->prepare('UPDATE base_co SET user=:u WHERE id='.$id.'');
    $stmtCo->execute(array('u'=>$login));
    $stmtClient->closeCursor();
}

header('Location: index.php');
?>