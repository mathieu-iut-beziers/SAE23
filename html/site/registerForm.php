<?php 
function showRegisterForm(){
printf('<form action="auth.php?action=register" method="post" accept-charset="utf8">');
printf('<h3>Informations de connexion :</h3><br>');
printf('Login:<br><input type="text" name="login"><br>');
printf('Mot de passe:<br> <input type="password" name="pass"><br>');
printf('Confirmer le mot de passe:<br><input type="password" name="confirmPass"><br>');
printf('<h3>Informations personnelles :</h3>');
printf('Nom:<br><input type="text" name="nom"><br>');
printf('Prénom:<br><input type="text" name="prenom"><br>');
printf('E-mail:<br><input type="text" name="email"><br>');
printf('Adresse:<br><input type="text" name="adresse"><br>');
printf('N° Teléphone:<br><input type="text" name="phone"><br>');
printf('<input type="submit" value="Inscription">');
printf('</form>');
printf('Déjà inscrit ? <a href="index.php">Connectez vous</a>');
}
?>