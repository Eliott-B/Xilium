# CAHIER DES CHARGES

> FA2 | BARKER, OUALI, GUILLERAY, GRAVIER, LEMOUTON

## Sommaire

- [CAHIER DES CHARGES](#cahier-des-charges)
  - [Sommaire](#sommaire)
  - [I./ Introduction](#i-introduction)
  - [II./ Enoncé](#ii-enoncé)
    - [Attente du client](#attente-du-client)
    - [Objectif fixé](#objectif-fixé)
  - [III./ Pré-requis](#iii-pré-requis)
  - [IV./ Priorités](#iv-priorités)
  - [Annexe](#annexe)
    - [Annexe 1](#annexe-1)

## I./ Introduction

&emsp;Le présent document est le cahier des charges du projet de la plateforme de ticketing interne. L’objectif de ce cahier des charges est de permettre la livraison d’un produit cohérent avec les attentes du client. Il permet d’éviter les incompréhensions et les ambiguïtés.  

&emsp;L’énoncé du document présent dans la deuxième partie résume les fonctionnalités primaires et la portée du projet. L’énoncé est divisé en 2 parties, une partie sur les attentes du client et une autre partie sur les objectifs que nous nous sommes fixés. Les attentes du client ont été écrites grâce à la création d’un tableau disponible en [annexe 1](#annexe-1). En troisième partie, les pré-requis présentent les technologies matérielles et logicielles nécessaires pour la réalisation de ce projet. On y trouve aussi les connaissances et compétences requises. Enfin, en dernière partie, seront listées les priorités éventuelles du développement, si elles ont été fixées avec l’accord du client.  
Pour établir ce document, nous avons utilisé un premier cahier des charges fourni par Monsieur Hoguin, disponible en [annexe](clients/cahier_des_charges_client.pdf).  

Dans ce projet, le client est le corps enseignant du département informatique.  


## II./ Enoncé

### Attente du client

&emsp;L’objectif de ce projet est de développer une plateforme de ticketing en ligne qui permet à ses utilisateurs d’établir des requêtes de dépannage, d’amélioration et de fonctionnalités.  

La plateforme contient 5 principaux acteurs :  
- Un administrateur système  
- Un administrateur web  
- Des techniciens  
- Des utilisateurs inscrits  
- Des visiteurs  

&emsp;Les acteurs doivent avoir accès aux fonctionnalités et aux pages qui leur sont propres en dépendant des rôles qui leur sont assignés. Voici la liste des acteurs ainsi que les informations les concernant : 

- L’administrateur système  : 
    - Il accède aux journaux d’activités de l’application par l’intermédiaire de la plateforme web.   
    - Il manipule les données statistiques  

- L’administrateur web :   
    - Il gère la liste de libellés affectés aux différents problèmes qui peuvent être rencontrés.  
    - Il définit les statuts des tickets (ouvert, en cours de traitement, fermé).   
    - Il définit les niveaux d'urgence des tickets à résoudre (faible, moyen, important, urgent).  
    - Il crée les comptes des techniciens.  
    - Il visualise les tickets ouverts et les affecte à un technicien.  

- Les techniciens :  
    - Ils peuvent s’attribuer un ticket.  
    - Ils changent l'état du ticket.  

- Les utilisateurs inscrits :   
    - Ils peuvent faire une demande de dépannage, c'est-à-dire ouvrir un ticket.  
    - Ils accèdent à leur tableau de bord contenant les tickets créés ainsi que leurs états.  
    - Ils peuvent accéder à leur profil.  
    - Ils peuvent changer leur mot de passe depuis leur compte.  

- Le visiteurs :  
    - Le visiteur qui s'inscrit pour la première fois doit remplir un formulaire d'inscription comportant un captcha de validation pour la création du compte.  
    - Il n'y a pas de confirmation d'inscription reçue par email ni de méthode de récupération de mot de passe. En effet, il doit y avoir une redirection vers une page temporaire.  
    - Il visualise les 10 dernières demandes, il n’a pas d’accès à un tableau de bord quelconque.  

&emsp;Tous les utilisateurs de l’application, soit les utilisateurs inscrits, les techniciens, les administrateur web et système, doivent se connecter et se déconnecter.  

&emsp;Le client doit pouvoir accéder au git du projet et à toutes les versions de celui-ci. Il doit aussi pouvoir accéder à toutes les sections du site afin de surveiller le bon déroulement du projet. Ainsi il sera plus aisé de travailler en collaboration en ayant des retours réguliers. La fréquence des dépôts est à établir par le client Monsieur Hoguin.  
Notre dépôt Git doit contenir la documentation et les annexes du projet. Il doit aussi contenir les codes sources du serveur ainsi que les codes permettant la création de la base de données. Il doit contenir toutes les informations et documents en lien avec le projet.  

&emsp;Un Raspberry Pi 4 et une carte SD doivent être mis à disposition par le personnel de l’IUT pour héberger la plateforme web. Les licences JetBrains ont été aussi fournies par l’IUT pour le développement du projet.  

&emsp;La page d’accueil doit contenir un texte expliquant le principe et le fonctionnement du site. Une vidéo de présentation du site devra aussi apparaître sur la page d’accueil.  

&emsp;Des journaux d’activités doivent être édités avec une date, une adresse IP, l’utilisateur auteur du ticket et le niveau d’urgence. Ils doivent être édités quand un ticket est créé ou quand une connexion infructueuse a lieu. Ces données seront utilisées à des fins de statistiques par l’administrateur système.  

&emsp;Les mots de passe de l’administrateur web et de l’administrateur système sont à définir et à fournir au client dans le dépôt. Par défaut deux comptes techniciens doivent être créés : tec1 et tec2 avec le mot de passe tec.  

&emsp;Les tickets doivent être par défaut dans le statut suivant : “ticket ouvert”. Les tickets fermés doivent se retrouver dans un historique. Les tickets sont définis par la nature du problème, le niveau d’urgence, le demandeur ainsi que le technicien en charge du ticket.  

### Objectif fixé

&emsp;Nous voulons faire un site facile d’utilisation, donc avec le moins de navigation possible et seulement l’affichage du nécessaire. Le site aura un style épuré pour faciliter l'expérience utilisateur et la navigation.  

&emsp;L’utilisateur peut suggérer un niveau d’urgence à son ticket, l’administrateur peut valider ou non ce niveau et le changer en conséquence.  
	
&emsp;Nous voudrions écrire le code en anglais pour une plus grande maintenabilité.  


## III./ Pré-requis

&emsp;Afin de réaliser ce projet, il est nécessaire de connaître et maîtriser les outils et technologies suivantes :   
- Linux (Raspbian)  
- HTML et CSS  
- PHP  
- MySQL  

&emsp;Des compétences dans différentes disciplines sont requises. Ce sont les disciplines suivantes :  
- Probabilités  
- Cryptographie  
- Développement web  
- Développement et conception de base de données  
- Génie logiciel  
- Anglais  
- Management des systèmes d’informations  
- Droits numériques  
- Communication professionnelle  
- Programmation système et architecture réseau  

## IV./ Priorités

&emsp;Au cours de ce projet, nous allons réaliser plusieurs tâches diverses et variées. Il est important de définir un ordonnancement des priorités afin de s’assurer que les tâches les plus importantes soient réalisées au plus vite. De ce fait, nous pourrons avancer convenablement sur les tâches moins importantes par la suite. Certaines priorités n’engendrent aucune conséquence mais sont importantes à respecter tout de même.  

&emsp;Pour ce projet la première priorité est de lancer et bien configurer le serveur. En effet, le serveur est le fondement du projet, sa base, il va héberger le site web, la base de données et s’occuper de la communication entre les deux. Il est primordial que les configurations d’accès soient convenablement gérées afin de limiter les intrusions malveillantes dans le système.  

&emsp;Une fois que le serveur est convenablement configuré et en place, la priorité est de réaliser une maquette statique du site web. Cette maquette statique est importante car c’est sur cette maquette qu’on fait toutes les modifications nécessaires afin de respecter notre charte graphique et l’accessibilité. Le respect de la charte graphique et l’accessibilité sont donc des priorités pour cette application. Deux maquettes seront réalisées, nous prendrons la décision ensuite quant à celle que nous allons retenir.   

&emsp;Une fois que le serveur et la maquette seront opérationnels, la prochaine priorité est de concevoir et créer la base de données qui va recueillir les informations du site. La conception de la base de données est optimisée pour être efficace et compacte. Sa configuration vise à sécuriser les informations sensibles et à limiter les accès.  

&emsp;La priorité principale de ce projet informatique est sa sécurité. On veut empêcher au maximum les intrusions dans le système ou encore les fuites de données de notre client.  
	
## Annexe

### Annexe 1

| Objet | Acteur | Action|
| :---- | :----- | :---- |
|Application web<br><br>Plateforme de ticketing interne<br><br>Type d’utilisateurs<br><br>Page d’accueil<br><br>Tableau de bord<br><br>Demandes<br><br>Statut des demandes<br><br>Vidéo de démonstration<br><br>Formulaire d’inscription (avec captcha)<br><br>Ticket<br><br>Profil<br><br>Mot de passe<br><br>Base de données<br><br>Libellés<br><br>Salles informatiques<br><br>Niveaux d’urgence<br><br>Plateforme web<br><br>Journaux d’activités<br><br>Date<br><br>Adresse IP<br><br>Serveur<br><br>Serveur Web<br><br>Serveur MySQL<br><br>Raspberry Pi 4|Étudiants<br><br>Professeurs (Client)<br><br>Administrateur système<br><br>Administrateur web<br><br>Techniciens<br><br>Utilisateur inscrit<br><br>Visiteur<br><br>Mr Hoguin (Client)|Ne pourra pas accéder à un tableau de bord (Visiteur)<br><br>Pourra visualiser les 10 dernières demandes (Visiteur)<br><br>Ne pourra pas faire de demande (Visiteur)<br><br>Remplira un formulaire d’inscription avec un captcha (Visiteur)<br><br>Ouvrir un ticket (Utilisateur)<br><br>Accéder à son tableau de bord (Utilisateur)<br><br>Accéder à son profil (Utilisateur)<br><br>Changer son mot de passe (Utilisateur)<br><br>Se connecter (Administrateur web, Technicien)<br><br>Gérer la liste des libellés affectés (Administrateur web)<br><br>Définir les statuts du ticket (Administrateur web)<br><br>Définir les différents niveaux d’urgences (Administrateur web)<br><br>Créer les comptes des techniciens (Administrateur web)<br><br>Visualiser les tickets ouverts (Administrateur web)<br><br>Affecter les tickets à un technicien (Administrateur web)<br><br>Se déconnecter (Administrateur web, Technicien)<br><br>S’attribuer un ticket (Technicien)<br><br>Changer l’état d’un ticket (Technicien)<br><br>Accéder aux journaux d’activités (Administrateur système)|


> FA2 | BARKER, OUALI, GUILLERAY, GRAVIER, LEMOUTON
