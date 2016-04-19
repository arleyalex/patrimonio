--CRIANDO BD--
--Rafael V. Dias--
CREATE DATABASE bd_patrimonio
  WITH OWNER = postgres
       ENCODING = 'UTF8'
       TABLESPACE = pg_default
       LC_COLLATE = 'pt_BR.UTF-8'
       LC_CTYPE = 'pt_BR.UTF-8'
       CONNECTION LIMIT = -1;
	   
--CRIANDO TABELAS--
CREATE TABLE categoria(
	codigo SERIAL PRIMARY KEY,
	nome   VARCHAR(30) NOT NULL,
	descricao VARCHAR(80) NOT NULL
);

CREATE TABLE departamento(
	sigla CHAR(5) PRIMARY KEY,
	nome VARCHAR(30) NOT NULL,
	responsavel VARCHAR(50) NOT NULL
);

CREATE TABLE predio(
	codigo SERIAL PRIMARY KEY,
	nome VARCHAR(50) NOT NULL,
	endereco VARCHAR(100) NOT NULL
);

CREATE TABLE usuario(
	login VARCHAR(20) PRIMARY KEY,
	nome VARCHAR(50) NOT NULL,
	senha VARCHAR(60) NOT NULL
);

CREATE TABLE sala(
	numero SERIAL PRIMARY KEY,
	comprimento NUMERIC(5,2) NOT NULL,
	largura NUMERIC(5,2) NOT NULL,
	CodPredio INTEGER NOT NULL,
	siglaDpto CHAR(5) NOT NULL,
	FOREIGN KEY (CodPredio) REFERENCES predio(codigo),
	FOREIGN KEY (siglaDpto) REFERENCES departamento(sigla)
);
CREATE TABLE BemPatrimonial (
	numero SERIAL PRIMARY KEY,
	descricao VARCHAR(80) NOT NULL,
	nrNotaFiscal INTEGER NOT NULL,
	DtNotaFiscal DATE NOT NULL,
	fornecedor VARCHAR(60)NOT NULL,
	valor NUMERIC(15,2) NOT NULL,
	situacao CHAR(1) NOT NULL,
	CodCat INTEGER NOT NULL,
	NumSala INTEGER NOT NULL,
	FOREIGN KEY (CodCat) REFERENCES categoria(codigo),
	FOREIGN KEY (NumSala) REFERENCES sala(numero)
);

CREATE TABLE MBP (
	numero SERIAL PRIMARY KEY,
	data	DATE NOT NULL,
	login VARCHAR(20) NOT NULL,
	numBem INTEGER NOT NULL,
	numSalaOrigem INTEGER NOT NULL,
	numSalaDestino INTEGER NOT NULL,
	FOREIGN KEY(login) REFERENCES usuario(login),
	FOREIGN KEY(numBem) REFERENCES BemPatrimonial(numero),
	FOREIGN KEY(numSalaOrigem) REFERENCES sala(numero),
	FOREIGN KEY(numSalaDestino) REFERENCES sala(numero)
)
