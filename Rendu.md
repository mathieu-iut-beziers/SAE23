# SAE 23

Livrable de La SAE23 Comportnat le Tutoriel d’installation et d’utilisation et une Démonstration technique commentée

-------
-------

## Table des matiere :

## Tutoriel d’installation et d’utilisation

1. Notre solution semie-automatisée clée en main
2. Instalation sur un serveur type plug and play
   1. mise en place de la BDD
   2. mise en place du PHP
   3. configuration de config-db.php

3. Une fois installer : Notre tutorielle d'utilisation
   1. L'inscription
   2. La conexion
   3. Le talbeau de location
   4. Le tableau historique et location en cours
   5. Le Panelle d'aministration
      1. Le talbeau administration des clients.
      2. Le tableau historique et location en cours
   6. La deconxion

## Démonstration technique commentée

1. Video
2. Commentaire avec marqueure de temps

-------
-------

## 1 

Notre solution et une solution clé-en-main tout automatiser.  vous pourrez louer, mettre en location et gérer vos clients  depuis une seule application web.

## 2 

L'installation d'une notre solution  peut être effectué  sur un serveur de type plug and play comme le fameux serveur borelly.net  que nous allons utiliser ici comme exemple.

Tout d'abord on va mettre en place la base de données.

## 2.1

Pour cela rien de plus simple. On se connecte sur notre serveur phpMyAdmin. Ampli dans  import on choisit notre fichier puis il ne reste plus qu'à appuyer sur go pour finir l'importation de notre base de données.  une fois la base de données en place on peut mettre en place le PHP .

## 2.2

Pour mettre en place le PHP il suffit simplement d'utiliser un outil tel que Filezilla pour se connecter à notre serveur distant et pouvoir envoyer nos fichiers.  dans notre cas ( pour borelly.net)  on ajoute en premier temps la clé RSA sur notre ordinateur puis on lance  le logiciel Filezilla. Une fois sur le logiciel On rentre l'Hôte  soit  dans notre cas  flipper suivante : 194.199.227.110, Puis l'utilisateur qui nous est dédiée et enfin toujours dans votre cas on met comme fort le numéro 22. Une fois connecté au serveur avec Filezilla il nous suffira juste de glissé-déposé tous les fichiers que nous avons besoin ( index.PHP, css,...). maintenant que notre PHP en ligne  il nous reste plus qu'à configurer le moyen de relier le site est la base de données.

## 2.3

Pour relier le site à la base de données il nous suffit de modifier le fichier de configuration config-db.php Oui il nous suffira  d'entrée
le  nom de la base de données, Le nom d'utilisateur et le mot de passe. 
Une fois ces trois étapes réalisé installation de l'application Web est terminée !

## 3 

Maintenant que L'application installée on peut maintenant commencer à l'utiliser pour cela voici notre tutoriel d'utilisation

## 3.1

En premier lieu comme vous pouvez le voir quand vous arrivez sur le site Vous verrez une brève description de Votre entreprise  et en bas de la page un onglet de connexion. Ici vous pouvez réaliser deux actions tout d'abord l'inscription ou en cliquant sur le bouton un formulaire d'inscription s'affichera.  vous pourrez donc vous inscrire ici.

## 3.2

Une fois inscrit donc vous pouvez vous connecter en entrant votre utilisateur et votre votre passe en cliquant sur Connexion.

## 3.3

Une fois connecté vous serez redirigé vers une autre page avec un premier temps un tableau où on pourrait voir les locations de disponible par exemple ici la grue.

## 3.4

En dessous du tableau de location vous verrez un tableau des locations en cours et un historique de vos anciennes location. Ici se termine la partie utilisateur.

## 3.5.1

Maintenant du côté  administration On peut modifier les stocks disponibles et ajouter D'autres engins à la location. En bas de la page se trouve Un bouton nommé panel d'administration on pourra trouver un tableau permettant l'administration des clients

## 3.5.2

Puis en dessous un panneau l'administration Didier au location passé et en cours.

## 3.6

Pour finir combat de chaque page que ce soit côté client au côté administration il y a un onglet de connexions pour se déconnecter
