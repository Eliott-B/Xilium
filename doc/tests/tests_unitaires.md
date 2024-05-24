<div align='justify'> 

# TESTS D'ACCEPTATION

> FA2 | BARKER, OUALI, GUILLERAY, GRAVIER, LEMOUTON

### Test de création

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |               | RÉSULTAT ATTENDU |
|-------------------------|--------------------|---------------|------------------|
| Classe                  | cat_name           | cat_css_color | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------    | ----------       |
| Categories              | string             | string        | créée            |
| Categories              | string             | not string    | pas créée        |
| Categories              | string             | null          | créée            |
| Categories              | Not string ou null | string        | pas créée        |
| Categories              | Not string ou null | not string    | pas créée        |
| Categories              | Not string ou null | null          | pas créée        |

| DONNÉES DE TEST | ENTRÉES    |               | RÉSULTAT ATTENDU |       
|-----------------|------------|---------------|------------------|
| Classe          | cat_name   | cat_css_color | RÉSULTAT ATTENDU |
| ----------      | ---------- | ----------    | ----------       |
| Categories      | 'Matériel' | '#9b59b6'     | créée            |
| Categories      | 'Matériel' | #9b5b6        | pas créée        |
| Categories      | 'Matériel' | null          | créée            |
| Categories      | 56 ou null | '#9b59b6'     | pas créée        |
| Categories      | 56 ou null | #9b5b6        | pas créée        |
| Categories      | 56 ou null | null          | pas créée        |

