<div align='justify'> 

# TESTS D'ACCEPTATION

> FA2 | BARKER, OUALI, GUILLERAY, GRAVIER, LEMOUTON

### Test de création

| TEST 1            | Entrée   | Sortie |
|-------------------|----------|--------|
| Category create() | cat_name | Créée  |

| TEST 2            | Entrée                     | Sortie |
|-------------------|----------------------------|--------|
| Category create() | cat_name<br/>cat_css_color | Créée  |

| TEST 3            | Entrée        | Sortie    |
|-------------------|---------------|-----------|
| Category create() | cat_css_color | Pas créée |

---

| TEST 4           | Entrée                                                 | Sortie |
|------------------|--------------------------------------------------------|--------|
| Comment create() | com_title <br/> com_date <br/> ticket_id <br/> user_id | Créé   |

| TEST 5           | Entrée                                                                                  | Sortie |
|------------------|-----------------------------------------------------------------------------------------|--------|
| Comment create() | com_title <br/> com_comment <br/> com_date <br/> ticket_id <br/> user_id <br/> reply_to | Créé   |

| TEST 6           | Entrée                     | Sortie   |
|------------------|----------------------------|----------|
| Comment create() | com_comment <br/> reply_to | Pas créé |

---

| TEST 7         | Entrée   | Sortie |
|----------------|----------|--------|
| Label create() | lab_name | Créé   |

| TEST 8         | Entrée                       | Sortie |
|----------------|------------------------------|--------|
| Label create() | lab_name <br/> lab_css_color | Créé   |

| TEST 9         | Entrée        | Sortie   |
|----------------|---------------|----------|
| Label create() | lab_css_color | Pas créé |

---

| TEST 10      | Entrée                                                                | Sortie |
|--------------|-----------------------------------------------------------------------|--------|
| Log create() | log_date <br/> log_ip <br/> log_content <br/> ticket_id <br/> user_id | Créé   |

| TEST 11      | Entrée                              | Sortie   |
|--------------|-------------------------------------|----------|
| Log create() | log_date <br/> log_ip <br/> user_id | Pas créé |

---

| TEST 13             | Entrée                   | Sortie |
|---------------------|--------------------------|--------|
| Priorities create() | pri_name <br/> pri_index | Créée  |

| TEST 14             | Entrée                                       | Sortie |
|---------------------|----------------------------------------------|--------|
| Priorities create() | pri_name <br/> pri_index <br/> pri_css_color | Créée  |

| TEST 15             | Entrée        | Sortie    |
|---------------------|---------------|-----------|
| Priorities create() | pri_css_color | Pas créée |

---

| TEST 16             | Entrée   | Sortie |
|---------------------|----------|--------|
| Priorities create() | rol_name | Créé   |

| TEST 17             | Entrée | Sortie   |
|---------------------|--------|----------|
| Priorities create() | /      | Pas créé |

---

| TEST 18         | Entrée   | Sortie |
|-----------------|----------|--------|
| Status create() | sta_name | Créé   |

| TEST 19         | Entrée                       | Sortie |
|-----------------|------------------------------|--------|
| Status create() | sta_name <br/> sta_css_color | Créé   |

| TEST 20         | Entrée        | Sortie   |
|-----------------|---------------|----------|
| Status create() | sta_css_color | Pas créé |

---

| TEST 21         | Entrée                                                                                    | Sortie |
|-----------------|-------------------------------------------------------------------------------------------|--------|
| Ticket create() | tic_title tic_description author_id label_id category_id priority_id status_id updater_id | Créé   |

| TEST 22         | Entrée                                                                                                                                                                                  | Sortie |
|-----------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|--------|
| Ticket create() | tic_title <br/> tic_description <br/> author_id <br/> label_id <br/> category_id <br/> priority_id <br/> status_id <br/> updater_id <br/> tech_id <br/> creation_date <br/> update_date | Créé   |

| TEST 23         | Entrée                                        | Sortie   |
|-----------------|-----------------------------------------------|----------|
| Ticket create() | tech_id <br/> creation_date <br/> update_date | Pas créé |

---

| TEST 24       | Entrée                                                                           | Sortie |
|---------------|----------------------------------------------------------------------------------|--------|
| User create() | use_username <br/> use_password <br/> use_name <br/> use_firstname <br/> role_id | Créé   |

| TEST 25       | Entrée                                         | Sortie   |
|---------------|------------------------------------------------|----------|
| User create() | use_username <br/> use_firstname <br/> role_id | Pas créé |

> FA2 | BARKER, OUALI, GUILLERAY, GRAVIER, LEMOUTON

</div>