<?php

    $METODO = getenv("REQUEST_METHOD");
    $BANCO = ("host=localhost port=5432 dbname=cygni port=5432 user=postgres password=root");
    $CONEXAO = pg_connect($BANCO);
	
?>
