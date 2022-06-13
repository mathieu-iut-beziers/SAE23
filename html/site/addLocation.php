<?php

require_once('config-db.php');
session_start();
global $pdo;
$login=$_SESSION['auth'];
$id=$_POST['id'];
$objet=$_POST['objet'];
$desc=$_POST['desc'];
$prix=$_POST['prix'];
$dispo=$_POST['stock'];

$updateMat=$pdo->prepare('UPDATE base_materielle SET stock=stock-1 WHERE id_mat=:id');
$updateMat->execute(array('id'=>$id));
$updateMat->closeCursor();

$addPret=$pdo->prepare('INSERT INTO `base_pret`(`id_mat`, `nom_obj`, `client`, `status`) VALUES (:id,:objet,:client,0)');
$addPret->execute(array('id'=>$id,'objet'=>$objet,'client'=>$login));
$addPret->closeCursor();

$clientIDreq=$pdo->prepare('SELECT id FROM base_co WHERE user=:u');
$clientIDreq->execute(array('u'=>$login));
$clientIDrow=$clientIDreq->fetch();
$clientID=$clientIDrow['id'];
$clientIDreq->closeCursor();

$addClientPret=$pdo->prepare('UPDATE base_client SET nb_location=nb_location+1 WHERE id=:id');
$addClientPret->execute(array('id'=>$clientID));

header('Location: location.php');
?>