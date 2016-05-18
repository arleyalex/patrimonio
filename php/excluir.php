<?php
session_start();
if (isset($_SESSION['login'])) {
    $METODO = getenv("REQUEST_METHOD");
    $BANCO = ("host=localhost port=5432 dbname=db_patrimonio port=5432 user=postgres password=123456");
    $CONEXAO = pg_connect($BANCO);
    if (!$CONEXAO OR $METODO == "_GET") {
        echo 'SEM CONEXÃO COM O BANCO DE DADOS ou Metodo de envio invalido';
    } else
        if (isset($_POST['login']) && isset($_POST['senha'])) {
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            $SQL = "DELETE FROM TABLE bemPatrimonial WHERE numero = $_POST=['numero']";
            $RESULTADO = pg_query($CONEXAO, $SQL);
            if (pg_num_rows($RESULTADO)) {
                $LINHA = pg_fetch_array($RESULTADO);
                pg_close($CONEXAO);
            } else {
                header('Location: index.html');
                exit();
            }
        }
}
 ?>

