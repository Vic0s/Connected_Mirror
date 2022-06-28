# Connected_mirror

# Cahier des charges

Auteurs du dit cahier des charges 
Nom Prénom Rôle
- Florian         LE ROUX Rédacteurs/Concepteurs
- Cassandre NOEL
Rédacteurs/Concepteurs

- Victor ROLLAND
Rédacteurs/Concepteurs
- M. LADJI
Commanditaire / Client


Historique des versions

- V0.1
5/05/22
Première version suite à l’expression du besoin et d’une première définition de solution

- V1
9/06/22-17/06/22
Version proposée au commanditaire pour approbation

- V2
24/06/22
Cahier des charges validé


Validations / Numéro de version

- V0.1
Client
5/05/22
Remarque : Ajouter l’authentification sécurisée

## Cadrage – Définition du problème 

### Demande du client spécifique à un besoin
La demande originelle du client est de lui simplifier la vie en conceptualisant un produit intelligent dans une situation quotidienne. 
Cet objet devra prendre part dans un de nos rituels quotidiens, être attractif et pouvoir répondre à des critères d’ergonomie.
Le produit créé doit rentrer dans le cadre de l’« Internet des Objets » (I.O.T. en anglais), il s’agit d’un réseau de terminaux physiques, d’ « objets connectés » intégrant des capteurs, des logiciels et d’autres technologies en vue de les connecter à d’autres terminaux et systèmes dans le but d’échanger des données entre eux. 
Dans notre cadre académique et de la cybersécurité, cet objet connecté devra remplir des critères de sécurité informatique lié à sa connexion Internet et aux données traitées.

### Cybersécurité de l’I.O.T.
Le domaine de l’IOT a connu une expansion continue. Il en résulte un grand nombre de vulnérabilités pouvant générer des impacts très critiques. Il faut donc aussi s’assurer d’être en conformité aux nouvelles réglementations.
Ces nouveaux objets envahissant notre maison et notre vie privée peuvent rapidement devenir une menace pour notre intégrité, une menace pour nos données, une menace pour notre individualité. Du point de vue de la cybersécurité, il faut que ces objets du domaine de la domotique permette à nos données de rester disponible, intègre, confidentielle et si possibles traçables. La double menace ici présente est de réussir à créer de nouveaux outils dit « intelligents », étant hyper connectés et en même temps de limiter cette dernière pour réduire la vulnérabilité présente lors d’une connexion à Internet.
L’exfiltration de données s’explique par plusieurs failles présentes dans les IOT :
- Mauvaise gestion des appareils 
- Surface d’attaque physique plus large 
- Transfert de données non sécurisés



### Objectifs 
Offrir un service performant et pratique au réveil, qui pourra avoir des évolutivités telle que l’affichage de la planification des réunions pour la journée.

### Périmètre du projet
Affichage de plusieurs données comme la météo, un agenda, l’heure ainsi que les informations du profil de l’utilisateur comme le nom, prenom, âge et taille. Aspects basiques de sécurité sur des apllications WEB. Eclairage de LEDs et modification des couleurs. Authentification par login/mdp. Prise en main à distance via navigateur WEB.

### Solution retenue
Notre solution prend la forme d’un miroir décoratif qui pourra se placer dans une chambre. Nous cherchons à le rendre multifonctionnel pour qu’il puisse s’inscrire dans une routine quotidienne. Concernant l’ergonomie, nous avons misé sur l’attractivité que procure sa fonctionnalité de miroir infini sur la face avant.
Le miroir connecté intelligent offre une expérience client exceptionnelle en combinant un affichage digital avec des informations utiles. Ce miroir permettra de fournir des informations extérieures, telle que la météo et l’heure.
Comme les données sont sensibles, à caractères personnels, une authentification sera nécessaire. Les informations seront affichées au travers d’un écran situé sur le côté ou dans le mirroir, laissant ainsi pleine visibilité sur le reflet et la vision de l’écran.

### Résultat souhaité

Au terme de notre projet voici ce que nous voulions : 

![miroir_conecté](https://user-images.githubusercontent.com/104560626/176117076-c95bf99c-067a-4974-b09d-96a195e41ec1.jpg)
![image](https://user-images.githubusercontent.com/104560626/176114313-3f348f6a-99b4-4c77-9db0-57b0ee1d18cc.jpg)

Nous voulions obtenir un miroir combinant l'effet infini et connecté. 
Malheureusement nous avons rencontré des difficultés :

- Incompatibilités entre Raspbian et MySQL – Utilisation forcée
de MariaDB – Failles de sécurité, incompatibilités avec les
méthodes PHP PDO plus modernes.

- Alimentation de 12V qui a forcé sur certains de nos
composants.

- Manque de broches, dimensionnement de départ mal effectué.

- Sécurité des applications – Serveur WEB

### Points d'améliorations

- Utilisation d’outils pour la mise en forme de la page WEB

- Chiffrement des données dans la base de données

- Communication entre les composants et le serveur WEB

- Ecran plus grand, affichage complexe et peu maniable

- Espacement des composants et esthétique

- Implémentation d’AJAX pour ne pas avoir à rafraichir la page

### Résultat obtenu

Voici le résultat que nous avons obtenu au terme de notre projet d'électronique :

![image](https://user-images.githubusercontent.com/104560626/176115942-a4be82fd-6a32-4030-9f36-6485e9307f2e.jpg)

Nous sommes déçus de ne pas réussi à obtenir le résultat imaginé en début de projet. Cependant ce projet nous à permis de découvrir l'électronique et nous à donné envie de poursuivre sur des petits projets personnels.

### Références-Sources
- https://www.digilor.fr/wp-content/uploads/2017/10/
- https://tehtris.com/fr/blog/iot-quelle-place-pour-la-cybersecurite
- https://group.bureauveritas.com/fr/marches-services/cybersecurite/cybersecurite-des-objets-connectes-iot
- https://dordnung.de/raspberrypi-ledstrip/

- https://www.avoiderrors.com/48316-2/

- https://github.com/tdamdouni/Raspberry-Pi-DIY-Projects/blob/master/_WebArticles/how-to-connect-and-control-a-raspberry-pi-ws2801-rgb-led-strip.md

