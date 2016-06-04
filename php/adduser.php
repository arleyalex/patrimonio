    <?php
    include "conexao.php";
	    
    $login = $_POST['login'];
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];
	$perfil = $_POST['perfil'];
	
	$SQL = "INSERT INTO usuario (login, nome, senha, nivel) VALUES ('$login','$nome',MD5('$senha'),'$perfil')";
	$RESULTADO = pg_query ($CONEXAO, $SQL);
	if ($RESULTADO != FALSE){
		echo "<h2>Dados inseridos com sucesso!</h2><br>";
	}
	else {
		echo "<h2>Falha no cadastro do usuário!</h2><br>";
	}	
	pg_close($CONEXAO);
    ?>

