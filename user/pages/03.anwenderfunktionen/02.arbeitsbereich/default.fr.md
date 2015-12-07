---
title: Fonctions disponibles dans le volet Travail
slug: le-volet-travail
menu: Le volet Travail
metadata:
    description: Die Webbasierte Anleitung für DIGAME vom Zentrum elektronische Medien ZEM.
    keywords: DIGAME,ZEM,Zentrum elektronische Medien,Mediathek Admin,Mediathek,Bilddatenbank,Bildverwaltung,Bundesverwaltung,Eidgenossenschaft,Schweizerische Eidgenossenschaft,VBS,Bundesamt für Verteidigung, Bevölkerungsschutz und Sport
    author: Stefan Eckstein | Zentrum elektronische Medien (ZEM)
    robots: index, follow
process:
	twig: true
taxonomy:
    category: backendanleitung
    tag: [digame, Anleitung, ZEM]
visible: true
---

## Fonctions disponibles dans le volet Travail

***

Dans le volet Travail, l’utilisateur peut lancer une recherche parmi des ressources numériques existantes ou en créer des nouvelles.

<br>
{{ media['functions.png'].html() }}
###### Image n°7 : aperçu des fonctionnalités du volet Travail.
<br>

### Recherche simple

En laissant le champ de texte (1) vide et en cliquant sur le bouton Chercher [Go!], l’utilisateur lance une recherche sans aucun critère d’affinage. Toutes les ressources numériques de son organisation seront alors affichées. S’il effectue une recherche textuelle ou indique un identifiant de ressource dans ce champ, le système réduira le nombre de résultats car il ne cherchera que les ressources dont les métadonnées contiennent le terme ou l’identifiant en question. Attention : la recherche se fera dans l’ensemble des métadonnées. Par exemple, si l’utilisateur tape un titre, le système cherchera des correspondances aussi bien dans la description de la ressource que dans les données de l’auteur.

### Recherche avancée

L’utilisateur peut configurer des paramètres de recherche avancée en cliquant sur Recherche avancée [Erweitere Suche] (3). Les possibilités seront les mêmes dans la fenêtre de recherche avancée qu’avec la création d’un filtre. Pour davantage d’informations à ce propos, veuillez vous référer au chapitre « Fonctionnalités du volet Filtre ».

***

## Créer des ressources numériques

L’utilisateur peut créer de nouvelles ressources numériques en cliquant sur Créer une ressource [Assets erzeugen] (2). Une fenêtre d’exploration s’ouvre et l’utilisateur peut sélectionner le fichier original à partir duquel il veut créer une ressource. Il peut sélectionner différents fichiers pour créer plusieurs ressources simultanément, et même travailler directement à partir des fichiers originaux regroupés dans un fichier zip.

<br>
{{ media['progress.png'].html() }}
###### Image n°8 : barres de progression lors de la création d’une ressource
<br>

La barre (1) montre la progression générale du processus de création d’une ressource. En dessous, les autres barres (2) indiquent le nom de chaque fichier et leur progression individuelle. Tout au long du processus, le texte en arrière-fond reste visible. L’utilisateur peut ainsi travailler sur les ressources déjà créées, tout en laissant l’opération de création se poursuivre en arrière-plan. Si la boîte de dialogue est au premier plan, le bouton Fermer [Schliessen] (3), permettant de fermer la boîte de dialogue, s’affichera dès que le processus aura abouti et que toutes les ressources numériques auront été créées.

DIGAME supporte les formats suivants:

- Photos: .jpg, .png, .tiff, .eps
- Vidéos: .mp4, .mv4, .mov
- Documents: .pdf, .doc
- Archives: .zip

Attention : il n’y a pas d’aperçu automatique pour les données au format .eps. L’utilisateur devra l’insérer manuellement.

<br>
***
