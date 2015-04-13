---
title: Filtern
menu: Filtern
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

## Funktionen Filterbereich

***

Der Bereich Filter dient dazu die Anzahl Media Assets anhand bestimmter Merkmale zu reduzieren.

<br>
{{ media['overview.png'].html() }}
###### Bild 9: Übersicht Filterbereich.
<br>

Es gibt dazu 4 Bereiche welche eine Einschränkung erlauben.- Ordner (1) bezieht sich auf die Stichworte welche einem Media Asset zugewiesen wurden.- benutzerdefinierte Filter (2) bezieht sich auf die Metadaten der Media Assets- vordefinierte Filter (3)- Dateityp und Publikation (4)

***

## Stichworte

Ordner (1) bildet den Stichwortbaum ab, dieser wird in 3.7.3 Stichworte beschrieben. Wählt der Benutzer einen bestimmten Ordner werden genau die Assets im Anzeige-Bereich (2) angezeigt welchen dieses Stichwort zugeordnet wurde.

<br>
{{ media['stichworte.png'].html() }}
###### Bild 10: Stichwortbaum.
<br>

***

## Benutzerdefinierte Filter

Auf der Hauptebene Filter sind 2 Funktionen (1) vorhanden. Das erste Icon dient dazu einen neuen Filter zu erstellen. Das zweite Icon dient dazu die Filteranzeige zu aktualisieren, damit nach der Erstellung eines neuen Filters dieser in der Liste angezeigt wird.Jeder einzelne benutzerdefinierte Filter verfügt über 2 Funktionen (2). Mit dem ersten Icon wird das Bearbeitungsfenster geöffnet damit können die Bedingungen des Filters angepasst werden. Mit dem zweiten Icon kann ein benutzerdefinierter Filter gelöscht werden. Ein gelöschter benutzerdefinierter Filter kann nicht wiederhergestellt werden.

<br>
{{ media['eigenefilter.png'].html() }}
###### Bild 11: Funktionen Filter.
<br>

Ein benutzerdefinierter Filter besteht aus einer Hauptbedingung (1) hier kann definiert werden ob „alle“ oder „mind. Eine“ Bedingung (2) erfüllt werden müssen damit ein Media Asset angezeigt wird.

<br>
{{ media['filterbearbeiten.png'].html() }}
###### Bild 12: Filterdefinition.
<br>

Der Aufbau einer Bedingung sieht wie folgt aus (siehe Abbildung 13: Filter erstellen).Unter (2) wird das jeweilige Metadatenfeld definiert welches bei der Suche berücksichtigt werden soll. In diesem Beispiel die Beschreibung.(3) ist ein optionales Feld und erscheint nur wenn es sich um ein Metadatenfeld handelt welches in unterschiedlichen Sprachen vorhanden ist.Mit (4) kann definiert werden wie der Suchtext berücksichtigt werden soll.Nachfolgend sind die Möglichkeiten aufgeführt welche ein entsprechendes Media Asset Anzeigen würden.

<br>

| Suchverhalten (4) | Text in Metadaten | Suchtext (5) |
| ----- | ----- | ----- |
| beinhaltet | Wenn Hans nach Hause geht | Hans |
| beginnt mit | Wenn Hans nach Hause geht | Wenn Hans |
| gleich | Wenn Hans nach Hause geht | Wenn Hans nach Hause geht |

<br>

Mit (5) wird der gewünschte Suchtext definiert.Mit (6) kann eine weitere Bedingung hinzugefügt werden.Mit (7) kann eine definierte Bedingung gelöscht werden. Dazu müssen mindestens 2 Bedingungen vorhanden sein.Unter (8) kann der Name definiert werden welcher in der Filterübersicht angezeigt wird.Wird (9) betätigt, so wird der benutzerdefinierte Filter gespeichert.Wird (10) betätigt gehen die Änderungen verloren oder der neue benutzerdefinierte Filter wird nicht gespeichert.

<br>
{{ media['neuerfilter.png'].html() }}
###### Bild 13: Filter erstellen.
<br>

Wählt man mit der Maus nun einen benutzerdefinierten Filter aus, in unserem Beispiel den Filter mit dem Namen „Internet“, werden im Bereich (5) aus Abbildung 2: Grundaufbau alle Media Assets angezeigt welche diesem Filter entsprechen.

<br>
{{ media['filteruebersicht.png'].html() }}
###### Bild 14: Übersicht Filter.
<br>

***

## Vordefinierte Filter

- Assets in Bearbeitung: Enthält alle Media Assets die von einem Benutzer ausgecheckt sind und von diesem bearbeitet werden.- Assets ohne Stichworte: Enthält alle Media Assets welche über keine Stichworte verfügen und daher auch im Stichwortbaum nicht angezeigt werden.- Papierkorb: Enthält alle Media Assets welche gelöscht werden können.


***

## Dateityp und Rechte Publikation

Unter Rechte Publikation (2) kann man sich eine Ablage vorstellen. Die Rechte Publikation wird verwendet um die Sichtbarkeit der Media Assets zu steuern. Ein Media Asset welches die Rechte Publikation Internet hat ist beispielsweise auch für eine angeschlossene Applikation (bspw. www.mediathek.admin.ch) sichtbar. Ein Media Asset welches die Rechte Publikation Zem hat ist nur innerhalb von Digame sichtbar.

Unter Datei Typen (3) kann eine Suche auf den Dateityp der effektiven Mediadateien eingeschränkt werden. Es werden dann je nach Auswahl nur noch Bilder oder Filme angezeigt.

Bei einer Kombination aus (2) und (3) kann bspw. eine Suche definiert werden, welche alle Bilder (3) anzeigt welche über die Rechte Internet (2) verfügen.

<br>
{{ media['rechte.png'].html() }}
###### Bild 15: Rechte und Dateitypen.
<br>

Die Einstellungen die der Benutzer in den Bereichen (2) und (3) vornimmt haben Einfluss auf folgende Suchergebnisse.

- Ergebnisse aus dem Stichwortbaum- Ergebnisse der benutzerdefinierten Filter- Ergebnisse des vordefinierten Filters- Ergebnisse der einfachen Suche (3.4.1)- Ergebnisse der erweiterten Suche (3.4.2)

<br>
***