--- 

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |             |                  |                 |                 |                 | RÉSULTAT ATTENDU |
|-------------------------|--------------------|-------------|------------------|-----------------|-----------------|-----------------|------------------|
| Classe                  | com_title          | com_comment | com_date         | ticket_id       | user_id         | reply_to        | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------  | ----------       | ----------      | ----------      | ----------      | ----------       |
| Comments                | string             | string      | date             | int             | int             | int             | créé             |
| Comments                | string             | string      | date             | int             | int             | not int ou null | pas créé         |
| Comments                | string             | string      | date             | int             | int             | null            | créé             |
| Comments                | string             | string      | date             | int             | not int ou null | int             | pas créé         |
| Comments                | string             | string      | date             | int             | not int ou null | not int ou null | pas créé         |
| Comments                | string             | string      | date             | int             | not int ou null | null            | pas créé         |
| Comments                | string             | string      | date             | not int ou null | int             | int             | pas créé         |
| Comments                | string             | string      | date             | not int ou null | int             | not int ou null | pas créé         |
| Comments                | string             | string      | date             | not int ou null | int             | null            | pas créé         |
| Comments                | string             | string      | date             | not int ou null | not int ou null | int             | pas créé         |
| Comments                | string             | string      | date             | not int ou null | not int ou null | not int ou null | pas créé         |
| Comments                | string             | string      | date             | not int ou null | not int ou null | null            | pas créé         |
| Comments                | string             | string      | not date ou null | int             | int             | int             | pas créé         |
| Comments                | string             | string      | not date ou null | int             | int             | not int ou null | pas créé         |
| Comments                | string             | string      | not date ou null | int             | int             | null            | pas créé         |
| Comments                | string             | string      | not date ou null | int             | not int ou null | int             | pas créé         |
| Comments                | string             | string      | not date ou null | int             | not int ou null | not int ou null | pas créé         |
| Comments                | string             | string      | not date ou null | int             | not int ou null | null            | pas créé         |
| Comments                | string             | string      | not date ou null | not int ou null | int             | int             | pas créé         |
| Comments                | string             | string      | not date ou null | not int ou null | int             | not int ou null | pas créé         |
| Comments                | string             | string      | not date ou null | not int ou null | int             | null            | pas créé         |
| Comments                | string             | string      | not date ou null | not int ou null | not int ou null | int             | pas créé         |
| Comments                | string             | string      | not date ou null | not int ou null | not int ou null | not int ou null | pas créé         |
| Comments                | string             | string      | not date ou null | not int ou null | not int ou null | null            | pas créé         |
| Comments                | string             | not string  | date             | int             | int             | int             | pas créé         |
| Comments                | string             | not string  | date             | int             | int             | not int ou null | pas créé         |
| Comments                | string             | not string  | date             | int             | int             | null            | pas créé         |
| Comments                | string             | not string  | date             | int             | not int ou null | int             | pas créé         |
| Comments                | string             | not string  | date             | int             | not int ou null | not int ou null | pas créé         |
| Comments                | string             | not string  | date             | int             | not int ou null | null            | pas créé         |
| Comments                | string             | not string  | date             | not int ou null | int             | int             | pas créé         |
| Comments                | string             | not string  | date             | not int ou null | int             | not int ou null | pas créé         |
| Comments                | string             | not string  | date             | not int ou null | int             | null            | pas créé         |
| Comments                | string             | not string  | date             | not int ou null | not int ou null | int             | pas créé         |
| Comments                | string             | not string  | date             | not int ou null | not int ou null | not int ou null | pas créé         |
| Comments                | string             | not string  | date             | not int ou null | not int ou null | null            | pas créé         |
| Comments                | string             | not string  | not date ou null | int             | int             | int             | pas créé         |
| Comments                | string             | not string  | not date ou null | int             | int             | not int ou null | pas créé         |
| Comments                | string             | not string  | not date ou null | int             | int             | null            | pas créé         |
| Comments                | string             | not string  | not date ou null | int             | not int ou null | int             | pas créé         |
| Comments                | string             | not string  | not date ou null | int             | not int ou null | not int ou null | pas créé         |
| Comments                | string             | not string  | not date ou null | int             | not int ou null | null            | pas créé         |
| Comments                | string             | not string  | not date ou null | not int ou null | int             | int             | pas créé         |
| Comments                | string             | not string  | not date ou null | not int ou null | int             | not int ou null | pas créé         |
| Comments                | string             | not string  | not date ou null | not int ou null | int             | null            | pas créé         |
| Comments                | string             | not string  | not date ou null | not int ou null | not int ou null | int             | pas créé         |
| Comments                | string             | not string  | not date ou null | not int ou null | not int ou null | not int ou null | pas créé         |
| Comments                | string             | not string  | not date ou null | not int ou null | not int ou null | null            | pas créé         |
| Comments                | string             | null        | date             | int             | int             | int             | créé             |
| Comments                | string             | null        | date             | int             | int             | not int ou null | pas créé         |
| Comments                | string             | null        | date             | int             | int             | null            | créé             |
| Comments                | string             | null        | date             | int             | not int ou null | int             | pas créé         |
| Comments                | string             | null        | date             | int             | not int ou null | not int ou null | pas créé         |
| Comments                | string             | null        | date             | int             | not int ou null | null            | pas créé         |
| Comments                | string             | null        | date             | not int ou null | int             | int             | pas créé         |
| Comments                | string             | null        | date             | not int ou null | int             | not int ou null | pas créé         |
| Comments                | string             | null        | date             | not int ou null | int             | null            | pas créé         |
| Comments                | string             | null        | date             | not int ou null | not int ou null | int             | pas créé         |
| Comments                | string             | null        | date             | not int ou null | not int ou null | not int ou null | pas créé         |
| Comments                | string             | null        | date             | not int ou null | not int ou null | null            | pas créé         |
| Comments                | string             | null        | not date ou null | int             | int             | int             | pas créé         |
| Comments                | string             | null        | not date ou null | int             | int             | not int ou null | pas créé         |
| Comments                | string             | null        | not date ou null | int             | int             | null            | pas créé         |
| Comments                | string             | null        | not date ou null | int             | not int ou null | int             | pas créé         |
| Comments                | string             | null        | not date ou null | int             | not int ou null | not int ou null | pas créé         |
| Comments                | string             | null        | not date ou null | int             | not int ou null | null            | pas créé         |
| Comments                | string             | null        | not date ou null | not int ou null | int             | int             | pas créé         |
| Comments                | string             | null        | not date ou null | not int ou null | int             | not int ou null | pas créé         |
| Comments                | string             | null        | not date ou null | not int ou null | int             | null            | pas créé         |
| Comments                | string             | null        | not date ou null | not int ou null | not int ou null | int             | pas créé         |
| Comments                | string             | null        | not date ou null | not int ou null | not int ou null | not int ou null | pas créé         |
| Comments                | string             | null        | not date ou null | not int ou null | not int ou null | null            | pas créé         |
| Comments                | not string ou null | string      | date             | int             | int             | int             | pas créé         |
| Comments                | not string ou null | string      | date             | int             | int             | not int ou null | pas créé         |
| Comments                | not string ou null | string      | date             | int             | int             | null            | pas créé         |
| Comments                | not string ou null | string      | date             | int             | not int ou null | int             | pas créé         |
| Comments                | not string ou null | string      | date             | int             | not int ou null | not int ou null | pas créé         |
| Comments                | not string ou null | string      | date             | int             | not int ou null | null            | pas créé         |
| Comments                | not string ou null | string      | date             | not int ou null | int             | int             | pas créé         |
| Comments                | not string ou null | string      | date             | not int ou null | int             | not int ou null | pas créé         |
| Comments                | not string ou null | string      | date             | not int ou null | int             | null            | pas créé         |
| Comments                | not string ou null | string      | date             | not int ou null | not int ou null | int             | pas créé         |
| Comments                | not string ou null | string      | date             | not int ou null | not int ou null | not int ou null | pas créé         |
| Comments                | not string ou null | string      | date             | not int ou null | not int ou null | null            | pas créé         |
| Comments                | not string ou null | string      | not date ou null | int             | int             | int             | pas créé         |
| Comments                | not string ou null | string      | not date ou null | int             | int             | not int ou null | pas créé         |
| Comments                | not string ou null | string      | not date ou null | int             | int             | null            | pas créé         |
| Comments                | not string ou null | string      | not date ou null | int             | not int ou null | int             | pas créé         |
| Comments                | not string ou null | string      | not date ou null | int             | not int ou null | not int ou null | pas créé         |
| Comments                | not string ou null | string      | not date ou null | int             | not int ou null | null            | pas créé         |
| Comments                | not string ou null | string      | not date ou null | not int ou null | int             | int             | pas créé         |
| Comments                | not string ou null | string      | not date ou null | not int ou null | int             | not int ou null | pas créé         |
| Comments                | not string ou null | string      | not date ou null | not int ou null | int             | null            | pas créé         |
| Comments                | not string ou null | string      | not date ou null | not int ou null | not int ou null | int             | pas créé         |
| Comments                | not string ou null | string      | not date ou null | not int ou null | not int ou null | not int ou null | pas créé         |
| Comments                | not string ou null | string      | not date ou null | not int ou null | not int ou null | null            | pas créé         |
| Comments                | not string ou null | not string  | date             | int             | int             | int             | pas créé         |
| Comments                | not string ou null | not string  | date             | int             | int             | not int ou null | pas créé         |
| Comments                | not string ou null | not string  | date             | int             | int             | null            | pas créé         |
| Comments                | not string ou null | not string  | date             | int             | not int ou null | int             | pas créé         |
| Comments                | not string ou null | not string  | date             | int             | not int ou null | not int ou null | pas créé         |
| Comments                | not string ou null | not string  | date             | int             | not int ou null | null            | pas créé         |
| Comments                | not string ou null | not string  | date             | not int ou null | int             | int             | pas créé         |
| Comments                | not string ou null | not string  | date             | not int ou null | int             | not int ou null | pas créé         |
| Comments                | not string ou null | not string  | date             | not int ou null | int             | null            | pas créé         |
| Comments                | not string ou null | not string  | date             | not int ou null | not int ou null | int             | pas créé         |
| Comments                | not string ou null | not string  | date             | not int ou null | not int ou null | not int ou null | pas créé         |
| Comments                | not string ou null | not string  | date             | not int ou null | not int ou null | null            | pas créé         |
| Comments                | not string ou null | not string  | not date ou null | int             | int             | int             | pas créé         |
| Comments                | not string ou null | not string  | not date ou null | int             | int             | not int ou null | pas créé         |
| Comments                | not string ou null | not string  | not date ou null | int             | int             | null            | pas créé         |
| Comments                | not string ou null | not string  | not date ou null | int             | not int ou null | int             | pas créé         |
| Comments                | not string ou null | not string  | not date ou null | int             | not int ou null | not int ou null | pas créé         |
| Comments                | not string ou null | not string  | not date ou null | int             | not int ou null | null            | pas créé         |
| Comments                | not string ou null | not string  | not date ou null | not int ou null | int             | int             | pas créé         |
| Comments                | not string ou null | not string  | not date ou null | not int ou null | int             | not int ou null | pas créé         |
| Comments                | not string ou null | not string  | not date ou null | not int ou null | int             | null            | pas créé         |
| Comments                | not string ou null | not string  | not date ou null | not int ou null | not int ou null | int             | pas créé         |
| Comments                | not string ou null | not string  | not date ou null | not int ou null | not int ou null | not int ou null | pas créé         |
| Comments                | not string ou null | not string  | not date ou null | not int ou null | not int ou null | null            | pas créé         |
| Comments                | not string ou null | null        | date             | int             | int             | int             | pas créé         |
| Comments                | not string ou null | null        | date             | int             | int             | not int ou null | pas créé         |
| Comments                | not string ou null | null        | date             | int             | int             | null            | pas créé         |
| Comments                | not string ou null | null        | date             | int             | not int ou null | int             | pas créé         |
| Comments                | not string ou null | null        | date             | int             | not int ou null | not int ou null | pas créé         |
| Comments                | not string ou null | null        | date             | int             | not int ou null | null            | pas créé         |
| Comments                | not string ou null | null        | date             | not int ou null | int             | int             | pas créé         |
| Comments                | not string ou null | null        | date             | not int ou null | int             | not int ou null | pas créé         |
| Comments                | not string ou null | null        | date             | not int ou null | int             | null            | pas créé         |
| Comments                | not string ou null | null        | date             | not int ou null | not int ou null | int             | pas créé         |
| Comments                | not string ou null | null        | date             | not int ou null | not int ou null | not int ou null | pas créé         |
| Comments                | not string ou null | null        | date             | not int ou null | not int ou null | null            | pas créé         |
| Comments                | not string ou null | null        | not date ou null | int             | int             | int             | pas créé         |
| Comments                | not string ou null | null        | not date ou null | int             | int             | not int ou null | pas créé         |
| Comments                | not string ou null | null        | not date ou null | int             | int             | null            | pas créé         |
| Comments                | not string ou null | null        | not date ou null | int             | not int ou null | int             | pas créé         |
| Comments                | not string ou null | null        | not date ou null | int             | not int ou null | not int ou null | pas créé         |
| Comments                | not string ou null | null        | not date ou null | int             | not int ou null | null            | pas créé         |
| Comments                | not string ou null | null        | not date ou null | not int ou null | int             | int             | pas créé         |
| Comments                | not string ou null | null        | not date ou null | not int ou null | int             | not int ou null | pas créé         |
| Comments                | not string ou null | null        | not date ou null | not int ou null | int             | null            | pas créé         |
| Comments                | not string ou null | null        | not date ou null | not int ou null | not int ou null | int             | pas créé         |
| Comments                | not string ou null | null        | not date ou null | not int ou null | not int ou null | not int ou null | pas créé         |
| Comments                | not string ou null | null        | not date ou null | not int ou null | not int ou null | null            | pas créé         |

