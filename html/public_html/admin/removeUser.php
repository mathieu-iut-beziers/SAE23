<?php

require_once('../config-db.php');
session_start();
global $pdo;
$id=$_POST['id'];

$stmt=$pdo->prepare('DELETE FROM base_co WHERE id=:id');
$stmt->execute(array('id'=>$id));
$stmt->closeCursor();
$stmtClient=$pdo->prepare('DELETE FROM base_client WHERE id=:id');
$stmtClient->execute(array('id'=>$id));
$stmtClient->closeCursor();

header('Location: index.php');
?>