--Inserção de Dados - Categoria

INSERT INTO categoria (codigo, nome, descricao)
	VALUES ('1','EQUIPAMENTOS DE INFORMATICA','COMPUTADORES, MONITORES, ETC'),
	       ('2','MOBILIARIOS','MESAS, CADEIRAS, SOFAS, ETC'),
	       ('3','TELECOMUNICACOES','TELEFONES, HEADSET, ETC'),
	       ('4','TRANSPORTE','MOTOS, CARROS, PERUAS, CAMINHOES, ETC');


--Inserção de Dados - Tabela Predio

INSERT INTO predio (codigo, nome, endereco)
	VALUES ('1','MATRIZ','RUA AMERICA, 121 - CENTRO - GOIANIA - GO'),
	       ('2','FILIAL','AV. RICARDO PARANHOS, 100 - MARISTA - GOIANIA - GO');

--Inserção de Dados - Tabela Departamento

INSERT INTO departamento (sigla, nome, responsavel)
	VALUES ('OPRH','OPERACOES DE RH','RAFAEL VAZ'),
	       ('TI','TECNOLOGIA DA INFORMACAO','ANDRE SILVA'),
	       ('CTAB','CONTABILIDADE','ARLEY ALEX'),
	       ('GENTE','RECURSOS HUMANOS','MARIA DA SILVA'),
	       ('OPER','OPERACOES','CARLOS SANTANA');

-- Inserção de Dados - Tabela Sala

INSERT INTO sala (numero, comprimento, largura, codpredio, sigladepto)
	VALUES ('100','10.7','8.8','1','OPRH'),
	       ('101','9.5','8.2','1','CTAB'),
	       ('102','20.2','10.8','1','OPER'),
	       ('103','9.3','8.2','2','GENTE'),
	       ('104','5.4','6.2','2','TI'),
	       ('105','15.2','10.0','2','TI');




	       
