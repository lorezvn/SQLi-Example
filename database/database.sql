CREATE DATABASE IF NOT EXISTS sqli_db;

USE sqli_db;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);

INSERT INTO users (username, password) VALUES
    ('user', 'password'),
    ('test', 'secret-password'),
    ('admin', 'admin');


