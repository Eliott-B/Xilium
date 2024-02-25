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

#### Vue d'ensemble du Système
Le système est composé de trois principaux composants :
* **MODELE**  
* **VUE**  
* **CONTROLEUR**  

Ces composants travaillent ensemble pour fournir une expérience utilisateur cohérente et fonctionnelle.



#### Le modele
Le composant modèle correspond à la base de données. Il s'interface
avec le controleur grâce à PDO. PDO est un module de PHP permettant de 
dialoguer avec une base de données.

#### La Vue
La Vue est la partie du système qui est visible et accessible à l'utilisateur.  
Elle est composée du Navigateur qui sert les pages.html généré par le serveur (le compsoant 
est nommé pages pour préciser qu'il s'agit de toutes les pages qui seront envoyé au 
navigateur) ainsi que les images.jpg (meme convention de nommage)  
Le Navigateur communique aussi avec le controlleur via des requete HTTP

### Le controleur
Le Contrôleur agit comme l'intermédiaire entre le Modèle et la Vue. 
Il est composé du serveur web qui gère les requêtes entrantes du navigateur et les 
traite en conséquence. 
Le Contrôleur est composé de deux éléments principaux : le Serveur Web et le Site Web.  
- Le Serveur Web est chargé de recevoir et de traiter les requêtes HTTP provenant des navigateurs des utilisateurs. 
Le controleur incarne le Raspberry Pi qui héberge le serveur web, lequel accede
au site web et génère et distribue les pages web aux clients, qui sont représentés 
ici par la Vue.
- Le site web est constitué de 4 composantes qui sont des scripts php. Il s'agit des 
scripts suivants ;


#### Router.php
Le script Router.php sert de point d'entrée au site web. Il lit l'url et en 
fonction du lien de l'url, il appelle des fonctions dans le controller correspondant

#### Controllers.php
Les scripts Controllers.php (Controllers.php représente tous les controleurs)  
1- soit renvoie une vue au router qui l'affiche (il recupere les données a afficher 
sur la vue via le modele)  
2- soit il envoie des données au modèle

#### Views.php
Les scripts Views.php sert afficher les données demandées au clients, donc au navigateur.
Il représente les vues du site.

#### Models.php
Les scripts Models.php représente les modeles du site web. Ils communiquent avec la base
de données pour récupérer ou mettre à jour les données.

### Conclusion  

Le diagramme de composants fournit une vue d'ensemble claire de l'architecture du 
système, mettant en lumière les différents composants et leurs interactions.
On remarque ici que chaque compsant de la plateforme a sa propre place et ses relations 
sont bien définies afin d'assurer un bon fonctionnement.
Ce diagramme peut donc servir de guide pour le développement, la maintenance et 
la compréhension du site web dans son ensemble.


> FA2 | BARKER, OUALI, GUILLERAY, GRAVIER, LEMOUTON  