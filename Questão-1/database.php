CREATE DATABASE livraria;
USE livraria;
CREATE TABLE livros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    título VARCHAR(255) NOT NULL,
    autor VARCHAR(255) NOT NULL,
    ano INT
);
