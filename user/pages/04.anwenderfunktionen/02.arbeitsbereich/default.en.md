---
title: Functions of Work section
slug: work-section
menu: Functions of Work section
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

## ‘Functions’ of Work section

***

In the Work section a search can be made for media assets or new media assets can be created.

<br>
{{ media['functions.png'].html() }}
###### Fig. 7: ‘Overview of Menu section’.
<br>

### Simple search

If the text box is left empty during the search (1) and the ‘Go’ button is pressed, the search is subject to no restrictions. All media assets within the organisation are displayed. Any text can be entered into the text box or even an asset ID. This will reduce the number of media assets. Only those media assets will be sought whose metadata contain the corresponding words. You must take into account that a match will be sought in all metadata. If for instance a name has been entered, it may be found in the title, in the description or even in the author.

### Extended search

With the ‘Extended search’ button (3), a detailed search can be started. The options for an extended search are the same as those for defining a filter.

***

## Creating media assets

New media assets can be made by pressing the ‘Create assets’ button (as shown in (2) in Fig. 7 ‘Overview of Menu section’). A file explorer window opens where the respective original file can be selected out of which a media asset is to be generated. It is possible to select several files and make media assets out of them. It is also possible to create media assets directly from original files that are united in a ZIP file.

<br>
{{ media['progress.png'].html() }}
###### Fig. 8: ‘Indication of progress while creating an asset’.
<br>

The progress bar (1) shows overall progress of media asset generation. Below the bar, all files are displayed that are being uploaded. Each file has its own progress bar (2) indicating its current status. The button (3) has two different states: when files are being uploaded and media assets are being generated, the button is designated with ‘Background’. In this state the user can hide the dialogue and continue working in DIGAME (the user is informed when the process has been completed). As soon as all uploads have been completed and the media assets have been created, the button is designated with ‘Close’. It serves to close the dialogue window.

The following formats can be processed by DIGAME:

- Pictures: .jpg, .png, .tiff, .eps
- Films: .mp4, .mv4, .mov
- Documents: .pdf, .doc
- Archive: .zip

Information: preview pictures cannot be automatically generated for eps files. The preview picture has to be added manually.

<br>
***