| DONNÉES DE TEST | ENTRÉES    |             |                    |                   |                   |            | RÉSULTAT ATTENDU |
|-----------------|------------|-------------|--------------------|-------------------|-------------------|------------|------------------|
| Classe          | com_title  | com_comment | com_date           | ticket_id         | user_id           | reply_to   | RÉSULTAT ATTENDU |
| ----------      | ---------- | ----------  | ----------         | ----------        | ----------        | ---------- | ----------       |    
| Comments        | 'toto'     | 'taratata'  | '2024-08-15-14-52' | 5                 | 2                 | 3          | créé             |
| Comments        | 'toto'     | 'taratata'  | '2024-08-15-14-52' | 5                 | 2                 | 'jukytrt'  | pas créé         |
| Comments        | 'toto'     | 'taratata'  | '2024-08-15-14-52' | 5                 | 2                 | null       | créé             |
| Comments        | 'toto'     | 'taratata'  | '2024-08-15-14-52' | 5                 | 'jukytrt' ou null | 3          | pas créé         |
| Comments        | 'toto'     | 'taratata'  | '2024-08-15-14-52' | 5                 | 'jukytrt' ou null | 'jukytrt'  | pas créé         |
| Comments        | 'toto'     | 'taratata'  | '2024-08-15-14-52' | 5                 | 'jukytrt' ou null | null       | pas créé         |
| Comments        | 'toto'     | 'taratata'  | '2024-08-15-14-52' | 'jukytrt' ou null | 2                 | 3          | pas créé         |
| Comments        | 'toto'     | 'taratata'  | '2024-08-15-14-52' | 'jukytrt' ou null | 2                 | 'jukytrt'  | pas créé         |
| Comments        | 'toto'     | 'taratata'  | '2024-08-15-14-52' | 'jukytrt' ou null | 2                 | null       | pas créé         |
| Comments        | 'toto'     | 'taratata'  | '2024-08-15-14-52' | 'jukytrt' ou null | 'jukytrt' ou null | 3          | pas créé         |
| Comments        | 'toto'     | 'taratata'  | '2024-08-15-14-52' | 'jukytrt' ou null | 'jukytrt' ou null | 'jukytrt'  | pas créé         |
| Comments        | 'toto'     | 'taratata'  | '2024-08-15-14-52' | 'jukytrt' ou null | 'jukytrt' ou null | null       | pas créé         |
| Comments        | 'toto'     | 'taratata'  | 84512 ou null      | 5                 | 2                 | 3          | pas créé         |
| Comments        | 'toto'     | 'taratata'  | 84512 ou null      | 5                 | 2                 | 'jukytrt'  | pas créé         |
| Comments        | 'toto'     | 'taratata'  | 84512 ou null      | 5                 | 2                 | null       | pas créé         |
| Comments        | 'toto'     | 'taratata'  | 84512 ou null      | 5                 | 'jukytrt' ou null | 3          | pas créé         |
| Comments        | 'toto'     | 'taratata'  | 84512 ou null      | 5                 | 'jukytrt' ou null | 'jukytrt'  | pas créé         |
| Comments        | 'toto'     | 'taratata'  | 84512 ou null      | 5                 | 'jukytrt' ou null | null       | pas créé         |
| Comments        | 'toto'     | 'taratata'  | 84512 ou null      | 'jukytrt' ou null | 2                 | 3          | pas créé         |
| Comments        | 'toto'     | 'taratata'  | 84512 ou null      | 'jukytrt' ou null | 2                 | 'jukytrt'  | pas créé         |
| Comments        | 'toto'     | 'taratata'  | 84512 ou null      | 'jukytrt' ou null | 2                 | null       | pas créé         |
| Comments        | 'toto'     | 'taratata'  | 84512 ou null      | 'jukytrt' ou null | 'jukytrt' ou null | 3          | pas créé         |
| Comments        | 'toto'     | 'taratata'  | 84512 ou null      | 'jukytrt' ou null | 'jukytrt' ou null | 'jukytrt'  | pas créé         |
| Comments        | 'toto'     | 'taratata'  | 84512 ou null      | 'jukytrt' ou null | 'jukytrt' ou null | null       | pas créé         |
| Comments        | 'toto'     | 15          | '2024-08-15-14-52' | 5                 | 2                 | 3          | pas créé         |
| Comments        | 'toto'     | 15          | '2024-08-15-14-52' | 5                 | 2                 | 'jukytrt'  | pas créé         |
| Comments        | 'toto'     | 15          | '2024-08-15-14-52' | 5                 | 2                 | null       | pas créé         |
| Comments        | 'toto'     | 15          | '2024-08-15-14-52' | 5                 | 'jukytrt' ou null | 3          | pas créé         |
| Comments        | 'toto'     | 15          | '2024-08-15-14-52' | 5                 | 'jukytrt' ou null | 'jukytrt'  | pas créé         |
| Comments        | 'toto'     | 15          | '2024-08-15-14-52' | 5                 | 'jukytrt' ou null | null       | pas créé         |
| Comments        | 'toto'     | 15          | '2024-08-15-14-52' | 'jukytrt' ou null | 2                 | 3          | pas créé         |
| Comments        | 'toto'     | 15          | '2024-08-15-14-52' | 'jukytrt' ou null | 2                 | 'jukytrt'  | pas créé         |
| Comments        | 'toto'     | 15          | '2024-08-15-14-52' | 'jukytrt' ou null | 2                 | null       | pas créé         |
| Comments        | 'toto'     | 15          | '2024-08-15-14-52' | 'jukytrt' ou null | 'jukytrt' ou null | 3          | pas créé         |
| Comments        | 'toto'     | 15          | '2024-08-15-14-52' | 'jukytrt' ou null | 'jukytrt' ou null | 'jukytrt'  | pas créé         |
| Comments        | 'toto'     | 15          | '2024-08-15-14-52' | 'jukytrt' ou null | 'jukytrt' ou null | null       | pas créé         |
| Comments        | 'toto'     | 15          | 84512 ou null      | 5                 | 2                 | 3          | pas créé         |
| Comments        | 'toto'     | 15          | 84512 ou null      | 5                 | 2                 | 'jukytrt'  | pas créé         |
| Comments        | 'toto'     | 15          | 84512 ou null      | 5                 | 2                 | null       | pas créé         |
| Comments        | 'toto'     | 15          | 84512 ou null      | 5                 | 'jukytrt' ou null | 3          | pas créé         |
| Comments        | 'toto'     | 15          | 84512 ou null      | 5                 | 'jukytrt' ou null | 'jukytrt'  | pas créé         |
| Comments        | 'toto'     | 15          | 84512 ou null      | 5                 | 'jukytrt' ou null | null       | pas créé         |
| Comments        | 'toto'     | 15          | 84512 ou null      | 'jukytrt' ou null | 2                 | 3          | pas créé         |
| Comments        | 'toto'     | 15          | 84512 ou null      | 'jukytrt' ou null | 2                 | 'jukytrt'  | pas créé         |
| Comments        | 'toto'     | 15          | 84512 ou null      | 'jukytrt' ou null | 2                 | null       | pas créé         |
| Comments        | 'toto'     | 15          | 84512 ou null      | 'jukytrt' ou null | 'jukytrt' ou null | 3          | pas créé         |
| Comments        | 'toto'     | 15          | 84512 ou null      | 'jukytrt' ou null | 'jukytrt' ou null | 'jukytrt'  | pas créé         |
| Comments        | 'toto'     | 15          | 84512 ou null      | 'jukytrt' ou null | 'jukytrt' ou null | null       | pas créé         |
| Comments        | 'toto'     | null        | '2024-08-15-14-52' | 5                 | 2                 | 3          | créé             |
| Comments        | 'toto'     | null        | '2024-08-15-14-52' | 5                 | 2                 | 'jukytrt'  | pas créé         |
| Comments        | 'toto'     | null        | '2024-08-15-14-52' | 5                 | 2                 | null       | créé             |
| Comments        | 'toto'     | null        | '2024-08-15-14-52' | 5                 | 'jukytrt' ou null | 3          | pas créé         |
| Comments        | 'toto'     | null        | '2024-08-15-14-52' | 5                 | 'jukytrt' ou null | 'jukytrt'  | pas créé         |
| Comments        | 'toto'     | null        | '2024-08-15-14-52' | 5                 | 'jukytrt' ou null | null       | pas créé         |
| Comments        | 'toto'     | null        | '2024-08-15-14-52' | 'jukytrt' ou null | 2                 | 3          | pas créé         |
| Comments        | 'toto'     | null        | '2024-08-15-14-52' | 'jukytrt' ou null | 2                 | 'jukytrt'  | pas créé         |
| Comments        | 'toto'     | null        | '2024-08-15-14-52' | 'jukytrt' ou null | 2                 | null       | pas créé         |
| Comments        | 'toto'     | null        | '2024-08-15-14-52' | 'jukytrt' ou null | 'jukytrt' ou null | 3          | pas créé         |
| Comments        | 'toto'     | null        | '2024-08-15-14-52' | 'jukytrt' ou null | 'jukytrt' ou null | 'jukytrt'  | pas créé         |
| Comments        | 'toto'     | null        | '2024-08-15-14-52' | 'jukytrt' ou null | 'jukytrt' ou null | null       | pas créé         |
| Comments        | 'toto'     | null        | 84512 ou null      | 5                 | 2                 | 3          | pas créé         |
| Comments        | 'toto'     | null        | 84512 ou null      | 5                 | 2                 | 'jukytrt'  | pas créé         |
| Comments        | 'toto'     | null        | 84512 ou null      | 5                 | 2                 | null       | pas créé         |
| Comments        | 'toto'     | null        | 84512 ou null      | 5                 | 'jukytrt' ou null | 3          | pas créé         |
| Comments        | 'toto'     | null        | 84512 ou null      | 5                 | 'jukytrt' ou null | 'jukytrt'  | pas créé         |
| Comments        | 'toto'     | null        | 84512 ou null      | 5                 | 'jukytrt' ou null | null       | pas créé         |
| Comments        | 'toto'     | null        | 84512 ou null      | 'jukytrt' ou null | 2                 | 3          | pas créé         |
| Comments        | 'toto'     | null        | 84512 ou null      | 'jukytrt' ou null | 2                 | 'jukytrt'  | pas créé         |
| Comments        | 'toto'     | null        | 84512 ou null      | 'jukytrt' ou null | 2                 | null       | pas créé         |
| Comments        | 'toto'     | null        | 84512 ou null      | 'jukytrt' ou null | 'jukytrt' ou null | 3          | pas créé         |
| Comments        | 'toto'     | null        | 84512 ou null      | 'jukytrt' ou null | 'jukytrt' ou null | 'jukytrt'  | pas créé         |
| Comments        | 'toto'     | null        | 84512 ou null      | 'jukytrt' ou null | 'jukytrt' ou null | null       | pas créé         |
| Comments        | 52 ou null | 'taratata'  | '2024-08-15-14-52' | 5                 | 2                 | 3          | pas créé         |
| Comments        | 52 ou null | 'taratata'  | '2024-08-15-14-52' | 5                 | 2                 | 'jukytrt'  | pas créé         |
| Comments        | 52 ou null | 'taratata'  | '2024-08-15-14-52' | 5                 | 2                 | null       | pas créé         |
| Comments        | 52 ou null | 'taratata'  | '2024-08-15-14-52' | 5                 | 'jukytrt' ou null | 3          | pas créé         |
| Comments        | 52 ou null | 'taratata'  | '2024-08-15-14-52' | 5                 | 'jukytrt' ou null | 'jukytrt'  | pas créé         |
| Comments        | 52 ou null | 'taratata'  | '2024-08-15-14-52' | 5                 | 'jukytrt' ou null | null       | pas créé         |
| Comments        | 52 ou null | 'taratata'  | '2024-08-15-14-52' | 'jukytrt' ou null | 2                 | 3          | pas créé         |
| Comments        | 52 ou null | 'taratata'  | '2024-08-15-14-52' | 'jukytrt' ou null | 2                 | 'jukytrt'  | pas créé         |
| Comments        | 52 ou null | 'taratata'  | '2024-08-15-14-52' | 'jukytrt' ou null | 2                 | null       | pas créé         |
| Comments        | 52 ou null | 'taratata'  | '2024-08-15-14-52' | 'jukytrt' ou null | 'jukytrt' ou null | 3          | pas créé         |
| Comments        | 52 ou null | 'taratata'  | '2024-08-15-14-52' | 'jukytrt' ou null | 'jukytrt' ou null | 'jukytrt'  | pas créé         |
| Comments        | 52 ou null | 'taratata'  | '2024-08-15-14-52' | 'jukytrt' ou null | 'jukytrt' ou null | null       | pas créé         |
| Comments        | 52 ou null | 'taratata'  | 84512 ou null      | 5                 | 2                 | 3          | pas créé         |
| Comments        | 52 ou null | 'taratata'  | 84512 ou null      | 5                 | 2                 | 'jukytrt'  | pas créé         |
| Comments        | 52 ou null | 'taratata'  | 84512 ou null      | 5                 | 2                 | null       | pas créé         |
| Comments        | 52 ou null | 'taratata'  | 84512 ou null      | 5                 | 'jukytrt' ou null | 3          | pas créé         |
| Comments        | 52 ou null | 'taratata'  | 84512 ou null      | 5                 | 'jukytrt' ou null | 'jukytrt'  | pas créé         |
| Comments        | 52 ou null | 'taratata'  | 84512 ou null      | 5                 | 'jukytrt' ou null | null       | pas créé         |
| Comments        | 52 ou null | 'taratata'  | 84512 ou null      | 'jukytrt' ou null | 2                 | 3          | pas créé         |
| Comments        | 52 ou null | 'taratata'  | 84512 ou null      | 'jukytrt' ou null | 2                 | 'jukytrt'  | pas créé         |
| Comments        | 52 ou null | 'taratata'  | 84512 ou null      | 'jukytrt' ou null | 2                 | null       | pas créé         |
| Comments        | 52 ou null | 'taratata'  | 84512 ou null      | 'jukytrt' ou null | 'jukytrt' ou null | 3          | pas créé         |
| Comments        | 52 ou null | 'taratata'  | 84512 ou null      | 'jukytrt' ou null | 'jukytrt' ou null | 'jukytrt'  | pas créé         |
| Comments        | 52 ou null | 'taratata'  | 84512 ou null      | 'jukytrt' ou null | 'jukytrt' ou null | null       | pas créé         |
| Comments        | 52 ou null | 15          | '2024-08-15-14-52' | 5                 | 2                 | 3          | pas créé         |
| Comments        | 52 ou null | 15          | '2024-08-15-14-52' | 5                 | 2                 | 'jukytrt'  | pas créé         |
| Comments        | 52 ou null | 15          | '2024-08-15-14-52' | 5                 | 2                 | null       | pas créé         |
| Comments        | 52 ou null | 15          | '2024-08-15-14-52' | 5                 | 'jukytrt' ou null | 3          | pas créé         |
| Comments        | 52 ou null | 15          | '2024-08-15-14-52' | 5                 | 'jukytrt' ou null | 'jukytrt'  | pas créé         |
| Comments        | 52 ou null | 15          | '2024-08-15-14-52' | 5                 | 'jukytrt' ou null | null       | pas créé         |
| Comments        | 52 ou null | 15          | '2024-08-15-14-52' | 'jukytrt' ou null | 2                 | 3          | pas créé         |
| Comments        | 52 ou null | 15          | '2024-08-15-14-52' | 'jukytrt' ou null | 2                 | 'jukytrt'  | pas créé         |
| Comments        | 52 ou null | 15          | '2024-08-15-14-52' | 'jukytrt' ou null | 2                 | null       | pas créé         |
| Comments        | 52 ou null | 15          | '2024-08-15-14-52' | 'jukytrt' ou null | 'jukytrt' ou null | 3          | pas créé         |
| Comments        | 52 ou null | 15          | '2024-08-15-14-52' | 'jukytrt' ou null | 'jukytrt' ou null | 'jukytrt'  | pas créé         |
| Comments        | 52 ou null | 15          | '2024-08-15-14-52' | 'jukytrt' ou null | 'jukytrt' ou null | null       | pas créé         |
| Comments        | 52 ou null | 15          | 84512 ou null      | 5                 | 2                 | 3          | pas créé         |
| Comments        | 52 ou null | 15          | 84512 ou null      | 5                 | 2                 | 'jukytrt'  | pas créé         |
| Comments        | 52 ou null | 15          | 84512 ou null      | 5                 | 2                 | null       | pas créé         |
| Comments        | 52 ou null | 15          | 84512 ou null      | 5                 | 'jukytrt' ou null | 3          | pas créé         |
| Comments        | 52 ou null | 15          | 84512 ou null      | 5                 | 'jukytrt' ou null | 'jukytrt'  | pas créé         |
| Comments        | 52 ou null | 15          | 84512 ou null      | 5                 | 'jukytrt' ou null | null       | pas créé         |
| Comments        | 52 ou null | 15          | 84512 ou null      | 'jukytrt' ou null | 2                 | 3          | pas créé         |
| Comments        | 52 ou null | 15          | 84512 ou null      | 'jukytrt' ou null | 2                 | 'jukytrt'  | pas créé         |
| Comments        | 52 ou null | 15          | 84512 ou null      | 'jukytrt' ou null | 2                 | null       | pas créé         |
| Comments        | 52 ou null | 15          | 84512 ou null      | 'jukytrt' ou null | 'jukytrt' ou null | 3          | pas créé         |
| Comments        | 52 ou null | 15          | 84512 ou null      | 'jukytrt' ou null | 'jukytrt' ou null | 'jukytrt'  | pas créé         |
| Comments        | 52 ou null | 15          | 84512 ou null      | 'jukytrt' ou null | 'jukytrt' ou null | null       | pas créé         |
| Comments        | 52 ou null | null        | '2024-08-15-14-52' | 5                 | 2                 | 3          | pas créé         |
| Comments        | 52 ou null | null        | '2024-08-15-14-52' | 5                 | 2                 | 'jukytrt'  | pas créé         |
| Comments        | 52 ou null | null        | '2024-08-15-14-52' | 5                 | 2                 | null       | pas créé         |
| Comments        | 52 ou null | null        | '2024-08-15-14-52' | 5                 | 'jukytrt' ou null | 3          | pas créé         |
| Comments        | 52 ou null | null        | '2024-08-15-14-52' | 5                 | 'jukytrt' ou null | 'jukytrt'  | pas créé         |
| Comments        | 52 ou null | null        | '2024-08-15-14-52' | 5                 | 'jukytrt' ou null | null       | pas créé         |
| Comments        | 52 ou null | null        | '2024-08-15-14-52' | 'jukytrt' ou null | 2                 | 3          | pas créé         |
| Comments        | 52 ou null | null        | '2024-08-15-14-52' | 'jukytrt' ou null | 2                 | 'jukytrt'  | pas créé         |
| Comments        | 52 ou null | null        | '2024-08-15-14-52' | 'jukytrt' ou null | 2                 | null       | pas créé         |
| Comments        | 52 ou null | null        | '2024-08-15-14-52' | 'jukytrt' ou null | 'jukytrt' ou null | 3          | pas créé         |
| Comments        | 52 ou null | null        | '2024-08-15-14-52' | 'jukytrt' ou null | 'jukytrt' ou null | 'jukytrt'  | pas créé         |
| Comments        | 52 ou null | null        | '2024-08-15-14-52' | 'jukytrt' ou null | 'jukytrt' ou null | null       | pas créé         |
| Comments        | 52 ou null | null        | 84512 ou null      | 5                 | 2                 | 3          | pas créé         |
| Comments        | 52 ou null | null        | 84512 ou null      | 5                 | 2                 | 'jukytrt'  | pas créé         |
| Comments        | 52 ou null | null        | 84512 ou null      | 5                 | 2                 | null       | pas créé         |
| Comments        | 52 ou null | null        | 84512 ou null      | 5                 | 'jukytrt' ou null | 3          | pas créé         |
| Comments        | 52 ou null | null        | 84512 ou null      | 5                 | 'jukytrt' ou null | 'jukytrt'  | pas créé         |
| Comments        | 52 ou null | null        | 84512 ou null      | 5                 | 'jukytrt' ou null | null       | pas créé         |
| Comments        | 52 ou null | null        | 84512 ou null      | 'jukytrt' ou null | 2                 | 3          | pas créé         |
| Comments        | 52 ou null | null        | 84512 ou null      | 'jukytrt' ou null | 2                 | 'jukytrt'  | pas créé         |
| Comments        | 52 ou null | null        | 84512 ou null      | 'jukytrt' ou null | 2                 | null       | pas créé         |
| Comments        | 52 ou null | null        | 84512 ou null      | 'jukytrt' ou null | 'jukytrt' ou null | 3          | pas créé         |
| Comments        | 52 ou null | null        | 84512 ou null      | 'jukytrt' ou null | 'jukytrt' ou null | 'jukytrt'  | pas créé         |
| Comments        | 52 ou null | null        | 84512 ou null      | 'jukytrt' ou null | 'jukytrt' ou null | null       | pas créé         |

