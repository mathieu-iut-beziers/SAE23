<?php 
function showLoginForm(){
    if(isset($_GET['status'])){
        switch ($_GET['status']){
            case 0: // Inscription réussie
                printf('<p style="color:green;">Inscription réussie, veuillez vous connecter.</p>');
                break;
            case 1: // Mot de passe différents
                printf('<p style="color:red;">Erreur: Les mot de passe ne correspondent pas</p>');
                break;
            case 2: // Login incorrecte
                 printf('<p style="color:red;">Erreur: Login ou mot de passe incorrect</p>');
                 break;
            case 3: // Login deja utilisé
                printf('<p style="color:red;">Erreur: Nom d\' utilisateur existant</p>');
                break;     
        }
        
    }
    printf('<link rel="stylesheet" href="style.css"/>');
    printf('<form action="auth.php?action=login" method="post" accept-charset="utf8">');
    printf(
        '<label><b>Nom utilisateur</b></label>
        <input type="text" name="login"> <br>'
    );
    printf(
        '<label><b>Mot de passe</b></label> 
        <input type="password" name="pass"> <br>'
    );
    printf(
        '<input type="submit" value="Connexion">'
    );
    printf('</form>');
    printf('Pas encore inscrit ? <a href="index.php?action=register">Inscrivez vous</a>');
    }
?>