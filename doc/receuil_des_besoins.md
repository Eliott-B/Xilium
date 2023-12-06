# RECUEIL DES BESOINS

> FA2 | BARKER, OUALI, GUILLERAY, GRAVIER, LEMOUTON  

## SOMMAIRE

- [RECUEIL DES BESOINS](#recueil-des-besoins)
  - [SOMMAIRE](#sommaire)
  - [I./ Chapitre 1 – Objectif et portée](#i-chapitre-1--objectif-et-portée)
    - [(a) Quels sont la portée et les objectifs généraux ?](#a-quels-sont-la-portée-et-les-objectifs-généraux-)
    - [(b) Les intervenants. (Qui est concerné ?)](#b-les-intervenants-qui-est-concerné-)
    - [(c) Qu’est-ce qui entre dans cette portée ? Qu’est-ce qui est en dehors ? (Les limites du système)](#c-quest-ce-qui-entre-dans-cette-portée--quest-ce-qui-est-en-dehors--les-limites-du-système)
  - [II./ Chapitre 2 – Terminologie employée / Glossaire](#ii-chapitre-2--terminologie-employée--glossaire)
  - [III./ Chapitre 3 – Les cas d’utilisation](#iii-chapitre-3--les-cas-dutilisation)
    - [(a) Les acteurs principaux et leurs objectifs généraux.](#a-les-acteurs-principaux-et-leurs-objectifs-généraux)
    - [(b) Les cas d’utilisation](#b-les-cas-dutilisation)
  - [IV./ Chapitre 4 – La technologie employée](#iv-chapitre-4--la-technologie-employée)
    - [(a) Quelles sont les exigences technologiques pour ce système ?](#a-quelles-sont-les-exigences-technologiques-pour-ce-système-)
    - [(b) Avec quels systèmes ce système s’interfacera-t-il et avec quelles exigences ?](#b-avec-quels-systèmes-ce-système-sinterfacera-t-il-et-avec-quelles-exigences-)
  - [V./ Chapitre 5 – Autres exigences](#v-chapitre-5--autres-exigences)
    - [(a) Processus de développement](#a-processus-de-développement)
      - [i) Qui sont les participants au projet ?](#i-qui-sont-les-participants-au-projet-)
      - [ii) Quelles valeurs devront être privilégiées ? (exemple : simplicité, disponibilité, rapidité, souplesse etc... )](#ii-quelles-valeurs-devront-être-privilégiées--exemple--simplicité-disponibilité-rapidité-souplesse-etc-)
      - [iii) Quels retours ou quelle visibilité sur le projet les utilisateurs et commanditaires souhaitent-ils ?](#iii-quels-retours-ou-quelle-visibilité-sur-le-projet-les-utilisateurs-et-commanditaires-souhaitent-ils-)
      - [iv) Que peut-on acheter ? Que doit-on construire ? Qui sont nos concurrents ?](#iv-que-peut-on-acheter--que-doit-on-construire--qui-sont-nos-concurrents-)
      - [v) Quelles sont les autres exigences du processus ? (exemple : tests, installation, etc...)](#v-quelles-sont-les-autres-exigences-du-processus--exemple--tests-installation-etc)
      - [vi) À quelles dépendances le projet est-il soumis ?](#vi-à-quelles-dépendances-le-projet-est-il-soumis-)
    - [(b) Règles métier](#b-règles-métier)
    - [(c) Performances](#c-performances)
    - [(d) Opérations, sécurité, documentation](#d-opérations-sécurité-documentation)
    - [(e) Utilisation et utilisabilité](#e-utilisation-et-utilisabilité)
    - [(g) Questions non résolues ou reportées à plus tard](#g-questions-non-résolues-ou-reportées-à-plus-tard)
  - [VI./ Chapitre 6 – Recours humain, questions juridiques, politiques, organisationnelles.](#vi-chapitre-6--recours-humain-questions-juridiques-politiques-organisationnelles)
    - [(a) Quel est le recours humain au fonctionnement du système ?](#a-quel-est-le-recours-humain-au-fonctionnement-du-système-)
    - [(b) Quelles sont les exigences juridiques et politiques ?](#b-quelles-sont-les-exigences-juridiques-et-politiques-)
    - [(c) Quelles sont les conséquences humaines de la réalisation du système ?](#c-quelles-sont-les-conséquences-humaines-de-la-réalisation-du-système-)
    - [(d) Quels sont les besoins en formation ?](#d-quels-sont-les-besoins-en-formation-)
    - [(e) Quelles sont les hypothèses et les dépendances affectant l’environnement humain ?](#e-quelles-sont-les-hypothèses-et-les-dépendances-affectant-lenvironnement-humain-)


## I./ Chapitre 1 – Objectif et portée  

### (a) Quels sont la portée et les objectifs généraux ?  

&emsp;Le projet consiste à créer une application de ticketing interne à une organisation. Elle reçoit des demandes de dépannage des utilisateurs et permet à des techniciens d’intervenir sur les demandes. Le projet est à réaliser avant le mois de février. Il sera réalisé par les 5 membres de cette équipe. Nous définirons, plus en détail, dans la suite de ce document, la portée de ce projet (spécifications et exigences).  

### (b) Les intervenants. (Qui est concerné ?)  
&emsp;Les intervenants du projet sont principalement l’équipe de développement et l’équipe pédagogique. L’équipe de développement est constituée de Eliott BARKER, Chakib OUALI, Victor GUILLERAY, Kylian GRAVIER et Alexis LEMOUTON. L’équipe pédagogique est composée des enseignants du semestre 3.  

### (c) Qu’est-ce qui entre dans cette portée ? Qu’est-ce qui est en dehors ? (Les limites du système)  
&emsp;Il faut concevoir une application web en utilisant les langages web HTML, CSS, JavaScript et PHP ainsi que le langage de base de données SQL. Le serveur web doit être hébergé sur un Raspberry Pi configuré avec Apache d’installé.  


## II./ Chapitre 2 – Terminologie employée / Glossaire

**Ticket :** Message / formulaire fait au prêt d’administrateur et de technicien pour demander de l’aide ou suggérer des modifications.  

**Linux :** Système d’exploitation open source créé par Torvald Linus.  

**Raspberry :** Carte informatique permettant de faire fonctionner des serveurs.  

**Apache :** Service Linux qui permet d’héberger un serveur internet.  

**HTML :** Langage de balisage utilisé pour faire des sites internet statiques.  

**CSS :** Feuille de style permettant d’ajouter du style aux pages internet.  

**PHP :** Langage de programmation permettant de gérer des pages internet dynamiques côté serveur.  

**Markdown :** Langage de balisage utilisé pour écrire des rapports ou des notes.  

**SQL :** Langage de programmation permettant de gérer les bases de données.  

**MySQL :** Base de données utilisant le langage de programmation SQL.  

**Git :** Outil permettant de versionner et sauvegarder ses codes sources.  

**GitHub :** Site internet relié à Git pour avoir un accès graphique et distant au dépôt.  

**Commit :** Ajout de source sur le dépôt Git.  

**Branch :** Branche de l’arborescence Git. Permet d’ajouter des sources sans avoir de conflit direct avec les sources des autres développeurs.  

**Merge :** Mélange une branche dans une autre.   

**Tag :** Ajoute un nom de version.  

**Feedback :** Avis et critiques donnés par le client en retour d’un partage.  

**Pull Request :** Demande de merge une branche vers une autre branche du projet, qui doit être validée et pour laquelle les conflits de code doivent être résolus.  

**MVC :** Style d'architecture d'un logiciel informatique (model vue controler).  


## III./ Chapitre 3 – Les cas d’utilisation  


### (a) Les acteurs principaux et leurs objectifs généraux.

&emsp;Ce projet met en oeuvre 5 principaux acteurs :  
* un administrateur web : il s’occupe d’administrer les tickets, s’ils sont mal complétés ou non clôturés, il paramètre les libellés affectés aux problèmes, il peut en rajouter, en modifier ou en supprimer, de même pour les statuts de ticket et pour les niveaux d’urgence. Il crée les comptes des techniciens et les gère.  
* un administrateur système : il accède aux journaux d’activités de l’application.  
* des techniciens : ils peuvent s’attribuer un ticket. Ils peuvent changer l’état d’un ticket.  
* des utilisateurs inscrits : ils peuvent faire une demande de dépannage (ouvrir un ticket). Ils accèdent à leur tableau de bord (avec la liste des tickets qu’il a publié et leur état). Ils peuvent accéder à leurs profils pour changer leur mot de passe.  
* des visiteurs : ils peuvent accéder à la page d'accueil mais ils ne peuvent pas faire de tickets. Ils peuvent s’inscrire à la plateforme.  

### (b) Les cas d’utilisation  

&emsp;Pour tous les cas d’utilisation, la portée est de type boîte blanche puisqu’on décrit l’intérieur de l’application et non son utilité dans un autre système. L’application est une boite noir car elle intéragit avec des acteurs extérieurs mais nos cas d’utilisation concernent l’intrérieur de l’application.  
Les cas d’utilisation sont disponibles dans [les spécifications](specifications.md).   


## IV./ Chapitre 4 – La technologie employée   

### (a) Quelles sont les exigences technologiques pour ce système ?  
&emsp;Ce projet sera réalisé à l’aide des technologies suivantes :   
* Un système Git avec un dépôt distant sur Github  
* Un système Linux (Raspbian)  
* Un serveur Apache  
* Une base de données MySQL  
* Une interface web développée en HTML, CSS, JavaScript et PHP  
* Une machine d’hébergement : Raspberry Pi  
* Des documentations écrites en Markdown  


### (b) Avec quels systèmes ce système s’interfacera-t-il et avec quelles exigences ?
&emsp;Il s’interfacera dans un navigateur web et il devra fonctionner sur n’importe quel navigateur, il devra s’adapter à toutes les tailles d’écran. Il devra respecter des exigences de sécurité importantes pour éviter toute fuite de données ou de cyber attaque.  


## V./ Chapitre 5 – Autres exigences  

### (a) Processus de développement  

#### i) Qui sont les participants au projet ?  
&emsp;Les participants du projet sont l’équipe de développement. 

#### ii) Quelles valeurs devront être privilégiées ? (exemple : simplicité, disponibilité, rapidité, souplesse etc... )  
&emsp;Les valeurs privilégiées sont la robustesse (de l’application), la maintenabilité du code. Pour une expérience utilisateur sans faille, il faut une application simple d’usage et disponible sans arrêt, puisqu’elle concerne la résolution de problèmes plus ou moins graves.    

#### iii) Quels retours ou quelle visibilité sur le projet les utilisateurs et commanditaires souhaitent-ils ?  
&emsp;Ils souhaitent avoir un retour de manière ponctuel à l’aide de tags sur Git. Il pourront voir les versions finales de chaque livrable.  

#### iv) Que peut-on acheter ? Que doit-on construire ? Qui sont nos concurrents ? 
Nos concurrents sont les sites de ticketing comme Tuleap.  

#### v) Quelles sont les autres exigences du processus ? (exemple : tests, installation, etc...)  
Il faut réaliser un dossier de tests complets.  

#### vi) À quelles dépendances le projet est-il soumis ?   
&emsp;Le projet est soumis à quelques dépendances :  
* Dépendances de ressources :   
Le projet est dépendant aux ressources telles que le personnel ou encore le matériel mis à disposition. Si des absences se font ressentir, le projet a de grandes chances d’être impacté.  

* Dépendances de calendrier :  
Le projet peut être soumis aux délais de réalisation. Il doit être rendu en février 2023.  

* Dépendances de gestion :   
La gestion du projet peut dépendre de facteurs tels que la communication, la coordination et la prise de décision entre les individus. Des problèmes de gestion peuvent entraîner des retards de livraison ou des problèmes dans le projet.  

* Dépendances externes :
Les projets peuvent être soumis à des dépendances externes, telles que des réglementations gouvernementales, des conditions météorologiques ou encore des événements politiques. Si le déplacement d’un membre est interrompu, le projet risque de perdre en efficacité.  

Ces facteurs peuvent influencer le déroulement du projet.  

### (b) Règles métier  
&emsp;Pour la bonne réalisation du projet, il faut suivre le processus du génie logiciel puis de la programmation orientée objet avec une architecture MVC.  

### (c) Performances  
&emsp;Les pages du serveur web doivent charger rapidement et correctement. Les tickets envoyés par les utilisateurs doivent être disponibles instantanément à la résolution pour éviter des retards de traitement.  

### (d) Opérations, sécurité, documentation  
&emsp;Afin de limiter les attaques malveillantes, l’équipe prend soin à ce que chaque partie du projet soit le plus sécurisée possible, les vulnérabilités de la plateforme sont donc réduites au maximum.
Durant la réalisation de ce projet, l’équipe s’occupe de rédiger une documentation complète et cohérente avec les versions du projet qu’elle poste régulièrement. Une documentation pour chaque utilisateur doit être disponible, que ce soit pour le traitement des tickets par l’administrateur système ou pour l’utilisation de la plateforme par les utilisateurs. Afin d’optimiser la maintenabilité du projet, le code sera documenté et commenté pour comprendre facilement son utilité. Les rapports et les documentations doivent être écrits en Markdown.  

### (e) Utilisation et utilisabilité  
**Utilisation :**  
Le but de cette application est de faciliter et d’accélérer la résolution des problèmes rencontrés par les utilisateurs. Pour ça, l’application doit être fluide et active.  
**Utilisabilité :**  
L’application doit être facile d’utilisation, afin de permettre l’accessibilité à tous les utilisateurs de la plateforme.  

### (f) Maintenance et portabilité  
&emsp;Le projet est programmé en anglais et documenté pour le mettre à jour facilement. De plus, il faut éviter les parties de code redondantes et éviter les incohérences. L’utilisation de l’anglais permet de garantir une meilleure maintenabilité.  
La portabilité du projet se limite aux distributions Linux. Cependant il est possible de charger le site sur un autre système d’exploitation, mais il faudra changer certains paramètres et les vérifier, car il n’est pas garanti que la migration se déroule sans problèmes.  

### (g) Questions non résolues ou reportées à plus tard  
*RAS*  


## VI./ Chapitre 6 – Recours humain, questions juridiques, politiques, organisationnelles.  
### (a) Quel est le recours humain au fonctionnement du système ?  
&emsp;Ce site est mis en place par l’équipe de développement appelé Rooteam. Une fois installé et opérationnel, il nécessite des techniciens support disponibles pour répondre aux tickets des utilisateurs. Il doit aussi y avoir un administrateur web et administrateur système pour l’administration de l’application.  

### (b) Quelles sont les exigences juridiques et politiques ?  
*RAS*  

### (c) Quelles sont les conséquences humaines de la réalisation du système ?  
&emsp;Afin de bien intégrer le système à son nouvel environnement. Les nouveaux utilisateurs devront prendre l’habitude de se référer à la plateforme. A noter que l’interface de celle-ci sera optimisée pour que tout le monde puisse l’utiliser facilement et intuitivement.  

&emsp;Lors de la réalisation de ce projet, la Rooteam, a mobilisé ses 5 membres pleinement afin que le projet puisse être fini dans les temps avec toutes les fonctionnalités souhaitées.  

### (d) Quels sont les besoins en formation ?  
&emsp;Pour le bon déroulement du projet, il faut se former au cours du BUT Informatique c'est-à-dire à Git, aux langages du web (HTML, CSS, JavaScript, PHP, SQL) et à l’utilisation d’un système Linux.
Il faut aussi savoir maîtriser le site web Trello et la suite JetBrains.  

### (e) Quelles sont les hypothèses et les dépendances affectant l’environnement humain ?  
*RAS*  

> FA2 | BARKER, OUALI, GUILLERAY, GRAVIER, LEMOUTON  