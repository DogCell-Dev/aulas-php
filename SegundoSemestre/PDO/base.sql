CREATE DATABASE escola;

commit;

USE escola;

CREATE TABLE alunos (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Identificador único para cada aluno
    nome VARCHAR(100) NOT NULL, -- Nome do aluno
    email VARCHAR(100) NOT NULL UNIQUE, -- E-mail único para cada aluno
    idade INT NOT NULL -- Idade do aluno
);

CREATE TABLE usuarios(
    loginUsuario    varchar(30) PRIMARY KEY,
    senhaUsuario    CHAR(40) NOT NULL,
    nivelUsuario    CHAR(1) NOT NULL DEFAULT 'U' CHECK ( (nivelUsuario = 'A') OR (nivelUsuario='U') )
);

INSERT INTO usuarios(loginUsuario, senhaUsuario, nivelUsuario)
    VALUES('Paulo','123456', 'U');

INSERT INTO usuarios(loginUsuario, senhaUsuario, nivelUsuario)
    VALUES('Rodrigo','654321', 'A');