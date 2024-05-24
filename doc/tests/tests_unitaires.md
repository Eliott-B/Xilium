<div align='justify'> 

# TESTS D'ACCEPTATION

> FA2 | BARKER, OUALI, GUILLERAY, GRAVIER, LEMOUTON

### Test de création

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |                | RÉSULTAT ATTENDU |
|-------------------------|--------------------|----------------|------------------|
| Classe                  | cat_name           | cat_css_color  | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------     | ----------       |
| Categories              | string             | string ou null | créée            |
| Categories              | string             | not string     | pas créée        |
| Categories              | Not string ou null | peu importe    | pas créée        |

| DONNÉES DE TEST | ENTRÉES    |                   | RÉSULTAT ATTENDU |       
|-----------------|------------|-------------------|------------------|
| Classe          | cat_name   | cat_css_color     | RÉSULTAT ATTENDU |
| ----------      | ---------- | ----------        | ----------       |
| Categories      | 'Matériel' | '#9b59b6' ou null | créée            |
| Categories      | 'Matériel' | #9b5b6            | pas créée        |
| Categories      | 56 ou null | peu importe       | pas créée        |

--- 

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |                |                  |                 |                 |             | RÉSULTAT ATTENDU |
|-------------------------|--------------------|----------------|------------------|-----------------|-----------------|-------------|------------------|
| Classe                  | com_title          | com_comment    | com_date         | ticket_id       | user_id         | reply_to    | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------     | ----------       | ----------      | ----------      | ----------  | ----------       |
| Comments                | string             | string ou null | date             | int             | int             | int ou null | créé             |
| Comments                | string             | string ou null | date             | int             | int             | not int     | pas créé         |
| Comments                | string             | string ou null | date             | int             | not int ou null | peu importe | pas créé         |
| Comments                | string             | string ou null | date             | not int ou null | peu importe     | peu importe | pas créé         |
| Comments                | string             | string ou null | date             | not int ou null | peu importe     | peu importe | pas créé         |
| Comments                | string             | string ou null | not date ou null | peu importe     | peu importe     | peu importe | pas créé         |
| Comments                | string             | not string     | peu importe      | peu importe     | peu importe     | peu importe | pas créé         |
| Comments                | not string ou null | peu importe    | peu importe      | peu importe     | peu importe     | peu importe | pas créé         |

| DONNÉES DE TEST | ENTRÉES            |                    |                    |                 |                 |             | RÉSULTAT ATTENDU |
|-----------------|--------------------|--------------------|--------------------|-----------------|-----------------|-------------|------------------|
| Classe          | com_title          | com_comment        | com_date           | ticket_id       | user_id         | reply_to    | RÉSULTAT ATTENDU |
| ----------      | ----------         | ----------         | ----------         | ----------      | ----------      | ----------  | ----------       |    
| Comments        | 'toto'             | 'taratata' ou null | '2024-08-15-14-52' | 5               | 2               | 3 ou null   | créé             |
| Comments        | 'toto'             | 'taratata' ou null | '2024-08-15-14-52' | 5               | 2               | not int     | pas créé         |
| Comments        | 'toto'             | 'taratata' ou null | '2024-08-15-14-52' | 5               | not int ou null | peu importe | pas créé         |
| Comments        | 'toto'             | 'taratata' ou null | '2024-08-15-14-52' | not int ou null | peu importe     | peu importe | pas créé         |
| Comments        | 'toto'             | 'taratata' ou null | '2024-08-15-14-52' | not int ou null | peu importe     | peu importe | pas créé         |
| Comments        | 'toto'             | 'taratata' ou null | not date ou null   | peu importe     | peu importe     | peu importe | pas créé         |
| Comments        | 'toto'             | not string         | peu importe        | peu importe     | peu importe     | peu importe | pas créé         |
| Comments        | not string ou null | peu importe        | peu importe        | peu importe     | peu importe     | peu importe | pas créé         |

---

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |                | RÉSULTAT ATTENDU |
|-------------------------|--------------------|----------------|------------------|
| Classe                  | lab_name           | lab_css_color  | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------     | ----------       |
| Labels                  | string             | string ou null | créé             |
| Labels                  | string             | not string     | pas créé         |
| Labels                  | Not string ou null | peu importe    | pas créé         |

| DONNÉES DE TEST | ENTRÉES        |                   | RÉSULTAT ATTENDU |       
|-----------------|----------------|-------------------|------------------|
| Classe          | cat_name       | cat_css_color     | RÉSULTAT ATTENDU |
| ----------      | ----------     | ----------        | ----------       |
| Labels          | 'Amélioration' | '#9b59b6' ou null | créé             |
| Labels          | 'Amélioration' | #9b5b6            | pas créé         |
| Labels          | 56 ou null     | peu importe       | pas créé         |

