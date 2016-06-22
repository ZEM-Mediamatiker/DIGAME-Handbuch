---
title: Stichworte
metadata:
    description: 'Die Webbasierte Anleitung für DIGAME vom Zentrum elektronische Medien ZEM.'
    keywords: 'DIGAME,ZEM,Zentrum elektronische Medien,Mediathek Admin,Mediathek,Bilddatenbank,Bildverwaltung,Bundesverwaltung,Eidgenossenschaft,Schweizerische Eidgenossenschaft,VBS,Bundesamt für Verteidigung, Bevölkerungsschutz und Sport'
    author: 'Stefan Eckstein | Zentrum elektronische Medien (ZEM)'
    robots: 'index, follow'
menu: Stichworte
process:
    markdown: true
    twig: true
visible: true
taxonomy:
    tag:
        - digame
        - Anleitung
        - ZEM
    category:
        - backendanleitung
---

## Stichworte
***
Einem Media Asset können Stichworte innerhalb des Stichwortbaumes (1) zugewiesen werden. Die Zuweisung wird mit einem Häkchen angezeigt. Ein weisses Häkchen zeigt, dass das Media Asset genau diesem Stichwort zugeordnet wurde. Ein graues Häkchen zeigt, dass das Media Asset in diesem Zweig des Baumes einem Stichwort zugeordnet wurde.
Mit (2) kann eine Zuweisung gespeichert werden. Mit (3) gehen die nicht gespeicherten Zuweisungen verloren.

<br>
{{ media['stichworte.png'].html() }}
###### Bild 28: Funktionen Stichworte
<br>

>>> Hinweis. Die folgenden Funktionen erfordern ein Benutzerkonto mit der Rolle Administrator.

##Neues Stichwort hinzufügen
***

Ein neues Stichwort kann über das Hinzufügen-Symbol (1) bei dem übergeordneten Element hinzugefügt werden. Es muss ein Titel für jede Sprache eingegeben werden, damit die Assets richtig indexiert werden. Das neue Stichwort erscheint zuunterst im Stichwortbaum und kann einem Asset auf gewohnte Art zugewiesen werden.
<br>
{{ media['stichwort-hinzufuegen.jpg'].html() }}
###### Stichwort hinzufügen
<br>



##Stichwort bearbeiten
***

Über den Bearbeiten-Button (1) kann ein Stichwort bearbeitet werden. Hierbei kann der Name in jeder Sprache angepasst werden. Die Änderungen werden über den Speichern-Button (2) übernommen. Wichtig zu beachten hierbei ist, dass die Änderungen auch für Assets übernommen werden, denen das entsprechende Stichwort bereits zugewiesen wurde.
<br>
{{ media['stichwort-bearbeiten.jpg'].html() }}
###### Stichwort bearbeiten
<br>



##Stichwort löschen
***

Soll ein Stichwort gelöscht werden, kann das über den Löschen-Button (1) getätigt werden. Es erscheint ein Warndialog, in dem die Lösung definitiv bestätigt (2) werden muss. Gelöschte Stichworte können nicht wiederhergestellt werden und Assets verlieren ihre Zuweisung zu diesem Stichwort.
<br>
{{ media['stichwort-loeschen.jpg'].html() }}
###### Stichwort löschen
<br>
***



