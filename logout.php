<?php
	session_start();
	session_destroy();
?>
<head>
	<link rel="stylesheet" href="PHP/CSS/bootstrap.css"/>
</head>
	
<body>

<div class="jumbotron">
	<div class="container">
		<h1>SISTEMA PATRIMONIAL</h1>
		<p>Voc� saiu do sistema - Sess�o encerrada!</p>
		<p><?php echo $sn ?></p>
		<label><a href='login.php'>Fazer login novamente!</a></label>
	</div>
</div>

