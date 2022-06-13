<?php 
require_once('registerForm.php');
require_once('loginForm.php');
session_start();
if(isset($_GET['status'])){
    switch ($_GET['status']){
        case 0: // Connexion réussie
            printf('<p style="color:green;">Inscription réussie, veuillez vous connecter.</p>');
            break;
        case 1: // Mot de passe différents
            printf('<p style="color:red;">Erreur: Les mot de passe ne correspondent pas</p>');
            break;
    }
    
}
if(!isset($_GET['action'])){
    showLoginForm();
}else if($_GET['action'] == 'register'){
    showRegisterForm();
}

?>