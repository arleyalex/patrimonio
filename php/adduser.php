    <?php
    
    /* FACULDADE DE TECNOLOGIA SENAC GOIÁS INSTRUMENTO DO PROCESSO DE AVALIAÇÃO DE APRENDIZAGEM

                                  PROJETO PATRIMONIO - CYGNI*/
        session_cache_expire(2);    
        session_start();
        include "conexao.php";
	$permitidos = array('adduser.php');   
        if (isset($_POST['adduser.php']) AND (array_search($_POST['adduser.php'], $permitidos) !== false)) {
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
        }
	pg_close($CONEXAO);
    ?>

