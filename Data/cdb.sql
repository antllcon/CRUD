CREATE DATABASE crud;
USE crud;

CREATE TABLE users
(
    id     INT AUTO_INCREMENT PRIMARY KEY,
    name   VARCHAR(16) NOT NULL,
    age    DATE        NOT NULL,
    number VARCHAR(16) NOT NULL
);