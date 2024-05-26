<div align='justify'> 

# TESTS UNITAIRES

> FA2 | BARKER, OUALI, GUILLERAY, GRAVIER, LEMOUTON

## Sommaire

- [TESTS UNITAIRES](#tests-unitaires)
    - [Sommaire](#sommaire)
        - [Test de création](#test-de-création)
            - [Categorie](#catégorie)
            - [Comment](#comment)
            - [Label](#label)
            - [Log](#log)
            - [Priority](#priority)
            - [Role](#role)
            - [Statut](#statut)
            - [Ticket](#ticket)
            - [Utilisateur](#utilisateur)
        - [Test de mise à jour](#test-de-mise-à-jour)
        - [Test de suppression](#test-de-suppression)
          - [Categorie](#catégorie-2)
          - [Comment](#comment-2)
          - [Label](#label-2)
          - [Log](#log-2)
          - [Priority](#priority-2)
          - [Role](#role-2)
          - [Statut](#statut-2)
          - [Ticket](#ticket-2)
          - [Utilisateur](#utilisateur-2)

### Test de création

#### Catégorie

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |                | RÉSULTAT ATTENDU |
|-------------------------|--------------------|----------------|------------------|
| Classe                  | cat_name           | cat_css_color  | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------     | ----------       |
| Categories              | string             | string ou null | créée            |
| Categories              | peu importe        | not string     | pas créée        |
| Categories              | Not string ou null | peu importe    | pas créée        |

| DONNÉES DE TEST | ENTRÉES     |                   | RÉSULTAT ATTENDU |       
|-----------------|-------------|-------------------|------------------|
| Classe          | cat_name    | cat_css_color     | RÉSULTAT ATTENDU |
| ----------      | ----------  | ----------        | ----------       |
| Categories      | 'Matériel'  | '#9b59b6' ou null | créée            |
| Categories      | peu importe | #9b5b6            | pas créée        |
| Categories      | 56 ou null  | peu importe       | pas créée        |

--- 

#### Comment

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |                |                  |                 |                 |             | RÉSULTAT ATTENDU |
|-------------------------|--------------------|----------------|------------------|-----------------|-----------------|-------------|------------------|
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
|-----------------|--------------------|--------------------|--------------------|-----------------|-----------------|-------------|------------------|
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

#### Label

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |                | RÉSULTAT ATTENDU |
|-------------------------|--------------------|----------------|------------------|
| Classe                  | lab_name           | lab_css_color  | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------     | ----------       |
| Labels                  | string             | string ou null | créé             |
| Labels                  | peu importe        | not string     | pas créé         |
| Labels                  | Not string ou null | peu importe    | pas créé         |

| DONNÉES DE TEST | ENTRÉES        |                   | RÉSULTAT ATTENDU |       
|-----------------|----------------|-------------------|------------------|
| Classe          | lab_name       | lab_css_color     | RÉSULTAT ATTENDU |
| ----------      | ----------     | ----------        | ----------       |
| Labels          | 'Amélioration' | '#9b59b6' ou null | créé             |
| Labels          | peu importe    | #9b5b6            | pas créé         |
| Labels          | 56 ou null     | peu importe       | pas créé         |

---

#### Log

| PARTITION D'ÉQUIVALENCE | ENTRÉES          |                    |                    |                 |                 | RÉSULTAT ATTENDU |    
|-------------------------|------------------|--------------------|--------------------|-----------------|-----------------|------------------|
| Classe                  | log_date         | log_ip             | log_content        | ticket_id       | user_id         | RÉSULTAT ATTENDU |
| ----------              | TYPE             | ----------         | ----------         | ----------      | ----------      | ----------       |
| Logs                    | date             | string             | string             | int             | int             | créé             |
| Logs                    | peu importe      | peu importe        | peu importe        | peu importe     | not int ou null | pas créé         |
| Logs                    | peu importe      | peu importe        | peu importe        | not int ou null | peu importe     | pas créé         |
| Logs                    | peu importe      | peu importe        | not string ou null | peu importe     | peu importe     | pas créé         |
| Logs                    | peu importe      | not string ou null | peu importe        | peu importe     | peu importe     | pas créé         |
| Logs                    | not date ou null | peu importe        | peu importe        | peu importe     | peu importe     | pas créé         |

| DONNÉES DE TEST | ENTRÉES            |                   |                  |              |              | RÉSULTAT ATTENDU |       
|-----------------|--------------------|-------------------|------------------|--------------|--------------|------------------|
| Classe          | log_date           | log_ip            | log_content      | ticket_id    | user_id      | RÉSULTAT ATTENDU |
| ----------      | ----------         | ----------        | ----------       | ----------   | ----------   | ----------       |
| Logs            | '2024-08-15-14-52' | '192.168.123.132' | 'aze.rt*ra9ae!z' | 3            | 5            | créé             |
| Logs            | peu importe        | peu importe       | peu importe      | peu importe  | 14.9 ou null | pas créé         |
| Logs            | peu importe        | peu importe       | peu importe      | 13.5 ou null | peu importe  | pas créé         |
| Logs            | peu importe        | peu importe       | 844 ou null      | peu importe  | peu importe  | pas créé         |
| Logs            | peu importe        | 541 ou null       | peu importe      | peu importe  | peu importe  | pas créé         |
| Logs            | 451 ou null        | peu importe       | peu importe      | peu importe  | peu importe  | pas créé         |

---

#### Priority

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |                 |                | RÉSULTAT ATTENDU |
|-------------------------|--------------------|-----------------|----------------|------------------|
| Classe                  | pri_name           | pri_index       | pri_css_color  | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------      | ----------     | ----------       |
| Priorities              | string             | int             | string ou null | créée            |
| Priorities              | peu importe        | peu importe     | not string     | pas créée        |
| Priorities              | peu importe        | not int ou null | peu importe    | pas créée        |
| Priorities              | not string ou null | peu importe     | peu importe    | pas créée        |

| DONNÉES DE TEST | ENTRÉES     |             |                   | RÉSULTAT ATTENDU |
|-----------------|-------------|-------------|-------------------|------------------|
| Classe          | pri_name    | pri_index   | pri_css_color     | RÉSULTAT ATTENDU |
| ----------      | TYPE        | ----------  | ----------        | ----------       |
| Priorities      | 'nom'       | 2           | '#2ecc71' ou null | créée            |
| Priorities      | peu importe | peu importe | 2ec71             | pas créée        |
| Priorities      | peu importe | 1.5 ou null | peu importe       | pas créée        |
| Priorities      | 41 ou null  | peu importe | peu importe       | pas créée        |

---

#### Role

| PARTITION D'ÉQUIVALENCE | ENTRÉES            | RÉSULTAT ATTENDU |
|-------------------------|--------------------|------------------|
| Classe                  | rol_name           | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------       |
| Roles                   | string             | créé             |
| Roles                   | not string ou null | pas créé         |

| DONNÉES DE TEST | ENTRÉES      | RÉSULTAT ATTENDU  |
|-----------------|--------------|-------------------|
| Classe          | rol_name     | RÉSULTAT ATTENDU  |
| ----------      | TYPE         | ----------        |
| Roles           | 'text'       | créé              |
| Roles           | 53.1 ou null | pas créé          |

---

#### Statut

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |                | RÉSULTAT ATTENDU |
|-------------------------|--------------------|----------------|------------------|
| Classe                  | sta_name           | sta_css_color  | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------     | ----------       |
| Status                  | string             | string ou null | créé             |
| Status                  | peu importe        | not string     | pas créé         |
| Status                  | Not string ou null | peu importe    | pas créé         |

| DONNÉES DE TEST | ENTRÉES     |                   | RÉSULTAT ATTENDU |       
|-----------------|-------------|-------------------|------------------|
| Classe          | sta_name    | sta_css_color     | RÉSULTAT ATTENDU |
| ----------      | ----------  | ----------        | ----------       |
| Status          | 'Résolu'    | '#f39c12' ou null | créé             |
| Status          | peu importe | f39c1             | pas créé         |
| Status          | 51 ou null  | peu importe       | pas créé         |

---

#### Ticket

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |                    |                 |                 |                 |                 |                 |                 |             |               |              | RÉSULTAT ATTENDU |
|-------------------------|--------------------|--------------------|-----------------|-----------------|-----------------|-----------------|-----------------|-----------------|-------------|---------------|--------------|------------------|
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
|-------------------------|---------------|-----------------|---------------|---------------|---------------|---------------|---------------|---------------|-------------|----------------------------|----------------------------|------------------|
| Classe                  | tic_title     | tic_description | author_id     | label_id      | category_id   | priority_id   | status_id     | updater_id    | tech_id     | creation_date              | update_date                | RÉSULTAT ATTENDU |
| ----------              | TYPE          | ----------      | ----------    | ----------    | ----------    | ----------    | ----------    | ----------    | ----------  | ----------                 | ----------                 | ----------       |
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

#### Utilisateur

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |                    |                    |                    |                 | RÉSULTAT ATTENDU |    
|-------------------------|--------------------|--------------------|--------------------|--------------------|-----------------|------------------|
| Classe                  | use_username       | use_password       | use_name           | use_firstname      | role_id         | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------         | ----------         | ----------         | ----------      | ----------       |
| Users                   | string             | string             | string             | string             | int             | créé             |
| Users                   | peu importe        | peu importe        | peu importe        | peu importe        | not int ou null | pas créé         |
| Users                   | peu importe        | peu importe        | peu importe        | not string ou null | peu importe     | pas créé         |
| Users                   | peu importe        | peu importe        | not string ou null | peu importe        | peu importe     | pas créé         |
| Users                   | peu importe        | not string ou null | peu importe        | peu importe        | peu importe     | pas créé         |
| Users                   | not string ou null | peu importe        | peu importe        | peu importe        | peu importe     | pas créé         |

| DONNÉES DE TEST | ENTRÉES      |                 |             |               |              | RÉSULTAT ATTENDU |       
|-----------------|--------------|-----------------|-------------|---------------|--------------|------------------|
| Classe          | use_username | use_password    | use_name    | use_firstname | role_id      | RÉSULTAT ATTENDU |
| ----------      | ----------   | ----------      | ----------  | ----------    | ----------   | ----------       |
| Users           | 'user'       | 'kjd!qv65a2ff,' | 'Dupont'    | 'Pierre'      | 5            | créé             |
| Users           | peu importe  | peu importe     | peu importe | peu importe   | 14.9 ou null | pas créé         |
| Users           | peu importe  | peu importe     | peu importe | 13.5 ou null  | peu importe  | pas créé         |
| Users           | peu importe  | peu importe     | 844 ou null | peu importe   | peu importe  | pas créé         |
| Users           | peu importe  | 541 ou null     | peu importe | peu importe   | peu importe  | pas créé         |
| Users           | 451 ou null  | peu importe     | peu importe | peu importe   | peu importe  | pas créé         |

----------

### Test de mise à jour

#### Catégorie

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |                | RÉSULTAT ATTENDU |
|-------------------------|--------------------|----------------|------------------|
| Classe                  | cat_name           | cat_css_color  | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------     | ----------       |
| Categories              | string             | string ou null | créée            |
| Categories              | peu importe        | not string     | pas créée        |
| Categories              | Not string ou null | peu importe    | pas créée        |

| DONNÉES DE TEST | ENTRÉES     |                   | RÉSULTAT ATTENDU |       
|-----------------|-------------|-------------------|------------------|
| Classe          | cat_name    | cat_css_color     | RÉSULTAT ATTENDU |
| ----------      | ----------  | ----------        | ----------       |
| Categories      | 'Matériel'  | '#9b59b6' ou null | créée            |
| Categories      | peu importe | #9b5b6            | pas créée        |
| Categories      | 56 ou null  | peu importe       | pas créée        |

--- 

#### Comment

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |                |                  |                 |                 |             | RÉSULTAT ATTENDU |
|-------------------------|--------------------|----------------|------------------|-----------------|-----------------|-------------|------------------|
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
|-----------------|--------------------|--------------------|--------------------|-----------------|-----------------|-------------|------------------|
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

#### Label

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |                | RÉSULTAT ATTENDU |
|-------------------------|--------------------|----------------|------------------|
| Classe                  | lab_name           | lab_css_color  | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------     | ----------       |
| Labels                  | string             | string ou null | créé             |
| Labels                  | peu importe        | not string     | pas créé         |
| Labels                  | Not string ou null | peu importe    | pas créé         |

| DONNÉES DE TEST | ENTRÉES        |                   | RÉSULTAT ATTENDU |       
|-----------------|----------------|-------------------|------------------|
| Classe          | cat_name       | cat_css_color     | RÉSULTAT ATTENDU |
| ----------      | ----------     | ----------        | ----------       |
| Labels          | 'Amélioration' | '#9b59b6' ou null | créé             |
| Labels          | peu importe    | #9b5b6            | pas créé         |
| Labels          | 56 ou null     | peu importe       | pas créé         |

---

#### Log

| PARTITION D'ÉQUIVALENCE | ENTRÉES          |                    |                    |                 |                 | RÉSULTAT ATTENDU |    
|-------------------------|------------------|--------------------|--------------------|-----------------|-----------------|------------------|
| Classe                  | log_date         | log_ip             | log_content        | ticket_id       | user_id         | RÉSULTAT ATTENDU |
| ----------              | TYPE             | ----------         | ----------         | ----------      | ----------      | ----------       |
| Logs                    | date             | string             | string             | int             | int             | créé             |
| Logs                    | peu importe      | peu importe        | peu importe        | peu importe     | not int ou null | pas créé         |
| Logs                    | peu importe      | peu importe        | peu importe        | not int ou null | peu importe     | pas créé         |
| Logs                    | peu importe      | peu importe        | not string ou null | peu importe     | peu importe     | pas créé         |
| Logs                    | peu importe      | not string ou null | peu importe        | peu importe     | peu importe     | pas créé         |
| Logs                    | not date ou null | peu importe        | peu importe        | peu importe     | peu importe     | pas créé         |

| DONNÉES DE TEST | ENTRÉES            |                   |                  |              |              | RÉSULTAT ATTENDU |       
|-----------------|--------------------|-------------------|------------------|--------------|--------------|------------------|
| Classe          | log_date           | log_ip            | log_content      | ticket_id    | user_id      | RÉSULTAT ATTENDU |
| ----------      | ----------         | ----------        | ----------       | ----------   | ----------   | ----------       |
| Logs            | '2024-08-15-14-52' | '192.168.123.132' | 'aze.rt*ra9ae!z' | 3            | 5            | créé             |
| Logs            | peu importe        | peu importe       | peu importe      | peu importe  | 14.9 ou null | pas créé         |
| Logs            | peu importe        | peu importe       | peu importe      | 13.5 ou null | peu importe  | pas créé         |
| Logs            | peu importe        | peu importe       | 844 ou null      | peu importe  | peu importe  | pas créé         |
| Logs            | peu importe        | 541 ou null       | peu importe      | peu importe  | peu importe  | pas créé         |
| Logs            | 451 ou null        | peu importe       | peu importe      | peu importe  | peu importe  | pas créé         |

---

#### Priority

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |                 |                | RÉSULTAT ATTENDU |
|-------------------------|--------------------|-----------------|----------------|------------------|
| Classe                  | pri_name           | pri_index       | pri_css_color  | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------      | ----------     | ----------       |
| Priorities              | string             | int             | string ou null | créée            |
| Priorities              | peu importe        | peu importe     | not string     | pas créée        |
| Priorities              | peu importe        | not int ou null | peu importe    | pas créée        |
| Priorities              | not string ou null | peu importe     | peu importe    | pas créée        |

| DONNÉES DE TEST | ENTRÉES     |             |                   | RÉSULTAT ATTENDU |
|-----------------|-------------|-------------|-------------------|------------------|
| Classe          | pri_name    | pri_index   | pri_css_color     | RÉSULTAT ATTENDU |
| ----------      | TYPE        | ----------  | ----------        | ----------       |
| Priorities      | 'nom'       | 2           | '#2ecc71' ou null | créée            |
| Priorities      | peu importe | peu importe | 2ec71             | pas créée        |
| Priorities      | peu importe | 1.5 ou null | peu importe       | pas créée        |
| Priorities      | 41 ou null  | peu importe | peu importe       | pas créée        |

---

#### Role

| PARTITION D'ÉQUIVALENCE | ENTRÉES            | RÉSULTAT ATTENDU |
|-------------------------|--------------------|------------------|
| Classe                  | rol_name           | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------       |
| Roles                   | string             | créé             |
| Roles                   | not string ou null | pas créé         |

| DONNÉES DE TEST | ENTRÉES      | RÉSULTAT ATTENDU |
|-----------------|--------------|------------------|
| Classe          | rol_name     | RÉSULTAT ATTENDU |
| ----------      | TYPE         | ----------       |
| Roles           | 'text'       | créé             |
| Roles           | 53.1 ou null | pas créé         |

---

#### Statut

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |                | RÉSULTAT ATTENDU |
|-------------------------|--------------------|----------------|------------------|
| Classe                  | sta_name           | sta_css_color  | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------     | ----------       |
| Status                  | string             | string ou null | créé             |
| Status                  | peu importe        | not string     | pas créé         |
| Status                  | Not string ou null | peu importe    | pas créé         |

| DONNÉES DE TEST | ENTRÉES     |                   | RÉSULTAT ATTENDU |       
|-----------------|-------------|-------------------|------------------|
| Classe          | sta_name    | sta_css_color     | RÉSULTAT ATTENDU |
| ----------      | ----------  | ----------        | ----------       |
| Status          | 'Résolu'    | '#f39c12' ou null | créé             |
| Status          | peu importe | f39c1             | pas créé         |
| Status          | 51 ou null  | peu importe       | pas créé         |

---

#### Ticket

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |                    |                 |                 |                 |                 |                 |                 |             |               |              | RÉSULTAT ATTENDU |
|-------------------------|--------------------|--------------------|-----------------|-----------------|-----------------|-----------------|-----------------|-----------------|-------------|---------------|--------------|------------------|
| Classe                  | tic_title          | tic_description    | author_id       | label_id        | category_id     | priority_id     | status_id       | updater_id      | tech_id     | creation_date | update_date  | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------         | ----------      | ----------      | ----------      | ----------      | ----------      | ----------      | ----------  | ----------    | ----------   | ----------       |
| Ticket                  | string             | string             | int             | int             | int             | int             | int             | int             | int ou null | date ou null  | date ou null | créé             |
| Ticket                  | peu importe        | peu importe        | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe | peu importe   | not date     | pas créé         |
| Ticket                  | peu importe        | peu importe        | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe | not date      | peu importe  | pas créé         |
| Ticket                  | peu importe        | peu importe        | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | not int     | peu importe   | peu importe  | pas créé         |
| Ticket                  | peu importe        | peu importe        | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | not int ou null | peu importe | peu importe   | peu importe  | pas créé         |
| Ticket                  | peu importe        | peu importe        | peu importe     | peu importe     | peu importe     | peu importe     | not int ou null | peu importe     | peu importe | peu importe   | peu importe  | pas créé         |
| Ticket                  | peu importe        | peu importe        | peu importe     | peu importe     | peu importe     | not int ou null | peu importe     | peu importe     | peu importe | peu importe   | peu importe  | pas créé         |
| Ticket                  | peu importe        | peu importe        | peu importe     | peu importe     | not int ou null | peu importe     | peu importe     | peu importe     | peu importe | peu importe   | peu importe  | pas créé         |
| Ticket                  | peu importe        | peu importe        | peu importe     | not int ou null | peu importe     | peu importe     | peu importe     | peu importe     | peu importe | peu importe   | peu importe  | pas créé         |
| Ticket                  | peu importe        | peu importe        | not int ou null | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe | peu importe   | peu importe  | pas créé         |
| Ticket                  | peu importe        | not string ou null | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe | peu importe   | peu importe  | pas créé         |
| Ticket                  | not string ou null | peu importe        | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe     | peu importe | peu importe   | peu importe  | pas créé         |

| PARTITION D'ÉQUIVALENCE | ENTRÉES       |                 |               |               |               |               |               |               |             |                            |                            | RÉSULTAT ATTENDU |
|-------------------------|---------------|-----------------|---------------|---------------|---------------|---------------|---------------|---------------|-------------|----------------------------|----------------------------|------------------|
| Classe                  | tic_title     | tic_description | author_id     | label_id      | category_id   | priority_id   | status_id     | updater_id    | tech_id     | creation_date              | update_date                | RÉSULTAT ATTENDU |
| ----------              | TYPE          | ----------      | ----------    | ----------    | ----------    | ----------    | ----------    | ----------    | ----------  | ----------                 | ----------                 | ----------       |
| Ticket                  | 'titre'       | 'description'   | '2'           | '1'           | '3'           | '6'           | '1'           | '9'           | '2' ou null | '2024-08-15-14-52' ou null | '2024-08-15-14-52' ou null | créé             |
| Ticket                  | peu importe   | peu importe     | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe | peu importe                | 646                        | pas créé         |
| Ticket                  | peu importe   | peu importe     | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe | 22                         | peu importe                | pas créé         |
| Ticket                  | peu importe   | peu importe     | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | 'qfd'       | peu importe                | peu importe                | pas créé         |
| Ticket                  | peu importe   | peu importe     | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | 'qdc' ou null | peu importe | peu importe                | peu importe                | pas créé         |
| Ticket                  | peu importe   | peu importe     | peu importe   | peu importe   | peu importe   | peu importe   | 'qds' ou null | peu importe   | peu importe | peu importe                | peu importe                | pas créé         |
| Ticket                  | peu importe   | peu importe     | peu importe   | peu importe   | peu importe   | 'qds' ou null | peu importe   | peu importe   | peu importe | peu importe                | peu importe                | pas créé         |
| Ticket                  | peu importe   | peu importe     | peu importe   | peu importe   | 'qdf' ou null | peu importe   | peu importe   | peu importe   | peu importe | peu importe                | peu importe                | pas créé         |
| Ticket                  | peu importe   | peu importe     | peu importe   | 'eds' ou null | peu importe   | peu importe   | peu importe   | peu importe   | peu importe | peu importe                | peu importe                | pas créé         |
| Ticket                  | peu importe   | peu importe     | 'qsd' ou null | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe | peu importe                | peu importe                | pas créé         |
| Ticket                  | peu importe   | 'qds' ou null   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe | peu importe                | peu importe                | pas créé         |
| Ticket                  | 'rgq' ou null | peu importe     | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe   | peu importe | peu importe                | peu importe                | pas créé         |

---

#### Utilisateur

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |                    |                    |                    |                 | RÉSULTAT ATTENDU |    
|-------------------------|--------------------|--------------------|--------------------|--------------------|-----------------|------------------|
| Classe                  | use_username       | use_password       | use_name           | use_firstname      | role_id         | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------         | ----------         | ----------         | ----------      | ----------       |
| Users                   | string             | string             | string             | string             | int             | créé             |
| Users                   | peu importe        | peu importe        | peu importe        | peu importe        | not int ou null | pas créé         |
| Users                   | peu importe        | peu importe        | peu importe        | not string ou null | peu importe     | pas créé         |
| Users                   | peu importe        | peu importe        | not string ou null | peu importe        | peu importe     | pas créé         |
| Users                   | peu importe        | not string ou null | peu importe        | peu importe        | peu importe     | pas créé         |
| Users                   | not string ou null | peu importe        | peu importe        | peu importe        | peu importe     | pas créé         |

| DONNÉES DE TEST | ENTRÉES      |                 |             |               |              | RÉSULTAT ATTENDU |       
|-----------------|--------------|-----------------|-------------|---------------|--------------|------------------|
| Classe          | use_username | use_password    | use_name    | use_firstname | role_id      | RÉSULTAT ATTENDU |
| ----------      | ----------   | ----------      | ----------  | ----------    | ----------   | ----------       |
| Users           | 'user'       | 'kjd!qv65a2ff,' | 'Dupont'    | 'Pierre'      | 5            | créé             |
| Users           | peu importe  | peu importe     | peu importe | peu importe   | 14.9 ou null | pas créé         |
| Users           | peu importe  | peu importe     | peu importe | 13.5 ou null  | peu importe  | pas créé         |
| Users           | peu importe  | peu importe     | 844 ou null | peu importe   | peu importe  | pas créé         |
| Users           | peu importe  | 541 ou null     | peu importe | peu importe   | peu importe  | pas créé         |
| Users           | 451 ou null  | peu importe     | peu importe | peu importe   | peu importe  | pas créé         |

### Test de suppression

#### Catégorie

| PARTITION D'ÉQUIVALENCE | ENTRÉES         | RÉSULTAT ATTENDU |
|-------------------------|-----------------|------------------|
| Classe                  | cat_id          | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       |
| Categories              | int             | supprimée        |
| Categories              | Not int ou null | pas supprimée    |

| DONNÉES DE TEST | ENTRÉES       | RÉSULTAT ATTENDU |       
|-----------------|---------------|------------------|
| Classe          | cat_id        | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------       |
| Categories      | 2             | supprimée        |
| Categories      | 'ada' ou null | pas supprimée    |

--- 

#### Comment

| PARTITION D'ÉQUIVALENCE | ENTRÉES         | RÉSULTAT ATTENDU |
|-------------------------|-----------------|------------------|
| Classe                  | com_id          | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       |
| Comments                | int             | supprimé         |
| Comments                | Not int ou null | pas supprimé     |

| DONNÉES DE TEST | ENTRÉES       | RÉSULTAT ATTENDU |
|-----------------|---------------|------------------|
| Classe          | com_id        | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------       |
| Comments        | 2             | supprimé         |
| Comments        | 'ada' ou null | pas supprimé     |

---

#### Label

| PARTITION D'ÉQUIVALENCE | ENTRÉES         | RÉSULTAT ATTENDU |
|-------------------------|-----------------|------------------|
| Classe                  | lab_id          | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       |
| Labels                  | int             | supprimé         |
| Labels                  | not int ou null | pas supprimé     |

| DONNÉES DE TEST | ENTRÉES       | RÉSULTAT ATTENDU |       
|-----------------|---------------|------------------|
| Classe          | lab_id        | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------       |
| Labels          | 2             | supprimé         |
| Labels          | 'ada' ou null | pas supprimé     |

---

#### Log

| PARTITION D'ÉQUIVALENCE | ENTRÉES         | RÉSULTAT ATTENDU |    
|-------------------------|-----------------|------------------|
| Classe                  | log_id          | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       |
| Logs                    | int             | supprimé         |
| Logs                    | not int ou null | pas supprimé     |

| DONNÉES DE TEST | ENTRÉES       | RÉSULTAT ATTENDU |       
|-----------------|---------------|------------------|
| Classe          | log_id        | RÉSULTAT ATTENDU | 
| ----------      | ----------    | ----------       | 
| Logs            | 2             | supprimé         | 
| Logs            | 'ada' ou null | pas supprimé     | 

---

#### Priority

| PARTITION D'ÉQUIVALENCE | ENTRÉES         | RÉSULTAT ATTENDU |
|-------------------------|-----------------|------------------|
| Classe                  | pri_id          | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       |
| Priorities              | int             | supprimée        |
| Priorities              | not int ou null | pas supprimée    |

| DONNÉES DE TEST | ENTRÉES       | RÉSULTAT ATTENDU |
|-----------------|---------------|------------------|
| Classe          | pri_id        | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------       | 
| Priorities      | 2             | supprimée        | 
| Priorities      | 'ada' ou null | pas supprimée    | 

---

#### Role

| PARTITION D'ÉQUIVALENCE | ENTRÉES         | RÉSULTAT ATTENDU |
|-------------------------|-----------------|------------------|
| Classe                  | rol_id          | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       |
| Roles                   | int             | supprimé         |
| Roles                   | not int ou null | pas supprimé     |

| DONNÉES DE TEST | ENTRÉES       | RÉSULTAT ATTENDU |
|-----------------|---------------|------------------|
| Classe          | rol_id        | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------       |
| Roles           | 2             | supprimé         |
| Roles           | 'ada' ou null | pas supprimé     |

---

#### Statut

| PARTITION D'ÉQUIVALENCE | ENTRÉES         | RÉSULTAT ATTENDU |
|-------------------------|-----------------|------------------|
| Classe                  | sta_id          | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       |
| Status                  | int             | supprimé         |
| Status                  | not int ou null | pas supprimé     |

| DONNÉES DE TEST | ENTRÉES       | RÉSULTAT ATTENDU |
|-----------------|---------------|------------------|
| Classe          | sta_id        | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------       |
| Status          | 2             | supprimé         |
| Status          | 'ada' ou null | pas supprimé     |

---

#### Ticket

| PARTITION D'ÉQUIVALENCE | ENTRÉES         | RÉSULTAT ATTENDU |
|-------------------------|-----------------|------------------|
| Classe                  | tic_id          | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       |
| Tickets                 | int             | supprimé         |
| Tickets                 | not int ou null | pas supprimé     |

| DONNÉES DE TEST | ENTRÉES       | RÉSULTAT ATTENDU |
|-----------------|---------------|------------------|
| Classe          | tic_id        | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------       |
| Tickets         | 2             | supprimé         |
| Tickets         | 'ada' ou null | pas supprimé     |

---

#### Utilisateur

| PARTITION D'ÉQUIVALENCE | ENTRÉES         | RÉSULTAT ATTENDU |
|-------------------------|-----------------|------------------|
| Classe                  | use_id          | RÉSULTAT ATTENDU |
| ----------              | TYPE            | ----------       |
| Users                   | int             | supprimé         |
| Users                   | not int ou null | pas supprimé     |

| DONNÉES DE TEST | ENTRÉES       | RÉSULTAT ATTENDU |
|-----------------|---------------|------------------|
| Classe          | use_id        | RÉSULTAT ATTENDU |
| ----------      | ----------    | ----------       |
| Users           | 2             | supprimé         |
| Users           | 'ada' ou null | pas supprimé     |

> FA2 | BARKER, OUALI, GUILLERAY, GRAVIER, LEMOUTON

</div>


