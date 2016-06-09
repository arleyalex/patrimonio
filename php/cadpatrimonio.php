<?php
	include "conexao.php";
        session_cache_expire(2);
	session_start();
	
	$NUMERO = $_POST['numerodobem'];
	$DESCRICAO = $_POST['descricao'];
	$NRNOTA = $_POST['notafiscal'];
	$DATANF = $_POST['dataemissao'];
	$FORNECEDOR = $_POST['fornecedor'];
	$VALOR = $_POST['valor'];
	$SITUACAO = $_POST['situacao'];
	$CATEGORIA = $_POST['categoria'];
	$NUMSALA= $_POST['numsala'];
	
	
	$SQL = "INSERT INTO bempatrimonial (numero, descricao, nrnotafiscal, dtnotafiscal, fornecedor, valor, situacao, codcat, numsala) VALUES ('$NUMERO','$DESCRICAO','$NRNOTA','$DATANF','$FORNECEDOR','$VALOR','$SITUACAO','$CATEGORIA','$NUMSALA')";
	$RESULTADO = pg_query ($CONEXAO, $SQL);
	if ($RESULTADO != FALSE){
		echo "<script>window.alert('Dados inseridos com Sucesso!')</script>";
		header('Location: cadastrarbem.php');
	}
	else {
		echo "<h2>Falha no cadastro do usuário!</h2><br>";
		header('Location: cadastrarbem.php');
	}

	pg_close($CONEXAO);
?>	