---

| PARTITION D'ÉQUIVALENCE | ENTRÉES          |                    |                    |                 |                 | RÉSULTAT ATTENDU |    
|-------------------------|------------------|--------------------|--------------------|-----------------|-----------------|------------------|
| Classe                  | log_date         | log_ip             | log_content        | ticket_id       | user_id         | RÉSULTAT ATTENDU |
| ----------              | TYPE             | ----------         | ----------         | ----------      | ----------      | ----------       |
| Logs                    | date             | string             | string             | int             | int             | créé             |
| Logs                    | date             | string             | string             | int             | not int ou null | pas créé         |
| Logs                    | date             | string             | string             | not int ou null | peu importe     | pas créé         |
| Logs                    | date             | string             | not string ou null | peu importe     | peu importe     | pas créé         |
| Logs                    | date             | not string ou null | peu importe        | peu importe     | peu importe     | pas créé         |
| Logs                    | not date ou null | peu importe        | peu importe        | peu importe     | peu importe     | pas créé         |

| DONNÉES DE TEST | ENTRÉES            |                   |              |               |                | RÉSULTAT ATTENDU |       
|-----------------|--------------------|-------------------|--------------|---------------|----------------|------------------|
| Classe          | log_date           | log_ip            | log_content  | ticket_id     | user_id        | RÉSULTAT ATTENDU |
| ----------      | ----------         | ----------        | ----------   | ----------    | ----------     | ----------       |
| Logs            | '2024-08-15-14-52' | '192.168.123.132' | 'azertraaez' | 3             | 5              | créé             |
| Logs            | '2024-08-15-14-52' | '192.168.123.132' | 'azertraaez' | 3             | 14.9 ou null   | pas créé         |
| Logs            | '2024-08-15-14-52' | '192.168.123.132' | 'azertraaez' | 13.5 ou null  | peu importe    | pas créé         |
| Logs            | '2024-08-15-14-52' | '192.168.123.132' | 844 ou null  | peu importe   | peu importe    | pas créé         |
| Logs            | '2024-08-15-14-52' | 541 ou null       | peu importe  | peu importe   | peu importe    | pas créé         |
| Logs            | 451 ou null        | peu importe       | peu importe  | peu importe   | peu importe    | pas créé         |

---

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |                 |               | RÉSULTAT ATTENDU |
|-------------------------|--------------------|-----------------|---------------|------------------|
| Classe                  | pri_name           | pri_index       | pri_css_color | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------      | ----------    | ----------       |
| Priorities              | string             | int             | string        | créée            |
| Priorities              | string             | int             | not string    | pas créée        |
| Priorities              | string             | int             | null          | créée            |
| Priorities              | string             | not int ou null | string        | pas créée        |
| Priorities              | string             | not int ou null | not string    | pas créée        |
| Priorities              | string             | not int ou null | null          | pas créée        |
| Priorities              | not string ou null | int             | string        | pas créée        |
| Priorities              | not string ou null | int             | not string    | pas créée        |
| Priorities              | not string ou null | int             | null          | pas créée        |
| Priorities              | not string ou null | not int ou null | string        | pas créée        |
| Priorities              | not string ou null | not int ou null | not string    | pas créée        |
| Priorities              | not string ou null | not int ou null | null          | pas créée        |

| DONNÉES DE TEST | ENTRÉES    |             |               | RÉSULTAT ATTENDU |
|-----------------|------------|-------------|---------------|------------------|
| Classe          | pri_name   | pri_index   | pri_css_color | RÉSULTAT ATTENDU |
| ----------      | TYPE       | ----------  | ----------    | ----------       |
| Priorities      | 'nom'      | 2           | '#2ecc71'     | créée            |
| Priorities      | 'nom'      | 2           | 2ec71         | pas créée        |
| Priorities      | 'nom'      | 2           | null          | créée            |
| Priorities      | 'nom'      | 1.5 ou null | '#2ecc71'     | pas créée        |
| Priorities      | 'nom'      | 1.5 ou null | 2ec71         | pas créée        |
| Priorities      | 'nom'      | 1.5 ou null | null          | pas créée        |
| Priorities      | 41 ou null | 2           | '#2ecc71'     | pas créée        |
| Priorities      | 41 ou null | 2           | 2ecc71        | pas créée        |
| Priorities      | 41 ou null | 2           | null          | pas créée        |
| Priorities      | 41 ou null | 1.5 ou null | '#2ecc71'     | pas créée        |
| Priorities      | 41 ou null | 1.5 ou null | 2ec71         | pas créée        |
| Priorities      | 41 ou null | 1.5 ou null | null          | pas créée        |

