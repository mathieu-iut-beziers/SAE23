<?php
function showPret(){
    global $pdo;
    $user=$_SESSION['auth'];

    $clientIDreq=$pdo->prepare('SELECT id FROM base_co WHERE user=:u');
    $clientIDreq->execute(array('u'=>$user));
    $clientIDrow=$clientIDreq->fetch();
    $clientID=$clientIDrow['id'];
    $clientIDreq->closeCursor();  

    $checkPret=$pdo->prepare('SELECT * FROM base_client WHERE id=:id');
    $checkPret->execute(array('id'=>$clientID));
    $checkPretRow=$checkPret->fetch();
    $nbPret=$checkPretRow['nb_location'];
    $checkPret->closeCursor();

    if($nbPret==0){
        printf('Vous n\'avez aucun prêt en cours');
    }else{
        $stmt=$pdo->prepare('SELECT * FROM base_pret WHERE client=:user');

        if($stmt->execute(array('user'=>$user))){
            printf("<table>\n");
            $entete=false;
            while ($row=$stmt->fetch()) {
                if(!$entete){
                    $entete=true; 
                    printf('<tr>');
                    printf('<th>id</th>');
                    printf('<th>Objet</th>');
                    printf('<th>Status</th>');
                    printf('<th>Prix</th>');
                    printf('</tr>');
                }
                $objetInfo=$pdo->prepare('SELECT * FROM base_materielle WHERE id_mat=:idmat');
                $objetInfo->execute(array('idmat'=>$row['id_mat']));
                $objetInforow=$objetInfo->fetch();
                $prix=$objetInforow['prix'];
                $objetInfo->closeCursor();
                printf('<tr>');
                $id=$row['id_pret'];
                $objet=$row['nom_obj'];
                $status=$row['status'];
                printf('<td>'.$id.'</td>');
                printf('<td>'.$objet.'</td>');
                printf('<td>'.$prix.'€</td>');
                
                if($status==0){
                    printf('<td>En cours</td>');
                }else{
                    printf('<td>Terminé</td>');
                }
            }
            printf('</table>');
            $stmt->closeCursor();
        }
    }

    
}
?>