---

| PARTITION D'ÉQUIVALENCE | ENTRÉES            |               | RÉSULTAT ATTENDU |
|-------------------------|--------------------|---------------|------------------|
| Classe                  | lab_name           | lab_css_color | RÉSULTAT ATTENDU |
| ----------              | TYPE               | ----------    | ----------       |
| Labels                  | string             | string        | créé             |
| Labels                  | string             | not string    | pas créé         |
| Labels                  | string             | null          | créé             |
| Labels                  | Not string ou null | string        | pas créé         |
| Labels                  | Not string ou null | not string    | pas créé         |
| Labels                  | Not string ou null | null          | pas créé         |

| DONNÉES DE TEST | ENTRÉES        |               | RÉSULTAT ATTENDU |       
|-----------------|----------------|---------------|------------------|
| Classe          | cat_name       | cat_css_color | RÉSULTAT ATTENDU |
| ----------      | ----------     | ----------    | ----------       |
| Labels          | 'Amélioration' | '#9b59b6'     | créé             |
| Labels          | 'Amélioration' | #9b5b6        | pas créé         |
| Labels          | 'Amélioration' | null          | créé             |
| Labels          | 56 ou null     | '#9b59b6'     | pas créé         |
| Labels          | 56 ou null     | #9b5b6        | pas créé         |
| Labels          | 56 ou null     | null          | pas créé         |

