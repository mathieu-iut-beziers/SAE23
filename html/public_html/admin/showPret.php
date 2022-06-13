<?php
function showPret(){
    global $pdo;

        $stmt=$pdo->prepare('SELECT * FROM base_pret ORDER BY `status` ASC');

        if($stmt->execute()){
            printf("<table>\n");
            $entete=false;
            while ($row=$stmt->fetch()) {
                if(!$entete){
                    $entete=true; 
                    printf('<tr>');
                    printf('<th>id</th>');
                    printf('<th>Client</th>');
                    printf('<th>Objet</th>');
                    printf('<th>Prix</th>');
                    printf('<th>Status</th>');
                    printf('<th>Action</th>');
                    printf('</tr>');
                }
                $objetInfo=$pdo->prepare('SELECT * FROM base_materielle WHERE id_mat=:idmat');
                $objetInfo->execute(array('idmat'=>$row['id_mat']));
                $objetInforow=$objetInfo->fetch();
                $prix=$objetInforow['prix'];
                $objetInfo->closeCursor();
                printf('<tr>');
                $id=$row['id_pret'];
                $client=$row['client'];
                $objet=$row['nom_obj'];
                $status=$row['status'];
                printf('<td>'.$id.'</td>');
                printf('<td>'.$client.'</td>');
                printf('<td>'.$objet.'</td>');
                printf('<td>'.$prix.'€</td>');
                if($status==0){
                    printf('<td>En cours</td>');
                    printf('<td><a href="?action=end&id='.$id.'">Terminer</a></td>');
                }else{
                    printf('<td>Terminé</td>');
                    printf('<td><a href="?action=delete&id='.$id.'">Supprimer</a><br><a href="?action=renew&id='.$id.'">Continuer</a></td>');
                }
                
            }
            printf('</table>');
            $stmt->closeCursor();
        }
        if(isset($_GET['action'])){
            if($_GET['action']=='end'){
                $req=$pdo->prepare('UPDATE base_pret SET `status`=1 WHERE id_pret=:id');
                $req->execute(array("id"=>$_GET['id']));
                $req->closeCursor();
                header('Location: index.php');
            }
            if($_GET['action']=='delete'){
                $reqRemove=$pdo->prepare('DELETE FROM base_pret WHERE id_pret=:id');
                $reqRemove->execute(array("id"=>$_GET['id']));
                $reqRemove->closeCursor();
                header('Location: index.php');
            }
            if($_GET['action']=='renew'){
                $reqRenew=$pdo->prepare('UPDATE base_pret SET `status`=0 WHERE id_pret=:id');
                $reqRenew->execute(array("id"=>$_GET['id']));
                $reqRenew->closeCursor();
                header('Location: index.php');
            }
        }
    }

    
?>