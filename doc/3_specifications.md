# SPECIFICATIONS  

> FA2 | BARKER, OUALI, GUILLERAY, GRAVIER, LEMOUTON  

## Maquettes

Nous avons réalisé 2 maquettes en HTML CSS.  
Une première est disponible ici : [Maquette 1](../maquettes/maquette1/index.html)  
Une seconde est disponible ici : [Maquette 2](../maquettes/maquette2/index.html)   

Pour l'application, nous avons choisi de d'utiliser la maquette 2.  

## Cas d'utilisation  

Le diagramme des cas d'utilisation est disponible ici : [Cas d'utilisation](cas_utilisation/index.html).   

**Cas d'utilisation 1 :** Utiliser l’application  
Objet : utilisation de l’application  
Contexte d'utilisation : scénario de base de l’utilisation de l’application  
Portée : Xilium  
Niveau : utilisateur  
Acteur principal : visiteur  
Précondition : aucune  
Garantie minimale : Avoir une page d’erreur  
Garantie en cas de succès : Accéder à l’application  
Déclencheur : Taper l’URL de l’application 

Scénario nominal :  
1. Le visiteur arrive sur la page d'accueil  
2. Le visiteur voit les 10 derniers tickets  
3. Le visiteur peut se connecter  

Extension :  
1. Le visiteur s’inscrit  


**Cas d'utilisation 2 :** Se connecter  
Objet : Se connecter à son compte  
Contexte d'utilisation : Lorsqu’un visiteur veut se connecter à son compte utilisateur.  
Portée : Xilium  
Niveau : sous-fonctions  
Acteur principal : un utilisateur  
Précondition : être inscrit  
Garantie minimale : Ne pas être connecté  
Garantie en cas de succès : Être connecté  
Déclencheur : Bouton “se connecter”  

Scénario nominal :  
1. L’utilisateur clique sur le bouton “se connecter”  
2. L’utilisateur entre son nom d’utilisateur  
3. L’utilisateur entre son mot de passe  
4. L’utilisateur voit son profil  

Extension :  
1. L’utilisateur est redirigé sur la page de connection  
2. L’utilisateur reçoit message d’erreur  
3. L’utilisateur n’est pas être connecté  


**Cas d'utilisation 3 :** Se déconnecter  
Objet : Se déconnecter  
Contexte d'utilisation : Lorsque l’utilisateur veut se déconnecter.  
Portée : Xilium  
Niveau : sous-fonction  
Acteur principal : un utilisateur  
Précondition : être connecté  
Garantie minimale : Être déconnecté  
Garantie en cas de succès : Être déconnecté  
Déclencheur : Bouton “se déconnecter”  

Scénario nominal :  
1. L’utilisateur clique sur le bouton “se déconnecter”  
2. L’utilisateur est déconnecté  

Extension :  
1. L’utilisateur est redirigé vers la page d’accueil  
2. L’utilisateur doit être déconnecté  


**Cas d'utilisation 4 :** S’inscrire  
Objet : S’inscrire  
Contexte d'utilisation : Lorsqu’un visiteur veut se connecter.  
Portée : Xilium  
Niveau : utilisateur  
Acteur principal : un visiteur  
Précondition : aucune  
Garantie minimale : Ne pas être inscrit  
Garantie en cas de succès :  Être inscrit  
Déclencheur : Bouton “s'inscrire”  

Scénario nominal :  
1. Le visiteur clique sur le bouton “s’inscrire”  
2. Le visiteur entre ses informations dans le formulaire  
3. Le visiteur valide le formulaire  
4. Le visiteur est inscrit  

Extension :  
1. Le visiteur est redirigé vers la page d’inscription  
2. Le visiteur reçoit un message d’erreur  
3. Le visiteur n’est pas inscrit  


**Cas d'utilisation 5 :** Ouvrir un ticket  
Objet : Ouverture d’un ticket  
Contexte d'utilisation : Lorsque l'utilisateur a besoin d’ouvrir un ticket.  
Portée : Xilium  
Niveau : utilisateur  
Acteur principal : un utilisateur  
Précondition : être connecté  
Garantie minimale : Ne pas créer le ticket  
Garantie en cas de succès : Ticket créé  
Déclencheur : Bouton “ouvrir un ticket”  

Scénario nominal :  
1. L’utilisateur clique sur le bouton “ouvrir un ticket”  
2. L’utilisateur écrit l’objet de son ticket  
3. L’utilisateur choisit la nature du ticket  
4. L’utilisateur rentre la description  
5. L’utilisateur choisit le niveau d’urgence estimé  
6. L’utilisateur envoie son ticket  

