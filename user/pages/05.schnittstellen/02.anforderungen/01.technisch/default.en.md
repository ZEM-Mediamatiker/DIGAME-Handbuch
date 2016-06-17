---
title: Technical requirements
slug: technical-requirements
menu: Technical requirements
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

## Technical requirements

***

The DIGAME application provides document-based web services, through which data can be searched for. These REST web services are realised with HTTPS as news and transport protocols. For the exchange of news the XML or the JSON standard is used as basis for REST.

<br>

#### Protocols

The web services are realised as REST services via HTTPS. Answers are returned as XML or JSON data (depending on HTTP request).
<br>

#### Security

Communication between the server and third-party applications is encrypted with SSL 128 bit encryption.

#### Rights


Authentication of callers is carried out with basic authentication (user name pair / password in HTTP header). In section on ‘Error! Reference source not found.’ it is described how and with which users the service can be addressed.
<br>

#### Error treatment

Every method call that cannot be managed by the system is answered by an HTTP exception message.<br>

| Action | HttpStatusCode | | Status description | Message content (localized) |
| ------ | ----------- | -- | -- | -- |
| Download / Preview   | InternalServerError | 500 | Handler error | An internal error occurred while loading the file. |
| | | | | |
| All | Unauthorized | 401 | Usertoken expired | User token no longer valid |
| All | BadRequest | 400 | Bad Usertoken | User token invalid |
| All | All others | 404 | Not found | (IIS http error message) |
| | | | | |
| Search / Usertoken | InternalServerError| 500 | Internal error | An internal error has occurred. |
| Search / Usertoken | BadRequest | 400 | Missing http context | Server cannot understand request. HTTP context is missing. |
| | | | | |
| Search | Unauthorized | 401 | Missing usertoken | User token not available in HTTP header |
| Search | LengthRequired | 411 | Missing search query | No valid search text |
| Search | BadRequest | 400 | Unknown Organisation | Name of organisation invalid |
| | | | | |
| Usertoken | Forbidden | 403 | Https required | SSL required for this query |
| Usertoken | Unauthorized | 401 | Action not allowed | This query not permissible for this user.  |
| Usertoken | InternalServerError | 500 | User not found | Internal user cannot be found. |

#### Communication

The DIGAME server and the user communicate through HTTP queries. These messages transfer the queries and answers between client (peripheral system) and server (DIGAME). Client and server establish a TCP/IP connection to exchange information. The messages, also known as ‘request’ and ‘response’, consist essentially of two parts: header and data. The header contains control information such as the desired response format. The data section of the message itself consists of an XML/JSON message (response).<br>

#### Request format (HTTP)

The requests are carried out as ‘RESTful request’. All parameters are enclosed in either the URL or in the HTTP header. All parameters written in the URL must comply with URL conventions. Special characters (e.g. for a search) are not permissible.<br>

| example | |
| ------ | -- |
| wrong | soldier with dog |
| Correct | soldier%20with%20dog |


#### Request format (XML)

Example of a response to a ‘user token’ request (authentication)<br>


    <UserToken xmlns:i="http://www.w3.org/2001/XMLSchema-instance">
        <Token>PD94bWwgdmVyc2lvbj0iMS4wIj ... l6YWJsZT4=</Token>
    </UserToken>

Example of a response to an ‚asset search‘ request (1 asset is returned)<br>

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

#### Request format (JSON)

Example of a response to a ‘user token’- request (authentication)
<br>


    {
    "Token":"PD94bWwgdmVyc2lvbj ... Gl6YWJsZT4="
    }

Example of a response to an ‚asset search‘ request (1 asset is returned)<br>

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
