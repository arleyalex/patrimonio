    <?php
    include "conexao.php";
	    
    $numero = $_POST['numero'];
	$comprimento = $_POST['comprimento'];
	$largura = $_POST['largura'];

	$ConsultaPredio = "SELECT codigo,nome FROM predio;"
	
	
	$codpredio = <form id="form1" name="form1" method="post" action="">
Materiais:
<select name="materiais">
<option value="">Selecione um Material:</option>
<?php
$sql = "select * from materiais"; //aqui faz a consulta no banco de dados
$resultado = mysql_query($sql); //aqui é o retorno da consulta
if($resultado)//teste se houve resultado entra no while
{
while($linhas = mysql_fetch_array($resultado,MSQL_ASSOC)){ //monta um vetor colocando todos os resultados em $linhas
?>
<option value="<?php $linhas['id'];//aqui é o valor geralmente se coloca o id da tabela ?>"
<?php if($linhas['id'] == $_POST['materiais']){ echo "selected"; /*aqui eu testo e vejo se alguma opção foi selecionada eu a mantenho selecionada*/ } ?>>
<?php echo $linhas['nome do campo a ser exibido']; /*aqui é a parte de exibição a informação que o usuario ira ver na tela "as opções"*/ ?>
</option>
<?php } } ?>
</select>

</form> ;
	$sigladepto = $_POST['sigladepto'];
	
	$SQL = "INSERT INTO sala (numero, comprimento, largura, codpredio, sigladepto) VALUES ('$numero','$comprimento','$largura','$codpredio','$sigladepto')";
	$RESULTADO = pg_query ($CONEXAO, $SQL);
	if ($RESULTADO != FALSE){
		echo "<h2>Dados inseridos com sucesso!</h2><br>";
	}
	else {
		echo "<h2>Falha no cadastro do usuário!</h2><br>";
	}	
	pg_close($CONEXAO);
    ?>