<?php
include "conexao.php";
session_cache_expire(2);
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
                    <li><a href="../consultabem.html">Nova Consulta</a></li>
                    <li><a href="../consultar.html">Página Inicial</a></li>
                    <li><a href="sair.php">Sair</a></li>
					</ul>
        		</div>
				
    		  </div>
			</nav>
			<br>
			<br>
			<br>
		</div>
        <br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<center>
		<?php 
				$CODIGO = $_POST['matricula'];
				$RESULTADO = pg_query($CONEXAO, "select bempatrimonial.numero, bempatrimonial.descricao, sala.numero, sala.sigladepto, predio.nome  
									from bempatrimonial, sala, predio
									where predio.codigo = sala.codpredio and bempatrimonial.numsala = sala.numero and bempatrimonial.numero='$CODIGO';");
				echo "<table border='2'>";
				echo "<tr><th>NUMERO</th><th>DESCRICAO</th><th>SALA</th><th>DEPTO</th><th>PREDIO</th></tr>";
				while ($row=pg_fetch_row($RESULTADO)){
					echo "<tr>";
					echo "<td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."<\td>";
					echo "</tr>";
				}
				pg_close($CONEXAO); 
		?>
		</center>
	</body>
	
</html>	