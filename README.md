# projet-4-Pinterest

Projet : Pinterest

Durée : 1 semaine
Emplacement : sur un repository GitHub intitulé "projet-4-Pinterest"
Le publier également sur Heroku.
Demande client

J'ai besoin d'un site participatif, permettant à tout le monde de partager des photos de manière anonyme. Le site à construire donnera simplement accès à un formulaire d'upload (téléchargement vers le serveur) et à une liste d'images affichée sous forme de grille.

J'aimerais que mon site ressemble à quelque chose comme ceci : Image exemple Pinterest

Objectifs principaux

formulaire d'upload en html sémantique
sécurité: limiter l'upload uniquement aux formats d'images les plus courants (jpg, jpeg, png, gif, WebP)
upload fonctionnel (référence)
afficher en html le contenu du dossier contenant les images
utiliser la fonction php scandir() pour "lire" le contenu du dossier
Utiliser une grille pour afficher les images.
Ressources

En PHP, la fonction scandir() permet de lire le contenu d'un dossier et récupérer son contenu sous forme de tableau.
Objectifs supplémentaires

Permettre à l'utilisateur de modifier le cadrage de l'image (via la librairie php simpleImage)
Faire en sorte que ton interface s'adapte aux différentes tailles d'écran: mobile, tablet, desktop, huge screens. Exemple: Dribbble
Fais un vrai Pinterest:
Utilise isotope pour la mise en page de ton système
En PHP lors de l'upload faire de sorte que l'on sauve une miniature et l'image à sa taille normale
Faire de sorte que l'on puisse cliquer sur une image et l'affciher dans une modal Remodal avec la version normale de l'image
Pour commencer...

Etude de la demande: as-tu tout compris? Pour le savoir, reformule la demande avec un(e) collègue et comparez votre compréhension mutuelle.
Clarifie pour toi-même ce que devra faire ton script php, via de l'Unified Modelling Language (UML) (example 1, example 2)
Réalise un prototype papier de l'écran à construire.
Crée un repository sur GitHub "projet-4-Pinterest"
Qu'est-ce que je sais déjà faire?

Créer un formulaire html
Ecrire du html
Utiliser un framework CSS
Traiter d'un formulaire en php
Qu'est-ce qui est nouveau ?

PHP: expérimenter avec l'upload
PHP: expérimenter avec scandir()
Associer une librairie javascript à du html
Bon amusement!
