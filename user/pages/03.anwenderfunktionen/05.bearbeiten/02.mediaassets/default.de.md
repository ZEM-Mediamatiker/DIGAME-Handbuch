---
title: Media Assets
menu: Media&nbsp;Assets
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


## Bearbeiten eines einzelnen Media Assets
***
Der Bearbeiten-Bereich (1) kann mit Hilfe der Maus auf- und zugeklappt werden. Die Grobinformationen zur Datei werden in (2) dargestellt dazu gehören:
- AssetID
- Dateiname
- Grösse der Datei in MB
- Ist das Media Asset in Bearbeitung (Checked out)
- Sprache des Assets (sofern definiert)
- Titel

<br>
{{ media['single.png'].html() }}
###### Bild 20: Funktionen Bearbeiten.
<br>

Werden mehrere Media Assets selektiert, sieht die Anzeige im Bearbeiten-Bereich folgendermassen aus.

<br>
{{ media['multi.png'].html() }}
###### Bild 21: Mehrere Assets selektiert.
<br>

Mit den Icons (3) werden Funktionen auf den selektierten Media Assets ausgeführt. Die Funktionen werden nachfolgend beschrieben.
Hinweis:
Die in Abbildung 22: Icons Bearbeiten aufgeführten Funktionen werden in der Applikation nie alle zusammen verfügbar sein. Es werden immer nur die Funktionen zur Verfügung stehen, welche mit dem Status des Media Assets korrespondieren. Fährt der Benutzer mit der Maus auf das jeweilige Icon wird eine Beschreibung angezeigt.

<br>
{{ media['icons.png'].html() }}
###### Bild 22: Icons bearbeiten.
<br>

***

### Zugriffsordner / Rechte Publikation ändern (1)

Ermöglicht es dem Benutzer ein Media Asset in eine andere „Ablage“ zu verschieben. Damit die Änderung durchgeführt werden kann, muss das Media Asset eingecheckt sein (siehe 3.7.1.5 Media Asset check in (5)). Nach dem der Benutzer mit der Maus auf das Icon geklickt hat erscheint Abbildung 23: Zugriffsstufe ändern. Mit der Änderung ändert sich auch die Sichtbarkeit eines Media Assets (siehe auch 3.5.4 Dateityp und Rechte Publikation).

<br>
{{ media['zugriffsstufe.png'].html() }}
###### Bild 23: Zugriffsstufe ändern
<br>

***

### Inhalt ersetzen (2)

Mit dieser Funktion kann die Mediadatei ersetzt werden, also beispielsweis das effektive Bild. Die Funktion wird verwendet wenn die Mediadatei nachbearbeitet werden musste oder wenn die Mediadatei bei der Erstellung des Media Assets noch nicht verfügbar war.
<br>
Beispiele:
Mediadatei nicht verfügbar:
Der Benutzer erstellt das Media Asset mit einer Platzhalterdatei. Der Benutzer definiert die Metadaten und alle weiteren Daten über die er bereits verfügt. Sobald er die Mediadatei erhält kann er die Platzhalterdatei durch die effektive Datei ersetzen.
<br>
Mediadatei wurde nachbearbeitet:
Ein Bild muss mit dem Photoshop nachbearbeitet werden. Nach der Nachbearbeitung kann die aktuelle Mediadatei durch die bearbeitete Mediadatei ersetzt werden.

***

### Media Asset herunterladen (3)

Damit kann ein Media Asset mitsamt den Metadaten auf ein lokales Speichermedium kopiert werden. Die Mediadatei kann dann beispielsweise in Photoshop bearbeitet werden. Die Metadaten werden nur bei Bildern hinzugefügt bei Videos funktioniert dies aus technischen Gründen nicht. Die Metadaten werden, sofern von der jeweiligen Applikation erkannt, auch in anderen dritt Applikationen angezeigt.

***

### Media Asset check out (4)

Um ein Media Asset bearbeiten zu können muss dieses „ausgecheckt“ werden. Dies bedeutet so viel wie den Schreibschutz entfernen. Beim jeweiligen Media Asset wird danach der Name des Bearbeiters angezeigt. Der Benutzer kann nun Änderungen an dem Media Asset vornehmen. Das Media Asset kann jeweils nur von dem Benutzer bearbeitet werden von welchem es ausgecheckt wurde. Die Änderungen werden nur temporär übernommen und können mit (6) wieder rückgängig gemacht werden.

***

### Media Asset check in (5)

Hat der Benutzer alle seine Änderungen gemacht und geprüft, kann er das Media Asset „einchecken“. Alle Änderungen werden definitiv übernommen und der Schreibschutz wird wieder gesetzt.

***

### Media Asset undo check out (6)

Der Benutzer möchte alle seine Änderungen nicht übernehmen, jedoch weiss er nicht mehr genau was er geändert hat oder es sind so viele Änderungen, dass es zu lange dauert diese von Hand rückgängig zu machen. Der Benutzer kann „undo check out“ ausführen, damit wird der Stand des Media Assets auf den Stand vor dem check out des Benutzers zurückgesetzt. Alle Änderungen die der Benutzer gemacht hat gehen verloren.

***

### Media Asset exportieren

Der Benutzer kann eines oder mehrere selektierte Media Assets in ein Worddokument exportieren. Dabei werden das Vorschaubild sowie die erfassten Metadaten im Dokument aufgeführt.



<br>
{{ media['functions.png'].html() }}
###### Bild 24: Beispiel eines exportierten Assets
<br>

***

### Medien Asset löschen (8)

Der Benutzer kann ein Media Asset löschen. Das Media Asset wird jedoch nicht definitiv aus dem System entfernt sondern nur in den Papierkorb verschoben und mit einer entsprechenden Anzeige versehen Abbildung 25: Asset im Papierkorb. Um ein Media Asset im Papierkorb definitiv löschen zu können muss der Benutzer über die entsprechenden Zugriffsrechte verfügen. Diese Rechte haben pro Organisation meistens nur ein paar wenige Benutzer meistens sind dies die Administratoren oder die Benutzer die für das System verantwortlich sind.

<br>
{{ media['papierkorb.png'].html() }}
###### Bild 25: Asset im Papierkorb.
<br>

<br>
***
