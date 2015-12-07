---
title: Functions in the Filter section
slug: filter-section
menu: Functions in the Filter section
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

## Functions in the Filter section

***

The Filter section serves to filter the number of media assets according to certain characteristics.

<br>
{{ media['overview.png'].html() }}
###### Fig. 9: ‘Overview of Filter section’.
<br>

You have various options to filter the media assets:
- ‘Folder’ (1) refers to the keywords that have been assigned to a media asset.
- User-defined filters (2) refer to the metadata stored in the media assets
- media assets can also be sorted according to various predefined filters (3).
- It is also possible to filter according to file type and type of publication (4).

***

## Keywords

Clicking on ‘Folder’ (1) generates a keyword tree If the user selects a certain keyword, all media assets are displayed that have been assigned to this keyword.

<br>
{{ media['stichworte.png'].html() }}
###### Fig. 10: ‘Keyword tree’
<br>

***

## User-defined filters

Two functions exist at the Filter section main level. The first icon serves to create a new filter. The second one serves to update the filter display, so that a new filter is displayed in the list, once it has been created. Each user-defined filter has two functions (2). With the first icon, the editing window is opened and the filter parameters can be adjusted. With the second icon, a user-defined filter can be deleted. Beware: a deleted user-defined filter can no longer be restored!

<br>
{{ media['eigenefilter.png'].html() }}
###### Fig. 11: ‘Filter functions’
<br>

A user-defined filter consists of one main condition (1). Here you can define whether ‘all conditions’ have or ‘at least one condition’ (2) has to be fulfilled for a media asset to be displayed.

<br>
{{ media['filterbearbeiten.png'].html() }}
###### Fig. 12: ‘Filter definition’
<br>

The structure of a condition is as follows:(see Fig. 13: ‘Creating a filter’). In the first drop-down menu (2) the metadata area is defined, that is to be taken into account during the search. In this example the description is to be searched. The second drop-down menu (3) is an optional box and is only displayed if the metadata area concerned exists in various languages. In the next menu (4) you can define how the search text is to be taken into account. Below the options are listed that would be displayed for a corresponding media asset.

<br>

| Search behaviour | Text in metadata | Search text |
| ----- | ----- | ----- |
| contains | If John goes home | John |
| begins with | If John goes home | If John |
| equals | If John goes home | If John goes home |

<br>

In the search box (5) you define the text you wish to find. With the ‘+’ button (6) a further condition can be added. Such added conditions can be deleted with the ‘x’ button (7). In the ‘Name’ entry box it is possible to define, under what name the filter is to be displayed in the filter overview. Pressing the ‘Save’ button (9) saves the user-defined filter. With the ‘Cancel’ button (10) all changes are rejected and the user-defined filter is not saved.


<br>
{{ media['neuerfilter.png'].html() }}
###### Fig. 13: ‘Creating a filter’
<br>

If you select a user-defined filter - in this example the filter with the name of ‘Internet’ – all media assets will be displayed that meet the requirements of this filter.

<br>
{{ media['filteruebersicht.png'].html() }}
###### Fig. 14: ‘Overview of filters’
<br>

***

## Pre-defined filters
DIGAME comes with three pre-defined filters. They are explained below.

- ‘Assets being processed’: contains all media assets that have been checked out and are being processed by a user.

- ‘Assets without keywords’: contains all media assets that have no keywords and are therefore not displayed in the keyword tree.

- ‘Recycle bin’: contains all media assets, that can be deleted.


***

## File type and publication rights

Publication rights (1) is used to steer the visibility of media assets. A media asset with ‘Internet’ publishing rights is for instance also visible for an attached application (e.g. www.mediathek.admin.ch).


A media asset with ‘EMC’ publication rights is only visible within DIGAME.


With ‘File types’ (2) a search can be made on the basis of the media asset file type. Depending on the selection, no films but only pictures are displayed for example.
Both filter options can also be combined. You can for example search for pictures that only exist in DIGAME.

<br>
{{ media['rechte.png'].html() }}
###### Fig. 15 ‘Rights and file types’
<br>

The settings the user makes regarding ‘Publication rights’ and ‘File types’ affect the following search results:

- Results from keyword tree 
- Results with user-defined filters
- Results with pre-defined filters
- Results with simple search
- Results with extended search



<br>
***
