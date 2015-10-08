---
title: Exigences techniques
slug: exigences-techniques
menu: Exigences techniques
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

## Exigences techniques

***

En utilisant DIGAME, vous pouvez accéder à des services Web basés sur des documents, dont vous pouvez chercher et consulter les données. Ces services Web construit selon une architecture REST utilisent les protocoles de messagerie et de transport HTTPS. Les formats XML ou JSON sont utilisés pour l’échange de messages.

<br>

#### Les protocoles

Les services Web RESTful utilisent le protocole sécurisé HTTPS. Les réponses sont envoyées au format XML ou JSON (dépendant d’une requête http).
<br>

#### Sécurité

La communication entre le serveur et l’application tierce est sécurisée en protocole SSL 128 bit. <br>

#### Autorisation


Un appelant peut s’identifier par authentification simple (le couple nom d’utilisateur/mot de passe se trouve dans l’en-tête HTTP). La partie Accès / utilisateur de la fenêtre Exigences spécialisées décrit de quelle manière et par quels utilisateurs le service peut être contacté.
<br>

#### Gestion des erreurs

Chaque invocation de méthode ne pouvant être gérée par le système génèrera une exception HTTP.<br>

| Action | HttpStatusCode | | Status description | Message content (localized) |
| ------ | ----------- | -- | -- | -- |
| Download / Preview   | InternalServerError | 500 | Handler error | Une erreur interne s’est produite pendant le chargement des données. |
| | | | | |
| All | Unauthorized | 401 | Usertoken expired | Le jeton d’authentification n’est plus valable. |
| All | BadRequest | 400 | Bad Usertoken | Le jeton d’authentification n’est pas valable. |
| All | All others | 404 | Not found | (IIS http error message) |
| | | | | |
| Search / Usertoken | InternalServerError| 500 | Internal error | Une erreur interne s’est produite. |
| Search / Usertoken | BadRequest | 400 | Missing http context | Le serveur ne comprend pas la requête. Il manque un contexte HTTP. |
| | | | | |
| Search | Unauthorized | 401 | Missing usertoken | Le jeton d’authentification n’est pas disponible dans l’en-tête http. |
| Search | LengthRequired | 411 | Missing search query | Le texte de recherche n’est pas valable. |
| Search | BadRequest | 400 | Unknown Organisation | Le nom de l’organisation n’est pas valable. |
| | | | | |
| Usertoken | Forbidden | 403 | Https required | Un chiffrement SSL est nécessaire pour cette requête. |
| Usertoken | Unauthorized | 401 | Action not allowed | L’utilisateur n’est pas autorisé à faire cette requête.  |
| Usertoken | InternalServerError | 500 | User not found | Impossible de trouver l’utilisateur interne. |

#### Communication

Toute communication entre l’utilisateur et le serveur de DIGAME se fait par requête HTTP. Ces messages, appelés aussi Request and Response, transmettent les requêtes et les réponses entre le client (système périphérique) et le serveur (DIGAME). Ces derniers doivent établir une connexion de type TCP/IP pour pouvoir échanger des informations. Les messages sont constitués de deux parties : l’en-tête, qui comprend des informations de commande (p. ex. l’authentification ou le format de réponse requis), et la partie données, qui consiste en un message au format XML/JSON (réponse).<br>

#### Format Request (HTTP)

Les demandes sont envoyées sous forme de requêtes RESTful. Tous les paramètres sont présents, soit dans l’URL, soit dans l’en-tête HTTP. Ceux qui se trouvent dans l’URL doivent en respecter les conventions. Les caractères spéciaux (p. ex. pour une recherche) ne sont pas autorisés.<br>

| Beispiel | |
| ------ | -- |
| Incorrect | Soldat avec un chien |
| Correct | Soldat%20avec%20un%20chien |


#### Formats Respondse (XML)

Exemple de réponse à une demande de jeton d’authentification.<br>


    <UserToken xmlns:i="http://www.w3.org/2001/XMLSchema-instance">
        <Token>PD94bWwgdmVyc2lvbj0iMS4wIj ... l6YWJsZT4=</Token>
    </UserToken>

Exemple de réponse à une demande de recherche de ressource (où une seule ressource a été trouvée).<br>

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

#### Formats Respondse (JSON)

Exemple de réponse à une demande de jeton d’authentification.
<br>


    {
    "Token":"PD94bWwgdmVyc2lvbj ... Gl6YWJsZT4="
    }

Exemple de réponse à une demande de recherche de ressource (où une seule ressource a été trouvée).<br>

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
