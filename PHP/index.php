<?php

session_start();
if (!isset($_SESSION['usuario'])){
	header('Location: index.html');
}else{
	
//SISTEMA PATRIM�NIAL
if (!@($conexao = pg_connect("host=localhost dbname=db_patrimonio port=5432 user=postgres password=123456"))) {
    print "N�o foi poss�vel estabelecer uma conex�o com o banco de dados.";
} else {
    if (isset($_POST['login']) && isset($_POST['senha'])){
			$login = $_POST['login'];
			$senha= $_POST['senha'];
			$sql = "SELECT login, nome FROM usuario WHERE login = '" . $login . "' " . " AND senha = '" . md5($senha) . "'";
			$result = pg_query($conexao, $sql);
			if (pg_num_rows($result)){ 
				$linha = pg_fetch_array($result);
				$_SESSION['usuario'] = $linha['login'];
				$_SESSION['usuario'] = $linha['nome'];
				header('Location: index.php');
			}else{
				echo "<p>Usu�rio inexistente!!!</p>";
			}
    $_SESSION['usuario']
    
    
pg_close($conexao);
    //print "Conex�o OK!";
}
?>