---

| PARTITION D'ÉQUIVALENCE | ENTRÉES          |                    |                    |                 |                 | RÉSULTAT ATTENDU |    
|-------------------------|------------------|--------------------|--------------------|-----------------|-----------------|------------------|
| Classe                  | log_date         | log_ip             | log_content        | ticket_id       | user_id         | RÉSULTAT ATTENDU |
| ----------              | TYPE             | ----------         | ----------         | ----------      | ----------      | ----------       |
| Logs                    | date             | string             | string             | int             | int             | créé             |
| Logs                    | date             | string             | string             | int             | not int ou null | pas créé         |
| Logs                    | date             | string             | string             | not int ou null | int             | pas créé         |
| Logs                    | date             | string             | string             | not int ou null | not int ou null | pas créé         |
| Logs                    | date             | string             | not string ou null | int             | int             | pas créé         |
| Logs                    | date             | string             | not string ou null | int             | not int ou null | pas créé         |
| Logs                    | date             | string             | not string ou null | not int ou null | int             | pas créé         |
| Logs                    | date             | string             | not string ou null | not int ou null | not int ou null | pas créé         |
| Logs                    | date             | not string ou null | string             | int             | int             | pas créé         |
| Logs                    | date             | not string ou null | string             | int             | not int ou null | pas créé         |
| Logs                    | date             | not string ou null | string             | not int ou null | int             | pas créé         |
| Logs                    | date             | not string ou null | string             | not int ou null | not int ou null | pas créé         |
| Logs                    | date             | not string ou null | not string ou null | int             | int             | pas créé         |
| Logs                    | date             | not string ou null | not string ou null | int             | not int ou null | pas créé         |
| Logs                    | date             | not string ou null | not string ou null | not int ou null | int             | pas créé         |
| Logs                    | date             | not string ou null | not string ou null | not int ou null | not int ou null | pas créé         |
| Logs                    | not date ou null | string             | string             | int             | int             | pas créé         |
| Logs                    | not date ou null | string             | string             | int             | not int ou null | pas créé         |
| Logs                    | not date ou null | string             | string             | not int ou null | int             | pas créé         |
| Logs                    | not date ou null | string             | string             | not int ou null | not int ou null | pas créé         |
| Logs                    | not date ou null | string             | not string ou null | int             | int             | pas créé         |
| Logs                    | not date ou null | string             | not string ou null | int             | not int ou null | pas créé         |
| Logs                    | not date ou null | string             | not string ou null | not int ou null | int             | pas créé         |
| Logs                    | not date ou null | string             | not string ou null | not int ou null | not int ou null | pas créé         |
| Logs                    | not date ou null | not string ou null | string             | int             | int             | pas créé         |
| Logs                    | not date ou null | not string ou null | string             | int             | not int ou null | pas créé         |
| Logs                    | not date ou null | not string ou null | string             | not int ou null | int             | pas créé         |
| Logs                    | not date ou null | not string ou null | string             | not int ou null | not int ou null | pas créé         |
| Logs                    | not date ou null | not string ou null | not string ou null | int             | int             | pas créé         |
| Logs                    | not date ou null | not string ou null | not string ou null | int             | not int ou null | pas créé         |
| Logs                    | not date ou null | not string ou null | not string ou null | not int ou null | int             | pas créé         |
| Logs                    | not date ou null | not string ou null | not string ou null | not int ou null | not int ou null | pas créé         |

