    <?php
    include "conexao.php";
	session_start();
	    
    $SIGLA = $_POST['sigla'];
	$NOME = $_POST['nome'];
	$RESPONSAVEL = $_POST['responsavel'];
	$SQL = "INSERT INTO departamento (sigla, nome, responsavel) VALUES ('$SIGLA','$NOME','$RESPONSAVEL')";
	$RESULTADO = pg_query ($CONEXAO, $SQL);
	if ($RESULTADO != FALSE){
		echo "<h2>Dados inseridos com sucesso!</h2><br>";
		//header('Location: caddepto.php');
		
	}
	else {
		echo "<h2>Falha no processo!</h2><br>";
		//header('Location: caddepto.php');
	}	
	pg_close($CONEXAO);
    ?>

<HTML>
	<HEAD>
	</HEAD>
	<BODY>
		<li><a href="../cadastrardepto.html">Retorna</a></li>
	</BODY>
</HTML>