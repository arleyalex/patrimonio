<?php
/* FACULDADE DE TECNOLOGIA SENAC GOI�S INSTRUMENTO DO PROCESSO DE AVALIA��O DE APRENDIZAGEM

                                  PROJETO PATRIMONIO - CYGNI*/

    $METODO = getenv("REQUEST_METHOD");
    $BANCO = ("host=$IP port=5432 dbname=$DB user=$USER password=$PW");
    $CONEXAO = pg_connect($BANCO);
	?>

