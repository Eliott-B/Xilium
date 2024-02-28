CREATE DATABASE xiliumtick CHARACTER SET utf8mb4;
USE xiliumtick;

CREATE TABLE roles
(
    rol_id   INT PRIMARY KEY,
    rol_name VARCHAR(50) NOT NULL
);

CREATE TABLE priorities
(
    pri_id    INT PRIMARY KEY AUTO_INCREMENT,
    pri_name  VARCHAR(50) NOT NULL,
    pri_index TINYINT     NOT NULL DEFAULT 0
);

CREATE TABLE labels
(
    lab_id   INT PRIMARY KEY AUTO_INCREMENT,
    lab_name VARCHAR(50) NOT NULL
);

CREATE TABLE status
(
    sta_id   INT PRIMARY KEY AUTO_INCREMENT,
    sta_name VARCHAR(50) NOT NULL
);

CREATE TABLE categories
(
    cat_id   INT PRIMARY KEY AUTO_INCREMENT,
    cat_name VARCHAR(50) NOT NULL
);

CREATE TABLE users
(
    use_id        INT PRIMARY KEY AUTO_INCREMENT,
    use_username  VARCHAR(50)  NOT NULL UNIQUE,
    use_password  VARCHAR(255) NOT NULL,
    use_name      VARCHAR(50)  NOT NULL,
    use_firstname VARCHAR(50)  NOT NULL,
    role_id       INT          NOT NULL DEFAULT 1,
    FOREIGN KEY (role_id) REFERENCES roles (rol_id)
);

CREATE TABLE tickets
(
    tic_id          INT PRIMARY KEY AUTO_INCREMENT,
    tic_title       VARCHAR(50) NOT NULL,
    tic_description TEXT        NOT NULL,
    author_id       INT         NOT NULL,
    label_id        INT         NOT NULL,
    category_id     INT         NOT NULL,
    priority_id     INT         NOT NULL,
    status_id       INT         NOT NULL,
    updater_id      INT         NOT NULL,
    tech_id INT NULL,
    creation_date   TIMESTAMP   DEFAULT CURRENT_TIMESTAMP,
    update_date     TIMESTAMP   DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (author_id) REFERENCES users (use_id),
    FOREIGN KEY (label_id) REFERENCES labels (lab_id),
    FOREIGN KEY (priority_id) REFERENCES priorities (pri_id),
    FOREIGN KEY (status_id) REFERENCES status (sta_id),
    FOREIGN KEY (category_id) REFERENCES categories (cat_id),
    FOREIGN KEY (updater_id) REFERENCES users (use_id),
    FOREIGN KEY (tech_id) REFERENCES users (use_id)
);

CREATE TABLE logs
(
    log_id      INT PRIMARY KEY AUTO_INCREMENT,
    log_date    TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
    log_ip      VARCHAR(15)  NOT NULL,
    log_content VARCHAR(255) NOT NULL,
    ticket_id   INT          NOT NULL,
    user_id     INT          NOT NULL,
    FOREIGN KEY (ticket_id) REFERENCES tickets (tic_id),
    FOREIGN KEY (user_id) REFERENCES users (use_id)
);

CREATE TABLE comments
(
    com_id      INT PRIMARY KEY AUTO_INCREMENT,
    com_title   VARCHAR(50) NOT NULL,
    com_comment TEXT        NULL,
    com_date    TIMESTAMP   NOT NULL DEFAULT CURRENT_TIMESTAMP,
    ticket_id   INT         NOT NULL,
    user_id     INT         NOT NULL,
    reply_to    INT         NOT NULL,
    FOREIGN KEY (ticket_id) REFERENCES tickets (tic_id),
    FOREIGN KEY (user_id) REFERENCES users (use_id),
    FOREIGN KEY (reply_to) REFERENCES comments (com_id)
);

INSERT INTO roles
VALUES (1, 'Utilisateur'),
       (10, 'Technicien'),
       (50, 'Administrateur Web'),
       (100, 'Administrateur Système');

INSERT INTO priorities
VALUES (NULL, 'Faible', 1),
       (NULL, 'Moyen', 2),
       (NULL, 'Important', 3),
       (NULL, 'Urgent', 4);

INSERT INTO status
VALUES (NULL, 'Ouvert'),
       (NULL, 'En traitement'),
       (NULL, 'Fermé');


