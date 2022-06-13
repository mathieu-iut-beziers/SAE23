<?php
function updateUserForm($idU){
    $pdo=new PDO('mysql:host=localhost;dbname=db_PUIG;charset=UTF8','22103051','Mathieu');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $stmt=$pdo->prepare('SELECT * FROM base_client,base_co WHERE base_client.id='.$idU.' AND base_co.id='.$idU.'');
    $stmt->execute(array('id'=>$idU));
    $row=$stmt->fetch();
    $user=$row['user'];
    $nom=$row['nom'];
    $prenom=$row['prenom'];
    $adresse=$row['adresse'];
    $tel=$row['phone'];
    $mail=$row['mail'];
    printf('Voulez vous éditer cet utilisateur ?');
    printf('<form action="updateUser.php" method="post" accept-charset="utf8">');
    printf('<input style="display=hidden;" type="text" name="id" value="'.$idU.'" readonly><br>');
    printf('Login:<br><input type="text" name="login" value="'.$user.'"><br>');
    printf('Mot de passe:<br><input type="password" name="pass"><br>');
    printf('Nom:<br><input type="text" name="nom" value="'.$nom.'"><br>');
    printf('Prénom:<br><input type="text" name="prenom" value="'.$prenom.'"><br>');
    printf('Adresse:<br><input type="text" name="adresse" value="'.$adresse.'"><br>');
    printf('Téléphone:<br><input type="text" name="tel" value="'.$tel.'"><br>');
    printf('Mail:<br><input type="text" name="mail" value="'.$mail.'"><br>');
    printf('<input type="submit" value="Editer">');
    printf('</form>');
}
?>
<?php
function removeUserForm($iduser){
    $pdo=new PDO('mysql:host=localhost;dbname=db_PUIG;charset=UTF8','22103051','Mathieu');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $stmt=$pdo->prepare('SELECT * FROM base_client,base_co WHERE base_client.id='.$iduser.' AND base_co.id='.$iduser.'');
    $stmt->execute(array('id'=>$iduser));
    $row=$stmt->fetch();
    $login=$row['user'];
    $nom=$row['nom'];
    $prenom=$row['prenom'];
    $adresse=$row['adresse'];
    $tel=$row['phone'];
    $mail=$row['mail'];
    printf('Voulez vous supprimer cet utilisateur ?');
    printf('<form action="removeUser.php" readonly method="post" accept-charset="utf8">');
    printf('<input style="display=hidden;" readonly type="text" name="id" value="'.$iduser.'"><br>');
    printf('Login:<br><input type="text" readonly name="login" value="'.$login.'" ><br>');
    printf('Nom:<br><input type="text" readonly name="nom" value="'.$nom.' "><br>');
    printf('Prénom:<br><input type="text" readonly name="prenom" value="'.$prenom.'"><br>');
    printf('Adresse:<br><input type="text" readonly name="adresse" value="'.$adresse.'"><br>');
    printf('Téléphone:<br><input type="text" readonly name="tel" value="'.$tel.'"><br>');
    printf('Mail:<br><input type="text" readonly name="mail" value="'.$mail.'"><br>');
    printf('<input type="submit" readonly value="Supprimer">');
    printf('</form>');
}
?>


<?php
function usersList(){
$pdo=new PDO('mysql:host=localhost;dbname=db_PUIG;charset=UTF8','22103051','Mathieu');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

if(!isset($_GET['action'])){
    $stmt=$pdo->prepare('SELECT * FROM base_client,base_co WHERE base_client.id=base_co.id ');
    if($stmt->execute()){
        printf("<table>\n");
        $entete=false;
        while ($row=$stmt->fetch()) {
            
            if(!$entete){
                $entete=true; 
                printf('<tr>');
                printf('<th>Login</th>');
                printf('<th>Nom</th>');
                printf('<th>Prénom</th>');
                printf('<th>Adresse</th>');
                printf('<th>Téléphone</th>');
                printf('<th>E-mail</th>');
                printf('<th>Action</th>');
                printf('</tr>');
            }
            printf('<tr>');
            $id=$row['id'];
            $login=$row['user'];
            $nom=$row['nom'];
            $prenom=$row['prenom'];
            $adresse=$row['adresse'];
            $tel=$row['phone'];
            $mail=$row['mail'];
            printf('<td>'.$login.'</td>');
            printf('<td>'.$nom.'</td>');
            printf('<td>'.$prenom.'</td>');
            printf('<td>'.$adresse.'</td>');
            printf('<td>'.$tel.'</td>');
            printf('<td>'.$mail.'</td>');
            printf('<td><a href="?action=remove&id='.$id.'">Supprimer</a><br><a href="?action=update&id='.$id.'">Modifier</a></td>');
        }
        printf('</table>');
        $stmt->closeCursor();
    }
}else{
    if($_GET['action'] == 'remove'){
        removeUserForm($_GET['id']);
    }else if($_GET['action'] == 'update'){
        updateUserForm($_GET['id']);
    }
}
}


?>