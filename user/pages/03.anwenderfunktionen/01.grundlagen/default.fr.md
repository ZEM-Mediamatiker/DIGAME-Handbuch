---
title: Structure de base de DIGAME
slug: structure-de-base
menu: Structure de base
metadata:
    description: Die Webbasierte Anleitung für DIGAME vom Zentrum elektronische Medien ZEM.
    keywords: DIGAME,ZEM,Zentrum elektronische Medien,Mediathek Admin,Mediathek,Bilddatenbank,Bildverwaltung,Bundesverwaltung,Eidgenossenschaft,Schweizerische Eidgenossenschaft,VBS,Bundesamt für Verteidigung, Bevölkerungsschutz und Sport
    author: Stefan Eckstein | Zentrum elektronische Medien (ZEM)
    robots: index, follow
process:
	twig: true
taxonomy:
    category: digame
    tag: [digame, Anleitung, ZEM]
visible: true
---

## Structure de base de DIGAME
***
La page principale de DIGAME est découpée en cinq volets:

- Le volet Menus (2) regroupe tous les menus auxquels l’utilisateur a accès. Le menu Catalogue [Katalog] est suffisant pour le travail au quotidien. C’est dans ce menu que l’utilisateur se trouve après s’être connecté. S’il le souhaite, l’utilisateur peut cliquer sur le menu Modifier le mot de passe [Passwort ändern] pour changer de mot de passe. Les autres menus offrent des fonctionnalités administratives.

- Dans le volet Travail (3), une recherche simple permet de trouver des ressources numériques. En faisant une recherche avancée, l’utilisateur peut affiner ses critères de recherche. Il peut également créer de nouvelles ressources [Assets erzeugen].

- Dans le volet Filtre (4), les ressources numériques sont recensées selon des critères spécifiques. Les résultats peuvent être filtrés en fonction du type de données et des droits de diffusion.

- Le volet Affichage (5) montre toutes les ressources trouvées à partir du volet Travail (3) ou Filtre (4).

<br>

{{ media['overview.png'].html() }}
###### Image n°2 : interface DIGAME

<br>

***

## Connexion et déconnexion

Pour se connecter à DIGAME, l’utilisateur doit indiquer son nom d’utilisateur [Benutzername] (1) et son mot de passe (2), sélectionner son organisation [Organisation] dans le menu déroulant (3) et cliquer sur le bouton Connexion [Anmelden] (5). S’il ne sélectionne pas la bonne organisation, il ne pourra pas se connecter. Il peut définir sa langue d’utilisation dans le menu déroulant Langue [Sprache] (4). Les langues disponibles à ce jour sont l’anglais et l’allemand.

<br>

{{ media['login.png'].html() }}
###### Image n°3 : fenêtre de connexion

<br>

L’identification de l’utilisateur est indiquée en haut à droite de l’écran (cf. image n°2, volet (1)). L’utilisateur doit cliquer sur le bouton Déconnexion [Abmelden] pour quitter le programme.

***

## Modifier le mot de passe

L’utilisateur peut changer son mot de passe à tout moment. Pour cela, il doit choisir le menu Modifier le mot de passe [Passwort ändern] dans le volet Menus (2) (cf. image n°2)
<br>

{{ media['password.png'].html() }}
###### Image n°4 : champs de modification du mot de passe

<br>
Le champ (1) Nom d’utilisateur [Benutzername] indique le nom d’utilisateur de la personne connectée et ne peut être modifié. L’utilisateur doit entrer son ancien mot de passe [Passwort] (2) et son nouveau mot de passe [Neues Passwort] (3). Pour confirmer la modification, il doit entrer une seconde fois le nouveau mot de passe [Neues Passwort bestätigen] (4) et cliquer sur le bouton Valider [Passwort ändern] (5).

Si toutes les entrées sont correctes, un message s’affiche, indiquant que le mot de passe a été modifié. L’utilisateur peut interrompre le processus en retournant vers le menu Catalogue [Katalog] du volet Menu (cf. image n°2)

<br>
***
