<?php

session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
} else {
    echo "Usuario: " . $_SESSION['nome_usuario'];
}
//SISTEMA PATRIMÔNIAL
if (!@($conexao = pg_connect("host=localhost dbname=db_patrimonio port=5432 user=postgres password=123456"))) {
    print "Não foi possível estabelecer uma conexão com o banco de dados.";
} else {
    pg_close($conexao);
    //print "Conexão OK!";

    if (isset($_POST['txtLogin']) && isset($_POST['txtSenha'])) {
        $login = $_POST['txtLogin'];
        $senha = $_POST['txtSenha'];
        $stringCon = "host=localhost dbname=patrimonio user=postgres password=root";
        $con = pg_connect($stringCon) or die("Problema!!!");
        $sql = "SELECT login, nome FROM usuario "
                . " WHERE login = '" . $login . "' "
                . " AND senha = '" . md5($senha) . "'";
        $result = pg_query($con, $sql);
        if (pg_num_rows($result)) {
            $linha = pg_fetch_array($result);
            $_SESSION['usuario'] = $linha['login'];
            $_SESSION['nome_usuario'] = $linha['nome'];
            header('Location: index.php');
        } else {
            echo "<p>Usuário inexistente!!!</p>";
        }
    }
?>