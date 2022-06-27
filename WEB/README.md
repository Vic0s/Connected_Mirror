# Connected_mirror

# Installation de WAMP server

https://www.wampserver.com/#wampserver-64-bits-php-5-6-25-php-7

Pas d'instruction particulière

Conseillé d'installé WAMP sur la racine C:\WAMP

Création d'un dossier "Nom du projet"

Les fichiers WEB sont stockés dans C:\WAMP\www\ "Nom du projet" : 

![image](https://user-images.githubusercontent.com/104896709/175987535-306b83d7-0cef-4138-bc93-934bb8790a9a.png)

# PHPMYADMIN

Navigation sur le localhost : 

http://127.0.0.1

Cliquez sur la version la plus récente de phpmyadmin :

![image](https://user-images.githubusercontent.com/104896709/175988002-b82353fe-1dd7-40a1-8742-750d851d02ca.png)

Le MDP par défaut est vide avec pour login "root" : 

![image](https://user-images.githubusercontent.com/104896709/175988093-2a6cb3ba-e0ea-4f5e-8eec-6f751e9084ff.png)

# Importation de la base de données

Sur phpmyadmin il faudra importer le fichier :

![image](https://user-images.githubusercontent.com/104896709/175988469-c55c38d7-9580-41bd-b0af-f48df57ef0a9.png)

Le fichier est connected_mirror.sql

# IMPORT DES FICHIERS PHP et CSS

Prenez tout les fichiers et mettez les dans le dossier prévu à cet effet C:\WAMP\www\"Nom du projet"

![image](https://user-images.githubusercontent.com/104896709/175988674-a7bf9ede-b262-491d-9a17-6fdb5a74ae04.png)

# AUTORISATION DES CONNEXIONS EXTERNES - APACHE2

Il faut autoriser les connexions d'un autre ordinateur au serveur WEB.

Modification du fichier vhost.hhtpd sur APACHE2 - WAMP : 

![image](https://user-images.githubusercontent.com/104896709/175989160-c77e0943-9378-4689-a07e-a1b10af4d420.png)

Ensuite récupérer le reseau IP à l'aide de la commande ipconfig

Et ajoutez le dans le fichier :

![image](https://user-images.githubusercontent.com/104896709/175989486-7d67b837-2f1c-41a2-8fe7-91f161f53ab7.png) 

# TESTS PAGE WEB

Essayez une inscription sur la page WEB, puis une connexion avec ces mêmes identifiants.
Actualiser sur la raspberry et le tour est joué, le profil ainsi que vos informations apparaitront sur l'interface.

Résultats attendu :

![image](https://user-images.githubusercontent.com/104896709/175989835-d526d4e7-8c67-4df0-8cf5-03ae0e43b05b.png)

![image](https://user-images.githubusercontent.com/104896709/175989970-b07f2555-5915-4671-a5f2-cbe55d412f7a.png)

Les autres informations seront disponible sur une autre page WEB.

Pour mettre la raspberry par défaut sur la page WEB merci de suivre le tutoriel dans la partie RASPBERRY_LED : https://github.com/Vic0s/Connected_Mirror/tree/main/Raspberry_LED

