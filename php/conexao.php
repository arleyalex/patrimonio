<?php
/* FACULDADE DE TECNOLOGIA SENAC GOIÁS INSTRUMENTO DO PROCESSO DE AVALIAÇÃO DE APRENDIZAGEM

                                  PROJETO PATRIMONIO - CYGNI*/

    $METODO = getenv("REQUEST_METHOD");
    $BANCO = ("host=$IP port=5432 dbname=$DB user=$USER password=$PW");
    $CONEXAO = pg_connect($BANCO);
	?>

