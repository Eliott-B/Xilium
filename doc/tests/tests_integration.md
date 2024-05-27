<div align='justify'>

# TESTS D'INTEGRATION

> FA2 | BARKER, OUALI, GUILLERAY, GRAVIER, LEMOUTON

## Sommaire

- [TESTS D'INTEGRATION](#tests-dintegration)
    - [Sommaire](#sommaire)
    - [Introduction](#introduction)
    - [Tests](#tests)
        - [TicketController](#ticketcontroller)
        - [UserController](#usercontroller)
        - [DashboardController](#dashboardcontroller)
        - [IndexController](#indexcontroller)
        - [TechnicienDashboardController](#techniciendashboardcontroller)

## Introduction

&emsp;Les tests d'intégration permettent de vérifier que les différents composants de l'application

&emsp;Ici nos composants sont les suivants :

- On a les modèles qui sont les classes qui permettent de représenter les données de l'application
- On a les contrôleurs qui sont les classes qui permettent de gérer les actions de l'utilisateur
- On a les vues qui sont les classes qui permettent de représenter les données à l'utilisateur

&emsp;Les modèles sont testés dans les tests unitaires, les contrôleurs sont testés dans les tests d'intégration et les
vues
sont testées dans les tests d'acceptation.
Les contrôleurs intègrent les modèles grâce à l'interface de base de données.

&emsp;Les résultats d'intégration suivants sont les résultats obtenus lors de l'intégration des composants de
l'application.

&emsp;Nous testons l'intégration de la base de données dans le contrôleur.

## Tests

### TicketController

| Méthode             | Classes appelées                                         | Résultat de l'intégration |
|---------------------|----------------------------------------------------------|---------------------------|
| create_form         | Category, Label, Priority                                | OK                        |
| create              | Ticket                                                   | OK                        |
| update_form         | Ticket, Category, Label, Priority                        | OK                        |
| update              | Ticket                                                   | OK                        |
| close_form          | Ticket                                                   | OK                        |
| close               | Ticket, Status                                           | OK                        |
| comment             | Comment                                                  | OK                        |
| show                | Ticket, Comment, User, Status, Category, Label, Priority | OK                        |
| update_status_form  | Ticket, Status                                           | OK                        |
| update_status       | Ticket                                                   | OK                        |
| assignation_form    | Ticket                                                   | OK                        |
| desassignation_form | Ticket                                                   | OK                        |
| assignation         | Ticket                                                   | OK                        |
| desassignation      | Ticket                                                   | OK                        |

### UserController

| Méthode       | Classes appelées | Résultat de l'intégration |
|---------------|------------------|---------------------------|
| login_form    | /                | OK                        |
| login         | User             | OK                        |
| account       | User, Role       | OK                        |
| register_form | /                | OK                        |
| register      | User             | OK                        |
| update        | User             | OK                        |
| logout        | /                | OK                        |

### DashboardController

| Méthode | Classes appelées                                         | Résultat de l'intégration |
|---------|----------------------------------------------------------|---------------------------|
| index   | Ticket, Comment, User, Status, Category, Label, Priority | OK                        |

### IndexController

| Méthode | Classes appelées | Résultat de l'intégration |
|---------|------------------|---------------------------|
| index   | Ticket           | OK                        |

### TechnicienDashboardController

| Méthode | Classes appelées                                         | Résultat de l'intégration |
|---------|----------------------------------------------------------|---------------------------|
| index   | Ticket, Comment, User, Status, Category, Label, Priority | OK                        |

> FA2 | BARKER, OUALI, GUILLERAY, GRAVIER, LEMOUTON
</div>
