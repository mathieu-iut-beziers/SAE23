# SAE23

Tableau de bord :

* CM = groupe + sujet
* TP1 = bha tp1
* TD1 = juste le git
* TD2 = logo + cahier des charges

------

## Cahier des charges

On souhaite réaliser une application web pour une entreprise de location d'engins nommer RTBZ-Location ('La location de confiance'). Notre site comprendra, une page de connexion pour les clients, qui leur permettra de réaliser des locations de matérielles et de voir leur historique. Une autre page de connexion pour les administrateurs afin de gérer les clients et le matérielle.

Notre magnifique :

![logo](./rtbe-loc.png)

------

## Description de BDD

* Base client :
  * ID
  * Nom
  * Prénom
  * Tel
  * Adresse
  * e-mail
  * Nombre de près en coure
  * SQL corespondant :
  
        CREATE TABLE `db_PUIG`.`base_client` ( `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT , `nom` VARBINARY(30) NOT NULL , `prenom` VARBINARY(30) NOT NULL , `phone` INT(12) NOT NULL , `adresse` VARBINARY(255) NOT NULL , `mail` VARBINARY(255) NOT NULL , `nb_location` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;

* Base matérielle :
  * Type (voiture, ...)
  * Description
  * Prix
  * stock disponible
  * SQL corespondant :
  
        CREATE TABLE `db_PUIG`.`base_materielle` ( `id_mat` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT , `type` VARCHAR(30) NOT NULL , `description` VARCHAR(255) NOT NULL , `prix` NOT NULL , `stock` INT(255) NOT NULL , PRIMARY KEY (`id_mat`)) ENGINE = MyISAM;

* Base pour les connexions sur le site :
  * Surnom
  * ID
  * MDP
  
        CREATE TABLE `db_PUIG`.`base_co` ( `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT , `user` VARBINARY(32) NOT NULL , `password` VARBINARY(32) NOT NULL , `role` INT(2) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;

* Base avec les prix / pret :
  * id_pert
  * id_mat
  * nom_obj
  * client
  * status

    CREATE TABLE `db_PUIG`.`base_pret` ( `id_pret` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT , `id_mat` INT(11) UNSIGNED NOT NULL , `nom_obj` VARCHAR(30) NOT NULL , `client` VARBINARY(30) NOT NULL , `status` VARBINARY(30) NOT NULL , PRIMARY KEY (`id_pret`)) ENGINE = MyISAM;

Sur le site :

* Partie client :
  * Voir leurs prés
  * Faire des prés
  * Voir la matérielle dispo, et leur prix
* Partie admin :
  * Voir tous les clients
  * Et les administrer
  * Voir le matérielle et pouvoir le géré

------

## Les logs

![clog](Capture%20d’écran%20du%202022-05-16%2011-42-27.png)
