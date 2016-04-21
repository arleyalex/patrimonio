<html>
    <title> SISTEMA PATRIMONIAL </title>
</html>
<?php
session_start();
if (isset($_SESSION['login'])) {
    header('Location: menu1.html');
} else {
    $METODO = getenv("REQUEST_METHOD");
    $BANCO = ("host=localhost port=5432 dbname=db_patrimonio port=5432 user=postgres password=123456");
    $CONEXAO = pg_conect($BANCO);
    if ($METODO == "GET");
    echo "DADOS INVALIDOS";
    header('Location: index.html');
    exit();
}

if (!$CONEXAO) {
    echo 'SEM CONEXÃO COM O BANCO DE DADOS';
    exit();
} else {
    if (isset($_POST['login']) && isset($_POST['senha'])) {
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
}
pg_close($CONEXAO);
?>
     