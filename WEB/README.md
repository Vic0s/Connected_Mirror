# Connected_mirror

# Installation de WAMP server

https://www.wampserver.com/#wampserver-64-bits-php-5-6-25-php-7

Pas d'instruction particulière
Conseillé d'installé WAMP sur la racine C:\WAMP
Création d'un dossier "Nom du projet"
Les fichiers WEB sont stockés dans C:\WAMP\www\"Nom du projet"

# PHPMYADMIN

Navigation sur le localhost : 

http://127.0.0.1

Cliquez sur la version la plus récente de phpmyadmin :

Le MDP par défaut est vide avec pour login "root"

# Importation de la base de données

Sur phpmyadmin il faudra importer le fichier :


# IMPORT DES FICHIERS PHP et CSS

Prenez tout les fichiers et mettez les dans le dossier prévu à cet effet C:\WAMP\www\"Nom du projet"

# AUTORISATION DES CONNEXIONS EXTERNES - APACHE2

Il faut autoriser les connexions d'un autre ordinateur au serveur WEB.

Vérification du réseau local :

Clic gauche sur l'icone APACHE2 : 

Modification du fichier vhost.hhtpd :

Ajout du réseau local : 

# TESTS PAGE WEB

Essayez une inscription sur la page WEB, puis une connexion avec ces mêmes identifiants.
Actualiser sur la raspberry et le tour est joué, le profil ainsi que vos informations apparaitront sur l'interface.

Résultats attendu :

