    <?php
    include "conexao.php";
	    
    $numero = $_POST['numero'];
	$comprimento = $_POST['comprimento'];
	$largura = $_POST['largura'];
	$codpredio = $_POST['codpredio'];
	$sigladepto = $_POST['sigladepto'];
	
	$SQL = "INSERT INTO sala (numero, comprimento, largura, codpredio, sigladepto) VALUES ('$numero','$comprimento','$largura','$codpredio','$sigladepto')";
	$RESULTADO = pg_query ($CONEXAO, $SQL);
	if ($RESULTADO != FALSE){
		echo "<h2>Dados inseridos com sucesso!</h2><br>";
	}
	else {
		echo "<h2>Falha no cadastro do usuário!</h2><br>";
	}	
	pg_close($CONEXAO);
    ?>