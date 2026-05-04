CREATE DATABASE bdcrud;
COMMIT;
USE bdcrud;

CREATE TABLE categoria(
    id          INT AUTO_INCREMENT,
    descricao   VARCHAR(50) NOT NULL,
    CONSTRAINT pk_categoria PRIMARY KEY (id),
    CONSTRAINT uq_categoria UNIQUE(descricao)
);

CREATE TABLE usuario(
    usuario         VARCHAR(30) NOT NULL,
    senha           CHAR(40) NOT NULL, -- sha1
    perfilacesso    CHAR(1) NOT NULL DEFAULT 'U',
    CONSTRAINT  PKUsuario PRIMARY KEY (usuario),
    CONSTRAINT  CKUsuarioPerfil 
        CHECK( (perfilacesso='A') OR  (perfilacesso='U') )
);

INSERT INTO usuario(usuario,senha) 
    VALUES('Paulo', sha1('123456') );
INSERT INTO usuario(usuario,senha,perfilacesso) 
    VALUES('Rodrigo', sha1('654321'), 'A');

-- CREATE TABLE cliente(
--     id      INT   AUTO_INCREMENT,
--     nome    VARCHAR(50) NOT NULL,
--     cpf     CHAR(11)    NOT NULL,
--     CONSTRAINT PK_Cliente PRIMARY KEY(id),
--     CONSTRAINT UQ_ClienteCPF UNIQUE (cpf)
-- );

CREATE TABLE produto(
    id                  INT AUTO_INCREMENT  ,
    descricao           VARCHAR(50) NOT NULL,
    quantidade          INT                 ,
    valor_unitario      DECIMAL(10,2)       ,
    id_categoria        INT NOT NULL        ,
    CONSTRAINT PKProduto PRIMARY KEY(id)    ,
    CONSTRAINT FKProdutoCategoria FOREIGN KEY (id_categoria)
        REFERENCES categoria(id)
);