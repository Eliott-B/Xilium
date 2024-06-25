<div align='justify'>

# TESTS UNITAIRES

> FA2 | BARKER, OUALI, GUILLERAY, GRAVIER, LEMOUTON

## Sommaire

- [TESTS UNITAIRES](#tests-unitaires)
  - [Sommaire](#sommaire)
  - [Procédures](#procédures)
  - [Test de création](#test-de-création)
    - [Catégorie](#catégorie)
    - [Comment](#comment)
    - [Label](#label)
    - [Log](#log)
    - [Priority](#priority)
    - [Role](#role)
    - [Statut](#statut)
    - [Ticket](#ticket)
    - [Utilisateur](#utilisateur)
  - [Test de mise à jour](#test-de-mise-à-jour)
    - [Catégorie](#catégorie-1)
    - [Comment](#comment-1)
    - [Label](#label-1)
    - [Log](#log-1)
    - [Priority](#priority-1)
    - [Role](#role-1)
    - [Statut](#statut-1)
    - [Ticket](#ticket-1)
    - [Utilisateur](#utilisateur-1)
  - [Test de lecture](#test-de-lecture)
    - [Catégorie](#catégorie-2)
    - [Comment](#comment-2)
    - [Label](#label-2)
    - [Log](#log-2)
    - [Priority](#priority-2)
    - [Role](#role-2)
    - [Statut](#statut-2)
    - [Ticket](#ticket-2)
    - [Utilisateur](#utilisateur-2)
  - [Test de suppression](#test-de-suppression)
    - [Catégorie](#catégorie-3)
    - [Comment](#comment-3)
    - [Label](#label-3)
    - [Log](#log-3)
    - [Priority](#priority-3)
    - [Role](#role-3)
    - [Statut](#statut-3)
    - [Ticket](#ticket-3)
    - [Utilisateur](#utilisateur-3)
  - [Test Hash](#test-hash)
    - [Crypter](#crypter)
    - [Décrypter](#décrypter)

## Procédures

&emsp;Les tests unitaires suivent la procédure générale décrite dans le fichier précédent.  
&emsp;Les tests doivent être exécutés grâce au Docker afin d'avoir accès à la base de donnée.
Pour cela, il faut lancer le conteneur avec la commande suivante :

```bash
./run.sh
```

&emsp;Ensuite, nous devons exécuter la commande suivante pour que les tests unitaires se lancent sur le Docker :

```bash
docker exec xilium-app-1 bash -c "cd /var/www/html/tests && ./run_test.sh"
```

&emsp;Les résultats apparaitront en sorti.

&emsp;Les tests unitaires sont automatiquement exécutés à chaque demande de merge sur les branches `dev`et `main`.
Si les tests ne sont pas satisfaisant, GitHub bloquera la demande de merge jusqu'à correction de celui-ci.

## Test de création

### Catégorie

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |                | RÉSULTAT ATTENDU |
| ----------------------- | ------------------ | -------------- | ---------------- |
| Classe                  | cat_name           | cat_css_color  | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------     | ----------       |
| Categories              | string             | string ou null | créée            |
| Categories              | peu importe        | not string     | pas créée        |
| Categories              | Not string ou null | peu importe    | pas créée        |

| DONNÉES DE TEST | ENTRÉES     |                   | RÉSULTAT ATTENDU |
| --------------- | ----------- | ----------------- | ---------------- |
| Classe          | cat_name    | cat_css_color     | RÉSULTAT ATTENDU |
| ----------      | ----------  | ----------        | ----------       |
| Categories      | 'Matériel'  | '#9b59b6' ou null | créée            |
| Categories      | peu importe | 123               | pas créée        |
| Categories      | 56 ou null  | peu importe       | pas créée        |

---

### Comment

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |                |                  |                 |                 |             | RÉSULTAT ATTENDU |
| ----------------------- | ------------------ | -------------- | ---------------- | --------------- | --------------- | ----------- | ---------------- |
| Classe                  | com_title          | com_comment    | com_date         | ticket_id       | user_id         | reply_to    | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------     | ----------       | ----------      | ----------      | ----------  | ----------       |
| Comments                | string             | string ou null | date             | int             | int             | int ou null | créé             |
| Comments                | peu importe        | peu importe    | peu importe      | peu importe     | peu importe     | not int     | pas créé         |
| Comments                | peu importe        | peu importe    | peu importe      | peu importe     | not int ou null | peu importe | pas créé         |
| Comments                | peu importe        | peu importe    | peu importe      | not int ou null | peu importe     | peu importe | pas créé         |
| Comments                | peu importe        | peu importe    | not date ou null | peu importe     | peu importe     | peu importe | pas créé         |
| Comments                | peu importe        | not string     | peu importe      | peu importe     | peu importe     | peu importe | pas créé         |
| Comments                | not string ou null | peu importe    | peu importe      | peu importe     | peu importe     | peu importe | pas créé         |

| DONNÉES DE TEST | ENTRÉES            |                    |                    |                 |                 |             | RÉSULTAT ATTENDU |
| --------------- | ------------------ | ------------------ | ------------------ | --------------- | --------------- | ----------- | ---------------- |
| Classe          | com_title          | com_comment        | com_date           | ticket_id       | user_id         | reply_to    | RÉSULTAT ATTENDU |
| ----------      | ----------         | ----------         | ----------         | ----------      | ----------      | ----------  | ----------       |
| Comments        | 'toto'             | 'taratata' ou null | '2024-08-15-14-52' | 5               | 2               | 3 ou null   | créé             |
| Comments        | peu importe        | peu importe        | peu importe        | peu importe     | peu importe     | not int     | pas créé         |
| Comments        | peu importe        | peu importe        | peu importe        | peu importe     | not int ou null | peu importe | pas créé         |
| Comments        | peu importe        | peu importe        | peu importe        | not int ou null | peu importe     | peu importe | pas créé         |
| Comments        | peu importe        | peu importe        | not date ou null   | peu importe     | peu importe     | peu importe | pas créé         |
| Comments        | peu importe        | not string         | peu importe        | peu importe     | peu importe     | peu importe | pas créé         |
| Comments        | not string ou null | peu importe        | peu importe        | peu importe     | peu importe     | peu importe | pas créé         |

---

### Label

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |                | RÉSULTAT ATTENDU |
| ----------------------- | ------------------ | -------------- | ---------------- |
| Classe                  | lab_name           | lab_css_color  | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------     | ----------       |
| Labels                  | string             | string ou null | créé             |
| Labels                  | peu importe        | not string     | pas créé         |
| Labels                  | Not string ou null | peu importe    | pas créé         |

| DONNÉES DE TEST | ENTRÉES        |                   | RÉSULTAT ATTENDU |
| --------------- | -------------- | ----------------- | ---------------- |
| Classe          | lab_name       | lab_css_color     | RÉSULTAT ATTENDU |
| ----------      | ----------     | ----------        | ----------       |
| Labels          | 'Amélioration' | '#9b59b6' ou null | créé             |
| Labels          | peu importe    | 123               | pas créé         |
| Labels          | 56 ou null     | peu importe       | pas créé         |

---

### Log

| PARTITION D'ÉQUIVALENCE | ENTRÉES          |                    |                    |                 |                 | RÉSULTAT ATTENDU |
| ----------------------- | ---------------- | ------------------ | ------------------ | --------------- | --------------- | ---------------- |
| Classe                  | log_date         | log_ip             | log_content        | ticket_id       | user_id         | RÉSULTAT ATTENDU |
| ----------              | TYPE             | ----------         | ----------         | ----------      | ----------      | ----------       |
| Logs                    | date             | string             | string             | int             | int             | créé             |
| Logs                    | peu importe      | peu importe        | peu importe        | peu importe     | not int ou null | pas créé         |
| Logs                    | peu importe      | peu importe        | peu importe        | not int ou null | peu importe     | pas créé         |
| Logs                    | peu importe      | peu importe        | not string ou null | peu importe     | peu importe     | pas créé         |
| Logs                    | peu importe      | not string ou null | peu importe        | peu importe     | peu importe     | pas créé         |
| Logs                    | not date ou null | peu importe        | peu importe        | peu importe     | peu importe     | pas créé         |

| DONNÉES DE TEST | ENTRÉES            |                   |                  |              |              | RÉSULTAT ATTENDU |
| --------------- | ------------------ | ----------------- | ---------------- | ------------ | ------------ | ---------------- |
| Classe          | log_date           | log_ip            | log_content      | ticket_id    | user_id      | RÉSULTAT ATTENDU |
| ----------      | ----------         | ----------        | ----------       | ----------   | ----------   | ----------       |
| Logs            | '2024-08-15-14-52' | '192.168.123.132' | 'aze.rt*ra9ae!z' | 3            | 5            | créé             |
| Logs            | peu importe        | peu importe       | peu importe      | peu importe  | 14.9 ou null | pas créé         |
| Logs            | peu importe        | peu importe       | peu importe      | 13.5 ou null | peu importe  | pas créé         |
| Logs            | peu importe        | peu importe       | 844 ou null      | peu importe  | peu importe  | pas créé         |
| Logs            | peu importe        | 541 ou null       | peu importe      | peu importe  | peu importe  | pas créé         |
| Logs            | 451 ou null        | peu importe       | peu importe      | peu importe  | peu importe  | pas créé         |

---

### Priority

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |                 |                | RÉSULTAT ATTENDU |
| ----------------------- | ------------------ | --------------- | -------------- | ---------------- |
| Classe                  | pri_name           | pri_index       | pri_css_color  | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------      | ----------     | ----------       |
| Priorities              | string             | int             | string ou null | créée            |
| Priorities              | peu importe        | peu importe     | not string     | pas créée        |
| Priorities              | peu importe        | not int ou null | peu importe    | pas créée        |
| Priorities              | not string ou null | peu importe     | peu importe    | pas créée        |

| DONNÉES DE TEST | ENTRÉES     |             |                   | RÉSULTAT ATTENDU |
| --------------- | ----------- | ----------- | ----------------- | ---------------- |
| Classe          | pri_name    | pri_index   | pri_css_color     | RÉSULTAT ATTENDU |
| ----------      | --------    | ----------  | ----------        | ----------       |
| Priorities      | 'nom'       | 2           | '#2ecc71' ou null | créée            |
| Priorities      | peu importe | peu importe | 123             | pas créée        |
| Priorities      | peu importe | 1.5 ou null | peu importe       | pas créée        |
| Priorities      | 41 ou null  | peu importe | peu importe       | pas créée        |

---

### Role

| PARTITION D'ÉQUIVALENCE | ENTRÉES            | RÉSULTAT ATTENDU |
| ----------------------- | ------------------ | ---------------- |
| Classe                  | rol_name           | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------       |
| Roles                   | string             | créé             |
| Roles                   | not string ou null | pas créé         |

| DONNÉES DE TEST | ENTRÉES      | RÉSULTAT ATTENDU |
| --------------- | ------------ | ---------------- |
| Classe          | rol_name     | RÉSULTAT ATTENDU |
| ----------      | -------      | ----------       |
| Roles           | 'text'       | créé             |
| Roles           | 53.1 ou null | pas créé         |

---

### Statut

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |                | RÉSULTAT ATTENDU |
| ----------------------- | ------------------ | -------------- | ---------------- |
| Classe                  | sta_name           | sta_css_color  | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------     | ----------       |
| Status                  | string             | string ou null | créé             |
| Status                  | peu importe        | not string     | pas créé         |
| Status                  | Not string ou null | peu importe    | pas créé         |

| DONNÉES DE TEST | ENTRÉES     |                   | RÉSULTAT ATTENDU |
| --------------- | ----------- | ----------------- | ---------------- |
| Classe          | sta_name    | sta_css_color     | RÉSULTAT ATTENDU |
| ----------      | ----------  | ----------        | ----------       |
| Status          | 'Résolu'    | '#f39c12' ou null | créé             |
| Status          | peu importe | f39c1             | pas créé         |
| Status          | 51 ou null  | peu importe       | pas créé         |

---

### Ticket

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |                    |                 |                 |                 |                 |                 |                 |             |               |              | RÉSULTAT ATTENDU |
| ----------------------- | ------------------ | ------------------ | --------------- | --------------- | --------------- | --------------- | --------------- | --------------- | ----------- | ------------- | ------------ | ---------------- |
| Classe                  | tic_title          | tic_description    | author_id       | label_id        | category_id     | priority_id     | status_id       | updater_id      | tech_id     | creation_date | update_date  | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------         | ----------      | ----------      | ----------      | ----------      | ----------      | ----------      | ----------  | ----------    | ----------   | ----------       |
| Tickets                 | string             | string             | int             | int             | int             | int             | int             | int             | int ou null | date ou null  | date ou null | créé             |
| Tickets                 | peu importe        | peu importe        | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe | peu importe   | not date     | pas créé         |
| Tickets                 | peu importe        | peu importe        | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe | not date      | peu importe  | pas créé         |
| Tickets                 | peu importe        | peu importe        | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | not int     | peu importe   | peu importe  | pas créé         |
| Tickets                 | peu importe        | peu importe        | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | not int ou null | peu importe | peu importe   | peu importe  | pas créé         |
| Tickets                 | peu importe        | peu importe        | peu importe     | peu importe     | peu importe     | peu importe     | not int ou null | peu importe     | peu importe | peu importe   | peu importe  | pas créé         |
| Tickets                 | peu importe        | peu importe        | peu importe     | peu importe     | peu importe     | not int ou null | peu importe     | peu importe     | peu importe | peu importe   | peu importe  | pas créé         |
| Tickets                 | peu importe        | peu importe        | peu importe     | peu importe     | not int ou null | peu importe     | peu importe     | peu importe     | peu importe | peu importe   | peu importe  | pas créé         |
| Tickets                 | peu importe        | peu importe        | peu importe     | not int ou null | peu importe     | peu importe     | peu importe     | peu importe     | peu importe | peu importe   | peu importe  | pas créé         |
| Tickets                 | peu importe        | peu importe        | not int ou null | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe | peu importe   | peu importe  | pas créé         |
| Tickets                 | peu importe        | not string ou null | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe | peu importe   | peu importe  | pas créé         |
| Tickets                 | not string ou null | peu importe        | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe | peu importe   | peu importe  | pas créé         |

| PARTITION D'ÉQUIVALENCE | ENTRÉES       |                 |               |               |               |               |               |               |             |                            |                            | RÉSULTAT ATTENDU |
| ----------------------- | ------------- | --------------- | ------------- | ------------- | ------------- | ------------- | ------------- | ------------- | ----------- | -------------------------- | -------------------------- | ---------------- |
| Classe                  | tic_title     | tic_description | author_id     | label_id      | category_id   | priority_id   | status_id     | updater_id    | tech_id     | creation_date              | update_date                | RÉSULTAT ATTENDU |
| ----------              | ---------     | ----------      | ----------    | ----------    | ----------    | ----------    | ----------    | ----------    | ----------  | ----------                 | ----------                 | ----------       |
| Tickets                 | 'titre'       | 'description'   | '2'           | '1'           | '3'           | '6'           | '1'           | '9'           | '2' ou null | '2024-08-15-14-52' ou null | '2024-08-15-14-52' ou null | créé             |
| Tickets                 | peu importe   | peu importe     | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe | peu importe                | 646                        | pas créé         |
| Tickets                 | peu importe   | peu importe     | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe | 22                         | peu importe                | pas créé         |
| Tickets                 | peu importe   | peu importe     | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | 'qfd'       | peu importe                | peu importe                | pas créé         |
| Tickets                 | peu importe   | peu importe     | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | 'qdc' ou null | peu importe | peu importe                | peu importe                | pas créé         |
| Tickets                 | peu importe   | peu importe     | peu importe   | peu importe   | peu importe   | peu importe   | 'qds' ou null | peu importe   | peu importe | peu importe                | peu importe                | pas créé         |
| Tickets                 | peu importe   | peu importe     | peu importe   | peu importe   | peu importe   | 'qds' ou null | peu importe   | peu importe   | peu importe | peu importe                | peu importe                | pas créé         |
| Tickets                 | peu importe   | peu importe     | peu importe   | peu importe   | 'qdf' ou null | peu importe   | peu importe   | peu importe   | peu importe | peu importe                | peu importe                | pas créé         |
| Tickets                 | peu importe   | peu importe     | peu importe   | 'eds' ou null | peu importe   | peu importe   | peu importe   | peu importe   | peu importe | peu importe                | peu importe                | pas créé         |
| Tickets                 | peu importe   | peu importe     | 'qsd' ou null | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe | peu importe                | peu importe                | pas créé         |
| Tickets                 | peu importe   | 'qds' ou null   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe | peu importe                | peu importe                | pas créé         |
| Tickets                 | 'rgq' ou null | peu importe     | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe | peu importe                | peu importe                | pas créé         |

---

### Utilisateur

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |                    |                    |                    |                 | RÉSULTAT ATTENDU |
| ----------------------- | ------------------ | ------------------ | ------------------ | ------------------ | --------------- | ---------------- |
| Classe                  | use_username       | use_password       | use_name           | use_firstname      | role_id         | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------         | ----------         | ----------         | ----------      | ----------       |
| Users                   | string             | string             | string             | string             | int             | créé             |
| Users                   | peu importe        | peu importe        | peu importe        | peu importe        | not int ou null | pas créé         |
| Users                   | peu importe        | peu importe        | peu importe        | not string ou null | peu importe     | pas créé         |
| Users                   | peu importe        | peu importe        | not string ou null | peu importe        | peu importe     | pas créé         |
| Users                   | peu importe        | not string ou null | peu importe        | peu importe        | peu importe     | pas créé         |
| Users                   | not string ou null | peu importe        | peu importe        | peu importe        | peu importe     | pas créé         |

| DONNÉES DE TEST | ENTRÉES      |                 |             |               |              | RÉSULTAT ATTENDU |
| --------------- | ------------ | --------------- | ----------- | ------------- | ------------ | ---------------- |
| Classe          | use_username | use_password    | use_name    | use_firstname | role_id      | RÉSULTAT ATTENDU |
| ----------      | ----------   | ----------      | ----------  | ----------    | ----------   | ----------       |
| Users           | 'user'       | 'kjd!qv65a2ff,' | 'Dupont'    | 'Pierre'      | 5            | créé             |
| Users           | peu importe  | peu importe     | peu importe | peu importe   | 14.9 ou null | pas créé         |
| Users           | peu importe  | peu importe     | peu importe | 13.5 ou null  | peu importe  | pas créé         |
| Users           | peu importe  | peu importe     | 844 ou null | peu importe   | peu importe  | pas créé         |
| Users           | peu importe  | 541 ou null     | peu importe | peu importe   | peu importe  | pas créé         |
| Users           | 451 ou null  | peu importe     | peu importe | peu importe   | peu importe  | pas créé         |

----------

## Test de mise à jour

### Catégorie

| PARTITION D'ÉQUIVALENCE | ENTRÉES         |                    |                | RÉSULTAT ATTENDU |
| ----------------------- | --------------- | ------------------ | -------------- | ---------------- |
| Classe                  | cat_id          | cat_name           | cat_css_color  | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------         | ----------     | ----------       |
| Categories              | int             | string             | string ou null | modifiée         |
| Categories              | not int ou null | peu importe        | peu importe    | pas modifiée     |
| Categories              | n'existe pas    | peu importe        | peu importe    | pas modifiée     |
| Categories              | int             | peu importe        | not string     | pas modifiée     |
| Categories              | int             | Not string ou null | peu importe    | pas modifiée     |

| DONNÉES DE TEST | ENTRÉES       |             |                   | RÉSULTAT ATTENDU |
| --------------- | ------------- | ----------- | ----------------- | ---------------- |
| Classe          | cat_id        | cat_name    | cat_css_color     | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------  | ----------        | ----------       |
| Categories      | 1             | 'Matériel'  | '#9b59b6' ou null | modifiée         |
| Categories      | 'asd' ou null | peu importe | peu importe       | pas modifiée     |
| Categories      | n'existe pas  | peu importe | peu importe       | pas modifiée     |
| Categories      | 1             | peu importe | #9b5b6            | pas modifiée     |
| Categories      | 1             | 56 ou null  | peu importe       | pas modifiée     |

---

### Comment

| PARTITION D'ÉQUIVALENCE | ENTRÉES         |                    |                |                  |                 |                 |             | RÉSULTAT ATTENDU |
| ----------------------- | --------------- | ------------------ | -------------- | ---------------- | --------------- | --------------- | ----------- | ---------------- |
| Classe                  | com_id          | com_title          | com_comment    | com_date         | ticket_id       | user_id         | reply_to    | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------         | ----------     | ----------       | ----------      | ----------      | ----------  | ----------       |
| Comments                | int             | string             | string ou null | date             | int             | int             | int ou null | modifié          |
| Comments                | not int ou null | peu importe        | peu importe    | peu importe      | peu importe     | peu importe     | peu importe | pas modifié      |
| Comments                | n'existe pas    | peu importe        | peu importe    | peu importe      | peu importe     | peu importe     | peu importe | pas modifié      |
| Comments                | int             | peu importe        | peu importe    | peu importe      | peu importe     | peu importe     | not int     | pas modifié      |
| Comments                | int             | peu importe        | peu importe    | peu importe      | peu importe     | not int ou null | peu importe | pas modifié      |
| Comments                | int             | peu importe        | peu importe    | peu importe      | not int ou null | peu importe     | peu importe | pas modifié      |
| Comments                | int             | peu importe        | peu importe    | not date ou null | peu importe     | peu importe     | peu importe | pas modifié      |
| Comments                | int             | peu importe        | not string     | peu importe      | peu importe     | peu importe     | peu importe | pas modifié      |
| Comments                | int             | not string ou null | peu importe    | peu importe      | peu importe     | peu importe     | peu importe | pas modifié      |

| DONNÉES DE TEST | ENTRÉES       |                    |                    |                    |                 |                 |             | RÉSULTAT ATTENDU |
| --------------- | ------------- | ------------------ | ------------------ | ------------------ | --------------- | --------------- | ----------- | ---------------- |
| Classe          | com_id        | com_title          | com_comment        | com_date           | ticket_id       | user_id         | reply_to    | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------         | ----------         | ----------         | ----------      | ----------      | ----------  | ----------       |
| Comments        | 1             | 'toto'             | 'taratata' ou null | '2024-08-15-14-52' | 5               | 2               | 3 ou null   | modifié          |
| Comments        | 'asd' ou null | peu importe        | peu importe        | peu importe        | peu importe     | peu importe     | peu importe | pas modifié      |
| Comments        | n'existe pas  | peu importe        | peu importe        | peu importe        | peu importe     | peu importe     | peu importe | pas modifié      |
| Comments        | 1             | peu importe        | peu importe        | peu importe        | peu importe     | peu importe     | not int     | pas modifié      |
| Comments        | 1             | peu importe        | peu importe        | peu importe        | peu importe     | not int ou null | peu importe | pas modifié      |
| Comments        | 1             | peu importe        | peu importe        | peu importe        | not int ou null | peu importe     | peu importe | pas modifié      |
| Comments        | 1             | peu importe        | peu importe        | not date ou null   | peu importe     | peu importe     | peu importe | pas modifié      |
| Comments        | 1             | peu importe        | not string         | peu importe        | peu importe     | peu importe     | peu importe | pas modifié      |
| Comments        | 1             | not string ou null | peu importe        | peu importe        | peu importe     | peu importe     | peu importe | pas modifié      |

---

### Label

| PARTITION D'ÉQUIVALENCE | ENTRÉES         |                    |                | RÉSULTAT ATTENDU |
| ----------------------- | --------------- | ------------------ | -------------- | ---------------- |
| Classe                  | lab_id          | lab_name           | lab_css_color  | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------         | ----------     | ----------       |
| Labels                  | int             | string             | string ou null | modifié          |
| Labels                  | not int ou null | peu importe        | peu importe    | pas modifié      |
| Labels                  | n'existe pas    | peu importe        | peu importe    | pas modifié      |
| Labels                  | int             | peu importe        | not string     | pas modifié      |
| Labels                  | int             | Not string ou null | peu importe    | pas modifié      |

| DONNÉES DE TEST | ENTRÉES       |                |                   | RÉSULTAT ATTENDU |
| --------------- | ------------- | -------------- | ----------------- | ---------------- |
| Classe          | lab_id        | lab_name       | lab_css_color     | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------     | ----------        | ----------       |
| Labels          | 1             | 'Amélioration' | '#9b59b6' ou null | modifié          |
| Labels          | 'asd' ou null | peu importe    | peu importe       | pas modifié      |
| Labels          | n'existe pas  | peu importe    | peu importe       | pas modifié      |
| Labels          | 1             | peu importe    | #9b5b6            | pas modifié      |
| Labels          | 1             | 56 ou null     | peu importe       | pas modifié      |

---

### Log

| PARTITION D'ÉQUIVALENCE | ENTRÉES         |                  |                    |                    |                 |                 | RÉSULTAT ATTENDU |
| ----------------------- | --------------- | ---------------- | ------------------ | ------------------ | --------------- | --------------- | ---------------- |
| Classe                  | log_id          | log_date         | log_ip             | log_content        | ticket_id       | user_id         | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       | ----------         | ----------         | ----------      | ----------      | ----------       |
| Logs                    | int             | date             | string             | string             | int             | int             | modifié          |
| Logs                    | not int ou null | peu importe      | peu importe        | peu importe        | peu importe     | peu importe     | pas modifié      |
| Logs                    | n'existe pas    | peu importe      | peu importe        | peu importe        | peu importe     | peu importe     | pas modifié      |
| Logs                    | int             | peu importe      | peu importe        | peu importe        | peu importe     | not int ou null | pas modifié      |
| Logs                    | int             | peu importe      | peu importe        | peu importe        | not int ou null | peu importe     | pas modifié      |
| Logs                    | int             | peu importe      | peu importe        | not string ou null | peu importe     | peu importe     | pas modifié      |
| Logs                    | int             | peu importe      | not string ou null | peu importe        | peu importe     | peu importe     | pas modifié      |
| Logs                    | int             | not date ou null | peu importe        | peu importe        | peu importe     | peu importe     | pas modifié      |

| DONNÉES DE TEST | ENTRÉES       |                    |                   |                  |              |              | RÉSULTAT ATTENDU |
| --------------- | ------------- | ------------------ | ----------------- | ---------------- | ------------ | ------------ | ---------------- |
| Classe          | log_id        | log_date           | log_ip            | log_content      | ticket_id    | user_id      | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------         | ----------        | ----------       | ----------   | ----------   | ----------       |
| Logs            | 1             | '2024-08-15-14-52' | '192.168.123.132' | 'aze.rt*ra9ae!z' | 3            | 5            | modifié          |
| Logs            | 'asd' ou null | peu importe        | peu importe       | peu importe      | peu importe  | peu importe  | pas modifié      |
| Logs            | n'existe pas  | peu importe        | peu importe       | peu importe      | peu importe  | peu importe  | pas modifié      |
| Logs            | 1             | peu importe        | peu importe       | peu importe      | peu importe  | 14.9 ou null | pas modifié      |
| Logs            | 1             | peu importe        | peu importe       | peu importe      | 13.5 ou null | peu importe  | pas modifié      |
| Logs            | 1             | peu importe        | peu importe       | 844 ou null      | peu importe  | peu importe  | pas modifié      |
| Logs            | 1             | peu importe        | 541 ou null       | peu importe      | peu importe  | peu importe  | pas modifié      |
| Logs            | 1             | 451 ou null        | peu importe       | peu importe      | peu importe  | peu importe  | pas modifié      |

---

### Priority

| PARTITION D'ÉQUIVALENCE | ENTRÉES         |                    |                 |                | RÉSULTAT ATTENDU |
| ----------------------- | --------------- | ------------------ | --------------- | -------------- | ---------------- |
| Classe                  | pri_id          | pri_name           | pri_index       | pri_css_color  | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------         | ----------      | ----------     | ----------       |
| Priorities              | int             | string             | int             | string ou null | modifiée         |
| Priorities              | not int ou null | peu importe        | peu importe     | peu importe    | pas modifiée     |
| Priorities              | n'existe pas    | peu importe        | peu importe     | peu importe    | pas modifiée     |
| Priorities              | int             | peu importe        | peu importe     | not string     | pas modifiée     |
| Priorities              | int             | peu importe        | not int ou null | peu importe    | pas modifiée     |
| Priorities              | int             | not string ou null | peu importe     | peu importe    | pas modifiée     |

| DONNÉES DE TEST | ENTRÉES       |             |             |                   | RÉSULTAT ATTENDU |
| --------------- | ------------- | ----------- | ----------- | ----------------- | ---------------- |
| Classe          | pri_id        | pri_name    | pri_index   | pri_css_color     | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------  | ----------  | ----------        | ----------       |
| Priorities      | 1             | 'nom'       | 2           | '#2ecc71' ou null | modifiée         |
| Priorities      | 'asd' ou null | peu importe | peu importe | peu importe       | pas modifiée     |
| Priorities      | n'existe pas  | peu importe | peu importe | peu importe       | pas modifiée     |
| Priorities      | 1             | peu importe | peu importe | 2ec71             | pas modifiée     |
| Priorities      | 1             | peu importe | 1.5 ou null | peu importe       | pas modifiée     |
| Priorities      | 1             | 41 ou null  | peu importe | peu importe       | pas modifiée     |

---

### Role

| PARTITION D'ÉQUIVALENCE | ENTRÉES         |                    | RÉSULTAT ATTENDU |
| ----------------------- | --------------- | ------------------ | ---------------- |
| Classe                  | rol_id          | rol_name           | RÉSULTAT ATTENDU |
| ----------              | TYPE            | -----------        | ----------       |
| Roles                   | int             | string             | modifié          |
| Roles                   | not int ou null | peu importe        | pas modifié      |
| Roles                   | n'existe pas    | peu importe        | pas modifié      |
| Roles                   | int             | not string ou null | pas modifié      |

| DONNÉES DE TEST | ENTRÉES         |              | RÉSULTAT ATTENDU |
| --------------- | --------------- | ------------ | ---------------- |
| Classe          | rol_id          | rol_name     | RÉSULTAT ATTENDU |
| ----------      | ----------      | ----------   | ----------       |
| Roles           | int             | 'text'       | modifié          |
| Roles           | not int ou null | peu importe  | pas modifié      |
| Roles           | n'existe pas    | peu importe  | pas modifié      |
| Roles           | 1               | 53.1 ou null | pas modifié      |

---

### Statut

| PARTITION D'ÉQUIVALENCE | ENTRÉES         |                    |                | RÉSULTAT ATTENDU |
| ----------------------- | --------------- | ------------------ | -------------- | ---------------- |
| Classe                  | sta_id          | sta_name           | sta_css_color  | RÉSULTAT ATTENDU |
| ----------              | TYPE            | -----------        | ----------     | ----------       |
| Status                  | int             | string             | string ou null | modifié          |
| Status                  | not int ou null | peu importe        | peu importe    | pas modifié      |
| Status                  | n'existe pas    | peu importe        | peu importe    | pas modifié      |
| Status                  | int             | peu importe        | not string     | pas modifié      |
| Status                  | int             | Not string ou null | peu importe    | pas modifié      |

| DONNÉES DE TEST | ENTRÉES       |             |                   | RÉSULTAT ATTENDU |
| --------------- | ------------- | ----------- | ----------------- | ---------------- |
| Classe          | sta_id        | sta_name    | sta_css_color     | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------- | ----------        | ----------       |
| Status          | 1             | 'Résolu'    | '#f39c12' ou null | modifié          |
| Status          | 'asd' ou null | peu importe | peu importe       | pas modifié      |
| Status          | n'existe pas  | peu importe | peu importe       | pas modifié      |
| Status          | 1             | peu importe | f39c1             | pas modifié      |
| Status          | 1             | 51 ou null  | peu importe       | pas modifié      |

---

### Ticket

| PARTITION D'ÉQUIVALENCE | ENTRÉES         |                    |                    |                 |                 |                 |                 |                 |                 |             |               |              | RÉSULTAT ATTENDU |
| ----------------------- | --------------- | ------------------ | ------------------ | --------------- | --------------- | --------------- | --------------- | --------------- | --------------- | ----------- | ------------- | ------------ | ---------------- |
| Classe                  | tic_id          | tic_title          | tic_description    | author_id       | label_id        | category_id     | priority_id     | status_id       | updater_id      | tech_id     | creation_date | update_date  | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------         | ----------         | ----------      | ----------      | ----------      | ----------      | ----------      | ----------      | ----------  | ----------    | ----------   | ----------       |
| Ticket                  | int             | string             | string             | int             | int             | int             | int             | int             | int             | int ou null | date ou null  | date ou null | modifié          |
| Ticket                  | not int ou null | peu importe        | peu importe        | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe | peu importe   | peu importe  | pas modifié      |
| Ticket                  | n'existe pas    | peu importe        | peu importe        | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe | peu importe   | peu importe  | pas modifié      |
| Ticket                  | int             | peu importe        | peu importe        | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe | peu importe   | not date     | pas modifié      |
| Ticket                  | int             | peu importe        | peu importe        | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe | not date      | peu importe  | pas modifié      |
| Ticket                  | int             | peu importe        | peu importe        | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | not int     | peu importe   | peu importe  | pas modifié      |
| Ticket                  | int             | peu importe        | peu importe        | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | not int ou null | peu importe | peu importe   | peu importe  | pas modifié      |
| Ticket                  | int             | peu importe        | peu importe        | peu importe     | peu importe     | peu importe     | peu importe     | not int ou null | peu importe     | peu importe | peu importe   | peu importe  | pas modifié      |
| Ticket                  | int             | peu importe        | peu importe        | peu importe     | peu importe     | peu importe     | not int ou null | peu importe     | peu importe     | peu importe | peu importe   | peu importe  | pas modifié      |
| Ticket                  | int             | peu importe        | peu importe        | peu importe     | peu importe     | not int ou null | peu importe     | peu importe     | peu importe     | peu importe | peu importe   | peu importe  | pas modifié      |
| Ticket                  | int             | peu importe        | peu importe        | peu importe     | not int ou null | peu importe     | peu importe     | peu importe     | peu importe     | peu importe | peu importe   | peu importe  | pas modifié      |
| Ticket                  | int             | peu importe        | peu importe        | not int ou null | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe | peu importe   | peu importe  | pas modifié      |
| Ticket                  | int             | peu importe        | not string ou null | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe | peu importe   | peu importe  | pas modifié      |
| Ticket                  | int             | not string ou null | peu importe        | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe | peu importe   | peu importe  | pas modifié      |

| DONNÉES DE TEST | ENTRÉES       |             |                 |               |               |               |               |               |               |             |                            |                            | RÉSULTAT ATTENDU |
| --------------- | ------------- | ----------- | --------------- | ------------- | ------------- | ------------- | ------------- | ------------- | ------------- | ----------- | -------------------------- | -------------------------- | ---------------- |
| Classe          | tic_id        | tic_title   | tic_description | author_id     | label_id      | category_id   | priority_id   | status_id     | updater_id    | tech_id     | creation_date              | update_date                | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------  | ----------      | ----------    | ----------    | ----------    | ----------    | ----------    | ----------    | ----------  | ----------                 | ----------                 | ----------       |
| Ticket          | 1             | 'titre'     | 'description'   | '2'           | '1'           | '3'           | '6'           | '1'           | '9'           | '2' ou null | '2024-08-15-14-52' ou null | '2024-08-15-14-52' ou null | modifié          |
| Ticket          | 'asd' ou null | peu importe | peu importe     | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe | peu importe                | peu importe                | pas modifié      |
| Ticket          | n'existe pas  | peu importe | peu importe     | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe | peu importe                | peu importe                | pas modifié      |
| Ticket          | 1             | peu importe | peu importe     | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe | peu importe                | 646                        | pas modifié      |
| Ticket          | 1             | peu importe | peu importe     | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe | 22                         | peu importe                | pas modifié      |
| Ticket          | 1             | peu importe | peu importe     | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | 'qfd'       | peu importe                | peu importe                | pas modifié      |
| Ticket          | 1             | peu importe | peu importe     | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | 'qdc' ou null | peu importe | peu importe                | peu importe                | pas modifié      |
| Ticket          | 1             | peu importe | peu importe     | peu importe   | peu importe   | peu importe   | peu importe   | 'qds' ou null | peu importe   | peu importe | peu importe                | peu importe                | pas modifié      |
| Ticket          | 1             | peu importe | peu importe     | peu importe   | peu importe   | peu importe   | 'qds' ou null | peu importe   | peu importe   | peu importe | peu importe                | peu importe                | pas modifié      |
| Ticket          | 1             | peu importe | peu importe     | peu importe   | peu importe   | 'qdf' ou null | peu importe   | peu importe   | peu importe   | peu importe | peu importe                | peu importe                | pas modifié      |
| Ticket          | 1             | peu importe | peu importe     | peu importe   | 'eds' ou null | peu importe   | peu importe   | peu importe   | peu importe   | peu importe | peu importe                | peu importe                | pas modifié      |
| Ticket          | 1             | peu importe | peu importe     | 'qsd' ou null | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe | peu importe                | peu importe                | pas modifié      |
| Ticket          | 1             | peu importe | 'qds' ou null   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe | peu importe                | peu importe                | pas modifié      |

---

### Utilisateur

| PARTITION D'ÉQUIVALENCE | ENTRÉES         |                    |                    |                    |                    |                 | RÉSULTAT ATTENDU |
| ----------------------- | --------------- | ------------------ | ------------------ | ------------------ | ------------------ | --------------- | ---------------- |
| Classe                  | use_id          | use_username       | use_password       | use_name           | use_firstname      | role_id         | RÉSULTAT ATTENDU |
| ----------              | TYPE            | -----------        | ----------         | ----------         | ----------         | ----------      | ----------       |
| Users                   | int             | string             | string             | string             | string             | int             | modifié          |
| Users                   | not int ou null | peu importe        | peu importe        | peu importe        | peu importe        | peu importe     | pas modifié      |
| Users                   | n'existe pas    | peu importe        | peu importe        | peu importe        | peu importe        | peu importe     | pas modifié      |
| Users                   | int             | peu importe        | peu importe        | peu importe        | peu importe        | not int ou null | pas modifié      |
| Users                   | int             | peu importe        | peu importe        | peu importe        | not string ou null | peu importe     | pas modifié      |
| Users                   | int             | peu importe        | peu importe        | not string ou null | peu importe        | peu importe     | pas modifié      |
| Users                   | int             | peu importe        | not string ou null | peu importe        | peu importe        | peu importe     | pas modifié      |
| Users                   | int             | not string ou null | peu importe        | peu importe        | peu importe        | peu importe     | pas modifié      |

| DONNÉES DE TEST | ENTRÉES       |              |                 |             |               |              | RÉSULTAT ATTENDU |
| --------------- | ------------- | ------------ | --------------- | ----------- | ------------- | ------------ | ---------------- |
| Classe          | use_id        | use_username | use_password    | use_name    | use_firstname | role_id      | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------   | ----------      | ----------  | ----------    | ----------   | ----------       |
| Users           | 1             | 'user'       | 'kjd!qv65a2ff,' | 'Dupont'    | 'Pierre'      | 5            | modifié          |
| Users           | 'asd' ou null | peu importe  | peu importe     | peu importe | peu importe   | peu importe  | pas modifié      |
| Users           | n'existe pas  | peu importe  | peu importe     | peu importe | peu importe   | peu importe  | pas modifié      |
| Users           | 1             | peu importe  | peu importe     | peu importe | peu importe   | 14.9 ou null | pas modifié      |
| Users           | 1             | peu importe  | peu importe     | peu importe | 13.5 ou null  | peu importe  | pas modifié      |
| Users           | 1             | peu importe  | peu importe     | 844 ou null | peu importe   | peu importe  | pas modifié      |
| Users           | 1             | peu importe  | 541 ou null     | peu importe | peu importe   | peu importe  | pas modifié      |
| Users           | 1             | 451 ou null  | peu importe     | peu importe | peu importe   | peu importe  | pas modifié      |

## Test de lecture

### Catégorie

| PARTITION D'ÉQUIVALENCE | ENTRÉES         | RÉSULTAT ATTENDU |
| ----------------------- | --------------- | ---------------- |
| Classe                  | cat_id          | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       |
| Categories              | int             | tout afficher    |
| Categories              | n'existe pas    | pas afficher     |
| Categories              | not int ou null | pas afficher     |

| DONNÉES DE TEST | ENTRÉES       | RÉSULTAT ATTENDU |
| --------------- | ------------- | ---------------- |
| Classe          | cat_id        | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------       |
| Categories      | 2             | tout afficher    |
| Categories      | n'existe pas  | pas afficher     |
| Categories      | 'ada' ou null | pas afficher     |

---

### Comment

| PARTITION D'ÉQUIVALENCE | ENTRÉES         | RÉSULTAT ATTENDU |
| ----------------------- | --------------- | ---------------- |
| Classe                  | com_id          | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       |
| Comments                | int             | tout afficher    |
| Comments                | n'existe pas    | pas afficher     |
| Comments                | not int ou null | pas afficher     |

| DONNÉES DE TEST | ENTRÉES       | RÉSULTAT ATTENDU |
| --------------- | ------------- | ---------------- |
| Classe          | com_id        | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------       |
| Comments        | 2             | tout afficher    |
| Comments        | n'existe pas  | pas afficher     |
| Comments        | 'ada' ou null | pas afficher     |

---

### Label

| PARTITION D'ÉQUIVALENCE | ENTRÉES         | RÉSULTAT ATTENDU |
| ----------------------- | --------------- | ---------------- |
| Classe                  | lab_id          | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       |
| Labels                  | int             | tout afficher    |
| Labels                  | n'existe pas    | pas afficher     |
| Labels                  | not int ou null | pas afficher     |

| DONNÉES DE TEST | ENTRÉES       | RÉSULTAT ATTENDU |
| --------------- | ------------- | ---------------- |
| Classe          | lab_id        | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------       |
| Labels          | 2             | tout afficher    |
| Labels          | n'existe pas  | pas afficher     |
| Labels          | 'ada' ou null | pas afficher     |

---

### Log

| PARTITION D'ÉQUIVALENCE | ENTRÉES         | RÉSULTAT ATTENDU |
| ----------------------- | --------------- | ---------------- |
| Classe                  | log_id          | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       |
| Logs                    | int             | tout afficher    |
| Logs                    | n'existe pas    | pas afficher     |
| Logs                    | not int ou null | pas afficher     |

| DONNÉES DE TEST | ENTRÉES       | RÉSULTAT ATTENDU |
| --------------- | ------------- | ---------------- |
| Classe          | log_id        | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------       |
| Logs            | 2             | tout afficher    |
| Logs            | n'existe pas  | pas afficher     |
| Logs            | 'ada' ou null | pas afficher     |

---

### Priority

| PARTITION D'ÉQUIVALENCE | ENTRÉES         | RÉSULTAT ATTENDU |
| ----------------------- | --------------- | ---------------- |
| Classe                  | pri_id          | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       |
| Priorities              | int             | tout afficher    |
| Priorities              | n'existe pas    | pas afficher     |
| Priorities              | not int ou null | pas afficher     |

| DONNÉES DE TEST | ENTRÉES       | RÉSULTAT ATTENDU |
| --------------- | ------------- | ---------------- |
| Classe          | pri_id        | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------       |
| Priorities      | 2             | tout afficher    |
| Priorities      | n'existe pas  | pas afficher     |
| Priorities      | 'ada' ou null | pas afficher     |

---

### Role

| PARTITION D'ÉQUIVALENCE | ENTRÉES         | RÉSULTAT ATTENDU |
| ----------------------- | --------------- | ---------------- |
| Classe                  | rol_id          | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       |
| Roles                   | int             | tout afficher    |
| Roles                   | n'existe pas    | pas afficher     |
| Roles                   | not int ou null | pas afficher     |

| DONNÉES DE TEST | ENTRÉES       | RÉSULTAT ATTENDU |
| --------------- | ------------- | ---------------- |
| Classe          | rol_id        | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------       |
| Roles           | 2             | tout afficher    |
| Roles           | n'existe pas  | pas afficher     |
| Roles           | 'ada' ou null | pas afficher     |

---

### Statut

| PARTITION D'ÉQUIVALENCE | ENTRÉES         | RÉSULTAT ATTENDU |
| ----------------------- | --------------- | ---------------- |
| Classe                  | sta_id          | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       |
| Status                  | int             | tout afficher    |
| Status                  | n'existe pas    | pas afficher     |
| Status                  | not int ou null | pas afficher     |

| DONNÉES DE TEST | ENTRÉES       | RÉSULTAT ATTENDU |
| --------------- | ------------- | ---------------- |
| Classe          | sta_id        | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------       |
| Status          | 2             | tout afficher    |
| Status          | n'existe pas  | pas afficher     |
| Status          | 'ada' ou null | pas afficher     |

---

### Ticket

| PARTITION D'ÉQUIVALENCE | ENTRÉES         | RÉSULTAT ATTENDU |
| ----------------------- | --------------- | ---------------- |
| Classe                  | tic_id          | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       |
| Tickets                 | int             | tout afficher    |
| Tickets                 | n'existe pas    | pas afficher     |
| Tickets                 | not int ou null | pas afficher     |

| DONNÉES DE TEST | ENTRÉES       | RÉSULTAT ATTENDU |
| --------------- | ------------- | ---------------- |
| Classe          | tic_id        | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------       |
| Tickets         | 2             | tout afficher    |
| Tickets         | n'existe pas  | pas afficher     |
| Tickets         | 'ada' ou null | pas afficher     |

---

### Utilisateur

| PARTITION D'ÉQUIVALENCE | ENTRÉES         | RÉSULTAT ATTENDU |
| ----------------------- | --------------- | ---------------- |
| Classe                  | use_id          | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       |
| Users                   | int             | tout afficher    |
| Users                   | n'existe pas    | pas afficher     |
| Users                   | not int ou null | pas afficher     |

| DONNÉES DE TEST | ENTRÉES       | RÉSULTAT ATTENDU |
| --------------- | ------------- | ---------------- |
| Classe          | use_id        | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------       |
| Users           | 2             | tout afficher    |
| Users           | n'existe pas  | pas afficher     |
| Users           | 'ada' ou null | pas afficher     |

## Test de suppression

### Catégorie

| PARTITION D'ÉQUIVALENCE | ENTRÉES         | RÉSULTAT ATTENDU |
| ----------------------- | --------------- | ---------------- |
| Classe                  | cat_id          | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       |
| Categories              | int             | supprimée        |
| Categories              | n'existe pas    | pas supprimée    |
| Categories              | Not int ou null | pas supprimée    |

| DONNÉES DE TEST | ENTRÉES       | RÉSULTAT ATTENDU |
| --------------- | ------------- | ---------------- |
| Classe          | cat_id        | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------       |
| Categories      | 2             | supprimée        |
| Categories      | n'existe pas  | pas supprimée    |
| Categories      | 'ada' ou null | pas supprimée    |

---

### Comment

| PARTITION D'ÉQUIVALENCE | ENTRÉES         | RÉSULTAT ATTENDU |
| ----------------------- | --------------- | ---------------- |
| Classe                  | com_id          | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       |
| Comments                | int             | supprimé         |
| Comments                | n'existe pas    | pas supprimé     |
| Comments                | Not int ou null | pas supprimé     |

| DONNÉES DE TEST | ENTRÉES       | RÉSULTAT ATTENDU |
| --------------- | ------------- | ---------------- |
| Classe          | com_id        | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------       |
| Comments        | 2             | supprimé         |
| Comments        | n'existe pas  | pas supprimé     |
| Comments        | 'ada' ou null | pas supprimé     |

---

### Label

| PARTITION D'ÉQUIVALENCE | ENTRÉES         | RÉSULTAT ATTENDU |
| ----------------------- | --------------- | ---------------- |
| Classe                  | lab_id          | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       |
| Labels                  | int             | supprimé         |
| Labels                  | n'existe pas    | pas supprimé     |
| Labels                  | not int ou null | pas supprimé     |

| DONNÉES DE TEST | ENTRÉES       | RÉSULTAT ATTENDU |
| --------------- | ------------- | ---------------- |
| Classe          | lab_id        | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------       |
| Labels          | 2             | supprimé         |
| Labels          | n'existe pas  | pas supprimé     |
| Labels          | 'ada' ou null | pas supprimé     |

---

### Log

| PARTITION D'ÉQUIVALENCE | ENTRÉES         | RÉSULTAT ATTENDU |
| ----------------------- | --------------- | ---------------- |
| Classe                  | log_id          | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       |
| Logs                    | int             | supprimé         |
| Logs                    | n'existe pas    | pas supprimé     |
| Logs                    | not int ou null | pas supprimé     |

| DONNÉES DE TEST | ENTRÉES       | RÉSULTAT ATTENDU |
| --------------- | ------------- | ---------------- |
| Classe          | log_id        | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------       |
| Logs            | 2             | supprimé         |
| Logs            | n'existe pas  | pas supprimé     |
| Logs            | 'ada' ou null | pas supprimé     |

---

### Priority

| PARTITION D'ÉQUIVALENCE | ENTRÉES         | RÉSULTAT ATTENDU |
| ----------------------- | --------------- | ---------------- |
| Classe                  | pri_id          | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       |
| Priorities              | int             | supprimée        |
| Priorities              | n'existe pas    | pas supprimée    |
| Priorities              | not int ou null | pas supprimée    |

| DONNÉES DE TEST | ENTRÉES       | RÉSULTAT ATTENDU |
| --------------- | ------------- | ---------------- |
| Classe          | pri_id        | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------       |
| Priorities      | 2             | supprimée        |
| Priorities      | n'existe pas  | pas supprimée    |
| Priorities      | 'ada' ou null | pas supprimée    |

---

### Role

| PARTITION D'ÉQUIVALENCE | ENTRÉES         | RÉSULTAT ATTENDU |
| ----------------------- | --------------- | ---------------- |
| Classe                  | rol_id          | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       |
| Roles                   | int             | supprimé         |
| Roles                   | n'existe pas    | pas supprimé     |
| Roles                   | not int ou null | pas supprimé     |

| DONNÉES DE TEST | ENTRÉES       | RÉSULTAT ATTENDU |
| --------------- | ------------- | ---------------- |
| Classe          | rol_id        | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------       |
| Roles           | 2             | supprimé         |
| Roles           | n'existe pas  | pas supprimé     |
| Roles           | 'ada' ou null | pas supprimé     |

---

### Statut

| PARTITION D'ÉQUIVALENCE | ENTRÉES         | RÉSULTAT ATTENDU |
| ----------------------- | --------------- | ---------------- |
| Classe                  | sta_id          | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       |
| Status                  | int             | supprimé         |
| Status                  | n'existe pas    | pas supprimé     |
| Status                  | not int ou null | pas supprimé     |

| DONNÉES DE TEST | ENTRÉES       | RÉSULTAT ATTENDU |
| --------------- | ------------- | ---------------- |
| Classe          | sta_id        | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------       |
| Status          | 2             | supprimé         |
| Status          | n'existe pas  | pas supprimé     |
| Status          | 'ada' ou null | pas supprimé     |

---

### Ticket

| PARTITION D'ÉQUIVALENCE | ENTRÉES         | RÉSULTAT ATTENDU |
| ----------------------- | --------------- | ---------------- |
| Classe                  | tic_id          | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       |
| Tickets                 | int             | supprimé         |
| Tickets                 | n'existe pas    | pas supprimé     |
| Tickets                 | not int ou null | pas supprimé     |

| DONNÉES DE TEST | ENTRÉES       | RÉSULTAT ATTENDU |
| --------------- | ------------- | ---------------- |
| Classe          | tic_id        | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------       |
| Tickets         | 2             | supprimé         |
| Tickets         | n'existe pas  | pas supprimé     |
| Tickets         | 'ada' ou null | pas supprimé     |

---

### Utilisateur

| PARTITION D'ÉQUIVALENCE | ENTRÉES         | RÉSULTAT ATTENDU |
| ----------------------- | --------------- | ---------------- |
| Classe                  | use_id          | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       |
| Users                   | int             | supprimé         |
| Users                   | n'existe pas    | pas supprimé     |
| Users                   | not int ou null | pas supprimé     |

| DONNÉES DE TEST | ENTRÉES       | RÉSULTAT ATTENDU |
| --------------- | ------------- | ---------------- |
| Classe          | use_id        | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------       |
| Users           | 2             | supprimé         |
| Users           | n'existe pas  | pas supprimé     |
| Users           | 'ada' ou null | pas supprimé     |

---

## Test Hash

### Crypter

| PARTITION D'ÉQUIVALENCE | ENTRÉES     |              | RÉSULTAT ATTENDU |
| ----------------------- | ----------- | ------------ | ---------------- |
| Classe                  | clé         | Mot_de_passe | RÉSULTAT ATTENDU |
| ----------              | TYPE        | --------     | ----------       |
| Hash                    | string      | string       | crypté           |
| Hash                    | peu importe | peu importe  | pas crypté       |

| DONNÉES DE TEST | ENTRÉES     |                    | RÉSULTAT ATTENDU                 |
| --------------- | ----------- | ------------------ | -------------------------------- |
| Classe          | clé         | mot_de_passe       | RÉSULTAT ATTENDU                 |
| ----------      | -----       | ----------         | ----------                       |
| Hash            | 'Secret'    | 'Attack at dawn45' | 45a01f645fc35b383552544b9bf58da7 |
| Hash            | peu importe | peu importe        | pas crypté                       |

---

### Décrypter

| PARTITION D'ÉQUIVALENCE | ENTRÉES                 |                    | RÉSULTAT ATTENDU |
| ----------------------- | ----------------------- | ------------------ | ---------------- |
| Classe                  | clé                     | Mot_de_passe       | RÉSULTAT ATTENDU |
| ----------              | TYPE                    | --------           | ----------       |
| Hash                    | string                  | string             | décrypté         |
| Hash                    | not hexadecimal ou null | not string ou null | pas décrypté     |

| DONNÉES DE TEST | ENTRÉES     |                                  | RÉSULTAT ATTENDU   |
| --------------- | ----------- | -------------------------------- | ------------------ |
| Classe          | clé         | Mot_de_passe                     | RÉSULTAT ATTENDU   |
| ----------      | --------    | ----------                       | ----------         |
| Hash            | 'Secret'    | 45a01f645fc35b383552544b9bf58da7 | 'Attack at dawn45' |
| Hash            | peu importe | peu importe                      | pas décrypté       |

> FA2 | BARKER, OUALI, GUILLERAY, GRAVIER, LEMOUTON

</div>
