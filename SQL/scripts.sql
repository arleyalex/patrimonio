DROP DATABASE IF EXISTS db_patrimonio;

-- CRIANDO BANCO DE DADOS
CREATE DATABASE db_patrimonio
  WITH OWNER = postgres
       ENCODING = 'UTF8'
       TABLESPACE = pg_default
       LC_COLLATE = 'Portuguese_Brazil.1252'
       LC_CTYPE = 'Portuguese_Brazil.1252'
       CONNECTION LIMIT = -1;

--CRIANÇÃO DAS TABELAS

CREATE TABLE categoria(
	codigo SERIAL,
	nome VARCHAR(30) NOT NULL,
	descricao VARCHAR(80) NOT NULL,
	CONSTRAINT categoria_pkey PRIMARY KEY (codigo)
);
CREATE TABLE departamento (
	sigla CHAR(5),
	nome VARCHAR(30) NOT NULL,
	responsavel VARCHAR(50) NOT NULL,
	CONSTRAINT departamento_pkey PRIMARY KEY (sigla)
);

CREATE TABLE predio (
	codigo SERIAL,
	nome VARCHAR(50) NOT NULL,
	endereco VARCHAR(100) NOT NULL,
	CONSTRAINT predio_pkey PRIMARY KEY (codigo)
);
CREATE TABLE sala (
	numero SERIAL,
	comprimento NUMERIC(5,2) NOT NULL,
	largura NUMERIC(5,2) NOT NULL,
	codPredio INTEGER REFERENCES predio(codigo),
	siglaDepto CHAR(5) NOT NULL REFERENCES departamento(sigla),
	CONSTRAINT sala_pkey PRIMARY KEY (numero)
);
CREATE TABLE bemPatrimonial (
	numero SERIAL,
	descricao VARCHAR(80) NOT NULL,
	nrNotaFiscal INTEGER NOT NULL,
	dtNotaFiscal DATE NOT NULL,
	fornecedor VARCHAR(60) NOT NULL,
	valor NUMERIC(15,2) NOT NULL,
	situacao CHAR(1) NOT NULL,
	codCat INTEGER NOT NULL REFERENCES categoria(codigo),
	numSala INTEGER NOT NULL REFERENCES sala(numero),
	CONSTRAINT bemPatrimonial_pkey PRIMARY KEY (numero)
);
CREATE TABLE usuario (
	login VARCHAR(20),
	nome VARCHAR(50) NOT NULL,
	senha VARCHAR(60) NOT NULL,
	nivel CHAR(1) NOT NULL,
	CONSTRAINT usuario_pkey PRIMARY KEY (login)
);
CREATE TABLE MPB (
	numero SERIAL,
	dtAtual DATE NOT NULL,
	login VARCHAR(20) NOT NULL REFERENCES usuario(login),
	numBem INTEGER NOT NULL REFERENCES bemPatrimonial(numero),
	numSalaOrigem INTEGER NOT NULL REFERENCES sala(numero),
	numSalaDestino INTEGER NOT NULL REFERENCES sala(numero),
	CONSTRAINT MPB_pkey PRIMARY KEY(numero)
);

