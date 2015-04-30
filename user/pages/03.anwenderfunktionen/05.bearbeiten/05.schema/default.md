---
title: Schema
menu: Schema
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

## Schema Viewer
***
Im Schema Viewer werden alle erfassten Metadaten zu einem Media Asset in einer übersichtlichen kompakten Form zusammengefasst. In dieser Ansicht können keine Änderungen gemacht werden.

<br>
{{ media['schemaviewer.png'].html() }}
###### Bild 29: Funktionen Schema Viewer
<br>


***

## Schema Editor

Hier werden die Metadaten für jedes Media Asset definiert. Jedes Metadatenfeld kann unterschiedliche Ausprägungen haben. Die Beschreibung (2) hat zu Beginn ein Häkchen welches bedeutet, dass das Metadatenfeld ein Pflichtfeld ist und ausgefüllt werden muss. Weiter kann das Feld in verschiedenen Sprachen erfasst werden.
Mit den Knöpfen in (3) können die Änderungen gespeichert oder verworfen werden. Mit dem Knopf „Validieren“ kann überprüft werden ob alle Pflichtfelder ausgefüllt wurden. Ist dies nicht der Fall wird eine Fehlermeldung angezeigt Abbildung 31: Fehler Validierung.

<br>
{{ media['schemaeditor.png'].html() }}
###### Bild 30: Funktionen Schema Editor
<br>

Es ist möglich für mehrere Media Assets gleichzeitig die Metadaten zu definieren. Dies ist hilfreich wenn mehrere Media Assets über dieselben Metadaten verfügt. Sind bei den Media Assets bereits Metadaten definiert und sind diese nicht identisch können diese mit einem neuen Wert überschrieben werden.

<br>
{{ media['schemamehrere.png'].html() }}
###### Bild 31: Bearbeitung mehrerer Media Assets
<br>

<br>
***