Extension :  
1. L’utilisateur est redirigé vers l’accueil  
2. L’utilisateur reçoit un message d’erreur  
3. Le ticket n’est pas créé  


**Cas d'utilisation 6 :** Accéder aux tickets  
Objet : Accéder aux tickets  
Contexte d'utilisation : Lorsque l'utilisateur a besoin d'accéder à un ticket.  
Portée : Xilium  
Niveau : sous-fonction  
Acteur principal : un utilisateur  
Précondition : être connecté  
Garantie minimale : Ne pas accéder au ticket  
Garantie en cas de succès : Accéder au ticket  
Déclencheur : Clique sur le nom du ticket  

Scénario nominal :  
1. L’utilisateur clique sur le bouton “tableau de bord”  
2. L’utilisateur clique sur le nom du ticket qui l’intéresse  

Extension :  
1. L’utilisateur est redirigé vers la page du tableau de bord  
2. L’utilisateur reçoit un message d’erreur  


**Cas d'utilisation 7 :** Changer son mot de passe  
Objet : Changer son mot de passe  
Contexte d'utilisation : Lorsque l’utilisateur veut changer son mot de passe.  
Portée : Xilium  
Niveau : sous-fonction  
Acteur principal : un utilisateur  
Précondition : être connecté  
Garantie minimale : Ne pas changer le mot de passe  
Garantie en cas de succès : Changer le mot de passe  
Déclencheur : Bouton “changer son mot de passe”  

Scénario nominal :  
1. L’utilisateur clique sur le bouton “profil”  
2. L’utilisateur clique sur le bouton “changer son mot de passe”  
3. L’utilisateur entre son ancien mot de passe  
4. L’utilisateur entre son nouveau mot de passe deux fois  
5. L’utilisateur a un nouveau mot de passe  

Extension :  
1. L’utilisateur est redirigé vers son profil  
2. L’utilisateur reçoit un message d’erreur  
3. Le mot de passe de l’utilisateur n’a pas été modifié  


**Cas d'utilisation 8 :** Modifier un ticket  
Objet : modifier un ticket  
Contexte d'utilisation : Lorsque l’utilisateur veut modifier son ticket.  
Portée : Xilium  
Niveau : utilisateur  
Acteur principal : un utilisateur  
Précondition : être connecté et avoir un ticket  
Garantie minimale : Ne pas modifier le ticket  
Garantie en cas de succès : modifier le ticket  
Déclencheur : Bouton “modifier”  

Scénario nominal :  
1. L’utilisateur clique sur le bouton “tableau de bord”  
2. L’utilisateur clique sur titre de son ticket  
3. L’utilisateur clique sur le bouton “modifier”  
4. L’utilisateur modifie les champs de son ticket  
5. L’utilisateur valide les modifications  

Extension :  
1. L’utilisateur est redirigé vers le tableau de bord  
2. L’utilisateur reçoit un message d’erreur  
3. Le ticket n’est pas édité  


**Cas d'utilisation 9 :** Fermer un ticket  
Objet : fermer un ticket  
Contexte d'utilisation : Lorsque l’utilisateur veut fermer un ticket  
Portée : Xilium  
Niveau : sous-fonction  
Acteur principal : utilisateur  
Précondition : être connecté et avoir un ticket  
Garantie minimale : Ne pas fermer le ticket  
Garantie en cas de succès : Fermer le ticket  
Déclencheur : Bouton “fermé”  

Scénario nominal :  
1. L’utilisateur clique sur le bouton “tableau de bord”  
2. L’utilisateur clique sur titre de son ticket  
3. L’utilisateur clique sur le bouton “fermé”  
4. L’utilisateur confirme la fermeture de son ticket  

Extension :  
1. L’utilisateur est redirigé vers le ticket  
2. L’utilisateur reçoit un message d’erreur  
3. Le ticket n’est pas fermé  


**Cas d'utilisation 10 :** Ajouter un commentaire à un ticket  
Objet : Ajouter un commentaire à un ticket  
Contexte d'utilisation : Lorsque l’utilisateur veut ajouter un commentaire à un ticket  
Portée : Xilium  
Niveau : utilisateur  
Acteur principal : utilisateur  
Précondition : être connecté et avoir un ticket  
Garantie minimale : Ne pas ajouter de commentaires  
Garantie en cas de succès : Ajouter le commentaire  
Déclencheur : Formulaire rempli  

Scénario nominal :  
1. L’utilisateur clique sur le bouton “tableau de bord”  
2. L’utilisateur clique sur titre de son ticket  
3. L’utilisateur écrit son message dans le champs commentaire  
4. L’utilisateur clique sur le bouton “envoyer”  

