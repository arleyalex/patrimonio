<?php
/* FACULDADE DE TECNOLOGIA SENAC GOIÁS INSTRUMENTO DO PROCESSO DE AVALIAÇÃO DE APRENDIZAGEM

                                  PROJETO PATRIMONIO - CYGNI*/

$permitidos = array('conexao.php','adduser.php','cadastrarbem.php','cadastrosala.php','caddepto.php','cadpatrimonio.php','consultapr.php','consultarpt.php','consultasl.php','excluir.php','index.php','logout.php');
session_name(md5('seg'.$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']));
session_cache_expire(5);
include "conexao.php";
if ($METODO == "GET") {
        echo "DADOS INVALIDOS";
        unset ($METODO);
        exit();
        
}
        if (!$CONEXAO) {
    echo 'SEM CONEXÃO COM O BANCO DE DADOS';
        unset ($CONEXAO);
        exit();
} else {
    if (isset($_POST['login']) AND (array_search($_POST['index.php'], $permitidos) !== false)) {
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $SQL = "SELECT login, nome, nivel FROM usuario WHERE login = '" . $login . "' " . " AND senha = '" . md5($senha) . "'";
    $RESULTADO = pg_query($CONEXAO, $SQL);
	$DADOS = pg_fetch_row ($RESULTADO);
	$NIVEL = $DADOS[2];
	switch ($NIVEL) {
		case "G":
		    header('Location: ../consulta.html');

                case "F":
                    header('Location: ../consultar.html');
        }
    }
}
pg_close($CONEXAO);
?>
<html>
    <title> SISTEMA PATRIMONIAL </title>
</html>