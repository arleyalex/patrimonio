    <?php
    $url= "host=192.168.44.144 port=5432 dbname=db_patrimonio user=postgres password=123456";
     
    $conexao = pg_connect($url) or die ("Não foi possivel conectar ao servidor PostGreSQL"); 
     
    $login = $_POST['login'];
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];
	$perfil = $_POST['perfil'];
	
	$sql = "INSERT INTO usuario (login, nome, senha, nivel) VALUES ('$login','$nome',MD5('$senha'),'$perfil')";
	$result = pg_query ($conexao, $sql);
	if ($result != FALSE){
		echo "<h2>Dados inseridos com sucesso!</h2><br>";
	}
	else {
		echo "<h2>Falha no cadastro do usuário!</h2><br>";
	}	
	pg_close($conexao);
    ?>