Extension :  
1. L’utilisateur est redirigé vers le ticket  
2. L’utilisateur reçoit un message d’erreur  
3. Le commentaire n’est pas ajouté  


**Cas d'utilisation 11 :** S’attribuer un ticket  
Objet : S’attribuer un ticket  
Contexte d'utilisation : Quand un technicien s’attribue un ticket  
Portée : Xilium  
Niveau : sous-fonction  
Acteur principal : Technicien  
Précondition : être connecté en technicien  
Garantie minimale : Ne pas s’attribuer le ticket  
Garantie en cas de succès : S’attribuer le ticket  
Déclencheur : Bouton “s’attribuer le ticket”  

Scénario nominal :  
1. Le technicien clique sur le bouton “tableau de bord”  
2. Le technicien clique sur le titre du ticket  
3. Le technicien clique sur le bouton “s’attribuer le ticket”  

Extension :  
1. Le technicien est redirigé vers le ticket  
2. Le technicien reçoit un message d’erreur  
3. Le technicien n’est pas attribué au ticket  


**Cas d'utilisation 12 :** Changer l’état d’un ticket  
Objet : Changer l’état d’un ticket  
Contexte d'utilisation : Quand un technicien veut changer l’état d’un ticket  
Portée : Xilium  
Niveau : sous-fonction  
Acteur principal : Technicien  
Précondition : être connecté en technicien  
Garantie minimale : Ne pas changer l’état  
Garantie en cas de succès : Changer l’état  
Déclencheur : Bouton “changer l’état”  

Scénario nominal :  
1. Le technicien clique sur le bouton “tableau de bord”  
2. Le technicien clique sur le titre du ticket  
3. Le technicien clique sur le bouton “changer l’état”  
4. Le technicien sélectionne le nouvel état du ticket  
5. Le technicien confirme son choix  

Extension :  
1. Le technicien est redirigé vers le ticket  
2. Le technicien reçoit un message d’erreur  
3. L’état du ticket n’est pas changé  


**Cas d'utilisation 13 :** Ajouter un libellé  
Objet : Ajouter un libellé  
Contexte d'utilisation : Quand l’administrateur web veut ajouter un libellé  
Portée : Xilium  
Niveau : utilisateur  
Acteur principal : Administrateur web  
Précondition : être connecté en administrateur web  
Garantie minimale : Ne pas ajouter un libellé  
Garantie en cas de succès : Ajouter le libellé  
Déclencheur : Bouton “Ajouter”  

Scénario nominal :  
1. L’administrateur web clique sur le bouton “administration”  
2. L’administrateur web clique sur le bouton “modifier les libellés”  
3. L’administrateur web clique sur le bouton “ajouter”  
4. L’administrateur web rempli le nom et la description du libellé  
5. L’administrateur web confirme son choix.  

Extension :  
1. L’administrateur web est redirigé vers la page administration  
2. L’administrateur web reçoit un message d’erreur  
3. Le libellé n’est pas ajouté  


**Cas d'utilisation 14 :** Modifier un libellé  
Objet : Modifier un libellé  
Contexte d'utilisation : Quand l’administrateur web veut ajouter un libellé  
Portée : Xilium  
Niveau : utilisateur  
Acteur principal : Administrateur web  
Précondition : être connecté en administrateur web  
Garantie minimale : Ne pas modifier un libellé  
Garantie en cas de succès : Modifier le libellé  
Déclencheur : Bouton “modifier”  

Scénario nominal :  
1. L’administrateur web clique sur le bouton “administration”  
2. L’administrateur web clique sur le bouton “modifier les libellés”  
3. L’administrateur web clique sur le bouton “modifier”  
4. L’administrateur web rempli le nouveau nom et, ou la nouvelle description du libellé  
5. L’administrateur web confirme son choix.  

Extension :  
1. L’administrateur web est redirigé vers la page administration  
2. L’administrateur web reçoit un message d’erreur  
3. Le libellé n’est pas modifié  


**Cas d'utilisation 15 :** Supprimer un libellé  
Objet : Supprimer un libellé  
Contexte d'utilisation : Quand l’administrateur web veut supprimer un libellé  
Portée : Xilium  
Niveau : utilisateur  
Acteur principal : Administrateur web  
Précondition : être connecté en administrateur web  
Garantie minimale : Ne pas supprimer un libellé  
Garantie en cas de succès : supprimer le libellé  
Déclencheur : Bouton “supprimer”  

