<?php
include "conexao.php";
if ($METODO == "GET") {
    echo "DADOS INVALIDOS";
}
if (!$CONEXAO) {
    echo 'SEM CONEXÃO COM O BANCO DE DADOS';
} else {
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $SQL = "SELECT login, nome, nivel FROM usuario WHERE login = '" . $login . "' " . " AND senha = '" . md5($senha) . "'";
    $RESULTADO = pg_query($CONEXAO, $SQL);
	$DADOS = pg_fetch_row ($RESULTADO);
	$NIVEL = $DADOS[2];
	switch ($NIVEL) {
		case "G":
			//$_SESSION['usuario'] = $LINHA['login'];
            //$_SESSION['nome_usuario'] = $LINHA['nome'];
            header('Location: ../consultar.html');

        case "F":
            //$_SESSION['usuario'] = $LINHA['login'];
            //$_SESSION['nome_usuario'] = $LINHA['nome'];
            header('Location: ../consultar.html');
        }
    }
pg_close($CONEXAO);
?>
<html>
    <title> SISTEMA PATRIMONIAL </title>
</html>	
