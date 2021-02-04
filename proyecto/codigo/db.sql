CREATE DATABASE database_Proyect;

show databases;

    USE  database_Proyect;
--> TABLA USUARIO
CREATE TABLE users(
    id INT(12) NOT NULL,
    username VARCHAR(16) NOT NULL,
    password VARCHAR(60) NOT NULL
);

ALTER TABLE users
    ADD PRIMARY KEY (id);

ALTER TABLE users
    MODIFY id  INT(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 1;


DESCRIBE users;

--> TABLA ADMINS
CREATE TABLE admins(
     id INT(12) NOT NULL,
    username VARCHAR(16) NOT NULL,
    password VARCHAR(60) NOT NULL
);

ALTER TABLE admins
    ADD PRIMARY KEY (id);

ALTER TABLE admins
    MODIFY id  INT(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 1;

DESCRIBE admins;

--> FALTA DE CREARLO ------------------------------------------------------------------
--> TABLA PRODUCTO
CREATE TABLE ticket(
    id INT(12) NOT NULL,
    name_product VARCHAR(150) NOT NULL,
    foto VARCHAR(200) NOT NULL,
    description TEXT,
    --created_at timestamp NOT NULL DEFAULT current_timestamp
);

ALTER TABLE ticket
    ADD PRIMARY KEY (id);

ALTER TABLE ticket
    MODIFY id INT(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 1;

DESCRIBE ticket;