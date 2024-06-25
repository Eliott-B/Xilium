# Manuel de maintenance

> FA2 | BARKER, OUALI, GUILLERAY, GRAVIER, LEMOUTON  

## Fonctionnement

L'application Xilium fonctionne sur un Raspberry Pi 4. Elle est accessible à l'adresse `raspb05` sur le réseau de l'IUT de Vélizy.  
Le serveur web est lancé automatiquement au démarrage du Raspberry Pi.  

## Raspberry Pi

### Requis

Les prérequis pour l'application Xilium concernant le Raspberry Pi sont les suivants :

| Elémént                | Prérequis                          |
| ---------------------- | ---------------------------------- |
| Raspberry              | Raspberry Pi 4                     |
| Carte SD               | 16 Go minimum (32 Go pour confort) |
| Système d'exploitation | Raspbian 64-bits Lite (Bookworm)   |

### Configuration

Installer l'OS Raspbian sur la carte SD du Raspberry Pi grâce à l'outil Raspberry Pi Imager.
Ne pas oublier de configurer le SSH.

Pour profiter pleinement de l'application Xilium, il est recommandé de configurer le Raspberry Pi de la manière suivante :

- Installer Fail2Ban pour sécuriser le serveur web

```bash
sudo apt install fail2ban
```

- Installer et configurer UFW pour gérer les règles de pare-feu

```bash
sudo apt install ufw
sudo ufw allow ssh
sudo ufw allow http
sudo ufw allow https
sudo ufw enable
```

- Installer Git

```bash
sudo apt install git
```

- Installer Docker

```bash
# Add Docker's official GPG key:
sudo apt-get update
sudo apt-get install ca-certificates curl
sudo install -m 0755 -d /etc/apt/keyrings
sudo curl -fsSL https://download.docker.com/linux/debian/gpg -o /etc/apt/keyrings/docker.asc
sudo chmod a+r /etc/apt/keyrings/docker.asc

# Add the repository to Apt sources:
echo \
  "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.asc] https://download.docker.com/linux/debian \
  $(. /etc/os-release && echo "$VERSION_CODENAME") stable" | \
  sudo tee /etc/apt/sources.list.d/docker.list > /dev/null
sudo apt-get update
```

```bash
sudo apt-get install docker-ce docker-ce-cli containerd.io docker-buildx-plugin docker-compose-plugin
```

:warning: Installer Git avant Docker !

## Application

### Installation

Clonez le dépôt Git de l'application Xilium

```bash
cd /opt
git clone https://github.com/Eliott-B/Xilium
```

### Configuration et lancement

Lancez le script `run.sh` pour démarrer l'application et la configurer

```bash
./run.sh
```

### Arrêt

Pour éteindre l'application, il suffit de lancer la commande suivante :

```bash
docker compose down
```

### Tests

Pour lancer les tests sur l'application, il suffit de lancer la commande suivante (après avoir démarré l'application) :

```bash
docker exec xilium-app-1 bash -c "cd /var/www/html/tests && ./run_test.sh
```

### Dépendances

- Docker
- Git
- php:8.2-apache (Docker image)
- hvalev/shiny-server-arm (Docker image)
- mariadb:11.3 (Docker image)
- composer
- pdo_mysql (PHP)
- libapache2-mod-security2 (Debian)
- python3
- python3-pip (Python)
- curl (Debian)
- unzip (Debian)
- scikit-learn (Python)
- XML (R)

## Maintenance

### Mises à jour

Pour mettre à jour l'application, il suffit de lancer les commandes suivantes :

```bash
cd /opt/Xilium
git fetch && git pull
```

Ensuite il faut relancer l'application :

```bash
docker compose down
./run.sh
```

### Modification de l'application

Pour modifier l'application, il suffit de modifier les fichiers dans le répertoire `/opt/Xilium`.

L'application est géré par Docker. Le conteneur Docker est configuré ici : `/opt/Xilium/docker-compose.yml`. L'image app est présente ici : `/opt/Xilium/Dockerfile`. Et le R-Shiny est configuré ici : `/opt/Xilium/shiny-server/Dockerfile`.

L'application est sous l'architecture MVC (Model-View-Controller) :

- Les modèles sont dans le répertoire `/opt/Xilium/app/models`
- Les contrôleurs sont dans le répertoire `/opt/Xilium/app/controllers`
- Les vues sont dans le répertoire `/opt/Xilium/public/views`

Les routes sont gérées dans le fichier `/opt/Xilium/src/app/routes/web.php`.

Le fichier de création de la base de donnée est ici : `/opt/Xilium/database/database_creation.sql`.  
Le Docker sauvegarde la base de donnée dans le répertoire `/opt/Xilium/database/data`. Si l'application plante, ne pas hésiter à supprimer ce répertoire pour reset la base de données.

Les tests sont dans le répertoire `/opt/Xilium/src/tests`.

## Contact

En cas de problème, vous pouvez contacter les développeurs de l'application Xilium :  
[eliottb.info@gmail.com](mailto:eliottb.info@gmail.com)

> FA2 | BARKER, OUALI, GUILLERAY, GRAVIER, LEMOUTON
