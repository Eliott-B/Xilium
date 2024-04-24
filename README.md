# Xilium

> 2023-2024

## 📋 Description

Xilium est une application de ticketing pour les étudiants et les professeurs de l'IUT de Vélizy.  
Les utilisateurs peuvent créer des tickets pour signaler des problèmes dans l'IUT, et les techniciens de l'IUT peuvent les traiter grâce à une interface dédiée.  

## 🔧 Utilisation

1. Télécharger la dernière release de l'application : [Page releases](https://github.com/Eliott-B/Xilium/releases)
2. Extraire l'archive
3. Installer [Docker](https://docs.docker.com/get-docker/)
4. Lancer le fichier `run.sh` pour démarrer l'application :
```bash
./run.sh
```

Pour éteindre l'application, il suffit de lancer la commande suivante :
```bash
docker compose down
```

⚠️ Il faut être administrateur pour lancer les commandes Docker. (sudo ou root). Sinon il faut ajouter l'utilisateur au groupe Docker.  

## 💻 Compatabilités

L'application a été testées sur les systèmes suivants :
- Windows 10/11
- Rasbian (Debian Bullseye 64 bits)
- MacOS Sonoma
- Ubuntu 22.04.4 (LTS)

⚠️ L'application n'est pas compatible avec les systèmes ARM 32 bits. MariaDB et MySQL sous Docker ne supporte pas cette architecture.

## 💿 Logiciels et versions

- Docker : 26.0.0 [Raspberry]
- Debian : 11 (Bullseye) [Raspberry]
- php-apache : 8.2 [Docker]
- mariadb : 11.3 [Docker]
- Python : 3.xx [Docker]

## 🤝 Contributeurs

- [Eliott BARKER](https://github.com/Eliott-B)
- [Chakib OUALI](https://github.com/444chak)
- [Kylian GRAVIER](https://github.com/SaAxok)
- [Victor GUILLERAY](https://github.com/Neifko)
- [Alexis LEMOUTON](https://github.com/Junior78180)
