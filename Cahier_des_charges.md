# SAE23

## Cahier des charges

-------

## 1 - Contexte et definition du probleme

Le professionnel R&T peut être amené à développer des applications Web, sous forme de sites Web manipulables grâce à un navigateur Web : elles peuvent être destinées à ses collaborateurs pour mettre facilement à leur disposition un outil informatique ; elles peuvent aussi être le cœur de métier de son entreprise avec des applications destinées à des clients/commanditaires.

### Notre logo :

![logo](./img/logo.png)

## 2 - Objettif du projet

On souhaite réaliser une application web pour une entreprise de location d'engins nommer RTBZ-Location ('La location verte'). Notre site comprendra, une page de connexion pour les clients, qui leur permettra de réaliser des locations de matérielles et de voir leur historique. Une autre page de connexion pour les administrateurs afin de gérer les clients et le matérielle.

## 3 - Description fonctionelle des besoins

### Sur le site :

* Partie client :
  * Voir leurs prés
  * Faire des prés
  * Voir la matérielle dispo, et leur prix
* Partie admin :
  * Voir tous les clients
  * Et les administrer
  * Voir le matérielle et pouvoir le géré

### Description des table de la BDD :

* Base client :
  * ID
  * Nom
  * Prénom
  * Tel
  * Adresse
  * e-mail
  * Nombre de près en coure
  * Exemple de SQL corespondant :
  
        CREATE TABLE `db_PUIG`.`base_client` ( `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT , `nom` VARBINARY(30) NOT NULL , `prenom` VARBINARY(30) NOT NULL , `phone` INT(12) NOT NULL , `adresse` VARBINARY(255) NOT NULL , `mail` VARBINARY(255) NOT NULL , `nb_location` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;

* Base matérielle :
  * Type (voiture, ...)
  * Description
  * Prix
  * stock disponible
  * Exemple de SQL corespondant :
  
        CREATE TABLE `db_PUIG`.`base_materielle` ( `id_mat` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT , `type` VARCHAR(30) NOT NULL , `description` VARCHAR(255) NOT NULL , `prix` NOT NULL , `stock` INT(255) NOT NULL , PRIMARY KEY (`id_mat`)) ENGINE = MyISAM;

* Base pour les connexions sur le site :
  * Surnom
  * ID
  * MDP
  * Exemple de SQL corespondant :

        CREATE TABLE `db_PUIG`.`base_co` ( `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT , `user` VARBINARY(32) NOT NULL , `password` VARBINARY(32) NOT NULL , `role` INT(2) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;

* Base avec les prix / pret :
  * id_pert
  * id_mat
  * nom_obj
  * client
  * status
  * Exemple de SQL corespondant :

        CREATE TABLE `db_PUIG`.`base_pret` ( `id_pret` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT , `id_mat` INT(11) UNSIGNED NOT NULL , `nom_obj` VARCHAR(30) NOT NULL , `client` VARBINARY(30) NOT NULL , `status` VARBINARY(30) NOT NULL , PRIMARY KEY (`id_pret`)) ENGINE = MyISAM;

## 4 - Délais (date de realisation attendue)

La deadline de notre projet et le mardi 14 juin. Avec le rendu au commanditaire du code source de notre application, un tutorielle d'installation et une documentation technique.
