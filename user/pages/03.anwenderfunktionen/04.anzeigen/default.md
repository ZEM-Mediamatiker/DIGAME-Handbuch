---
title: Anzeigen
menu: Anzeigen
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

## Funktionen im Anzeige-Bereich
***
Der Anzeige-Bereich ist der Hauptbereich in welchem alle Media Assets angezeigt werden welche über die vielfältigen Suchmöglichkeiten, beschrieben in den vorhergehenden Kapiteln, gefunden wurden. Die Auflistung der Media Assets beginnt von oben links nach unten rechts. Dabei befindet sich oben links jeweils das neueste und unten rechts das älteste Media Asset. Unten rechts wird jeweils die Anzahl gefundener Objekte angezeigt. Am unteren Ende mittig im Anzeige-Bereich findet der Benutzer einen Regler mit welchem die Grösse der Media Assets im Anzeige-Bereich eingestellt werden kann.

<br>
{{ media['anzeigen.png'].html() }}
###### Bild 16: Übersicht Anzeige-Bereich.
<br>

Ein einzelnes Media Asset verfügt über Informationen in Form von Icons oder Texten. <br>

<br>
{{ media['grossansicht.png'].html() }}
###### Bild 17: Informationsübersicht Media Asset.
<br>

Durch Doppelklick auf ein Media Asset wird eine Vollbildansicht geöffnet. Dies funktioniert nur für Bilder, Videos können nicht in Vollbildansicht betrachtet werden. Unter (1) wird die Asset ID angezeigt. Mit (2) oder mit dem Button „Schliessen“ aus (4) kann die Vollbildansicht beendet werden. In (3) wird jeweils das Originalbild angezeigt. Mit den Pfeilen aus (4) kann jeweils zum vorherigen oder zum nächsten Media Asset gewechselt werden.

<br>
{{ media['vollbild.png'].html() }}
###### Bild 18: Vollbild Ansicht.
<br>

<br>
***