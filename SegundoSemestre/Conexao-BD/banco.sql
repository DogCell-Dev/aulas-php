CREATE DATABASE bdcrud;
COMMIT;
USE bdcrud;

CREATE TABLE categoria(
    id          INT AUTO_INCREMENT,
    descricao   VARCHAR(50) NOT NULL,
    CONSTRAINT pk_categoria PRIMARY KEY (id),
    CONSTRAINT uq_categoria UNIQUE(descricao)
);