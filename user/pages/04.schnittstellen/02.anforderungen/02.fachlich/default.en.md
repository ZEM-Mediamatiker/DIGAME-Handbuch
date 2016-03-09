---
title: Specialist requirements
slug: specialist-requirements
menu: Specialist requirements
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

## Specialist requirements

***

#### URLs – web service calls

| Link | Example |
| ------ | -- |
| Usertoken | To demand valid user token |
| Search | Search for media assets |
| Search All | Request all assets |

#### test system
|  | |
| ------ | -- |
| URL: | https://www.digame.mediathek-admin.com/api |
| User (Basic Authenticaiton): | cmsuser |
| Mot de passe: |  |

#### integration system
|  | |
| ------ | -- |
| URL: | https://www.test.digame.mediathek.admin.ch/api |
| User (Basic Authenticaiton): | cmsuser |
| Mot de passe: |  |

#### productive system
|  | |
| ------ | -- |
| URL: | https://www.digame.mediathek.admin.ch/api |
| User (Basic Authenticaiton): | cmsuser |
| Mot de passe: | [A définir] |


#### Access and user: organisational separation of services
The overview shows how a service can be accessed and what technical users are involved. Furthermore, the organisational separation is evident from the figure. The URL for creating a user token is linked to the respective client via the user.

{{ media['schematischeraufbau.png'].html() }}
###### Fig. 36: ‘Schematic structure / persons involved’.

#### List and description of web service methods
Fig. 37: ’Call procedure’ shows the access procedure to a DIGAME web service interface. The system must identify itself with its credentials at the interface. If authentication has been successful, a user token is generated. The latter is only temporally valid (currently 30 minutes) and is returned to the caller. When the system has been authenticated, a search can be initiated. The media assets found are returned as result. If necessary, the media data for the preview picture and the effective media file can be loaded from the server via the URLs obtained in the result and displayed in the calling system.

{{ media['ablaufaufruf.png'].html() }}
###### Fig. 37: ‘Call procedure’

#### Search: web method to obtain a valid user token (authentication)
{{ media['tabelle1.png'].html() }}

#### Search: web method for media asset search
{{ media['tabelle2.png'].html() }}

#### Search: web method for media asset search(all)
{{ media['tabelle3.png'].html() }}

#### Download: web method for reading a certain media asset
The response to a search includes the respective URL for the preview picture and the effective media file. By calling the respective URL, the preview picture or the media file can be downloaded from the server. This solution has been implemented for two reasons: If all media file data were included in the search response, this would have a direct impact on the speed of the search. The user conducts a search to make a selection later, wherefore the metadata are only of interest in a second step.

#### Visibility of the assets for the peripheral systems (EMC organisation)
The visibility of the assets is controlled via what is called a container. If an asset is in a corresponding container, it is available via the interface. In Fig. 38: ‘Visibility of assets in DDPS CMS’ there is an example that clarifies this. Only those assets are available via interface that are located in the authorised containers. In our example these are the two assets that are displayed in the DDPS CMS display.
<br>
The assets must be located in the following containers to be visible / available for the peripheral system:  
- ‚Internet‘-Container
- ‚{Container peripheral system}‘-container (e.g.: ‘DDPS CMS‘)


{{ media['3sichtbarkeitvbscms.png'].html() }}
###### Fig. 38: ‘Visibility of assets in DDPS CMS’




<br>
***
