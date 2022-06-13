<?php
function validLocation($id){
    $pdo=new PDO('mysql:host=localhost;dbname=db_PUIG;charset=UTF8','22103051','Mathieu');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $stmt=$pdo->prepare('SELECT * FROM `base_materielle` WHERE id_mat=:id');
    $stmt->execute(array('id'=>$id));
    $row=$stmt->fetch();
    $objet=$row['type'];
    $desc=$row['description'];
    $prix=$row['prix'];
    $dispo=$row['stock'];
    printf('Voulez vous louer cette objet ?');
    printf('<form action="addLocation.php" method="post" accept-charset="utf8">');
    printf('<input style="display=hidden;" type="text" name="id" value="'.$id.'" readonly><br>');
    printf('Objet:<br><input type="text" name="objet" value="'.$objet.'" readonly><br>');
    printf('Description:<br><input type="text" name="desc" value="'.$desc.'" readonly><br>');
    printf('Prix:<br><input type="text" name="prix" value="'.$prix.'" readonly><br>');
    printf('Disponible:<br><input type="text" name="stock" value="'.$dispo.'" readonly><br>');
    printf('<input type="submit" value="Louer">');
    printf('</form>');
}
?>

<?php
function showLocationForm(){
$pdo=new PDO('mysql:host=localhost;dbname=db_PUIG;charset=UTF8','22103051','Mathieu');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
if(!isset($_GET['action'])){
    $stmt=$pdo->prepare('SELECT * FROM `base_materielle` ORDER BY id_mat');
    if($stmt->execute()){
        printf("<table>\n");
        $entete=false;
        while ($row=$stmt->fetch()) {
            if(!$entete){
                $entete=true; 
                printf('<tr>');
                printf('<th>Objet</th>');
                printf('<th>Description</th>');
                printf('<th>Prix</th>');
                printf('<th>Disponible</th>');
                printf('<th>Action</th>');
                printf('</tr>');
            }
            printf('<tr>');
            $id=$row['id_mat'];
            $objet=$row['type'];
            $desc=$row['description'];
            $prix=$row['prix'];
            $dispo=$row['stock'];
            printf('<td>'.$objet.'</td>');
            printf('<td>'.$desc.'</td>');
            printf('<td>'.$prix.'€</td>');
            printf('<td>'.$dispo.'</td>');
            if($dispo>0){
                printf('<td><a href="location.php?id='.$id.'&action=louer">Louer</a></td>');
            }else{
                printf('<td>Indisponible</td>');
            }
            
        }
        printf('</table>');
        $stmt->closeCursor();
    }
}else{
    if($_GET['action'] == 'louer'){
        validLocation($_GET['id']);
    }
}
}


?>