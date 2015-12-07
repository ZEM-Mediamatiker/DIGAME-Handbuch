---
title: Basic structure of DIGAME
slug: basic-structure
menu: Basic structure
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

## Basic structure of DIGAME
***
DIGAME can be divided into 4 basic sections:

- In the Menu section (1) all menus are listed that the user has at hand. The catalogue menu is sufficient for daily work. The user is led to this location upon registration. The user can change passwords with the ‘Change password’ menu. However, the user is not automatically summoned to do this. The remaining menus offer administrative functions.

- In the Work section (2) a simple search can be made for certain media assets. More detailed search parameters can be set with the ‘Extended search’ function. A new media asset can be generated with the ‘Create asset’ button.

- In the Filter section (3) media assets are listed according to certain criteria. The assets found can be restricted by ‘File type’ and ‘Publishing rights’.

- In the Display section (4) all media assets found via (2) or (3) are displayed. The media assets data selected in the Display section can be edited in the Work section.

<br>

{{ media['overview.png'].html() }}
###### Fig. 2: ‘DIGAME programme desktop’

<br>

***

## Logging in and out

Users have to log in and out of DIGAME. For this purpose users enter their user name (1) and password (2). Before pressing the ‘Log-in’ button, users select their organisation from the drop-down list (3). If the wrong organisation has been chosen, the user cannot log in. Via (4) the desired application language can be selected. The current language options are English and German

<br>

{{ media['login.png'].html() }}
###### Fig. 3 ‘The log-in window upon starting the programme’

<br>

The user ID is displayed top right in the menu bar. (Fig. 2 ‘Basic structure’) By pressing the ‘Log-out’ button, the user logs out of the system.

***

## Changing the password

Users can change their password at any time. For this they have to select ‘Change password’ in the Menu section (as shown in Fig. 2 “Basic structure”).
<br>

{{ media['password.png'].html() }}
###### Fig. 4: ‘Configuration for changing own password’

<br>
The user’s name is displayed in the ‘User name’ field (1). It cannot be changed by the user. They must enter their current password in the ‘Password’ field (2). Users must enter their new password in the ‘New password’ field (3) and enter it again in the ‘Confirm new password’ field (4).

If the ‘Change password’ (5) button was pressed and all entries are correct, a notice appears that the password has been successfully changed. The ‘Change password’ process can be stopped by the user switching to ‘Catalogue’ in the menu.

<br>
***