---

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

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |               | RÉSULTAT ATTENDU |
|-------------------------|--------------------|---------------|------------------|
| Classe                  | sta_name           | sta_css_color | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------    | ----------       |
| Status                  | string             | string        | créé             |
| Status                  | string             | not string    | pas créé         |
| Status                  | string             | null          | créé             |
| Status                  | Not string ou null | string        | pas créé         |
| Status                  | Not string ou null | not string    | pas créé         |
| Status                  | Not string ou null | null          | pas créé         |

| DONNÉES DE TEST | ENTRÉES    |               | RÉSULTAT ATTENDU |       
|-----------------|------------|---------------|------------------|
| Classe          | sta_name   | sta_css_color | RÉSULTAT ATTENDU |
| ----------      | ---------- | ----------    | ----------       |
| Status          | 'Résolu'   | '#f39c12'     | créé             |
| Status          | 'Résolu'   | #f39c1        | pas créé         |
| Status          | 'Résolu'   | null          | créé             |
| Status          | 51 ou null | '#f39c12'     | pas créé         |
| Status          | 51 ou null | #f39c1        | pas créé         |
| Status          | 51 ou null | null          | pas créé         |

---

TICKET HERE


---

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |                    |                    |                    |                 | RÉSULTAT ATTENDU |    
|-------------------------|--------------------|--------------------|--------------------|--------------------|-----------------|------------------|
| Classe                  | use_username       | use_password       | use_name           | use_firstname      | role_id         | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------         | ----------         | ----------         | ----------      | ----------       |
| Users                   | string             | string             | string             | string             | int             | créé             |
| Users                   | string             | string             | string             | string             | not int ou null | pas créé         |
| Users                   | string             | string             | string             | not string ou null | int             | pas créé         |
| Users                   | string             | string             | string             | not string ou null | not int ou null | pas créé         |
| Users                   | string             | string             | not string ou null | string             | int             | pas créé         |
| Users                   | string             | string             | not string ou null | string             | not int ou null | pas créé         |
| Users                   | string             | string             | not string ou null | not string ou null | int             | pas créé         |
| Users                   | string             | string             | not string ou null | not string ou null | not int ou null | pas créé         |
| Users                   | string             | not string ou null | string             | string             | int             | pas créé         |
| Users                   | string             | not string ou null | string             | string             | not int ou null | pas créé         |
| Users                   | string             | not string ou null | string             | not string ou null | int             | pas créé         |
| Users                   | string             | not string ou null | string             | not string ou null | not int ou null | pas créé         |
| Users                   | string             | not string ou null | not string ou null | string             | int             | pas créé         |
| Users                   | string             | not string ou null | not string ou null | string             | not int ou null | pas créé         |
| Users                   | string             | not string ou null | not string ou null | not string ou null | int             | pas créé         |
| Users                   | string             | not string ou null | not string ou null | not string ou null | not int ou null | pas créé         |
| Users                   | not string ou null | string             | string             | string             | int             | pas créé         |
| Users                   | not string ou null | string             | string             | string             | not int ou null | pas créé         |
| Users                   | not string ou null | string             | string             | not string ou null | int             | pas créé         |
| Users                   | not string ou null | string             | string             | not string ou null | not int ou null | pas créé         |
| Users                   | not string ou null | string             | not string ou null | string             | int             | pas créé         |
| Users                   | not string ou null | string             | not string ou null | string             | not int ou null | pas créé         |
| Users                   | not string ou null | string             | not string ou null | not string ou null | int             | pas créé         |
| Users                   | not string ou null | string             | not string ou null | not string ou null | not int ou null | pas créé         |
| Users                   | not string ou null | not string ou null | string             | string             | int             | pas créé         |
| Users                   | not string ou null | not string ou null | string             | string             | not int ou null | pas créé         |
| Users                   | not string ou null | not string ou null | string             | not string ou null | int             | pas créé         |
| Users                   | not string ou null | not string ou null | string             | not string ou null | not int ou null | pas créé         |
| Users                   | not string ou null | not string ou null | not string ou null | string             | int             | pas créé         |
| Users                   | not string ou null | not string ou null | not string ou null | string             | not int ou null | pas créé         |
| Users                   | not string ou null | not string ou null | not string ou null | not string ou null | int             | pas créé         |
| Users                   | not string ou null | not string ou null | not string ou null | not string ou null | not int ou null | pas créé         |

