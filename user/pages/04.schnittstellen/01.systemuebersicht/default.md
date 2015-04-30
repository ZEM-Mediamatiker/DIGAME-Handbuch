---
title: Systemübersicht
menu: Systemübersicht
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

## Systemübersicht
***
Digame dient zur Verwaltung von Media Assets. Dabei werden die Media Assets in das System importiert wo sie mit Metadaten angereichert werden. Die Media Assets können einem Stichwortbaum zugeordnet werden was eine thematische Ordnung und ein leichteres Auffinden erlaubt. Die Abbildung 1: Digame Systemübersicht zeigt eine Übersicht der Möglichkeiten. Es ist möglich mehrere Applikationen zu haben, welche unterschiedliche Aufgaben erfüllen.

In der untenstehenden Darstellung sind drei Applikationen aufgeführt:

- Digame zur Verwaltung von Media Assets deren Verwendung in diesem Dokument beschrieben wird.

- Digame Portal dient dem Zentrum elektronische Medien (ZEM) zur Publikation ihrer Media Assets.

- Drittanwendung; Anbindung beliebiger Applikationen (bspw. CMS) über eine Schnittstelle.

All diesen drei Teilen zugrunde liegt der Serverteil welcher die Funktionalität enthält und die Daten zu den Media Assets in einer Datenbank verwaltet. Ein weiterer zentraler Teil, sind die mandantenspezifischen Metadatenschema. Jeder Mandant kann über ein eigenes Metadatenschema verfügen. Mit den Metadaten wird den Media Assets „Leben eingehaucht“. Es können Daten wie Titel, Beschreibung, Ort der Aufnahme, Datum der Aufnahme usw. definiert werden.

<br>

{{ media['systemmap.png'].html() }}
###### Bild 35: Systemübersicht DIGAME.

<br>
***