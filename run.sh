#!/bin/bash
# Script pour lancer l'application
# Usage: ./run.sh [-it] [-y] [-n] [-h]
# -it: pour lancer l'application en mode interactif
# -y: pour créer les fichiers d'environnement
# -n: pour ne pas créer les fichiers d'environnement
# -h: pour afficher l'aide
# Auteur: Eliott BARKER
# Application: Xilium

startOption=""
response=""
if [ $# -gt 0 ]; then
    for arg in "$@"; do
        if [[ $arg = "-it" ]]; then
            startOption=$arg
        elif [[ $arg = "-h" ]]; then
            echo "Script pour lancer l'application Xilium"
            echo "Usage: ./run.sh [-it] [-y/-n]"
            echo "-it: pour lancer l'application en mode interactif"
            echo "-y: pour créer les fichiers d'environnement"
            echo "-n: pour ne pas créer les fichiers d'environnement"
            exit 0
        elif [[ $arg = "-y" ]]; then
            response=$arg
        elif [[ $arg = "-n" ]]; then
            response=$arg
        else
            echo "Usage: ./run.sh [-h]"
            exit 1
        fi
    done
fi

if [[ $response = "" ]]; then
    echo "Voulez-vous créer les fichiers d'environnement ? (y/n)"
    read response
fi

if [[ $response = "y" ]]; then
    python3 setup_env.py
    cd ./src/config && python3 config/config.py >> /dev/null
    cd ../../
fi

if [ ! -d database/data ]; then
    mkdir database/data
    cd ./src/config && python3 config/config.py >> /dev/null
    cd ../../
fi

if [ ! -d shiny-server/logs ]; then
    mkdir shiny-server/logs
fi

chmod -R 755 shiny-server

if [[ $startOption = "-it" ]]; then
    echo "Ctrl+C pour arrêter"
    sleep 1
    docker compose up
else
    docker compose up -d
    echo "'docker compose down' pour arrêter"
fi

# sleep 5

# package=$(echo "${PWD##*/}" | tr '[:upper:]' '[:lower:]')

# docker exec -it $package-app-1 bash -c "cd /var/www/html && python3 config/config.py"

if [ $? = 0 ]; then
    echo "L'application est disponible à l'adresse http://localhost/"
    exit 0
else
    exit 1
fi
