# formulaire


						Compte Rendu de l'exercice 

Outils utilisés et descritpion de la façon dont j'ai procédé: 

Outils utilisés : 

Wamp : :  une plateforme de développement pour faire fonctionner localement des scripts PHP
IDE : visual studio code


Description : 

Vu que j 'utilise WAMP, mon dossier va être stocké dans la dossier "www" de Wamp afin d'y avoir accés en local.
J'ai commencé par faire l'intégration de la maquette. Avant de commencer les tests d'insertion il me semblait plus logique de commencer par 
l'interface graphique.J'ai également fait un peu de responsive (mobile). J'ai créé un fichier template quie sera ma "vue" en architecture MVC et un fichier index 
qui est un  controleur et mon modele.
Ensuite je me suis occupé de la création de la base de données sur PHP my Admin.(cf le script)

Pour finir je me suis occupé de la fonctionnalité demandée : l'insertion des données en base. 
J'ai traité  le cas ou un des champs n'est pas renseigné et aussi le cas ou l'email est mal renseigné.

J 'ai fait une fonctionnalité supplémentaire :  l'affichage des données , en commentaires dans mon code .


/*script utilisé pour la créetion de la base*/

CREATE DATABASE adimeo_db;
CREATE TABLE touriste
(
    	id_touriste int PRIMARY KEY AUTO_INCREMENT,
    	prenom varchar(30) NOT NULL,
   	  nom varchar(50) NOT NULL,
	    mail varchar(80)NOT NULL,
	    newsletter TINYINT(1)
)

Impressions et Difficultés rencontrées

Je suis contente d'avoir réalisé cet exercice.
Je n'ai pas beaucoup passé de temps sur PHP en formation,donc le langage utilisé a représenté pour moi 
la plus grosse difficulté. Je suis aller rechercher dans mes cours et sur internet pour la syntaxe. J'ai été contente de faire de l'intégration, ayant suivi 
une formation plus axés sur le developpement backend, je trouve toujours intéressant de faire des exercices de front.   


Temps estimé : 2 après-midi