Scénario nominal :  
1. L’administrateur web clique sur le bouton “administration”  
2. L’administrateur web clique sur le bouton “modifier les libellés”  
3. L’administrateur web clique sur le bouton “supprimer” à côté du titre du libellé  

Extension :  
1. L’administrateur web est redirigé vers la page administration  
2. L’administrateur web reçoit un message d’erreur  
3. Le libellé n’est pas retiré  


**Cas d'utilisation 16 :** Changer le statut d’un ticket  
Objet : Changer le statut d’un ticket  
Contexte d'utilisation : Quand l’administrateur web veut changer le statut d’un ticket  
Portée : Xilium  
Niveau : sous-fonction  
Acteur principal : Administrateur web  
Précondition : être connecté en administrateur web  
Garantie minimale : Ne pas changer le statut  
Garantie en cas de succès : Changer le statut  
Déclencheur : Bouton “modifier le statut”  

Scénario nominal :  
1. L’administrateur web clique sur le bouton “tableau de bord”  
2. L’administrateur web clique sur titre du ticket  
3. L’administrateur web clique sur le bouton “modifier le statut”  
4. L’administrateur web choisi le nouveau statut  
5. L’administrateur web confirme son choix.  

Extension :  
1. L’administrateur web est redirigé vers le ticket  
2. L’administrateur web reçoit un message d’erreur  
3. Le ticket ne change pas de statut  


**Cas d'utilisation 17 :** Changer le niveau d’urgence d’un ticket  
Objet : Changer le niveau d’urgence d’un ticket  
Contexte d'utilisation : Quand l’administrateur web veut changer le niveau d’urgence d’un ticket  
Portée : Xilium  
Niveau : sous-fonction  
Acteur principal : Administrateur web  
Précondition : être connecté en administrateur web  
Garantie minimale : Ne pas changer le niveau d’urgence  
Garantie en cas de succès : Changer le niveau d’urgence  
Déclencheur : Bouton “modifier le niveau d’urgence”  

Scénario nominal :  
1. L’administrateur web clique sur le bouton “tableau de bord”  
2. L’administrateur web clique sur titre du ticket  
3. L’administrateur web clique sur le bouton “modifier le niveau d’urgence”  
4. L’administrateur web choisi le nouveau niveau d’urgence  
5. L’administrateur web confirme son choix.  

Extension :  
1. L’administrateur web est redirigé vers le ticket  
2. L’administrateur web reçoit un message d’erreur  
3. Le ticket ne change pas de niveau d’urgence  


**Cas d'utilisation 18 :** Ajouter un niveau d’urgence  
Objet : Ajouter un niveau d’urgence  
Contexte d'utilisation : Quand l’administrateur web veut ajouter un niveau d’urgence  
Portée : Xilium  
Niveau : utilisateur  
Acteur principal : Administrateur web  
Précondition : être connecté en administrateur web  
Garantie minimale : Ne pas ajouter de niveau d’urgence  
Garantie en cas de succès : Ajouter le niveau d’urgence  
Déclencheur : Bouton “ajouter”  

Scénario nominal :  
1. L’administrateur web clique sur le bouton “administration”  
2. L’administrateur web clique sur le bouton “modifier les niveaux d’urgence”  
3. L’administrateur web clique sur le bouton “ajouter”  
4. L’administrateur web rempli le label du niveau d’urgence  
5. L’administrateur web confirme son choix.  

Extension :  
1. L’administrateur web est redirigé vers la page administration  
2. L’administrateur web reçoit un message d’erreur  
3. Le niveau d’urgence n’est pas ajouté  


**Cas d'utilisation 19 :** Supprimer un niveau d’urgence  
Objet : Supprimer un niveau d’urgence  
Contexte d'utilisation : Quand l’administrateur web veut supprimer un niveau d’urgence  
Portée : Xilium  
Niveau : utilisateur  
Acteur principal : Administrateur web  
Précondition : être connecté en administrateur web  
Garantie minimale : Ne pas supprimer de niveau d’urgence  
Garantie en cas de succès : supprimer le niveau d’urgence  
Déclencheur : Bouton “supprimer”  

Scénario nominal :  
1. L’administrateur web clique sur le bouton “administration”  
2. L’administrateur web clique sur le bouton “modifier les niveaux d’urgence”  
3. L’administrateur web clique sur le bouton “supprimer” à côté du titre du niveau d’urgence  

Extension :  
1. L’administrateur web est redirigé vers la page administration  
2. L’administrateur web reçoit un message d’erreur  
3. Le niveau d’urgence n’est pas retiré  


