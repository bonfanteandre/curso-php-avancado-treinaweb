CREATE DATABASE sessoes;

USE sessoes;

CREATE TABLE sessoes
(
	id CHAR(128) NOT NULL,
	conteudo TEXT NOT NULL,
	ultimo_acesso TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);