---
title: media asset
slug: media-asset
menu: media asset
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


## Editing a single media asset
***
The editing window (1) can be opened or closed with a click of the mouse. The rough file information is listed below (2): it includes:
- Asset ID
- File name
- File size in MB
- Information whether the media asset is being processed (checked out)
- Language of assets (if defined)
- Title


<br>
{{ media['single.png'].html() }}
###### Fig. 20: ‘Editing functions’.
<br>

If several media assets have been selected, the display is as follows in the editing window:

<br>
{{ media['multi.png'].html() }}
###### Fig. 21: ‘Selecting several assets’
<br>

The icons (3) serve to carry out functions on the selected media assets. These functions are described below. Note: the functions presented here are never all available at the same time in the application. Always only those functions are available that are compatible with the status of the media asset at hand. If the user places the curser on the respective icon, its description is shown.

<br>
{{ media['icons.png'].html() }}
###### Fig. 22: Editing icons’
<br>

***

### Access folder / change publication rights

Allows the user to transfer a media asset to another ‘storage site’. To enable the change, the media asset must be checked in. After the user has clicked on the icon with the mouse, an information window appears where the access level can be changed. The change also alters the visibility of the media asset (cf. ‘File type and publication rights’).

<br>
{{ media['zugriffsstufe.png'].html() }}
###### Fig. 23: ‘Changing the access level’
<br>

***

### Replacing contents


The media file, such as the current picture for instance, can be replaced by another with this function. This function is used if the media file had to be revised or was not available when the media asset was created.
<br>
Examples: media file not available: the user creates the media asset with a wildcard file. The user defines the metadata and all other data that is known. As soon as the metafile has been received, the wildcard can be replaced with the effective file.

<br>
The media file has been revised: one picture still has to be post-edited with Photoshop. After processing, the current media file can be replaced with the modified one.


***

### Downloading media asset


With this function, it is possible to copy a media asset together with the metadata onto a local storage medium. Then, the file can for instance be processed in Photoshop. The metadata can only be added to pictures. For technical reasons this does not function with videos. The metadata are used in third-party applications (e.g. Adobe Photoshop)as well – provided they are compatible.


***

### Media asset check-out


To process a media asset it must be ‘checked out’. This amounts to inactivating the write protection. The name of the editing user is then assigned to the respective media asset. The user is now able to modify the media asset. The media asset can always only be edited by the user that has last checked it out. Changes are only temporarily accepted and can be reversed again afterwards.


***

### Media asset check-in


When the user has completed and checked all his modifications, he can ‘check-in’ the media asset. All changes are definitely accepted and the write protection is re-activated.

***

### Media asset undo check-out

The user does not wish to accept any of the changes made, but no longer knows exactly what was changed or there have been so many changes that it would take too long to reverse these manually. The user can carry out ‘Undo check-out’ by which the media asset is reset to its status prior to the user’s check-out. All modifications done by the user are lost.

***

### Export media asset
The user can export one or several selected media assets into a Word document. Both preview picture and registered metadata are incorporated into the document.



<br>
{{ media['functions.png'].html() }}
###### Fig. 24: ‘Example of an exported asset’
<br>

***

### Delete media asset

The user can delete a media asset. It is, however, not finally removed from the system, but merely transferred to the trash bin and flagged accordingly. To finally delete a media asset in the trash bin, the user must possess the respective access rights. Only a few users per organisation have these rights. They are usually administrators or users that are in charge of the system.

<br>
{{ media['functions.png'].html() }}
###### Image n°25 : ressource dans la corbeille
<br>

<br>
***
