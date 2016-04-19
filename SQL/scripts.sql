-- CRIANDO BANCO DE DADOS
CREATE DATABASE db_patrimonio
  WITH OWNER = postgres
       ENCODING = 'UTF8'
       TABLESPACE = pg_default
       LC_COLLATE = 'Portuguese_Brazil.1252'
       LC_CTYPE = 'Portuguese_Brazil.1252'
       CONNECTION LIMIT = -1;

-- CRIAÇÃO DAS TABELAS

CREATE TABLE public.categoria
(
  codigo integer NOT NULL DEFAULT nextval('categoria_codigo_seq'::regclass),
  nome character varying(30) NOT NULL,
  descricao character varying(80) NOT NULL,
  CONSTRAINT categoria_pkey PRIMARY KEY (codigo)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.categoria
  OWNER TO postgres;
  
  CREATE TABLE public.departamento
(
  sigla character(5) NOT NULL,
  nome character varying(30) NOT NULL,
  responsavel character varying(50) NOT NULL,
  CONSTRAINT departamento_pkey PRIMARY KEY (sigla)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.departamento
  OWNER TO postgres;

 CREATE TABLE public.predio
(
  codigo integer NOT NULL DEFAULT nextval('predio_codigo_seq'::regclass),
  nome character varying(50) NOT NULL,
  endereco character varying(100) NOT NULL,
  CONSTRAINT predio_pkey PRIMARY KEY (codigo)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.predio
  OWNER TO postgres;


CREATE TABLE public.usuario
(
  login character varying(20) NOT NULL,
  nome character varying(50) NOT NULL,
  senha character varying(60) NOT NULL,
  nivel character(1) NOT NULL,
  CONSTRAINT usuario_pkey PRIMARY KEY (login)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.usuario
  OWNER TO postgres;
  
  CREATE TABLE public.sala
(
  numero integer NOT NULL DEFAULT nextval('sala_numero_seq'::regclass),
  comprimento numeric(5,2) NOT NULL,
  largura numeric(5,2) NOT NULL,
  cod_predio integer NOT NULL,
  sigla_depto character(5) NOT NULL,
  CONSTRAINT sala_pkey PRIMARY KEY (numero),
  CONSTRAINT sala_cod_predio_fkey FOREIGN KEY (cod_predio)
      REFERENCES public.predio (codigo) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT sala_sigla_depto_fkey FOREIGN KEY (sigla_depto)
      REFERENCES public.departamento (sigla) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.sala
  OWNER TO postgres;

CREATE TABLE public."bemPatrimonial"
(
  numero integer NOT NULL DEFAULT nextval('"bemPatrimonial_numero_seq"'::regclass),
  descricao character varying(80) NOT NULL,
  "nrNotaFiscal" integer NOT NULL,
  "dtNotaFiscal" date NOT NULL,
  fornecedor character varying(60) NOT NULL,
  valor numeric(15,2) NOT NULL,
  situacao character(1) NOT NULL,
  cod_categoria integer NOT NULL,
  numsala integer NOT NULL,
  CONSTRAINT "bemPatrimonial_pkey" PRIMARY KEY (numero),
  CONSTRAINT "bemPatrimonial_cod_categoria_fkey" FOREIGN KEY (cod_categoria)
      REFERENCES public.categoria (codigo) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "bemPatrimonial_numsala_fkey" FOREIGN KEY (numsala)
      REFERENCES public.sala (numero) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public."bemPatrimonial"
  OWNER TO postgres;


  CREATE TABLE public.mbp
(
  numero integer NOT NULL DEFAULT nextval('mbp_numero_seq'::regclass),
  data date NOT NULL,
  login character varying(20) NOT NULL,
  "numBem" integer NOT NULL,
  "numSalaOrigem" integer NOT NULL,
  "numSalaDestino" integer NOT NULL,
  CONSTRAINT mbp_pkey PRIMARY KEY (numero),
  CONSTRAINT mbp_login_fkey FOREIGN KEY (login)
      REFERENCES public.usuario (login) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "mbp_numBem_fkey" FOREIGN KEY ("numBem")
      REFERENCES public."bemPatrimonial" (numero) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "mbp_numSalaDestino_fkey" FOREIGN KEY ("numSalaDestino")
      REFERENCES public.sala (numero) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.mbp
  OWNER TO postgres;
