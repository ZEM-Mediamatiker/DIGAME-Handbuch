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

Es gibt dazu 4 Bereiche welche eine Einschränkung erlauben.

***

## Stichworte

Ordner (1) bildet den Stichwortbaum ab, dieser wird in 3.7.3 Stichworte beschrieben. Wählt der Benutzer einen bestimmten Ordner werden genau die Assets im Anzeige-Bereich (2) angezeigt welchen dieses Stichwort zugeordnet wurde.

<br>
{{ media['stichworte.png'].html() }}
###### Bild 10: Stichwortbaum.
<br>

***

## Benutzerdefinierte Filter

Auf der Hauptebene Filter sind 2 Funktionen (1) vorhanden. Das erste Icon dient dazu einen neuen Filter zu erstellen. Das zweite Icon dient dazu die Filteranzeige zu aktualisieren, damit nach der Erstellung eines neuen Filters dieser in der Liste angezeigt wird.

<br>
{{ media['eigenefilter.png'].html() }}
###### Bild 11: Funktionen Filter.
<br>

Ein benutzerdefinierter Filter besteht aus einer Hauptbedingung (1) hier kann definiert werden ob „alle“ oder „mind. Eine“ Bedingung (2) erfüllt werden müssen damit ein Media Asset angezeigt wird.

<br>
{{ media['filterbearbeiten.png'].html() }}
###### Bild 12: Filterdefinition.
<br>

Der Aufbau einer Bedingung sieht wie folgt aus (siehe Abbildung 13: Filter erstellen).

<br>

| Suchverhalten (4) | Text in Metadaten | Suchtext (5) |
| ----- | ----- | ----- |
| beinhaltet | Wenn Hans nach Hause geht | Hans |
| beginnt mit | Wenn Hans nach Hause geht | Wenn Hans |
| gleich | Wenn Hans nach Hause geht | Wenn Hans nach Hause geht |

<br>

Mit (5) wird der gewünschte Suchtext definiert.

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

- Assets in Bearbeitung: Enthält alle Media Assets die von einem Benutzer ausgecheckt sind und von diesem bearbeitet werden.


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

- Ergebnisse aus dem Stichwortbaum

<br>
***