<?php

if (!@($conexao = pg_connect("host=localhost dbname=db_patrimonio port=5432 user=postgres password=123456"))) {
    print "N�o foi poss�vel estabelecer uma conex�o com o banco de dados.";
} else {
    pg_close($conexao);
    //print "Conex�o OK!";
    
    
    
}
?>