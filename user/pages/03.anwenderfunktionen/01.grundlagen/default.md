---
title: Grundlagen DIGAME
menu: Grundlagen&nbsp;DIGAME
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

## Grundaufbau DIGAME
***
DIGAME kann in 5 Grundbereiche aufgeteilt werden:

- Im Menü-Bereich (2) sind alle Menus aufgeführt über welche ein Benutzer verfügt. Für die tägliche Arbeit reicht das Menü Katalog. In diesem befindet sich der Anwender nachdem er sich angemeldet hat. Das Menü Passwort ändern kann vom Anwender zum Ändern seines Passworts verwendet werden. Der Benutzer wird jedoch nicht automatisch dazu aufgefordert. Die restlichen Menüs bieten administrative Funktionalitäten an. Im Arbeits-Bereich (3) kann mit einer einfachen Suche nach bestimmten Media Assets gesucht werden. Über die Erweiterte Suche können die Suchparameter verfeinert werden. Über den Knopf Asset erzeugen kann ein neues Media Asset erstellt werden.

- Im Filter-Bereich (4) werden Media Assets nach bestimmten Kriterien aufgelistet. Die gefundenen Assets können auf Datei Typ und Rechte Publikation eingeschränkt werden.

- Im Anzeige-Bereich (5) werden alle über (3 oder 4) gefundenen Media Assets angezeigt.

- Im Filter-Bereich (4) werden Media Assets nach bestimmten Kriterien aufgelistet. Die gefundenen Assets können auf Datei Typ und Rechte Publikation eingeschränkt werden.

<br>

{{ media['overview.png'].html() }}
###### Bild 2: Programmoberfläche von DIGAME.

<br>

***

## An- und Abmelden

Der Benutzer muss sich bei DIGAME an- und abmelden. Der Benutzer gibt dazu seinen Benutzernamen (1) und sein Passwort (2) ein. Bevor er den Knopf Anmelden (5) betätigt muss er in (3) seine Organisation wählen. Falls der Benutzer eine falsche Organisation auswählt kann er sich nicht anmelden. Über (4) kann die gewünschte Applikationssprache gewählt werden. Momentan sind die Sprachen Englisch und Deutsch möglich.

<br>

{{ media['login.png'].html() }}
###### Bild 3: Das Anmeldefenster beim Programmstart.

<br>

Die Benutzeridentifikation wird rechts oben in der Menüleiste angezeigt (Abbildung 2: Grundaufbau). Durch betätigen des Knopfs Abmelden wird der Benutzer am System abgemeldet.

***

## Passwort ändern

Der Benutzer kann jederzeit sein Passwort ändern. Dazu muss er im Menü-Bereich (2) aus Abbildung 2: Grundaufbau das Menü Passwort ändern wählen.
<br>
     
{{ media['password.png'].html() }}
###### Bild 4: Die Einstellung zum Ändern des eigenen Passworts.

<br>
In Feld (1) wird der Benutzername des angemeldeten Benutzers dargestellt. Dieser kann vom Benutzer nicht geändert werden.
Im Feld (2) muss der Benutzer das aktuelle Passwort eingeben.
Im Feld (3) muss der Benutzer das neue Passwort eingeben.
Im Feld (4) muss der Benutzer das neue Passwort zur Bestätigung ein zweites Mal eingeben.

Sind alle Eingaben korrekt erscheint nach dem Betätigen von (5) Passwort ändern die Meldung, dass das Passwort geändert wurde.
Der Prozess Passwort ändern kann abgebrochen werden, in dem der Benutzer im Menü-Bereich (2) aus Abbildung 2: Grundaufbau in das Hauptmenü Katalog wechselt.

<br>
***