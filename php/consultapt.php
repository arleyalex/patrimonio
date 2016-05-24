<?php

session_start();
    <html>
        <head>
        <title>CADASTRAMENTO DE PATRIMONIO</title>
        <meta content = "text/html" charset = "utf-8"/>
        <form name = "frmI" id = "frmI" action = "" method = "POST" onSubmit = "javascript: return verificar();" >
        </head>

                <body>
                        <fieldset>
                            <legend>Entre com os dados</legend>

                                    <p></p>
                                    DADO1:- <input type = "number" name = "matricula" id = "matricula" value = "" maxlength = "12"><br>
                                    DADO2:- <input type = "text" name = "nome" id = "nome" value = "" maxlength = "50"><br>
                                    <input type = "submit" name = "onload" id = "onload" value = "Cadastrar" />
                                    <input type = "reset" name = "btnLimpar" id = "btnLimpar" value = "Limpar"/><br>
                                    <a href = "consulta2.html">Voltar a pagina</a> <br>
                              </fieldset>
                </body>
    </html>
        
        
        $SQL = "INSERT ...."
        $RESULTADO = pg_query($SQL);
        if (pg_num_rows($RESULTADO)) {
        $LINHA = pg_fetch_array($RESULTADO);
        echo "DADOS INSERIDOS COM SUCESSO."

        
        
        
        
       pg_close($CONEXAO); 
        
        
?>

