CREATE DATABASE bdUser353;
USE bdUser353;

CREATE TABLE tb_usuario(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome varchar(150) NOT NULL,
    login varchar(100) NOT NULL,
	senha varchar(50) NOT NULL,
    tipo enum('Admin','Usuário','Funcionário')
);