**Cas d'utilisation 20 :** Attribuer un ticket à un technicien  
Objet : Attribuer un ticket à un technicien  
Contexte d'utilisation : Quand l’administrateur web veut attribuer un ticket à un technicien  
Portée : Xilium  
Niveau : utilisateur  
Acteur principal : Administrateur web  
Précondition : être connecté en administrateur web  
Garantie minimale : Ne pas attribuer un ticket à un technicien  
Garantie en cas de succès : Attribuer un ticket à un technicien  
Déclencheur : Bouton “attribuer le ticket”  

Scénario nominal :  
1. L’administrateur web clique sur le bouton “tableau de bord”  
2. L’administrateur web clique sur titre du ticket  
3. L’administrateur web clique sur le bouton “attribuer le ticket”  
4. L’administrateur web choisi le technicien  
5. L’administrateur web confirme son choix.  

Extension :  
1. L’administrateur web est redirigé vers le ticket  
2. L’administrateur web reçoit un message d’erreur  
3. Le technicien n’est pas attribué au ticket  


**Cas d'utilisation 21 :** Créer un compte technicien  
Objet : Créer un compte technicien  
Contexte d'utilisation : Quand l’administrateur web veut créer un compte technicien  
Portée : Xilium  
Niveau : utilisateur  
Acteur principal : Administrateur web  
Précondition : être connecté en administrateur web  
Garantie minimale : Ne pas créer de compte  
Garantie en cas de succès : Créer le compte technicien  
Déclencheur : Bouton “créer un compte technicien”  

Scénario nominal :   
1. L’administrateur web clique sur le bouton “administration”  
2. L’administrateur web clique sur le bouton “créer un compte technicien”  
3. L’administrateur web rempli le nom du technicien et un mot de passe temporaire  
4. L’administrateur web confirme son choix.  

Extension :  
1. L’administrateur web est redirigé vers la page administration  
2. L’administrateur web reçoit un message d’erreur  
3. Le compte du technicien n’est pas créé  


**Cas d'utilisation 22 :** Supprimer un compte technicien  
Objet : Supprimer un compte technicien  
Contexte d'utilisation : Quand l’administrateur web veut supprimer un compte technicien  
Portée : Xilium  
Niveau : utilisateur  
Acteur principal : Administrateur web  
Précondition : être connecté en administrateur web  
Garantie minimale : ne pas supprimer le compte  
Garantie en cas de succès : supprimer le compte  
Déclencheur : bouton "supprimer un compte technicien"  

Scénario nominal :  
1. L’administrateur web clique sur le bouton “administration”  
2. L’administrateur web clique sur le bouton “supprimer un compte technicien”  
3. L’administrateur web sélectionne le technicien à supprimer  
4. L’administrateur web confirme son choix.  

Extension :  
1. L’administrateur web est redirigé vers la page administration  
2. L’administrateur web reçoit un message d’erreur  
3. Le compte du technicien n’est pas supprimé  


**Cas d'utilisation 23 :** Accéder aux journaux d’activités  
Objet : Accéder aux journaux d’activités  
Contexte d'utilisation : Quand l’administrateur système veut accéder aux journaux d’activités  
Portée : Xilium  
Niveau : sous-fonction  
Acteur principal : Administrateur système  
Précondition : être connecté en administrateur système  
Garantie minimale : Avoir un message d’erreur  
Garantie en cas de succès : Accéder aux journaux d’activités  
Déclencheur : Bouton “administration”  

Scénario nominal :  
1. L’administrateur système clique sur le bouton “administration”  
2. L’administrateur système peut consulter les journaux d’activités en bas de la page  

Extension :  
1. L’administrateur système est redirigé vers la page d’accueil  
2. L’administrateur système reçoit un message d’erreur  


**Cas d'utilisation 24 :** Accéder aux statistiques de l’application   
Objet : Accéder aux statistiques de l’application  
Contexte d'utilisation : Quand l’administrateur système veut accéder aux statistiques de l’application  
Portée : Xilium  
Niveau : sous-fonction  
Acteur principal : Administrateur système  
Précondition : être connecté en administrateur système  
Garantie minimale : Avoir un message d’erreur  
Garantie en cas de succès : Accéder aux statistiques de l’application  
Déclencheur : Bouton “administration”  

Scénario nominal :  
1. L’administrateur système clique sur le bouton “administration”  
2. L’administrateur système peut consulter les statistiques en haut de la page  

Extension :  
1. L’administrateur système est redirigé vers la page d’accueil  
2. L’administrateur système reçoit un message d’erreur


> FA2 | BARKER, OUALI, GUILLERAY, GRAVIER, LEMOUTON