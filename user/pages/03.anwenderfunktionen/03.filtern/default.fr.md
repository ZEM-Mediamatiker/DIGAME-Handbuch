---
title: Fonctionnalités du volet Filtre
slug: le-volet-filtre
menu: Le volet Filtre
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

## Fonctionnalités du volet Filtre

***

Le volet Filtre permet à l’utilisateur de limiter le nombre de ressources affichées, en fonction des paramètres qu’il aura choisis.

<br>
{{ media['overview.png'].html() }}
###### Image n°9 : aperçu du volet Filtre
<br>

Il existe quatre types de restrictions :
- Dossier [Ordner] (1) : renvoie aux mots-clés attribués à chaque ressource électronique
- Filtres définis par l’utilisateur [Filter] (2) : renvoie aux métadonnées de chaque ressource
- Filtres prédéfinis (3)
- Types de fichiers [Datei Typen] et Droits de publications [Rechte Publikation] (4)

***

## Mots-clés

En cliquant sur Dossier (1), l’arborescence de mots-clés s’ouvre. Ce point est détaillé plus loin. Quand l’utilisateur sélectionne un dossier, les ressources numériques liées aux mots-clés qu’il contient apparaissent automatiquement dans le volet Affichage.

<br>
{{ media['stichworte.png'].html() }}
###### Image n°10 : arborescence de mots-clés
<br>

***

## Filtres définis par l’utilisateur

L’outil Filtre [Filter] est accompagné de deux icones. La première, le symbole du plus, sert à configurer un nouveau filtre ; la seconde, un cercle constitué de deux flèches, permet d’actualiser l’affichage des filtres afin que les nouveaux filtres apparaissent dans la liste.

Ensuite, chaque filtre défini par l’utilisateur dispose de deux fonctionnalités (2) : la première, l’icone du stylo, sert à éditer le filtre pour en modifier les critères. La seconde, l’icone en croix, permet de supprimer un filtre défini par l’utilisateur. Attention, la suppression d’un filtre est définitive !

<br>
{{ media['eigenefilter.png'].html() }}
###### Image n°11 : fonctionnalités du filtre
<br>

Pour définir un filtre, l’utilisateur doit tout d’abord renseigner le champ (1) qui précise si le filtre doit répondre à tous les critères [alle] ou au moins à un critère [mind. eine] (2).

<br>
{{ media['filterbearbeiten.png'].html() }}
###### Image n°12 : définition du champ d’application d’un filtre
<br>

Pour définir un critère, l’utilisateur doit procéder comme suit (cf. image n°13) : choisir dans le menu déroulant le champ de métadonnées à prendre en compte pendant la recherche (2), dans notre exemple la description, sélectionner le cas échéant l’option souhaitée dans le menu (3) qui est un champ optionnel et n’apparait que lorsque le champ de métadonnées existe en plusieurs langues, et définir comment le texte de recherche devra être pris en compte (4). Le tableau ci-dessous rassemble les différentes options d’affichage des ressources.

<br>

| Option de recherche  (4) | Texte contenu dans les métadonnées | Texte de recherche (5) |
| ----- | ----- | ----- |
| comprend | Quand Hans rentre à la maison | Hans |
| commence par | Quand Hans rentre à la maison | Quand Hans |
| correspond à | Quand Hans rentre à la maison | Quand Hans rentre à la maison |

<br>

L’utilisateur peut taper le texte de recherche (5), ajouter (6) ou supprimer (7) un critère. Attention : l’opération de suppression n’est possible que s’il subsiste encore au moins un critère après coup. L’utilisateur peut également modifier (8) le nom du filtre tel qu’il apparait dans la liste des filtres (cf. image n°14). En cliquant sur Sauvegarder [Speichern] (9), l’utilisateur enregistre le filtre ; en cliquant sur Interrompre [Abbrechen] (10), le nouveau filtre ne sera pas sauvegardé et toutes les modifications seront perdues.


<br>
{{ media['neuerfilter.png'].html() }}
###### Image n°13 : création d’un filtre
<br>

En choisissant un filtre défini par l’utilisateur (p. ex ici celui appelé « Internet »), toutes les ressources numériques correspondant aux critères de recherche de ce filtre vont apparaitre dans le volet Affichage (cf. image n°2).

<br>
{{ media['filteruebersicht.png'].html() }}
###### Image n°14 : liste des filtres
<br>

***

## Filtres prédéfinis

- Ressources en cours de modification [Assets in Bearbeitung] : contient toutes les ressources dont la protection a été désactivée (check out) par l’utilisateur pour modification

- Ressources sans mot-clé [Assets ohne Stichwort] : contient toutes les ressources auxquelles aucun mot-clé n’a été attribué et qui, de fait, ne s’affichent pas dans l’arborescence

- Corbeille [Papierkorb] : contient toutes les ressources ayant été supprimées


***

## Types de fichiers et droits de diffusion

La rubrique Droits de diffusion [Rechte Publikation] (2) est une sorte d’archive. Elle permet de gérer le cercle de diffusion des différentes ressources numériques. Par exemple, si la case Internet [Internet] est cochée, la ressource sera accessible depuis une application reliée (ex. : www.mediathek.admin.ch). Si seule la case CME [ZEM] est cochée, la ressource n’apparaîtra que dans DIGAME.


La rubrique Types de fichiers [Datei Typen] (3) permet à l’utilisateur de limiter la recherche à un ou plusieurs formats de fichiers. Selon ce qu’il coche, seules des vidéos ou des images s’afficheront.


En combinant ces deux rubriques, l’utilisateur peut par exemple définir une recherche uniquement parmi les images ayant le droit d’être diffusées sur Internet.

<br>
{{ media['rechte.png'].html() }}
###### Image n°15 : droits de publication et types de fichiers
<br>

Les paramètres cochés par l’utilisateur dans les rubriques (2) et (3) vont agir sur les résultats trouvés :

- dans l’arborescence de mots-clés
- par les filtres définis par l’utilisateur
- par les filtres prédéfinis
- par la recherche simple
- par la recherche avancée


<br>
***
