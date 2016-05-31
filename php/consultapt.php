<?php

session_start();
 include "conexao.php";

?>

    <html>
        <head>
        <title>LISTAGEM DE PATRIMONIO</title>
        <meta content = "text/html" charset = "utf-8"/>
        <form name = "frmL" id = "frmL" action = "" method = "POST" > <!-- onSubmit = "javascript: return verificar();"-->
        </head>

                <body>
                        <fieldset>
                            <legend>BENS PATRIMONIAIS</legend>

                                    <?php
                                    $SQL = "SELECT descricao FROM bempatrimonial";
                                    $RESULTADO = pg_query($SQL);
                                    if (pg_num_rows($RESULTADO)) {
                                        while ($LINHA = pg_fetch_array($RESULTADO)){
                                                echo "<p>".$LINHA["descricao"]."</p";
                                        }
                                    }else{
                                        echo "Não existem bens patrimoniais cadastrados.";
                                    }
                                    ?>
                            <p></p>
                                    DADO1:- <input type = "number" name = "matricula" id = "matricula" value = "" maxlength = "12"><br>
                                    DADO2:- <input type = "text" name = "nome" id = "nome" value = "" maxlength = "50"><br>
                                    <input type = "submit" name = "onload" id = "onload" value = "Cadastrar" />
                                    <input type = "reset" name = "btnLimpar" id = "btnLimpar" value = "Limpar"/><br>
                                    <a href = "consulta2.html">Voltar a pagina</a> <br>
                              </fieldset>
                </body>
    </html>
        
<?php        


       pg_close($CONEXAO); 
        
        
?>


    
    CREATE TABLE bemPatrimonial (
	numero
        nrNotaFiscal INTEGER NOT NULL,
	fornecedor VARCHAR(60) NOT NULL,
	situacao CHAR(1) NOT NULL,
	codCat
	numSala
	