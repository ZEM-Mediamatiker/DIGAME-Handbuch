---
title: Technische Anforderungen
menu: technisch
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

## Technische Anforderungen

***

Die Anwendung Digame stellt dokumentenbasierte Web Services zur Verfügung, über welche Daten gesucht und abgefragt werden können. Diese REST Web Services werden mit HTTPS als Nachrichtenprotokoll und Transportprotokoll realisiert. Für den Austausch der Nachrichten wird der XML oder JSON-Standard als Basis von REST verwendet.


<br>

#### Protokolle

Die Webservices werden als REST Services über HTTPS realisiert. Die Antworten werden als XML- oder JSON Daten (abhängig vom Http Request) zurückgegeben. 
<br>

#### Sicherheit

Die Kommunikation zwischen dem Server und der Drittanwendung wird mit SSL 128 Bit verschlüsselt. <br>

#### Berechtigung

Die Authentifizierung der Aufrufer erfolgt mit Basic Authentication (Paar Benutzername/Passwort steht in Http Header). Im Abschnitt Error! Reference source not found. Error! Reference source not found. ist beschrieben wie und mit welchen Benutzern der Service angesprochen werden kann.<br>

#### Fehlerbehandlung

Jeder Methodenaufruf, der vom System nicht behandelt werden kann, wird mit einer HTTP Exception quittiert.<br>

| Action | HttpStatusCode | | Status description | Message content (localized) |
| ------ | ----------- | -- | -- | -- |
| Download / Preview   | InternalServerError | 500 | Handler error | Während des Ladens der Datei ist ein interner Fehler aufgetreten. |
| | | | | |
| All | Unauthorized | 401 | Usertoken expired | Usertoken nicht mehr gültig |
| All | BadRequest | 400 | Bad Usertoken | Usertoken ist ungültig |
| All | All others | 404 | Not found | (IIS http error message) |
| | | | | |
| Search / Usertoken | InternalServerError| 500 | Internal error | Ein interner Fehler ist aufgetreten. |
| Search / Usertoken | BadRequest | 400 | Missing http context | Der Server kann den Request nicht verstehen. Der HttpContext fehlt. |
| | | | | |
| Search | Unauthorized | 401 | Missing usertoken | Usertoken ist in HttpHeader nicht verfügbar |
| Search | LengthRequired | 411 | Missing search query | Kein gültiger Suchtext vorhanden |
| | | | | |
| Usertoken | Forbidden | 403 | Https required | SSL ist für dieses Query nötig |
| Usertoken | Unauthorized | 401 | Action not allowed | Dieses Query ist für diesen Benutzer nicht erlaubt. |
| Usertoken | InternalServerError | 500 | User not found | Internal Benutzer kann nicht gefunden werden.|

#### Kommunikation

Die Kommunikation zwischen dem Digame-Server und den Benutzern erfolgt durch HTTP Anfragen. Diese Nachrichten übertragen die Anfragen und Antworten zwischen Client (Umsystem) und Server (Digame). Client und Server bauen zum Austausch der Nachrichten eine TCP/IP-Verbindung auf. Die auch Request und Response genannten Nachrichten bestehen im Wesentlichen aus zwei Teilen: Header und Daten. Der Header enthält Steuerinformationen wie zum Beispiel die Authentifizierung oder den gewünschten Response Format. Der Datenabschnitt der Nachricht selbst besteht aus einer XML/JSON-Nachricht (Response).<br>

#### Request Format (HTTP)

Die Anfragen sind als RESTful Request ausgeführt. Alle Parameter stehen entweder in der URL oder im HTTP Header.
Alle Parameter, die in der URL stehen, müssen den Konventionen einer URL entsprechen. Spezielle Zeichen (z.B. für eine Suche) sind nicht erlaubt.<br>

| Beispiel | | 
| ------ | -- | 
| falsch | Soldat mit Hund | 
| richtig | Soldat%20mit%20Hund |


#### Respondse Formate (XML)

Beispiel einer Antwort bei einer ‚Usertoken‘ Abfrage (Authentication)<br>


    <UserToken xmlns:i="http://www.w3.org/2001/XMLSchema-instance">
        <Token>PD94bWwgdmVyc2lvbj0iMS4wIj ... l6YWJsZT4=</Token>
    </UserToken>
    
Beispiel einer Antwort bei einer ‚Asset Suche‘ Abfrage (1 Asset wird zurückgegeben)<br>

    <ArrayOfAssetSearchSummary xmlns:i="http://www.w3.org/2001/XMLSchema-instance">
        <AssetSearchSummary>
            <AssetId>17</AssetId>
            <AssetType>PIC</AssetType>
            <Description>Beschreibung</Description>
            <DownloadUrl>
                http://localhost:57824/AssetDownload.ashx?assetId=17&amp;highRes=true&amp;
                usertoken=PD94bW ... hbGl6YWJsZT4=
            </DownloadUrl>
            <PreviewUrl>
                http://localhost:57824/AssetPreview.ashx?assetId=17&amp;thumbnail=false
            </PreviewUrl>
            <Title>Title</Title>
        </AssetSearchSummary>
    </ArrayOfAssetSearchSummary>
    
#### Respondse Formate (JSON)

Beispiel einer Antwort bei einer ‚Usertoken‘ Abfrage (Authentication)
<br>


    { 
    "Token":"PD94bWwgdmVyc2lvbj ... Gl6YWJsZT4=" 
    }
    
Beispiel einer Antwort bei einer ‚Asset Suche‘ Abfrage (1 Asset wird zurückgegeben)<br>

    [ 
        { 
            "AssetId": 17, 
            "Title": "", 
            "Description": 
            "Beschreibung", 
            "AssetType": "PIC", 
            "PreviewUrl": "http://localhost:57824/AssetPreview.ashx?assetId=17&thumbnail=false",
            "DownloadUrl": "http://localhost:57824/AssetDownload.ashx?assetId=17&highRes=false
            &usertoken=PD94bWwgdmVyc2 ... WJsZT4=" 
        } 
    ]
    
<br>
***




