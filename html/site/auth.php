<?php 
require_once('config-db.php');
global $pdo;
session_start();

if(isset($_GET['action'])){
    if($_GET['action'] == 'login'){
        var_dump($_POST);
    $user=$_POST['login'];
    $pass=$_POST['pass'];

    $stmt=$pdo->prepare("SELECT * FROM base_co WHERE user=:u AND `password`=PASSWORD('".$pass."')");
    $stmt->execute(array('u'=>$user));
    $rows=$stmt->fetch();
    $role=$rows['role'];
    $stmt->closeCursor();

    if(count($rows)>0){
     $_SESSION['auth']=$user;
     $_SESSION['role']=$role;
     echo $_SESSION['role'];
     header('Location: location.php');
     return true;
    }else{
        header('Location: index.php?status=2');
    }
}else if($_GET['action'] == 'register'){
    $rstmt=$pdo->prepare("SELECT * FROM base_co WHERE user=:u");
    $rstmt->execute(array('u'=>$_POST['login']));
    $srows=$rstmt->fetchAll();
    $rstmt->closeCursor();
    
    if(count($srows)!=0){
        header('Location: index.php?status=3');
    }else{
        if($_POST['pass'] != $_POST['confirmPass']){
            header('Location: login.php?status=1&action=register');
        }else{
            $user=$_POST['login'];
            $pass=$_POST['pass'];
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $phone=$_POST['phone'];
            $adresse=$_POST['adresse'];
            $mail=$_POST['email'];
            $connection=$pdo->prepare('INSERT INTO base_co(`user`,`password`,`role`) VALUES (:u,PASSWORD(:p),0)');
            $client=$pdo->prepare('INSERT INTO base_client(nom,prenom,phone,adresse,mail,nb_location) VALUES (:n,:pre,:pho,:a,:m,0)');
            $connection->execute(array('u'=>$user,'p'=>$pass));
            $client->execute(array('n'=>$nom,'pre'=>$prenom,'pho'=>$phone,'a'=>$adresse,'m'=>$mail));
            header('Location: index.php?status=0');
        }
    }
}else{
    header("Location: index.php");
}
}

?>