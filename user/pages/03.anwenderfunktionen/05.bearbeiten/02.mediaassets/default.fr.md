---
title: Ressource numérique
slug: ressource-numerique
menu: Ressource numérique
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


## Modifier une ressource numérique
***
Le volet Modification (1) peut être ouvert et fermé à l’aide de la souris. Les informations principales qui s’affichent (2) sont :
- l’identifiant de la ressource [AssetId]
- le nom du fichier
- la taille du fichier
- le statut de la ressource (si elle est en cours de modification, check out est coché)
- la langue de la ressource (si définie)
- le titre de la ressource

<br>
{{ media['single.png'].html() }}
###### Image n°20 : fonctionnalités du volet Modification
<br>

Voilà à quoi ressemble le volet Modification quand plusieurs ressources numériques sont sélectionnées.

<br>
{{ media['multi.png'].html() }}
###### Image n°21 : sélection de plusieurs ressources
<br>

En cliquant sur les icones (3) (cf. image n°20), l’utilisateur accède à différents outils, décrits ci-après. Attention, ceux-ci ne sont jamais tous disponibles simultanément. Leur disponibilité dépend du statut de la ressource. Une description s’affiche dès que l’utilisateur survole l’icone avec la souris.

<br>
{{ media['icons.png'].html() }}
###### Image n°22 : outils de modification
<br>

***

### Modifier l’accès [Zugriffsordner ändern] / les droits de diffusion [Rechte Publikation ändern] (1)

Cet outil permet à l’utilisateur de déplacer une ressource vers un autre dossier. Pour pouvoir être déplacée, la protection ne doit pas avoir été désactivée (voir plus loin Réactiver la protection d’une ressource numérique [Media Asset chek in] (4)). Après avoir cliqué sur l’icone, une boîte de dialogue apparait permettant de choisir le cercle de diffusion. Attention : en changeant le cercle de diffusion, l’utilisateur change automatiquement l’accessibilité de la ressource (cf. Types de fichiers et Droits de diffusion).

<br>
{{ media['zugriffsstufe.png'].html() }}
###### Image n°23 : changer le cercle de diffusion
<br>

***

### Remplacer le contenu (2)


Cet outil permet à l’utilisateur de remplacer le fichier numérique, par exemple une image précise. Cela peut notamment être utile pour modifier ultérieurement un fichier numérique ou en ajouter un, si celui-ci n’était pas encore disponible lors de la création de la ressource.
<br>
Exemple n°1 : le fichier numérique n’est pas disponible et l’utilisateur insère temporairement un fichier joker. Il définit ensuite les métadonnées et toutes les autres donnés dont il dispose. Dès qu’il recevra le fichier manquant, il pourra l’insérer à la place du fichier joker.

<br>
Exemple n°2 : si le fichier numérique a été retouché (une photo a été retravaillée sur un logiciel de traitement d’images par exemple), l’utilisateur peut écraser l’ancienne version du fichier avec la nouvelle.


***

### Télécharger une ressource numérique (3)


Cet outil permet de télécharger une ressource numérique et ses métadonnées, sur un support de données local. Le fichier numérique pourra alors être retravaillé dans un logiciel de traitement d’images. Cependant, pour des raisons techniques, il est possible d’ajouter des métadonnées aux photos uniquement, mais pas aux vidéos. Les métadonnées s’afficheront également dans des applications tierces, pour autant qu’elles soient reconnues.


***

### Désactiver la protection d’une ressource numérique (check out) (4)


Pour pouvoir modifier une ressource numérique, sa protection doit tout d’abord être désactivée (check out). Une fois la protection levée, le nom de l’utilisateur apparaitra dans les données de la ressource et celui-ci sera le seul à pouvoir la modifier à son gré. Avant enregistrement, les modifications ne sont pas définitives et peuvent encore être annulées (voir Annulation du check out(6)).


***

### Réactiver la protection d’une ressource numérique (check in) (5)


Une fois les modifications effectuées et contrôlées, l’utilisateur peut réactiver la protection de la ressource numérique (check in). Les modifications sont alors enregistrées définitivement et la ressource protégée.

***

### Annulation du check out (6)

Il est possible que l’utilisateur change d’avis et ne souhaite plus que les modifications soient enregistrées. S’il ne se souvient plus exactement de tous les changements ou que ceux-ci sont trop nombreux pour être annulés un par un, il a la possibilité d’annuler le check out et de revenir ainsi à l’état initial. Toutes les modifications sont alors perdues.

***

### Exporter la ressource numérique (7)

L’utilisateur peut sélectionner une ou plusieurs ressources numériques et les exporter vers un document Word. Les vignettes et les métadonnées seront alors transférées dans le document.



<br>
{{ media['functions.png'].html() }}
###### Image n°24 : exemple d’une ressource après exportation
<br>

***

### Supprimer une ressource numérique (8)

L’utilisateur peut supprimer une ressource numérique. Celle-ci ne disparaitra pas du système mais sera simplement déplacée vers la corbeille et signalée comme telle. Pour supprimer définitivement une ressource se trouvant dans la corbeille, l’utilisateur doit disposer de certains droits d’accès. En générale, seules quelques personnes par organisation sont concernées. Il s’agit le plus souvent des administrateurs ou des utilisateurs responsables du système.

<br>
{{ media['papierkorb.png'].html() }}
###### Image n°25 : ressource dans la corbeille
<br>

<br>
***
