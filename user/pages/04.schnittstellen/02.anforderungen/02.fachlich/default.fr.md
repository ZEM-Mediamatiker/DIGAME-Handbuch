---
title: Exigences spécialisées
slug: exigences-specialisees
menu: Exigences spécialisées
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

## Exigences spécialisées

***

#### Appeler les services Web

| Liens | Beispiel |
| ------ | -- |
| Usertoken | Demander un jeton d’authentification valable |
| Search | Chercher une ressource numérique |
| Search All | Chercher dans toutes les ressources |

#### Système test
|  | |
| ------ | -- |
| URL: | https://www.digame.mediathek-admin.com/api |
| User (Basic Authenticaiton): | cmsuser |
| Mot de passe: |  |

#### Système d’intégration
|  | |
| ------ | -- |
| URL: | https://www.test.digame.mediathek-admin.ch/api |
| User (Basic Authenticaiton): | cmsuser |
| Mot de passe: |  |

#### Système productif
|  | |
| ------ | -- |
| URL: | https://www.digame.mediathek-admin.ch/api |
| User (Basic Authenticaiton): | cmsuser |
| Mot de passe: | [A définir] |


#### Accès / utilisateur et séparation structurelle des services
L’image n°36 montre comment accéder à un service et les utilisateurs techniques qui sont impliqués dans ce processus. On peut également y voir la structure organisationnelle. Pour générer un jeton d’authentification, l’URL est reliée au client via un utilisateur.

{{ media['schematischeraufbau.png'].html() }}
###### Image n°36

#### Liste et description des méthodes de services Web
L’image n°37 montre les différentes étapes pour accéder à l’interface des services Web DIGAME. Le système doit s’authentifier auprès de l’interface avec des références d’identification. Si l’authentification est reconnue, un jeton d’authentification est généré et envoyé à l’appelant. Le jeton est valable pendant un laps de temps déterminé (à ce jour, 30 minutes). Une fois le système authentifié, une requête peut être lancée. La réponse, autrement dit les ressources numériques trouvées, est renvoyé selon le format de réponse défini. Le cas échéant, les URL fournies avec la réponse permettent de télécharger les métadonnées des vignettes et les fichiers numériques complets depuis le serveur et de les afficher dans le système appelant.

{{ media['ablaufaufruf.png'].html() }}
###### Image n°37

#### Recherche : méthode Web pour obtenir un jeton d’authentification valable
{{ media['tabelle1.png'].html() }}

#### Recherche : méthode Web pour chercher une ressource numérique
{{ media['tabelle2.png'].html() }}

#### Recherche : méthode Web pour chercher des ressources numériques (toutes)
{{ media['tabelle3.png'].html() }}

#### Téléchargement : méthode Web pour lire une ressource numérique particulière
L’URL de la vignette ainsi que celle  du fichier numérique sont fournies avec la réponse. En appelant l’URL concernée, on peut télécharger la vignette ou le fichier numérique depuis le serveur. Cette solution a été mise en place pour deux raisons : si l’intégralité d’un fichier était livrée dans la réponse, cela ralentirait considérablement la recherche. De plus, l’utilisateur effectue une recherche pour pouvoir choisir entre plusieurs résultats ; les fichiers en-soi ne l’intéressent donc que dans un second temps.

#### La visibilité des ressources dans un système périphérique (organisation CME)
L’accessibilité des ressources est gérée par l’implémentation de ce que l’on appelle des conteneurs. L’interface permet d’accéder uniquement aux ressources qui se trouvent dans les conteneurs autorisés. Sur l’image 38, il s’agit des conteneurs CMS DDPS et Internet.
Les ressources doivent obligatoirement se trouver dans ces conteneurs pour être visibles / accessibles par le système périphérique. Sinon, l’accès sera refusé.
 - ‚Internet‘ Container
 - ‚{UmsystemContainer}‘ Container (z.B.: ‚CMS-VBS‘ für VBS CMS)

{{ media['3sichtbarkeitvbscms.png'].html() }}
###### Image n°38 : accessibilité des ressources dans le CMS DDPS




<br>
***
