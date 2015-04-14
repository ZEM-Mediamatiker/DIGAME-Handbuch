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
Ein Dateiexplorer Fenster wird geöffnet. Damit kann das entsprechende Originalfile gewählt werden aus welchem ein Media Asset erzeugt werden soll.
Es ist möglich mehrere Files anzuwählen und Media Assets daraus zu erstellen. Weiter ist es möglich direkt Media Assets aus Originalfiles zu erstellen, welche in einem ZIP zusammengefasst sind.

<br>
{{ media['progress.png'].html() }}
###### Bild 8: Fortschrittsanzeige beim Erstellen eines Assets.
<br>

Der Balken (1) zeigt den gesamt Fortschritt des Prozess zur Erzeugung von Media Assets an.
Der Balken (2) zeigt den Fortschritt und den jeweiligen Namen eines einzelnen Files an.
Der Knopf (3) verfügt über zwei Funktionen. Während der Prozess zur Erzeugung von Media Assets läuft wird der Text Hintergrund angezeigt. Dies erlaubt dem Benutzer an bereits erzeugten Media Assets weiterzuarbeiten und den Erstellungsprozess im Hintergrund laufen zu lassen. Wird der Dialog im Vordergrund behalten, erscheint sobald der gesamte Prozess abgeschlossen ist und alle Media Assets erzeugt wurden der Text Schliessen auf dem Knopf (3). Der Benutzer kann den Knopf (3) betätigen und der Dialog verschwindet.

Folgende Formate werden in Digame unterstützt:

- Bilder: .jpg, .png, .tiff, .eps
- Filme: .mp4, .mv4, .mov
- Dokumente: .pdf, .doc
- Archive: .zip

Information: für eps-Dateien können keine Vorschaubilder automatisch erstellt werden. Das Vorschaubild muss manuell hinzugefügt werden.


<br>
***







