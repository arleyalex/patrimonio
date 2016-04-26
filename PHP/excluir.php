<?php
session_start();
if (isset($_SESSION['login'])) {
    header('Location: excluir.php');
} else {
    $METODO = getenv("REQUEST_METHOD");
    $BANCO = ("host=localhost port=5432 dbname=db_patrimonio port=5432 user=postgres password=123456");
    $CONEXAO = pg_conect($BANCO);
    if (!$CONEXAO OR $METODO == "_GET"){
    echo 'SEM CONEXÃO COM O BANCO DE DADOS ou Metodo de envio invalido';
        header('Location: index.html');
    exit();
    }
 else {
    if (isset($_POST['login']) && isset($_POST['senha'])) {
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $SQL = "DELETE FROM TABLE bemPatrimonial WHERE"
                "
                    . "
                
                
                
                
                
                CREATE TABLE bemPatrimonial (
	numero SERIAL,
	descricao VARCHAR(80) NOT NULL,
	nrNotaFiscal INTEGER NOT NULL,
	dtNotaFiscal DATE NOT NULL,
	fornecedor VARCHAR(60) NOT NULL,
	valor NUMERIC(15,2) NOT NULL,
	situacao CHAR(1) NOT NULL,
	codCat INTEGER NOT NULL REFERENCES categoria(codigo),
	numSala INTEGER NOT NULL REFERENCES sala(numero),
	CONSTRAINT bemPatrimonial_pkey PRIMARY KEY (numero),
                
                
                
                
                
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
    <html>
    <title> SISTEMA PATRIMONIAL </title>
    <head>
         <link rel="stylesheet" href="../Andre/css/bootstrap.min.css">
         <link rel="stylesheet" href="../Andre/css/style.css">
    </head>
    </html>
     
