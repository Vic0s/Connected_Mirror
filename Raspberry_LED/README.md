# Projet miroir connecté : Configuration de la raspberry et contrôle de led

# Composant : 

- Raspberry pi 3 / 4
- Carte mémoir 10 gigas (minimum)
- Bande de led WS2801
- 3 MOFSETS
- Une bande LED RVB
- Une breadboard 
- Fils de connexion (mâle à femelle)
- Fils de raccordement (mâle à mâle)
- Trois MOSFET à canal N (par exemple IRLZ34N )
- Une alimentation appropriée pour la bande LED
- un miroir
- du film reflechissant
- du plexiglass
- du carton 

# 1. Configuration de la raspeberry

- Installez l'os debian bullseyes via l'application raspberry pi imager
    
    note : configurer le ssh ainsi que la connexion wireless lan 

- Connectez-vous en SSH à votre raspberry

   note : vous pouvez utiliser l'application mobile "Net analyzer" pour récupérer l'adresse IP de votre raspberry 

- Installez PHP sur la raspberry
        
        sudo apt update
        sudo apt upgrade -y && sudo reboot

        sudo apt -y install lsb-release apt-transport-https ca-certificates 
        
        sudo wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg

        echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | sudo tee /etc/apt/sources.list.d/php.list

        sudo apt update

        sudo apt -y install php7.4

- Installez mongoDB

        sudo apt install mariadb-server

    note : pour vérifier le bon fonctionnement de votre base de donnée ou en vérifier le contenu, vous pouvez utiliser la commande suivante :

        sudo mysql -u root -p

- Installez apache 2 

        sudo apt install apache2

    note : pour vérifier le bon fonctionnement de votre base de donnée ou en vérifier le contenu vous pouvez utiliser la commande suivante :

        sudo systemctl status apache2    

- Démarrez votre raspberry sur un page chronium défini 

        sudo apt install chromium -y

        sudo nano /home/pi/.config/lxsession/LXDE-pi/autostart
        
                chromium-browser --disable-infobar --app=<ip del a machine qui contient la BDD>
        
        sudo reboot
# Configuration pour affichage sur l'écran 3,5 pouces



Pour observer le bureau sur l'ecran 3,5 pouce, utilisez les commandes suivantes :

        sudo rm -rf LCD-show

        git clone https://github.com/goodtft/LCD-show.git

        chmod -R 755 LCD-show

        cd LCD-show/

        sudo ./LCD35-show

Cela aura pour effet de désactiver la vue sur votre sortie HDMI
Pour revenir à l'affichage d'origine :

        chmod -R 755 LCD-show 

        cd LCD-show/ 

        sudo ./LCD-hdmi

# Contrôle de la bande de leds

Voici le branchement que vous devez effectuer pour vous permettre de contrôler la bande de led :

![image](https://user-images.githubusercontent.com/104560626/176110126-4daba8e7-1386-4fad-8977-e0512885e437.jpg)
![image](https://user-images.githubusercontent.com/104560626/176108347-ece66397-4660-4300-b42a-fa4412b20149.jpg)
![image](https://user-images.githubusercontent.com/104560626/176109882-e131b697-c261-4bc5-80fd-8af496c61bb1.jpg)
![image](https://user-images.githubusercontent.com/104560626/176108057-86f40d6d-837d-42c2-ba20-a40c20939bb7.jpg)

Pour tester que votre montage est opérationel utilisez les commandes suivantes :

    sudo pigpiod - Démarre PiGPIO
    pigs p 17 255 - La bande led doit s'allumer en rouge
    
Ce github vous propose un code python permettant de contrôler davantage votre bande led : https://github.com/dordnung/raspberrypi-ledstrip/blob/master/fading.py

Pour réaliser les branchements qui permettront de contrôler la bande de LED, nous avons suivi ce tutoriel : https://dordnung.de/raspberrypi-ledstrip/

# Sources

Liens ayant pu nous aider lors de notre projets 

- https://dordnung.de/raspberrypi-ledstrip/

- https://www.avoiderrors.com/48316-2/

- https://github.com/tdamdouni/Raspberry-Pi-DIY-Projects/blob/master/_WebArticles/how-to-connect-and-control-a-raspberry-pi-ws2801-rgb-led-strip.md

