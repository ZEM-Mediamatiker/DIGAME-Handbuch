---
title: Arbeitsbereich
menu: Arbeitsbereich
description: Your page description goes here
keywords: [1,2]
author: Stefan Eckstein
process:
	twig: true
taxonomy:
    category: digame
    tag: [digame, Anleitung, ZEM]
visible: true
---

## Funktionen Arbeitsbereich

***

Im Arbeits-Bereich kann nach Media Assets gesucht oder neue Media Assets erstellt werden.

<br>
{{ media['functions.png'].html() }}
###### Bild 7: Der Funktionen Arbeitsbereich in der Übersicht.
<br>

### Einfache Suche

Wird in (1) das Textfeld leergelassen und der Knopf Go betätigt gibt es keine Einschränkung der Suche. Es werden alle Media Assets angezeigt welche sich innerhalb der Organisation befinden. Im Textfeld kann ein beliebiger Text eingegeben werden oder auch eine Asset Id, dadurch kann die Anzahl gefundener Media Assets reduziert werden. Es wird nur noch nach Media Assets gesucht, welche in den Metadaten die entsprechenden Wörter enthalten. Dabei muss beachtet werden, dass in allen Metadaten nach einer Übereinstimmung gesucht wird. Wird bspw. ein Name eingegeben kann dieser im Titel in der Beschreibung aber eben auch beim Urheber gefunden werden.

### Erweiterte Suche

In (3) aus Abbildung 7: Funktionen Arbeitsbereich kann eine detailliertere Suche definiert werden. Die Möglichkeiten bei der erweiterten Suche sind dieselben wie bei der Definition eines Filters (siehe dazu Error! Reference source not found. Error! Reference source not found.).

***

## Assets erstellen

Durch betätigen des Knopf Assets erzeugen (2) aus Abbildung 7: Funktionen Arbeitsbereich können neue Media Assets erstellt werden.

<br>
{{ media['progress.png'].html() }}
###### Bild 8: Fortschrittsanzeige beim Erstellen eines Assets.
<br>

Der Balken (1) zeigt den gesamt Fortschritt des Prozess zur Erzeugung von Media Assets an.

Folgende Formate werden in Digame unterstützt:

- Bilder: .jpg, .png, .tiff, .eps

Information: für eps-Dateien können keine Vorschaubilder automatisch erstellt werden. Das Vorschaubild muss manuell hinzugefügt werden.


<br>
***




