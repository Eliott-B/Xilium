<div align='justify'> 

# TESTS D'ACCEPTATION

> FA2 | BARKER, OUALI, GUILLERAY, GRAVIER, LEMOUTON

### Test de création

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

TICKET HERE


---

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


> FA2 | BARKER, OUALI, GUILLERAY, GRAVIER, LEMOUTON

</div>