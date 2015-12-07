---
title: Diagram viewer
slug: diagram-viewer
menu: Diagram viewer
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

## Diagram viewer
***
In the diagram viewer all registered metadata are summarised as a media asset. No modifications can be made in this display mode.

<br>
{{ media['schemaviewer.png'].html() }}
###### Fig. 29: ‘Diagram viewer’
<br>


***

## Diagram editor

Here the metadata are defined for each media asset. Each media datafield can have different characteristics. The description (2) has a tick at the beginning, which means that the metadata field is obligatory and has to be filled in. Furthermore, the field can registered in various languages. With the ‘Save’ and ‘Cancel’ buttons (3) modifications can be saved or rejected. With the ‘Validate’ button you can check, whether all obligatory boxes have been filled in. Should this not be the case an error message will be displayed.

<br>
{{ media['schemaeditor.png'].html() }}
###### Fig. 30: ‘Diagram editing functions’
<br>

It is possible to define the metadata for several media assets at the same time. This is helpful if several media assets have the same metadata. If the metadata that are not identical have already been defined for the media assets, these can be overwritten with a new value.

<br>
{{ media['schemamehrere.png'].html() }}
###### Fig. 31: ‘Editing several media assets’
<br>

<br>
***
