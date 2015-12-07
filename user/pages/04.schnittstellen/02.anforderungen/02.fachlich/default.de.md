---
title: Fachliche Anforderungen
menu: fachlich
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

## Fachliche Anforderungen

***

#### URLs – Aufrufe der Webservices

| Link | Beispiel | 
| ------ | -- | 
| Usertoken | Gültiges Usertoken anzufragen | 
| Search | Suche nach Media Assets |
| Search All | Alle Assets anfragen |

#### Testsystem
|  | | 
| ------ | -- | 
| URL: | https://www.digame.mediathek-admin.com/api | 
| User (Basic Authenticaiton): | cmsuser |
| Passwort: |  |

#### Integrationssystem
|  | | 
| ------ | -- | 
| URL: | https://www.test.digame.mediathek-admin.ch/api | 
| User (Basic Authenticaiton): | cmsuser |
| Passwort: |  |

#### Produktivsystem (Livesystem)
|  | | 
| ------ | -- | 
| URL: | https://www.digame.mediathek-admin.ch/api | 
| User (Basic Authenticaiton): | cmsuser |
| Passwort: | [zu definieren] |


#### Zugriff / Benutzer und organisatorische Trennung der Services
Die Error! Reference source not found. zeigt wie auf einen Service zugegriffen werden kann und welche technischen Benutzer dabei beteiligt sind. Weiter ist aus der Abbildung die organisatorische Trennung sichtbar. Die URL, um einen Usertoken zu erstellen, ist über den Benutzer an den entsprechenden Mandanten gebunden.

{{ media['schematischeraufbau.png'].html() }}
###### Bild 36: Schematischer Aufbau / beteiligte.

#### Auflistung und Beschreibung der Webservices-Methoden
Die Abbildung 37: "Ablauf eines Aufrufes" zeigt den Ablauf eines Zugriffs auf die Digame Webserviceschnittstelle. Das System muss sich mit den Credentials bei der Schnittstelle authentifizieren. Ist die Authentifizierung erfolgreich so wird ein Usertoken erstellt. Dieser Usertoken ist zeitlich begrenzt (momentan 30min) und wird an den Aufrufer zurückgeliefert. Ist das System authentifiziert kann eine Suchanfrage gestartet werden. Als Ergebnis werden die gefundenen Media Assets gemäss 3.7 Response Formate zurückgeliefert. Über die im Resultat enthaltenen URL’s können nach Bedarf die Mediadaten für Vorschaubild und die effektive Mediadatei vom Server geladen werden und im aufrufenden System angezeigt werden.

{{ media['ablaufaufruf.png'].html() }}
###### Bild 37: Ablauf eines Aufrufes

#### Suche: Web-Methode um ein gültiges Usertoken zu kriegen (Authentication)
{{ media['tabelle1.png'].html() }}

#### Suche: Web-Methode zur Suche nach Media Assets
{{ media['tabelle2.png'].html() }}

#### Suche: Web-Methode zur Suche nach Media Assets (Alle)
{{ media['tabelle3.png'].html() }}

####Herunterladen: Web-Methode um ein bestimmtes Media Asset zu lesen
In der Rückgabe einer Suche wird jeweils die URL für das Vorschaubild und die effektive Mediadatei mitgeliefert. Durch den Aufruf der entsprechenden URL kann das Vorschaubild oder die Mediadatei vom Server geladen werden. Diese Lösung ist aus zwei Gründen implementiert worden. Wenn die gesamten Daten einer Mediadatei in der Rückgabe der Suche mitgeliefert würden, hätte dies direkte Auswirkungen auf die Geschwindigkeit der Suche. Der Benutzer führt eine Suche aus, um später eine Auswahl zu treffen, somit sind die Mediadaten erst in einem zweiten Schritt von Interesse.

####Sichtbarkeit der Assets für die Umsysteme (Organisation ZEM)
Die Sichtbarkeit der Assets wird über sogenannte Container gesteuert. Befindet sich ein Asset in einem entsprechenden Container, so ist dieses über die Schnittstelle verfügbar. In Abbildung 4: Sichtbarkeit der Assets im VBS CMS ein Beispiel welches dies verdeutlicht. Über die Schnittstelle sind nur die Assets verfügbar welche sich in den berechtigten Containern befinden. In unserem Beispiel die beiden Assets welche in der Ansicht CMS VBS dargestellt werden.<br>
Die Assets müssen sich in den folgenden Containern befinden um für das Umsystem sichtbar / verfügbar zu sein:
 - ‚Internet‘ Container
 - ‚{UmsystemContainer}‘ Container (z.B.: ‚CMS-VBS‘ für VBS CMS)
 
{{ media['3sichtbarkeitvbscms.png'].html() }}
###### Bild 38: Sichtbarkeit der Assets im VBS CMS




<br>
***




