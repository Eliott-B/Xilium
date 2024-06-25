DROP DATABASE IF EXISTS xiliumtick;
CREATE DATABASE IF NOT EXISTS xiliumtick CHARACTER SET utf8mb4;
USE xiliumtick;

CREATE TABLE roles
(
    rol_id   INT PRIMARY KEY,
    rol_name VARCHAR(50) NOT NULL
);

CREATE TABLE priorities
(
    pri_id        INT PRIMARY KEY AUTO_INCREMENT,
    pri_name      VARCHAR(50) NOT NULL,
    pri_index     TINYINT     NOT NULL DEFAULT 0,
    pri_css_color VARCHAR(50)
);

CREATE TABLE labels
(
    lab_id        INT PRIMARY KEY AUTO_INCREMENT,
    lab_name      VARCHAR(50) NOT NULL,
    lab_css_color VARCHAR(50)
);

CREATE TABLE status
(
    sta_id        INT PRIMARY KEY AUTO_INCREMENT,
    sta_name      VARCHAR(50) NOT NULL,
    sta_css_color VARCHAR(50)
);

CREATE TABLE categories
(
    cat_id        INT PRIMARY KEY AUTO_INCREMENT,
    cat_name      VARCHAR(50) NOT NULL,
    cat_css_color VARCHAR(50)
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
    label_id        INT         ,
    category_id     INT         ,
    priority_id     INT         ,
    status_id       INT         NOT NULL,
    updater_id      INT         ,
    tech_id         INT         NULL,
    creation_date   TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date     TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (author_id) REFERENCES users (use_id) ON DELETE CASCADE ,
    FOREIGN KEY (label_id) REFERENCES labels (lab_id) ON DELETE SET NULL ,
    FOREIGN KEY (priority_id) REFERENCES priorities (pri_id),
    FOREIGN KEY (status_id) REFERENCES status (sta_id),
    FOREIGN KEY (category_id) REFERENCES categories (cat_id) ON DELETE SET NULL,
    FOREIGN KEY (updater_id) REFERENCES users (use_id) ON DELETE SET NULL,
    FOREIGN KEY (tech_id) REFERENCES users (use_id) ON DELETE SET NULL
);

CREATE TABLE logs
(
    log_id      INT PRIMARY KEY AUTO_INCREMENT,
    log_ip      VARCHAR(15)  NOT NULL,
    log_content VARCHAR(255) NOT NULL,
    ticket_id   INT,
    user_id     INT,
    log_date    TIMESTAMP    DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (ticket_id) REFERENCES tickets (tic_id) ON DELETE SET NULL ,
    FOREIGN KEY (user_id) REFERENCES users (use_id) ON DELETE SET NULL
);

CREATE TABLE comments
(
    com_id      INT PRIMARY KEY AUTO_INCREMENT,
    com_title   VARCHAR(50) NOT NULL,
    com_comment TEXT        NULL,
    com_date    TIMESTAMP   NOT NULL DEFAULT CURRENT_TIMESTAMP,
    ticket_id   INT         NOT NULL,
    user_id     INT         ,
    reply_to    INT         NULL,
    FOREIGN KEY (ticket_id) REFERENCES tickets (tic_id) ON DELETE CASCADE ,
    FOREIGN KEY (user_id) REFERENCES users (use_id) ON DELETE SET NULL ,
    FOREIGN KEY (reply_to) REFERENCES comments (com_id) ON DELETE CASCADE
);

-- JDD

INSERT INTO roles
VALUES (1, 'Utilisateur'),
       (10, 'Technicien'),
       (50, 'Administrateur Web'),
       (100, 'Administrateur Système');

INSERT INTO priorities
VALUES (1, 'Faible', 1, '#2ecc71'),
       (2, 'Moyenne', 2, '#f39c12'),
       (3, 'Haute', 3, '#e74c3c'),
       (4, 'Urgente', 4, '#e70000');

INSERT INTO labels
VALUES (1, 'Autre', '#d6d333'),
       (2, 'Bug', '#e74c3c'),
       (3, 'Amélioration', '#2ecc71'),
       (4, 'Documentation', '#9b59b6'),
       (5, 'Sécurité', '#808080');

INSERT INTO status
VALUES (1, 'Nouveau', '#3498db'),
       (2, 'En cours', '#f39c12'),
       (3, 'Résolu', '#2ecc71'),
       (4, 'Fermé', '#808080');

INSERT INTO categories
VALUES (1, 'Autre', '#d6d333'),
       (2, 'Logiciel', '#9b59b6'),
       (3, 'Matériel', '#9b59b6'),
       (4, 'Réseau', '#9b59b6'),
       (5, 'Sécurité', '#9b59b6');

INSERT INTO users
VALUES (1, 'admin', '9ffa04f5', 'Admin', 'Admin', 100),
       (2, 'user', '9ffa04f5', 'User', 'User', 1),
       (3, 'tec1', 'e1059f', 'Tech', 'Tech', 10),
       (3, 'tec2', 'e1059f', 'Tech', 'Tech', 10),
       (4, 'gestion', '9ffa04f5', 'WebAdmin', 'WebAdmin', 50);
