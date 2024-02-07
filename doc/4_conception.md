# CONCEPTION  

> FA2 | BARKER, OUALI, GUILLERAY, GRAVIER, LEMOUTON  

## Modèle de conception de base de données  

### Modèle relationnel  

![Modèle relationnel](./img/Modele_Relationnel.png)  

### Modèle logique  

roles (__role_id__, role_name)  
priorities (__prio_id__, prio_name, prio_index)  
label (__labe_id__, labe_name)  
status (__stat_id__, stat_name)  
users (__user_id__, user_username, user_password, user_name, user_firstname, #role_id)  
ticket (__tick_id__, tick_title, tick_description, #author_id, #label_id, #priority_id, #status_id, #updater_id, date_creation, date_update)  
logs (__log_id__, log_date, log_ip, log_content, #tick_id, #user_id)  
comments (__com_id__, com_title, com_comment, com_date, #ticket_id, #user_id, #reply_to)  

## Diagramme des composants

### Composants  

![Diagramme_composants](./img/diagramme_composants.png)


Nous avons créer les composants :  

* **MODELE**  
* **VUE**  
* **CONTROLEUR**  



#### Le modele,
Le modèle est vide, il ne contient aucune composante interne. Cependant il communique
avec le controlleur via un protocole PDO

#### La Vue
La Vue représente le site web servi du coté du client.  
La Vue est composée du Navigateur qui sert les pages.html ainsi que les img.jpg  
Le Navigateur communique aussi avec le controlleur via des requete HTTP

### Le controleur
Le controleur est consitué de deux composants, le site web ainsi que le serveur web.  
Le serveur web représente le Raspberry qui héberge le site web et sert les pages du site web aux clients, ici la Vue.  
Le site web est constitué de 4 composantes qui sont des scripts php. Il s'agit des scripts :
- Router.php
- Controllers.php
- Views.php
- Models.php

#### Router.php
Le script Router.php sert de point d'entrée au site web. Il lit l'url et en fonction du lien de l'url, il appelle des fonctions dans le controller correspondant

#### Controllers.php
Le script Controllers.php  
1- soit renvoie une vue au router qui l'affiche (il recupere les données a afficher sur la vue via le modele)  
2- soit il envoie des données au modèle

#### Views.php
Le script Views.php sert afficher les données demandées au clients, donc au navigateur.

#### Models.php
Le script Models.php




> FA2 | BARKER, OUALI, GUILLERAY, GRAVIER, LEMOUTON  