<?php

    include "conexao.php";
    if ($METODO == "GET"){
    echo "DADOS INVALIDOS";
    }
    if (!$CONEXAO) {
    echo 'SEM CONEXÃO COM O BANCO DE DADOS';
   }
    else{
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $SQL = "SELECT login, nome FROM usuario WHERE login = '" . $login . "' " . " AND senha = '" . md5($senha) . "'";
        $RESULTADO = pg_query($CONEXAO, $SQL);
        if (pg_num_rows($RESULTADO)) {
            $LINHA = pg_fetch_array($RESULTADO);
            $_SESSION['usuario'] = $LINHA['login'];
            $_SESSION['nome_usuario'] = $LINHA['nome'];
            header('Location: menu1.html');
        } else {
            echo "<p>USUARIO NÃO ACEITO.</p>";
            exit();
        }

}
    pg_close($CONEXAO);
?>
    <html>
    <title> SISTEMA PATRIMONIAL </title>
    </html>
~