| DONNÉES DE TEST | ENTRÉES            |                   |              |              |              | RÉSULTAT ATTENDU |       
|-----------------|--------------------|-------------------|--------------|--------------|--------------|------------------|
| Classe          | log_date           | log_ip            | log_content  | ticket_id    | user_id      | RÉSULTAT ATTENDU |
| ----------      | ----------         | ----------        | ----------   | ----------   | ----------   | ----------       |
| Logs            | '2024-08-15-14-52' | '192.168.123.132' | 'azertraaez' | 3            | 5            | créé             |
| Logs            | '2024-08-15-14-52' | '192.168.123.132' | 'azertraaez' | 3            | 14.9 ou null | pas créé         |
| Logs            | '2024-08-15-14-52' | '192.168.123.132' | 'azertraaez' | 13.5 ou null | 5            | pas créé         |
| Logs            | '2024-08-15-14-52' | '192.168.123.132' | 'azertraaez' | 13.5 ou null | 14.9 ou null | pas créé         |
| Logs            | '2024-08-15-14-52' | '192.168.123.132' | 844 ou null  | 3            | 5            | pas créé         |
| Logs            | '2024-08-15-14-52' | '192.168.123.132' | 844 ou null  | 3            | 14.9 ou null | pas créé         |
| Logs            | '2024-08-15-14-52' | '192.168.123.132' | 844 ou null  | 13.5 ou null | 5            | pas créé         |
| Logs            | '2024-08-15-14-52' | '192.168.123.132' | 844 ou null  | 13.5 ou null | 14.9 ou null | pas créé         |
| Logs            | '2024-08-15-14-52' | 541 ou null       | 'azertraaez' | 3            | 5            | pas créé         |
| Logs            | '2024-08-15-14-52' | 541 ou null       | 'azertraaez' | 3            | 14.9 ou null | pas créé         |
| Logs            | '2024-08-15-14-52' | 541 ou null       | 'azertraaez' | 13.5 ou null | 5            | pas créé         |
| Logs            | '2024-08-15-14-52' | 541 ou null       | 'azertraaez' | 13.5 ou null | 14.9 ou null | pas créé         |
| Logs            | '2024-08-15-14-52' | 541 ou null       | 844 ou null  | 3            | 5            | pas créé         |
| Logs            | '2024-08-15-14-52' | 541 ou null       | 844 ou null  | 3            | 14.9 ou null | pas créé         |
| Logs            | '2024-08-15-14-52' | 541 ou null       | 844 ou null  | 13.5 ou null | 5            | pas créé         |
| Logs            | '2024-08-15-14-52' | 541 ou null       | 844 ou null  | 13.5 ou null | 14.9 ou null | pas créé         |
| Logs            | 451 ou null        | '192.168.123.132' | 'azertraaez' | 3            | 5            | pas créé         |
| Logs            | 451 ou null        | '192.168.123.132' | 'azertraaez' | 3            | 14.9 ou null | pas créé         |
| Logs            | 451 ou null        | '192.168.123.132' | 'azertraaez' | 13.5 ou null | 5            | pas créé         |
| Logs            | 451 ou null        | '192.168.123.132' | 'azertraaez' | 13.5 ou null | 14.9 ou null | pas créé         |
| Logs            | 451 ou null        | '192.168.123.132' | 844 ou null  | 3            | 5            | pas créé         |
| Logs            | 451 ou null        | '192.168.123.132' | 844 ou null  | 3            | 14.9 ou null | pas créé         |
| Logs            | 451 ou null        | '192.168.123.132' | 844 ou null  | 13.5 ou null | 5            | pas créé         |
| Logs            | 451 ou null        | '192.168.123.132' | 844 ou null  | 13.5 ou null | 14.9 ou null | pas créé         |
| Logs            | 451 ou null        | 541 ou null       | 'azertraaez' | 3            | 5            | pas créé         |
| Logs            | 451 ou null        | 541 ou null       | 'azertraaez' | 3            | 14.9 ou null | pas créé         |
| Logs            | 451 ou null        | 541 ou null       | 'azertraaez' | 13.5 ou null | 5            | pas créé         |
| Logs            | 451 ou null        | 541 ou null       | 'azertraaez' | 13.5 ou null | 14.9 ou null | pas créé         |
| Logs            | 451 ou null        | 541 ou null       | 844 ou null  | 3            | 5            | pas créé         |
| Logs            | 451 ou null        | 541 ou null       | 844 ou null  | 3            | 14.9 ou null | pas créé         |
| Logs            | 451 ou null        | 541 ou null       | 844 ou null  | 13.5 ou null | 5            | pas créé         |
| Logs            | 451 ou null        | 541 ou null       | 844 ou null  | 13.5 ou null | 14.9 ou null | pas créé         |

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




---

| TEST 24       | Entrée                                                                           | Sortie |
|---------------|----------------------------------------------------------------------------------|--------|
| User create() | use_username <br/> use_password <br/> use_name <br/> use_firstname <br/> role_id | créé   |

| TEST 25       | Entrée                                         | Sortie   |
|---------------|------------------------------------------------|----------|
| User create() | use_username <br/> use_firstname <br/> role_id | Pas créé |

> FA2 | BARKER, OUALI, GUILLERAY, GRAVIER, LEMOUTON

</div>