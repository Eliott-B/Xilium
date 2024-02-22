# R-Shiny server

> FA2 | BARKER, OUALI, GUILLERAY, GRAVIER, LEMOUTON  

## R-Shiny server

R-Shiny server est un service du langage R qui permet de créer des applications web orientées sur les statistiques. Ce service permet de faire des applications intéractives et dynamiques. Il est possible de créer des graphiques, des tableaux, ... et de les mettre à jour en temps réel.  

## Problèmatique d'installation

Sur le papier, installer R-Shiny server sur un Raspberry Pi est impossible. En effet, R-Shiny server est basé sur une architecture amd64 (x64) cependant le Raspberry Pi est basé sur une architecture aaarch64 (ARM).  
Cela entraine donc une incomptabilité entre R-Shiny server et le Raspberry Pi.  

## Solution

Nous avons chercher comment détourner cela. Pour détourner un problème de compatibilité sur l'architecture de la machine, nous avons pensé à la virtualisation. Cela est possible seulement si un développeur a déjà fait le travail de virtualisation, sinon nous n'avions pas le temps nécessaire pour le faire.  
Heureusement, Docker permet de faire de la conteneurisation et donc de créer des environnement virtuels. Après quelques recherches, nous avons trouvé un conteneur Docker qui permet de faire tourner R-Shiny server sur un Raspberry Pi. (lien projet: [Shiny Server ARM Docker](https://github.com/hvalev/shiny-server-arm-docker))

## Installation

Pour installer R-Shiny server sur un Raspberry Pi, il faut tout d'abord installer Docker.  
Ensuite, nous avons préparer notre environnement de travail comme l'explique les développeurs du conteneur :  

```bash
mkdir ~/shiny-server
mkdir ~/shiny-server/logs
mkdir ~/shiny-server/conf
mkdir ~/shiny-server/apps
```

Une fois l'environnement de travail prêt, nous devons télécharger et installer R-Shiny server avec les commandes suivantes :  

```bash
git clone https://github.com/hvalev/shiny-server-arm-docker.git ~/shiny-server-arm-docker
cp ~/shiny-server-arm-docker/shiny-server.conf ~/shiny-server/conf/shiny-server.conf
cp ~/shiny-server-arm-docker/init.sh ~/shiny-server/conf/init.sh
cp -r ~/shiny-server-arm-docker/hello/ ~/shiny-server/apps/
rm -rf ~/shiny-server-arm-docker/
```

Enfin, nous pouvons lancer le conteneur Docker avec la commande suivante :  

```bash
docker run -d -p 3838:3838 -v ~/shiny-server/apps:/srv/shiny-server/ -v ~/shiny-server/logs:/var/log/shiny-server/ -v ~/shiny-server/conf:/etc/shiny-server/ --name shiny-server hvalev/shiny-server-arm:latest
```

Notre site de test est donc disponible à l'adresse suivante : `http://localhost:3838/hello/` (ou `http://<ip_raspberry>:3838/hello/`)
