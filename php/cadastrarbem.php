<?php
	include "conexao.php";
	session_start();
?>
<html>
	<head>
	<div class="container">
		<meta charset="utf-8">
        	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        	<meta name="viewport" content="width=device-width, initial-scale=1">
        	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        	<link href="../bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        	<link href="../bootstrap/css/dashboard.css" rel="stylesheet">
        	<link href="../bootstrap/css/carousel.css" rel="stylesheet">
        	<title>Sistema Patrimonial - Administrador</title>
        	<link href="../bootstrap/css/signin.css" rel="stylesheet">
		<link href="../bootstrap/css/estilomenu.css" rel="stylesheet">
		<h2>Cadastro de Itens - Patrimonio</h2>
		<p>
		<p>
		<br>
	</div>	
	</head>
	<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
      			<div class="container-fluid">
       				 <div class="navbar-header">
        				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
          				  </button>
          				<a class="navbar-brand" href="#">Sistema Patrimonial - Cadastar</a>
       				 </div>
        		<div id="navbar" class="navbar-collapse collapse">
         		 <ul class="nav navbar-nav navbar-right">
                    <li><a href="../consulta1.html">Início</a></li>
                    <li><a href="php/sair.php">Sair</a></li>
         		 </ul>
        		</div>
    		  </div>
   		 </nav>
	<div class="container">
		<div class="form-group">
			<form class="form-group" name="cadpatrimonial" action="cadpatrimonio.php" method="post">
				<p>
				<b>Número: </b><input type="text" class="form-group" name="numerodobem" id="numerodobem" size="10" /></br>
				<p>
				<b>Descrição: </b><input type="text" class="form-group" name="descricao" id="descricao" size="80" /></br>
				<p>
				<b>Nº Nota Fiscal: </b><input type="text" class="form-group" name="notafiscal" id="notafiscal" size="10"/></br>
				<p>
				<b>Data emissão: </b><input type="date" class="form-group" name="dataemissao" id="dataemissao"/></br>
				<p>
				<b>Fornecedor: </b><input type="text" class="form-group" name="fornecedor" id="fornecedor" size="60"/></br>
				<p>
				<b>Valor: </b><input type="text" class="form-group" name="valor" id="valor" /></br>
				<p>
				<p>
				<b>Situação: </b>
				<select name="situacao" id="situacao" class="form-group">
					<option value="U">Em uso</option>
					<option value="M">Manutenção</option>
					<option value="I">Inutilizado</option>
				</select></br>
				<p>
				<p>
				<b>Categoria: </b>
				<select name="categoria" id="categoria" class="form-group">
				<?php
						$RESULTADO = pg_query($CONEXAO,"SELECT codigo,nome FROM categoria;");
						while ($row=pg_fetch_row($RESULTADO)){
							echo "<option value=".$row[0].">".$row[0]." - ".$row[1]."</option>";
						}
				?>			
				</select>
				<p>
				<p>
				<b>Nº Sala: </b>
				<select name="numsala" id="numsala" class="form-group">
				<?php
						$RESULTADO = pg_query($CONEXAO,"SELECT numero FROM sala;");
						while ($row=pg_fetch_row($RESULTADO)){
							echo "<option value=".$row[0].">".$row[0]."</option>";
						}
				?>			
				</select>
				<p>
				<p>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>
			</form>	
		</div>
	</div>
		
		<script src="../bootstrap/js/holder.min.js"></script>
    	<script src="../bootstrap/js/ie-emulation-modes-warning.js"></script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../bootstrap/js/ie10-viewport-bug-workaround.js"></script>
	</body>
<?php
pg_close($CONEXAO);
?>	
</html>