| DONNÉES DE TEST | ENTRÉES      |                 |             |               |              | RÉSULTAT ATTENDU |       
|-----------------|--------------|-----------------|-------------|---------------|--------------|------------------|
| Classe          | use_username | use_password    | use_name    | use_firstname | role_id      | RÉSULTAT ATTENDU |
| ----------      | ----------   | ----------      | ----------  | ----------    | ----------   | ----------       |
| Users           | 'user'       | 'kjd!qv65a2ff,' | 'Dupont'    | 'Pierre'      | 5            | créé             |
| Users           | 'user'       | 'kjd!qv65a2ff,' | 'Dupont'    | 'Pierre'      | 14.9 ou null | pas créé         |
| Users           | 'user'       | 'kjd!qv65a2ff,' | 'Dupont'    | 13.5 ou null  | 5            | pas créé         |
| Users           | 'user'       | 'kjd!qv65a2ff,' | 'Dupont'    | 13.5 ou null  | 14.9 ou null | pas créé         |
| Users           | 'user'       | 'kjd!qv65a2ff,' | 844 ou null | 'Pierre'      | 5            | pas créé         |
| Users           | 'user'       | 'kjd!qv65a2ff,' | 844 ou null | 'Pierre'      | 14.9 ou null | pas créé         |
| Users           | 'user'       | 'kjd!qv65a2ff,' | 844 ou null | 13.5 ou null  | 5            | pas créé         |
| Users           | 'user'       | 'kjd!qv65a2ff,' | 844 ou null | 13.5 ou null  | 14.9 ou null | pas créé         |
| Users           | 'user'       | 541 ou null     | 'Dupont'    | 'Pierre'      | 5            | pas créé         |
| Users           | 'user'       | 541 ou null     | 'Dupont'    | 'Pierre'      | 14.9 ou null | pas créé         |
| Users           | 'user'       | 541 ou null     | 'Dupont'    | 13.5 ou null  | 5            | pas créé         |
| Users           | 'user'       | 541 ou null     | 'Dupont'    | 13.5 ou null  | 14.9 ou null | pas créé         |
| Users           | 'user'       | 541 ou null     | 844 ou null | 'Pierre'      | 5            | pas créé         |
| Users           | 'user'       | 541 ou null     | 844 ou null | 'Pierre'      | 14.9 ou null | pas créé         |
| Users           | 'user'       | 541 ou null     | 844 ou null | 13.5 ou null  | 5            | pas créé         |
| Users           | 'user'       | 541 ou null     | 844 ou null | 13.5 ou null  | 14.9 ou null | pas créé         |
| Users           | 451 ou null  | 'kjd!qv65a2ff,' | 'Dupont'    | 'Pierre'      | 5            | pas créé         |
| Users           | 451 ou null  | 'kjd!qv65a2ff,' | 'Dupont'    | 'Pierre'      | 14.9 ou null | pas créé         |
| Users           | 451 ou null  | 'kjd!qv65a2ff,' | 'Dupont'    | 13.5 ou null  | 5            | pas créé         |
| Users           | 451 ou null  | 'kjd!qv65a2ff,' | 'Dupont'    | 13.5 ou null  | 14.9 ou null | pas créé         |
| Users           | 451 ou null  | 'kjd!qv65a2ff,' | 844 ou null | 'Pierre'      | 5            | pas créé         |
| Users           | 451 ou null  | 'kjd!qv65a2ff,' | 844 ou null | 'Pierre'      | 14.9 ou null | pas créé         |
| Users           | 451 ou null  | 'kjd!qv65a2ff,' | 844 ou null | 13.5 ou null  | 5            | pas créé         |
| Users           | 451 ou null  | 'kjd!qv65a2ff,' | 844 ou null | 13.5 ou null  | 14.9 ou null | pas créé         |
| Users           | 451 ou null  | 541 ou null     | 'Dupont'    | 'Pierre'      | 5            | pas créé         |
| Users           | 451 ou null  | 541 ou null     | 'Dupont'    | 'Pierre'      | 14.9 ou null | pas créé         |
| Users           | 451 ou null  | 541 ou null     | 'Dupont'    | 13.5 ou null  | 5            | pas créé         |
| Users           | 451 ou null  | 541 ou null     | 'Dupont'    | 13.5 ou null  | 14.9 ou null | pas créé         |
| Users           | 451 ou null  | 541 ou null     | 844 ou null | 'Pierre'      | 5            | pas créé         |
| Users           | 451 ou null  | 541 ou null     | 844 ou null | 'Pierre'      | 14.9 ou null | pas créé         |
| Users           | 451 ou null  | 541 ou null     | 844 ou null | 13.5 ou null  | 5            | pas créé         |
| Users           | 451 ou null  | 541 ou null     | 844 ou null | 13.5 ou null  | 14.9 ou null | pas créé         |

> FA2 | BARKER, OUALI, GUILLERAY, GRAVIER, LEMOUTON

</div>