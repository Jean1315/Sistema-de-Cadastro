<?php include("../control/controlCliente.php")?>
<?php
session_start();
	if((!isset ($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
	unset($_SESSION['email']);
	unset($_SESSION['result']);
		
	header('location:../index.php');
}
?>
<?php
	///Instanciar classe cliente -  Start
	$aluno_obj_resultado = new Cliente();
	///Instanciar classe cliente -  End

	$arraylistar = $aluno_obj_resultado->busca();

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Alunos Cadastrados</title>
<body background="../imagens/fundo.jpg" bgproperties="fixed"></body>
<script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../js/clienteJS.js"></script>	
<script src="../js/loginJS.js"></script>
</head>

<body>
		<div class="formListar">
		<fieldset style="border-color:#000000">
			<div class="formButton" style="text-align: center">
				<input type="button" value="HOME" onClick="formPrincipal()"></input>
				<input type="button" value="Listar" onClick="formListar()"></input>
				<input type="button" value="Cadastrar" onClick="formCadastrar()"></input>
				<input type="button" value="Editar" onClick="formPesquisa()"></input>
				<input type="button" value="Sair" onClick="telaLogin()"></input>
			</div>
		</fieldset>


	<table border="1" align="100px">
		<tr>
			<td style="text-align: center"><b>Nome Aluno</b></td>
			<td style="text-align: center"><b>Idade Aluno</b></td>
			<td style="text-align: center"><b>Editar</b></td>
			<td style="text-align: center"><b>Deletar</b></td>
		</tr>
	<?php
		foreach($arraylistar as $values){
	?>
		<tr>			
			<td style="text-align: center" id="nomeAluno"><?php echo $values['nomeAluno']?></td>
			<td style="text-align: center" id="idadeAluno"><?php echo $values['idadeAluno']?></td>
			<td><input type="button" onClick="formEditar(<?php echo $values['idAluno']?>)"value="Editar"></td>
			<td><input type="button" onClick="deletar(<?php echo $values['idAluno']?>);" value="Deletar"></td>
		</tr>
	<?php
	}	
?>
	<form id="formulario" action="formEditar.php" method="POST">
	<input type="hidden" id="idFormulario" name="idAluno">
	</form>
</table>
	</div>
</body>
</html>