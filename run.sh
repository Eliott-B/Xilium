#!/bin/bash

echo "Voulez-vous créer les fichiers d'environnement ? (y/n)"
read response

if [ $response = "y" ] ; then
    python3 setup_env.py
    cd ./src/config && python3 config/config.py >> /dev/null
    cd ../../
fi

if [ ! -d database/data ] ; then
    mkdir database/data
    cd ./src/config && python3 config/config.py >> /dev/null
    cd ../../
fi

if [ ! -d shiny-server/logs ] ; then
    mkdir shiny-server/logs
fi

docker compose up -d

# sleep 5

# package=$(echo "${PWD##*/}" | tr '[:upper:]' '[:lower:]')

# docker exec -it $package-app-1 bash -c "cd /var/www/html && python3 config/config.py"

if [ $? = 0 ] ; then
    echo "L'application est disponible à l'adresse http://localhost/"
    exit 0
else
    exit 1
fi
