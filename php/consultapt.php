<?php
include "conexao.php";

session_start();

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <link href="../bootstrap/css/dashboard.css" rel="stylesheet">
        <link href="../bootstrap/css/carousel.css" rel="stylesheet">
        <link href="../bootstrap/css/estilomenu.css" rel="stylesheet">
		<title>Sistema Patrimonial</title>
    </head>
    
    <body>
	<div class="container">
    	<nav class="navbar navbar-inverse navbar-fixed-top">
      		<div class="container-fluid">
       			 <div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
          			</button>
          			<a class="navbar-brand" href="#">Sistema Patrimonial - Consultar Item</a>
       			 </div>
        		<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
                    <li><a href="php/cadastrarbem.php">Cadastrar Itens</a></li>
                    <li><a href="php/excluir1.php">Excluir</a></li>
                    <li><a href="php/sair.php">Sair</a></li>
					</ul>
        		</div>
    		  </div>
			</nav>
			<br>
			<br>
			<br>
			
         <fieldset>
                <legend>Digite o número do Patrimônio</legend>
					<p></p>
					    Nº Matrícula: <input type = "number" class="form-group" name = "matricula" id = "matricula" value = "" maxlength = "12"><br>
						<p>
						<p>
                        <input type = "submit" class="form-group" name = "onload" id = "onload" value = "Consultar" />
                        <input type = "reset" class="form-group" name = "btnLimpar" id = "btnLimpar" value = "Limpar"/><br>
						<p>
						<p>
						<a href = "../consultar.html">Voltar a pagina Inicial</a> <br>
		</fieldset>
	 </div>                         
     </body>
    </html>
        
  <?php      
    //    $SQL = "SELECT "
    //    $RESULTADO = pg_query($SQL);
    //    if (pg_num_rows($RESULTADO)) {
    //    $LINHA = pg_fetch_array($RESULTADO);
    //    echo "DADOS INSERIDOS COM SUCESSO."

        
        
        
        
      // pg_close($CONEXAO); 
        
        
?>

